$(document).ready(function () {

  $(".navbar-vertical-toggle").trigger("click");

  const $productSelect = $('#saleProductSelect');
  const saleProductsTableBody = document.getElementById('saleProductsTableBody');
  const saleSummarySubtotal = document.getElementById('saleSummarySubtotal');
  const saleSummaryDiscount = document.getElementById('saleSummaryDiscount');
  const saleSummaryTotal = document.getElementById('saleSummaryTotal');
  const saleProductsCount = document.getElementById('saleProductsCount');

  if (!$productSelect.length || !saleProductsTableBody) return;

  let activeSaleRow = null;

  const products = [
    {
      id: 1,
      name: 'Collar dorado con dije de luna',
      sku: 'LUN-COL-001',
      brand: 'MagentaTLX',
      price: 280,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f6ead8/a37a35?text=Collar'
    },
    {
      id: 2,
      name: 'Collar de perlas pequeñas',
      sku: 'AUR-COL-002',
      brand: 'MagentaTLX',
      price: 320,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f8f1e7/8b7355?text=Collar'
    },
    {
      id: 3,
      name: 'Collar plateado minimalista',
      sku: 'MAG-COL-003',
      brand: 'MagentaTLX',
      price: 240,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/e8edf2/6b7280?text=Collar'
    },
    {
      id: 4,
      name: 'Bolsa mini piel',
      sku: 'NUB-BOL-003',
      brand: 'Casa Oliva',
      price: 340,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/e4dbd2/6c584b?text=Bolsa'
    },
    {
      id: 5,
      name: 'Bolsa tejida artesanal',
      sku: 'LUN-BOL-004',
      brand: 'Casa Oliva',
      price: 310,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f2e5d8/7b6656?text=Bolsa'
    },
    {
      id: 6,
      name: 'Bolsa crossbody nude',
      sku: 'NUB-BOL-005',
      brand: 'Casa Oliva',
      price: 350,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/eadfd7/6b5549?text=Bolsa'
    },
    {
      id: 7,
      name: 'Vela aromática Lavanda',
      sku: 'COL-VEL-002',
      brand: 'LunaArtesanal',
      price: 180,
      discountPercentage: 10,
      img: 'https://placehold.co/50x50/eadcf0/7b6682?text=Vela'
    },
    {
      id: 8,
      name: 'Vela vainilla artesanal',
      sku: 'COL-VEL-003',
      brand: 'LunaArtesanal',
      price: 170,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f5ead8/8b6d4f?text=Vela'
    },
    {
      id: 9,
      name: 'Vela cítrica decorativa',
      sku: 'COL-VEL-004',
      brand: 'LunaArtesanal',
      price: 190,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f7efd9/a57b36?text=Vela'
    },
    {
      id: 10,
      name: 'Aretes dorados',
      sku: 'MAR-ARE-004',
      brand: 'MagentaTLX',
      price: 230,
      discountPercentage: 0,
      img: 'https://placehold.co/50x50/f4e6cf/a37a35?text=Aretes'
    }
  ];

  const select2Products = [
    {
      id: '',
      text: ''
    },
    ...products.map(function (product) {
      return {
        id: String(product.id),
        text: product.name,
        name: product.name,
        sku: product.sku,
        brand: product.brand,
        price: product.price,
        discountPercentage: product.discountPercentage,
        img: product.img
      };
    })
  ];

  $productSelect.select2({
    data: select2Products,
    placeholder: 'Buscar artículo por nombre, código o SKU',
    width: '100%',
    allowClear: true,
    minimumInputLength: 0,

    templateResult: formatProductResult,
    templateSelection: formatProductSelection,

    matcher: function (params, data) {
      if ($.trim(params.term) === '') {
        return data;
      }

      if (!data.id) {
        return null;
      }

      const term = normalizeText(params.term);
      const name = normalizeText(data.name || '');
      const sku = normalizeText(data.sku || '');
      const brand = normalizeText(data.brand || '');

      if (
        name.includes(term) ||
        sku.includes(term) ||
        brand.includes(term)
      ) {
        return data;
      }

      return null;
    }
  });

  $productSelect.val(null).trigger('change');

  /*
    Cuando el usuario selecciona un producto con click o Enter,
    Select2 dispara este evento.
  */
  $productSelect.on('select2:select', function (event) {
    const selectedProductId = event.params.data.id;

    if (!selectedProductId) return;

    const product = products.find(function (item) {
      return String(item.id) === String(selectedProductId);
    });

    if (!product) return;

    addProductToSale(product);

    /*
      Limpia el select después de agregar el producto.
      Esto permite buscar otro producto inmediatamente después.
    */
    $productSelect.val(null).trigger('change');

    /*
      Cerramos Select2 y dejamos el foco funcional en la fila activa.
      Así las flechas arriba/abajo afectan la cantidad del producto.
    */
    $productSelect.select2('close');

    if (activeSaleRow) {
      activeSaleRow.focus();
    }
  });

  /*
    Click dentro del tbody:
    - Click en una fila: la vuelve activa.
    - Click en +: aumenta cantidad.
    - Click en -: baja cantidad.
    - Click en eliminar: elimina la fila.
  */
  saleProductsTableBody.addEventListener('click', function (event) {
    const row = event.target.closest('.sale-product-row');

    if (row) {
      focusSaleRow(row);
    }

    const button = event.target.closest('button[data-action]');
    if (!button || !row) return;

    const action = button.dataset.action;

    if (action === 'increase') {
      increaseProductQuantity(row);
      focusSaleRow(row);
    }

    if (action === 'decrease') {
      decreaseProductQuantity(row);
      focusSaleRow(row);
    }

    if (action === 'remove') {
      removeSaleRow(row);
    }
  });

  function selectPaymentMethod(method) {
    const paymentRadio = document.querySelector(
      `input[name="payment_method"][value="${method}"]`
    );
    if (!paymentRadio) return;
    paymentRadio.checked = true;
    paymentRadio.dispatchEvent(new Event('change', {
      bubbles: true
    }));
  }

  document.addEventListener('keydown', function (event) {
    /*  
      event.preventDefault() evita que el navegador abra la ayuda
      o ejecute su comportamiento por defecto con F1.
    */

    // Buscar producto
    if (event.key === 'F1') {
      event.preventDefault();
      focusProductSelect();
      return;
    }

    // Selecciona metodo Efectivo
    if (event.key === 'F2') {
      event.preventDefault();
      selectPaymentMethod('efectivo');
      return;
    }

    // Selecciona metodo Tarjeta
    if (event.key === 'F3') {
      event.preventDefault();
      selectPaymentMethod('tarjeta');
      return;
    }

    // Selecciona metodo Transferencia
    if (event.key === 'F4') {
      event.preventDefault();
      selectPaymentMethod('transferencia');
      return;
    }

    // Finaliza la compra
    if (event.key === 'F8') {
      event.preventDefault();
      confirmFinishSale();
      return;
    }

    /*
      Si no hay fila activa, no hacemos nada con ArrowUp,
      ArrowDown o Delete.
    */
    if (!activeSaleRow) return;

    /*
      Si Select2 está abierto o el usuario está escribiendo,
      no usamos las flechas para modificar cantidades.
    */
    const isSelect2Open = $('.select2-container--open').length > 0;

    const isTypingField = event.target.matches(
      'input, textarea, select, [contenteditable="true"], .select2-search__field'
    );

    if (isSelect2Open || isTypingField) return;

    /*
    Soporte para teclado sobre la fila activa:
    ArrowUp   = aumentar cantidad
    ArrowDown = bajar cantidad
    Delete    = eliminar producto
  */

    if (event.key === 'ArrowUp') {
      event.preventDefault();
      increaseProductQuantity(activeSaleRow);
      focusSaleRow(activeSaleRow);
    }

    if (event.key === 'ArrowDown') {
      event.preventDefault();
      decreaseProductQuantity(activeSaleRow);
      focusSaleRow(activeSaleRow);
    }

    if (event.key === 'Delete') {
      event.preventDefault();
      removeSaleRow(activeSaleRow);
    }

  });

  function addProductToSale(product) {
    const existingRow = saleProductsTableBody.querySelector(
      `tr[data-product-id="${product.id}"]`
    );

    /*
      Si el producto ya existe en la tabla,
      no se duplica: solo aumenta cantidad.
    */
    if (existingRow) {
      increaseProductQuantity(existingRow);
      focusSaleRow(existingRow);
      updateSaleSummary();
      return;
    }

    const row = document.createElement('tr');

    const quantity = 1;
    const discountPercentage = Number(product.discountPercentage || 0);
    const discountAmount = calculateDiscountAmount(
      product.price,
      quantity,
      discountPercentage
    );

    const subtotal = calculateSubtotal(
      product.price,
      quantity,
      discountPercentage
    );

    row.classList.add('sale-product-row');
    row.setAttribute('tabindex', '-1');

    row.dataset.productId = product.id;
    row.dataset.price = product.price;
    row.dataset.discountPercentage = discountPercentage;

    row.innerHTML = `
      <td>
        <div class="d-flex align-items-center gap-3">
          <div class="sale-product-img">
            <img src="${product.img}" alt="${product.name}">
          </div>

          <div class="lh-sm">
            <small class="sale-product-brand">${product.brand}</small>
            <strong class="d-block sale-product-name">${product.name}</strong>
            <small class="sale-product-sku">${product.sku}</small>
          </div>
        </div>
      </td>

      <td>${formatCurrency(product.price)}</td>

      <td>
        <div class="qty-control border">
          <button type="button" class="btn-qty" data-action="decrease">−</button>
          <span data-qty>${quantity}</span>
          <button type="button" class="btn-qty" data-action="increase">+</button>
        </div>
      </td>

      <td>
        <span data-discount>${formatCurrency(discountAmount)}</span>
        ${discountPercentage > 0 ? `<small class="text-danger d-block">${discountPercentage}%</small>` : ''}
      </td>

      <td>
        <span data-subtotal>${formatCurrency(subtotal)}</span>
      </td>

      <td class="text-center">
        <button type="button" class="btn-icon-danger btn btn-subtle-danger" data-action="remove">
          <i data-feather="trash-2"></i>
        </button>
      </td>
    `;

    saleProductsTableBody.appendChild(row);

    if (window.feather) {
      feather.replace();
    }

    focusSaleRow(row);
    updateSaleSummary();
  }

  function focusSaleRow(row) {
    if (!row) return;

    saleProductsTableBody.querySelectorAll('.sale-product-row').forEach(function (item) {
      item.classList.remove('sale-product-row-focus');
    });

    row.classList.add('sale-product-row-focus');
    activeSaleRow = row;

    row.focus({
      preventScroll: true
    });

    row.scrollIntoView({
      behavior: 'smooth',
      block: 'nearest'
    });
  }

  function clearSaleRowFocus() {
    saleProductsTableBody.querySelectorAll('.sale-product-row').forEach(function (item) {
      item.classList.remove('sale-product-row-focus');
    });

    activeSaleRow = null;
  }

  function focusProductSelect() {
    /*
      Limpiamos visualmente la fila activa de la tabla.
    */
    clearSaleRowFocus();

    /*
      Limpiamos el valor actual del select para iniciar una nueva búsqueda.
    */
    $productSelect.val(null).trigger('change');

    /*
      Abrimos Select2.
    */
    $productSelect.select2('open');

    /*
      Select2 crea el input de búsqueda dinámicamente al abrirse,
      por eso usamos setTimeout para enfocarlo justo después.
    */
    setTimeout(function () {
      const searchInput = document.querySelector('.select2-container--open .select2-search__field');

      if (searchInput) {
        searchInput.focus();
      }
    }, 50);
  }

  function increaseProductQuantity(row) {
    if (!row) return;

    const qtyElement = row.querySelector('[data-qty]');
    const currentQty = Number(qtyElement.textContent);
    const newQty = currentQty + 1;

    qtyElement.textContent = newQty;

    updateRowTotals(row);
  }

  function decreaseProductQuantity(row) {
    if (!row) return;

    const qtyElement = row.querySelector('[data-qty]');
    const currentQty = Number(qtyElement.textContent);

    if (currentQty <= 1) return;

    const newQty = currentQty - 1;

    qtyElement.textContent = newQty;

    updateRowTotals(row);
  }

  function updateRowTotals(row) {
    const price = Number(row.dataset.price);
    const quantity = Number(row.querySelector('[data-qty]').textContent);
    const discountPercentage = Number(row.dataset.discountPercentage || 0);

    const discountAmount = calculateDiscountAmount(
      price,
      quantity,
      discountPercentage
    );

    const subtotal = calculateSubtotal(
      price,
      quantity,
      discountPercentage
    );

    const discountElement = row.querySelector('[data-discount]');
    const subtotalElement = row.querySelector('[data-subtotal]');

    if (discountElement) {
      discountElement.textContent = formatCurrency(discountAmount);
    }

    if (subtotalElement) {
      subtotalElement.textContent = formatCurrency(subtotal);
    }

    updateSaleSummary();
  }

  function removeSaleRow(row) {
    if (!row) return;

    const nextRow = row.nextElementSibling;
    const previousRow = row.previousElementSibling;

    row.remove();

    if (nextRow && nextRow.classList.contains('sale-product-row')) {
      focusSaleRow(nextRow);
      return;
    }

    if (previousRow && previousRow.classList.contains('sale-product-row')) {
      focusSaleRow(previousRow);
      return;
    }

    activeSaleRow = null;
    updateSaleSummary();
  }

  function calculateDiscountAmount(price, quantity, discountPercentage) {
    const grossSubtotal = price * quantity;

    if (discountPercentage <= 0) {
      return 0;
    }

    return grossSubtotal * (discountPercentage / 100);
  }

  function calculateSubtotal(price, quantity, discountPercentage) {
    const grossSubtotal = price * quantity;
    const discountAmount = calculateDiscountAmount(
      price,
      quantity,
      discountPercentage
    );

    return Math.max(grossSubtotal - discountAmount, 0);
  }

  function formatProductResult(product) {
    if (!product.id) {
      return product.text;
    }

    const discountBadge =
      Number(product.discountPercentage) > 0
        ? `<span class="select2-product-discount">${product.discountPercentage}% OFF</span>`
        : '';

    return $(`
      <div class="select2-product-result d-flex gap-3">
        <img
          src="${product.img}"
          alt="${product.name}"
          class="select2-product-img"
        >

        <div class="select2-product-info">
          <div class="select2-product-name-row lh-1">
            <strong>${product.name}</strong>
            ${discountBadge}
          </div>

          <small>${product.sku}</small>
        </div>
      </div>
    `);
  }

  function formatProductSelection(product) {
    if (!product.id) {
      return product.text || 'Buscar artículo por nombre, SKU o marca';
    }

    return $(`
      <div class="select2-product-selection d-flex gap-3">
        <img
          src="${product.img}"
          alt="${product.name}"
          class="select2-product-selection-img"
        >

        <div class="select2-product-selection-info">
          <strong>${product.name}</strong>
          <small>${product.sku}</small>
        </div>
      </div>
    `);
  }

  function normalizeText(text) {
    return String(text)
      .toLowerCase()
      .normalize('NFD')
      .replace(/[\u0300-\u036f]/g, '');
  }

  function updateSaleSummary() {
    let grossSubtotal = 0;
    let totalDiscount = 0;
    let finalTotal = 0;

    const rows = saleProductsTableBody.querySelectorAll('.sale-product-row');

    rows.forEach(function (row) {
      const price = Number(row.dataset.price || 0);
      const quantity = Number(row.querySelector('[data-qty]')?.textContent || 0);
      const discountPercentage = Number(row.dataset.discountPercentage || 0);

      const rowGrossSubtotal = price * quantity;
      const rowDiscount = calculateDiscountAmount(
        price,
        quantity,
        discountPercentage
      );
      const rowSubtotal = calculateSubtotal(
        price,
        quantity,
        discountPercentage
      );

      grossSubtotal += rowGrossSubtotal;
      totalDiscount += rowDiscount;
      finalTotal += rowSubtotal;
    });

    if (saleSummarySubtotal) {
      saleSummarySubtotal.textContent = formatCurrency(grossSubtotal);
    }

    if (saleSummaryDiscount) {
      saleSummaryDiscount.textContent = `-${formatCurrency(totalDiscount)}`;
    }

    if (saleSummaryTotal) {
      saleSummaryTotal.textContent = formatCurrency(finalTotal);
    }
  }

  function formatCurrency(value) {
    return new Intl.NumberFormat('es-MX', {
      style: 'currency',
      currency: 'MXN'
    }).format(value);
  }

  function getSwalTheme() {
    const bsTheme = document.documentElement.getAttribute('data-bs-theme');
    if (!bsTheme) return 'auto';
    const normalizedTheme = bsTheme.toLowerCase();
    if (normalizedTheme === 'dark') return 'dark';
    if (normalizedTheme === 'light') return 'light';
    return 'auto';
  }

  // Cancelar venta
  function confirmCancelSale() {
    Swal.fire({
      title: '¿Cancelar venta?',
      text: 'Se perderán los productos agregados y la venta volverá a iniciar desde cero.',
      icon: 'warning',
      iconHtml: '<i data-feather="alert-triangle"></i>',
      iconColor: '#fff',
      showCancelButton: true,
      confirmButtonText: 'Sí, cancelar venta',
      cancelButtonText: 'No, continuar',
      reverseButtons: true,
      confirmButtonColor: '#dc3545',
      cancelButtonColor: '#eff2f6',
      theme: getSwalTheme(),
      didOpen: function () {
        if (window.feather) {
          feather.replace();
        }
      },
      customClass: {
        icon: 'swal-feather-icon swal-feather-icon-warning'
      }
    }).then(function (result) {
      if (result.isConfirmed) {
        window.location.reload();
      }
    });
  }

  $('#cancelSaleBtn').on('click', function () {
    confirmCancelSale();
  });

  // ================================
  // Finalizar venta
  // ================================

  $('#finishSaleBtn').on('click', function () {
    confirmFinishSale();
  });

  function confirmFinishSale() {
    const saleSummary = getCurrentSaleSummary();
    const paymentMethod = getSelectedPaymentMethod();

    if (saleSummary.productsCount === 0) {
      Swal.fire({
        title: 'No hay productos',
        text: 'Agrega al menos un producto para poder finalizar la venta.',
        icon: 'info',
        iconHtml: '<i data-feather="info"></i>',
        iconColor: '#fff',
        confirmButtonText: 'Entendido',
        confirmButtonColor: '#49525d',
        theme: getSwalTheme(),
        didOpen: function () {
          if (window.feather) {
            feather.replace();
          }
        },
        customClass: {
          icon: 'swal-feather-icon swal-feather-icon-info'
        }
      });

      return;
    }

    if (!paymentMethod) {
      Swal.fire({
        title: 'Método de pago requerido',
        text: 'Selecciona si el pago será en efectivo, tarjeta o transferencia.',
        icon: 'info',
        iconHtml: '<i data-feather="credit-card"></i>',
        iconColor: '#fff',
        confirmButtonText: 'Entendido',
        confirmButtonColor: '#49525d',
        theme: getSwalTheme(),
        didOpen: function () {
          if (window.feather) {
            feather.replace();
          }
        },
        customClass: {
          icon: 'swal-feather-icon swal-feather-icon-info'
        }
      });

      return;
    }

    Swal.fire({
      title: 'Finalizar venta',
      html: getFinishSaleSummaryHtml(saleSummary, paymentMethod),
      icon: 'question',
      iconHtml: '<i data-feather="shopping-bag"></i>',
      iconColor: '#fff',
      showCancelButton: true,
      confirmButtonText: 'Sí, finalizar venta',
      cancelButtonText: 'Seguir editando',
      reverseButtons: true,
      confirmButtonColor: '#25b003',
      cancelButtonColor: '#eff2f6',
      theme: getSwalTheme(),
      width: 520,

      // Obliga al usuario a elegir una opción del alert.
      allowEscapeKey: false,
      allowOutsideClick: false,
      allowEnterKey: false,

      didOpen: function () {
        if (window.feather) {
          feather.replace();
        }

        if (paymentMethod === 'efectivo') {
          const cashReceivedInput = document.getElementById('swalCashReceived');
          const cashChangeInput = document.getElementById('swalCashChange');

          if (!cashReceivedInput || !cashChangeInput) return;

          setTimeout(function () {
            cashReceivedInput.focus();
          }, 100);

          cashReceivedInput.addEventListener('input', function () {
            const cashReceived = Number(cashReceivedInput.value || 0);
            const change = cashReceived - saleSummary.finalTotal;

            cashChangeInput.value = formatCurrency(Math.max(change, 0));
          });
        }
      },

      preConfirm: function () {
        if (paymentMethod !== 'efectivo') {
          return {
            paymentMethod: paymentMethod,
            cashReceived: null,
            cashChange: null
          };
        }

        const cashReceivedInput = document.getElementById('swalCashReceived');
        const cashReceived = Number(cashReceivedInput?.value || 0);

        if (cashReceived < saleSummary.finalTotal) {
          Swal.showValidationMessage(
            `El monto recibido debe ser igual o mayor a ${formatCurrency(saleSummary.finalTotal)}.`
          );

          return false;
        }

        return {
          paymentMethod: paymentMethod,
          cashReceived: cashReceived,
          cashChange: cashReceived - saleSummary.finalTotal
        };
      },

      customClass: {
        icon: 'swal-feather-icon swal-feather-icon-success'
      }
    }).then(function (result) {
      if (!result.isConfirmed) return;

      Swal.fire({
        title: 'Venta finalizada',
        html: getSaleCompletedHtml(result.value, saleSummary),
        icon: 'success',
        iconHtml: '<i data-feather="check"></i>',
        iconColor: '#fff',
        confirmButtonText: 'Aceptar',
        confirmButtonColor: '#49525d',
        theme: getSwalTheme(),
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: function () {
          if (window.feather) {
            feather.replace();
          }
        },
        customClass: {
          icon: 'swal-feather-icon swal-feather-icon-success'
        }
      }).then(function () {
        window.location.reload();
      });
    });
  }

  function getFinishSaleSummaryHtml(summary, paymentMethod) {
    const isCashPayment = paymentMethod === 'efectivo';

    return `
    <div class="text-start fs-8">
      <p class="mb-1">
        Revisa el resumen antes de confirmar la venta.
      </p>

      <div class="border rounded-3 py-2 px-2 bg-body mb-2 lh-sm">

        <div class="d-flex justify-content-between mb-2">
          <span>Unidades totales</span>
          <span>${summary.unitsCount}</span>
        </div>

        <hr class="my-2">

        <div class="d-flex justify-content-between mb-2">
          <span>Subtotal</span>
          <span>${formatCurrency(summary.grossSubtotal)}</span>
        </div>

        <div class="d-flex justify-content-between mb-2">
          <span>Descuento</span>
          <strong class="text-danger">-${formatCurrency(summary.totalDiscount)}</strong>
        </div>

        <hr class="my-2">

        <div class="d-flex justify-content-between align-items-center">
          <span class="fw-bold">Total a cobrar</span>
          <strong class="fs-7">${formatCurrency(summary.finalTotal)}</strong>
        </div>
      </div>

      <div class="border rounded-3 py-2 px-2">
        <div class="d-flex justify-content-between align-items-center mb-1">
          <span class="fw-bold">Método de pago</span>
          <div class="d-flex align-items-center"><span class="p-1 border bg-body rounded-3 fs-9"><i data-feather="shopping-bag" style="width: 12px; height: 12px;"></i> ${getPaymentMethodLabel(paymentMethod)}</span></div>
        </div>

        ${isCashPayment
        ? `
          <div class="row g-2">
              <div class="col-6">
                <label for="swalCashReceived" class="form-label">Pagó con</label>
                <input
                  type="number"
                  id="swalCashReceived"
                  class="form-control form-control-lg"
                  min="0"
                  step="0.01"
                  placeholder="Ej. 500"
                >
              </div>

              <div class="col-6">
                <label for="swalCashChange" class="form-label">Debes devolver</label>
                <input
                  type="text"
                  id="swalCashChange"
                  class="form-control form-control-lg text-body-highlight"
                  value="${formatCurrency(0)}"
                  disabled
                >
              </div>
              </div>
            `
        : `
              <p class="mb-0 text-muted">
                No se requiere cálculo de cambio para este método de pago.
              </p>
            `
      }
      </div>
    </div>
  `;
  }

  function getSaleCompletedHtml(paymentData, summary) {
    const paymentMethod = paymentData?.paymentMethod || '';
    const isCashPayment = paymentMethod === 'efectivo';

    return `
    <div class="text-start fs-8">
      <p class="mb-3">
        La venta se registró correctamente.
      </p>

      <div class="border rounded-3 p-3 bg-gray-100 mb-3">
        <div class="d-flex justify-content-between mb-2">
          <span>Subtotal</span>
          <span>${formatCurrency(summary.grossSubtotal)}</span>
        </div>

        <div class="d-flex justify-content-between mb-2">
          <span>Descuento</span>
          <strong class="text-danger">-${formatCurrency(summary.totalDiscount)}</strong>
        </div>

        <hr class="my-2">

        <div class="d-flex justify-content-between align-items-center">
          <span class="fw-bold">Total cobrado</span>
          <strong class="fs-7">${formatCurrency(summary.finalTotal)}</strong>
        </div>
      </div>

      <div class="border rounded-3 p-3 bg-gray-100">
        <div class="d-flex justify-content-between ${isCashPayment ? 'mb-2' : ''}">
          <span>Método de pago</span>
          <strong>${getPaymentMethodLabel(paymentMethod)}</strong>
        </div>

        ${isCashPayment
        ? `
              <div class="d-flex justify-content-between mb-2">
                <span>Pagó con</span>
                <strong>${formatCurrency(paymentData.cashReceived)}</strong>
              </div>

              <div class="d-flex justify-content-between">
                <span>Cambio</span>
                <strong>${formatCurrency(paymentData.cashChange)}</strong>
              </div>
            `
        : ''
      }
      </div>
    </div>
  `;
  }

  function getCurrentSaleSummary() {
    let grossSubtotal = 0;
    let totalDiscount = 0;
    let finalTotal = 0;
    let productsCount = 0;
    let unitsCount = 0;

    const rows = saleProductsTableBody.querySelectorAll('.sale-product-row');

    rows.forEach(function (row) {
      const price = Number(row.dataset.price || 0);
      const quantity = Number(row.querySelector('[data-qty]')?.textContent || 0);
      const discountPercentage = Number(row.dataset.discountPercentage || 0);

      const rowGrossSubtotal = price * quantity;

      const rowDiscount = calculateDiscountAmount(
        price,
        quantity,
        discountPercentage
      );

      const rowSubtotal = calculateSubtotal(
        price,
        quantity,
        discountPercentage
      );

      grossSubtotal += rowGrossSubtotal;
      totalDiscount += rowDiscount;
      finalTotal += rowSubtotal;

      productsCount += 1;
      unitsCount += quantity;
    });

    return {
      grossSubtotal,
      totalDiscount,
      finalTotal,
      productsCount,
      unitsCount
    };
  }

  function getSelectedPaymentMethod() {
    const selectedRadio = document.querySelector('input[name="payment_method"]:checked');

    return selectedRadio ? selectedRadio.value : '';
  }

  function getPaymentMethodLabel(method) {
    const labels = {
      efectivo: 'Efectivo',
      tarjeta: 'Tarjeta',
      transferencia: 'Transferencia'
    };

    return labels[method] || 'No especificado';
  }

  // Contabiliza productos agregados para la card superior pequeña
  function updateSaleProductsCount() {
    if (!saleProductsCount) return;

    let unitsCount = 0;

    const rows = saleProductsTableBody.querySelectorAll('.sale-product-row');

    rows.forEach(function (row) {
      const quantity = Number(row.querySelector('[data-qty]')?.textContent || 0);
      unitsCount += quantity;
    });

    saleProductsCount.textContent =
      unitsCount === 1 ? '1 artículo' : `${unitsCount} artículos`;
  }

  function updateSaleSummary() {
    let grossSubtotal = 0;
    let totalDiscount = 0;
    let finalTotal = 0;

    const rows = saleProductsTableBody.querySelectorAll('.sale-product-row');

    rows.forEach(function (row) {
      const price = Number(row.dataset.price || 0);
      const quantity = Number(row.querySelector('[data-qty]')?.textContent || 0);
      const discountPercentage = Number(row.dataset.discountPercentage || 0);

      const rowGrossSubtotal = price * quantity;
      const rowDiscount = calculateDiscountAmount(
        price,
        quantity,
        discountPercentage
      );
      const rowSubtotal = calculateSubtotal(
        price,
        quantity,
        discountPercentage
      );

      grossSubtotal += rowGrossSubtotal;
      totalDiscount += rowDiscount;
      finalTotal += rowSubtotal;
    });

    if (saleSummarySubtotal) {
      saleSummarySubtotal.textContent = formatCurrency(grossSubtotal);
    }

    if (saleSummaryDiscount) {
      saleSummaryDiscount.textContent = `-${formatCurrency(totalDiscount)}`;
    }

    if (saleSummaryTotal) {
      saleSummaryTotal.textContent = formatCurrency(finalTotal);
    }

    updateSaleProductsCount();
  }

});