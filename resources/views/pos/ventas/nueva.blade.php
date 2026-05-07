@php
$title = 'Nueva venta';
@endphp

@include('layout.administrador.header')

<body data-page="new-sale">

  <main class="main" id="top">

    @include('layout.administrador.sidebar')
    @include('layout.administrador.topbar')

    <div class="content px-0 pt-navbar">
      <div class="row g-0">


        <!-- Content -->
        <div class="col-12 col-lg-8 px-0 bg-body">
          <div class="px-3 py-3">


            <div class="card">
              <div class="card-body p-0">

                <div class="row g-3 pt-3 px-3">

                  <div class="col-6 col-xl-3">
                    <div class="d-flex gap-2 border p-3 align-items-center rounded-3 bg-body">
                      <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                        <i data-feather="file-text" style="width: 18px; height: 18px;"></i>
                      </div>
                      <div class="d-flex flex-column fs-9">
                        <span>Folio</span>
                        <strong class="">VTA-00128</strong>
                      </div>
                    </div>
                  </div>

                  <div class="col-6 col-xl-3 d-none d-sm-block">
                    <div class="d-flex gap-2 border p-3 align-items-center rounded-3 bg-body">
                      <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                        <i data-feather="shopping-bag" style="width: 18px; height: 18px;"></i>
                      </div>
                      <div class="d-flex flex-column fs-9">
                        <span>Artículos</span>
                        <strong id="saleProductsCount">0 artículos</strong>
                      </div>
                    </div>
                  </div>

                  <div class="col-6 col-xl-3">
                    <div class="d-flex gap-2 border p-3 align-items-center rounded-3 bg-body">
                      <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                        <i data-feather="map-pin" style="width: 18px; height: 18px;"></i>
                      </div>
                      <div class="d-flex flex-column fs-9">
                        <span>Sucursal</span>
                        <strong>Centro</strong>
                      </div>
                    </div>
                  </div>

                  <div class="col-6 col-xl-3 d-none d-sm-block">
                    <div class="d-flex gap-2 border p-3 align-items-center rounded-3 bg-body">
                      <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                        <i data-feather="calendar" style="width: 18px; height: 18px;"></i>
                      </div>
                      <div class="d-flex flex-column fs-9">
                        <span>Fecha</span>
                        <strong>24 Abril 2026</strong>
                      </div>
                    </div>
                  </div>

                </div>

                <!-- Buscador -->
                <div class="p-3 border-bottom">
                  <div class="sale-product-select-wrapper key-tag f1">
                    <i data-feather="search" class="sale-product-search-icon"></i>
                    <select id="saleProductSelect" class="form-select w-100">
                      <option value=""></option>
                    </select>
                  </div>
                </div>

                <div class="px-3">
                  <!-- Tabla -->
                  <div class="table-responsive">
                    <table id="saleTable" class="table table-sm align-middle fs-8 mb-0 w-100">
                      <thead>
                        <tr>
                          <th class="py-3">Producto</th>
                          <th class="py-3">Precio</th>
                          <th class="py-3">Cantidad</th>
                          <th class="py-3">Descuento</th>
                          <th class="py-3">Subtotal</th>
                          <th class="py-3"></th>
                        </tr>
                      </thead>

                      <tbody id="saleProductsTableBody">

                        <!-- <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="sale-product-img">
                                <img src="https://placehold.co/90x90/f4e8dc/7c6a5a?text=Blusa" alt="Blusa de lino beige" />
                              </div>
                              <div class="d-flex flex-column">
                                <small>LunaArtesanal</small>
                                <strong>Blusa de lino beige</strong>
                                <small>SKU: AUR-BLB-001</small>
                              </div>
                            </div>
                          </td>

                          <td>$1,290.00</td>

                          <td>
                            <div class="qty-control">
                              <button type="button">−</button>
                              <span>1</span>
                              <button type="button">+</button>
                            </div>
                          </td>

                          <td>$0.00</td>
                          <td>$1,290.00</td>

                          <td class="text-center">
                            <button class="btn-icon-danger">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="sale-product-img">
                                <img src="https://placehold.co/90x90/eee4f4/7c6786?text=Vela" alt="Vela aromática Lavanda" />
                              </div>
                              <div class="d-flex flex-column">
                                <small>LunaArtesanal</small>
                                <strong>Vela aromática Lavanda</strong>
                                <small>SKU: COL-VEL-002</small>
                              </div>
                            </div>
                          </td>

                          <td>$450.00</td>

                          <td>
                            <div class="qty-control">
                              <button type="button">−</button>
                              <span>2</span>
                              <button type="button">+</button>
                            </div>
                          </td>

                          <td>
                            <span>$45.00</span>
                            <span class="text-danger d-block">10%</<span>
                          </td>

                          <td>$855.00</td>

                          <td class="text-center">
                            <button class="btn-icon-danger">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="sale-product-img">
                                <img src="https://placehold.co/90x90/e9dfd6/685447?text=Bolsa" alt="Bolsa mini piel" />
                              </div>
                              <div class="d-flex flex-column">
                                <small>MagentaTLX</small>
                                <strong>Bolsa mini piel</strong>
                                <small>SKU: NUB-BOL-003</small>
                              </div>
                            </div>
                          </td>

                          <td>$1,890.00</td>

                          <td class="d-flex flex-column">
                            <div class="qty-control">
                              <button type="button">−</button>
                              <span>1</span>
                              <button type="button">+</button>
                            </div>
                          </td>

                          <td>$0.00</td>
                          <td>$1,890.00</td>

                          <td class="text-center">
                            <button class="btn-icon-danger">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <div class="d-flex align-items-center gap-3">
                              <div class="sale-product-img">
                                <img src="https://placehold.co/90x90/f6ead8/9c7948?text=Aretes" alt="Aretes dorados" />
                              </div>
                              <div class="d-flex flex-column">
                                <small>MagentaTLX</small>
                                <strong>Aretes dorados</strong>
                                <small>SKU: MAR-ARE-004</small>
                              </div>
                            </div>
                          </td>

                          <td>$620.00</td>

                          <td>
                            <div class="qty-control">
                              <button type="button">−</button>
                              <span>1</span>
                              <button type="button">+</button>
                            </div>
                          </td>

                          <td>$0.00</td>
                          <td>$620.00</td>

                          <td class="text-center">
                            <button class="btn-icon-danger">
                              <i data-feather="trash-2"></i>
                            </button>
                          </td>
                        </tr> -->

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Menú -->
        <div class="col-12 col-lg-4 px-0 border-start-xl border-top-sm">
          <div class="bg-body-highlight h-100">
            <div class="py-3 px-3" style="height: 90vh;">

              <div class="sticky-top" style="top: 80px;">

                <div class="d-flex flex-column gap-3">

                  <!-- Resumen -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Resumen de venta</h5>
                        <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                          <i data-feather="clipboard" style="width: 16px; height: 16px;"></i>
                        </div>
                      </div>

                      <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal</span>
                        <strong id="saleSummarySubtotal">$0.00</strong>
                      </div>

                      <div class="d-flex justify-content-between mb-2">
                        <span>Descuento</span>
                        <strong id="saleSummaryDiscount" class="text-danger">$0.00</strong>
                      </div>

                      <hr />

                      <div class="d-flex align-items-center justify-content-between">
                        <span class="fw-bold">Total</span>
                        <strong id="saleSummaryTotal" class="fs-6">$0.00</strong>
                      </div>
                    </div>
                  </div>

                  <!-- Método de pago -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex align-items-center justify-content-between mb-3">
                        <h5 class="mb-0">Método de pago</h5>
                        <div class="d-flex bg-body-highlight border border-translucent rounded-3 p-2">
                          <i data-feather="shopping-bag" style="width: 16px; height: 16px;"></i>
                        </div>
                      </div>

                      <div class="payment-options row g-2">

                        <label class="payment-option col-4">
                          <input type="radio" name="payment_method" value="efectivo" />
                          <span class="bg-body border border-gray-400 key-tag f2">
                            <i data-feather="dollar-sign"></i>
                            Efectivo
                          </span>
                        </label>

                        <label class="payment-option col-4">
                          <input type="radio" name="payment_method" value="tarjeta" />
                          <span class="bg-body border border-gray-400 key-tag f3">
                            <i data-feather="credit-card"></i>
                            Tarjeta
                          </span>
                        </label>

                        <label class="payment-option col-4">
                          <input type="radio" name="payment_method" value="transferencia" />
                          <span class="bg-body border border-gray-400 key-tag f4">
                            <i data-feather="home"></i>
                            Transferencia
                          </span>
                        </label>

                      </div>
                    </div>
                  </div>

                  <!-- Acciones -->
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column flex-md-row gap-2">
                        <button id="cancelSaleBtn" class="btn btn-light w-100">
                          Cancelar venta
                        </button>

                        <button id="finishSaleBtn" class="btn btn-primary w-100 key-tag f8">
                          Finalizar venta
                          <i data-feather="arrow-right"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
      @include('layout.administrador.footer')
    </div>

  </main>

  @include('layout.administrador.assets')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('admin/js/nueva-venta.js') }}"></script>

  <!-- <script>
    $(function() {
      $('#addEventModal').modal('show')
    });
  </script> -->

</body>

</html>