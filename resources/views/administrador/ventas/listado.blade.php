@php
$title = 'Ventas y desempeño comercial';
@endphp

@include('layout.administrador.header')

<body data-page="sales-performance-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')

      <div class="content">

      <div class="loading-layer d-none"><span>Cargando...</span></div>

         <!-- Header principal -->
         <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-4">
            <div>
               <h2 class="mb-1">Ventas y desempeño comercial</h2>
               <p class="text-body-secondary mb-0">
                  Analiza las ventas de tu colectivo, compara periodos y revisa el rendimiento por marca.
               </p>
            </div>

            <div class="d-print-none d-flex flex-wrap gap-2">
               <button class="btn btn-phoenix-secondary btn-sm" onclick="window.print();">
                  <i data-feather="printer" class="me-2" style="width:16px;height:16px;"></i>
                  Imprimir reporte
               </button>

               <button class="btn btn-primary btn-sm">
                  <i data-feather="calendar" class="me-2" style="width:16px;height:16px;"></i>
                  Corte del periodo
               </button>
      
            </div>
         </div>

         <!-- Contexto de sucursales -->
         <div class="row g-3 mb-4">
            <div class="col-6 col-md-4 col-xl-auto">
               <div class="card border shadow-sm h-100 card-kollabi-purple">
                  <div class="card-body px-3 py-2">
                     <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-l">
                           <div class="avatar-name rounded-circle bg-purple-opacity text-purple d-flex align-items-center justify-content-center">
                              <i data-feather="pie-chart" style="width:22px;height:22px;"></i>
                           </div>
                        </div>

                        <div class="flex-1">
                           <p class="text-body-secondary mb-1 fs-9">Contexto actual</p>
                           <div class="d-flex align-items-center justify-content-between">
                              <select class="form-select form-select-sm border-0 fw-bold p-0 bg-transparent" id="locationsSelect" style="min-width: 155px;">
                                 <option value="1">Todas las sucursales</option>
                                 <option value="2">Sucrusal Centro</option>
                                 <option value="3">Sucursal Parque</option>
                              </select>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-6 col-md-3 col-xl-auto">
               <div class="card border shadow-sm h-100">
                  <div class="card-body px-3 py-2">
                     <div class="d-flex align-items-center gap-3">
                        <div class="avatar avatar-l">
                           <div class="avatar-name rounded-circle bg-body-highlight text-body-quaternary d-flex align-items-center justify-content-center">
                              <span class="fas fa-store-alt fs-8"></span>
                           </div>
                        </div>

                        <div>
                           <p class="text-body-secondary mb-1 fs-9">Sucursales activas</p>
                           <div class="d-flex align-items-center gap-2">
                              <h4 class="mb-0">5</h4>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Métricas principales -->
         <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Total vendido</p>
                           <h3 class="mb-2">$128,450.00</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">
                              <i data-feather="arrow-up-right" style="width:14px;height:14px;" class="me-1"></i>
                              18.6% vs. periodo anterior
                           </p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-purple-opacity text-purple d-flex align-items-center justify-content-center">
                              <i data-feather="shopping-cart" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Ingreso neto</p>
                           <h3 class="mb-2">$102,760.00</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">
                              <i data-feather="arrow-up-right" style="width:14px;height:14px;" class="me-1"></i>
                              15.3% vs. periodo anterior
                           </p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-success-subtle text-success d-flex align-items-center justify-content-center">
                              <i data-feather="dollar-sign" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Ventas realizadas</p>
                           <h3 class="mb-2">326</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">
                              <i data-feather="arrow-up-right" style="width:14px;height:14px;" class="me-1"></i>
                              12.8% vs. periodo anterior
                           </p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-info-subtle text-info d-flex align-items-center justify-content-center">
                              <i data-feather="shopping-bag" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Ticket promedio</p>
                           <h3 class="mb-2">$394.00</h3>
                           <p class="mb-0 fs-9 text-danger fw-semibold">
                              <i data-feather="arrow-down-right" style="width:14px;height:14px;" class="me-1"></i>
                              2.1% vs. periodo anterior
                           </p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-warning-subtle text-warning d-flex align-items-center justify-content-center">
                              <i data-feather="tag" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Métricas secundarias -->
         <div class="row g-3 mb-4">
            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Artículos vendidos</p>
                           <h3 class="mb-2">842</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">20.4% vs. periodo anterior</p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-warning-subtle text-warning d-flex align-items-center justify-content-center">
                              <i data-feather="package" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Comisiones generadas</p>
                           <h3 class="mb-2">$25,690.00</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">14.7% vs. periodo anterior</p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-purple-opacity text-purple d-flex align-items-center justify-content-center">
                              <i data-feather="percent" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Descuentos aplicados</p>
                           <h3 class="mb-2">$4,280.00</h3>
                           <p class="mb-0 fs-9 text-danger fw-semibold">8.5% vs. periodo anterior</p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-danger-subtle text-danger d-flex align-items-center justify-content-center">
                              <i data-feather="tag" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-12 col-sm-6 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                     <div class="d-flex justify-content-between align-items-start">
                        <div>
                           <p class="text-body-secondary mb-1">Marcas con ventas</p>
                           <h3 class="mb-2">18</h3>
                           <p class="mb-0 fs-9 text-success fw-semibold">5.9% vs. periodo anterior</p>
                        </div>
                        <div class="avatar avatar-xl">
                           <div class="avatar-name rounded-circle bg-info-subtle text-info d-flex align-items-center justify-content-center">
                              <i data-feather="store" style="width:22px;height:22px;"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Insights -->
         <div class="row g-3 mb-4">
            <!-- Ventas por método -->
            <div class="col-12 col-xl-4">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 pb-0 d-flex justify-content-between align-items-center">
                     <h5 class="mb-0">Ventas por método de pago</h5>
                     <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                        <i data-feather="info" style="width:14px;height:14px;"></i>
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="row align-items-center g-3">
                        <div class="col-md-6">
                           <div class="d-flex align-items-center justify-content-center" style="min-height:220px;">
                              <canvas id="salesByMethodChart" height="220"></canvas>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="d-flex flex-column gap-3">
                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-purple" style="width:10px;height:10px;"></span>
                                    <span class="fs-9">Efectivo</span>
                                 </div>
                                 <span class="fw-semibold fs-9">$57,802.50 (45%)</span>
                              </div>

                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-info" style="width:10px;height:10px;"></span>
                                    <span class="fs-9">Tarjeta</span>
                                 </div>
                                 <span class="fw-semibold fs-9">$38,535.00 (30%)</span>
                              </div>

                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-success" style="width:10px;height:10px;"></span>
                                    <span class="fs-9">Transferencia</span>
                                 </div>
                                 <span class="fw-semibold fs-9">$19,267.50 (15%)</span>
                              </div>

                              <div class="d-flex justify-content-between align-items-center">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="rounded-circle bg-warning" style="width:10px;height:10px;"></span>
                                    <span class="fs-9">Mixto</span>
                                 </div>
                                 <span class="fw-semibold fs-9">$12,845.00 (10%)</span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Top marcas -->
            <div class="col-12 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 pb-0 d-flex justify-content-between align-items-center">
                     <h5 class="mb-0">Top marcas del periodo</h5>
                     <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                        <i data-feather="info" style="width:14px;height:14px;"></i>
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="d-flex flex-column gap-3">
                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">1. MagentaTLX</span>
                              <span class="fs-9">$38,450.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-purple" style="width: 100%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">2. Luna Artesanal</span>
                              <span class="fs-9">$26,780.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-purple" style="width: 75%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">3. Folk &amp; Co.</span>
                              <span class="fs-9">$18,620.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-purple" style="width: 52%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">4. Casa Miel</span>
                              <span class="fs-9">$12,340.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-purple" style="width: 36%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">5. Aura Studio</span>
                              <span class="fs-9">$8,950.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-purple" style="width: 25%"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Rendimiento por sucursal -->
            <div class="col-12 col-xl-3">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 pb-0 d-flex justify-content-between align-items-center">
                     <h5 class="mb-0">Rendimiento por sucursal</h5>
                     <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                        <i data-feather="info" style="width:14px;height:14px;"></i>
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="d-flex flex-column gap-3">
                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">1. Centro</span>
                              <span class="fs-9">$42,890.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-primary" style="width: 100%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">2. Angelópolis</span>
                              <span class="fs-9">$27,350.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-primary" style="width: 63%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">3. Galerías</span>
                              <span class="fs-9">$21,140.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-primary" style="width: 49%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">4. Roma Norte</span>
                              <span class="fs-9">$18,180.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-primary" style="width: 42%"></div>
                           </div>
                        </div>

                        <div>
                           <div class="d-flex justify-content-between mb-1">
                              <span class="fw-semibold fs-9">5. Condesa</span>
                              <span class="fs-9">$18,890.00</span>
                           </div>
                           <div class="progress" style="height:6px;">
                              <div class="progress-bar bg-primary" style="width: 44%"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <!-- Puntos de atención -->
            <div class="col-12 col-xl-2">
               <div class="card border-0 shadow-sm h-100">
                  <div class="card-header bg-transparent border-0 pb-0 d-flex justify-content-between align-items-center">
                     <h5 class="mb-0">Puntos de atención</h5>
                     <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                        <i data-feather="info" style="width:14px;height:14px;"></i>
                     </button>
                  </div>
                  <div class="card-body">
                     <div class="d-flex flex-column gap-2">
                        <a href="#!" class="d-flex justify-content-between align-items-center p-2 border rounded-2 text-decoration-none">
                           <div class="d-flex align-items-center gap-2">
                              <i data-feather="alert-triangle" class="text-warning" style="width:16px;height:16px;"></i>
                              <span class="fs-9 text-body-emphasis">12 ventas con descuento</span>
                           </div>
                           <i data-feather="chevron-right" style="width:14px;height:14px;"></i>
                        </a>

                        <a href="#!" class="d-flex justify-content-between align-items-center p-2 border rounded-2 text-decoration-none">
                           <div class="d-flex align-items-center gap-2">
                              <i data-feather="x-circle" class="text-danger" style="width:16px;height:16px;"></i>
                              <span class="fs-9 text-body-emphasis">3 ventas canceladas</span>
                           </div>
                           <i data-feather="chevron-right" style="width:14px;height:14px;"></i>
                        </a>

                        <a href="#!" class="d-flex justify-content-between align-items-center p-2 border rounded-2 text-decoration-none">
                           <div class="d-flex align-items-center gap-2">
                              <i data-feather="minus-circle" class="text-warning" style="width:16px;height:16px;"></i>
                              <span class="fs-9 text-body-emphasis">2 marcas sin ventas</span>
                           </div>
                           <i data-feather="chevron-right" style="width:14px;height:14px;"></i>
                        </a>

                        <a href="#!" class="d-flex justify-content-between align-items-center p-2 border rounded-2 text-decoration-none">
                           <div class="d-flex align-items-center gap-2">
                              <i data-feather="info" class="text-info" style="width:16px;height:16px;"></i>
                              <span class="fs-9 text-body-emphasis">1 venta pendiente</span>
                           </div>
                           <i data-feather="chevron-right" style="width:14px;height:14px;"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Filtros -->
         <div class="d-print-none card border-0 shadow-sm mb-4">
            <div class="card-body">
               <div class="row g-3 align-items-end">

                  <div class="col-12 col-md-6 col-xl-3">
                     <label class="form-label">Buscar</label>
                     <div class="search-box">
                        <form class="position-relative">
                           <input class="form-control form-control-sm search-input" type="search" placeholder="Buscar por folio, marca, producto..." />
                           <span class="fas fa-search search-box-icon"></span>
                        </form>
                     </div>
                  </div>

                  <div class="col-6 col-md-3 col-xl-1">
                     <label class="form-label">Periodo</label>
                     <select class="form-select form-select-sm">
                        <option selected>Este mes</option>
                        <option>Hoy</option>
                        <option>Esta semana</option>
                        <option>Mes pasado</option>
                        <option>Personalizado</option>
                     </select>
                  </div>

                  <div class="col-6 col-md-3 col-xl-1">
                     <label class="form-label">Desde</label>
                     <input class="form-control form-control-sm" type="text" value="01/05/2025">
                  </div>

                  <div class="col-6 col-md-3 col-xl-1">
                     <label class="form-label">Hasta</label>
                     <input class="form-control form-control-sm" type="text" value="31/05/2025">
                  </div>

                  <div class="col-6 col-md-3 col-xl-2">
                     <label class="form-label">Sucursal</label>
                     <select class="form-select form-select-sm">
                        <option selected>Todas las sucursales</option>
                        <option>Centro</option>
                        <option>Angelópolis</option>
                        <option>Galerías</option>
                        <option>Roma Norte</option>
                        <option>Condesa</option>
                     </select>
                  </div>

                  <div class="col-6 col-md-3 col-xl-2">
                     <label class="form-label">Marca</label>
                     <select class="form-select form-select-sm">
                        <option selected>Todas las marcas</option>
                        <option>MagentaTLX</option>
                        <option>Luna Artesanal</option>
                        <option>Folk & Co.</option>
                        <option>Casa Miel</option>
                        <option>Aura Studio</option>
                     </select>
                  </div>

                  <div class="col-6 col-md-3 col-xl-1">
                     <label class="form-label">Método</label>
                     <select class="form-select form-select-sm">
                        <option selected>Todos</option>
                        <option>Efectivo</option>
                        <option>Tarjeta</option>
                        <option>Transferencia</option>
                        <option>Mixto</option>
                     </select>
                  </div>

                  <div class="col-6 col-md-3 col-xl-1">
                     <label class="form-label">Estado</label>
                     <select class="form-select form-select-sm">
                        <option selected>Todos</option>
                        <option>Completada</option>
                        <option>Pendiente</option>
                        <option>Cancelada</option>
                     </select>
                  </div>

                  <div class="col-12 col-xl-2">
                     <div class="d-flex gap-2">
                        <button class="btn btn-phoenix-secondary btn-sm w-100">
                           <i data-feather="sliders" class="me-2" style="width:14px;height:14px;"></i>
                           Más filtros
                        </button>

                        <button class="btn btn-primary btn-sm w-100">
                           Aplicar filtros
                        </button>
                     </div>
                  </div>

               </div>
            </div>
         </div>

         <!-- Tabla -->
         <div id="salesDashboardTable"
            data-list='{"valueNames":["folio","fecha","sucursal","marca","productos","metodo","subtotal","descuento","comision","neto","total","vendedor","estado"],"page":10,"pagination":true}'>

            <div class="card border-0 shadow-sm">
               <div class="card-header bg-transparent border-0">
                  <div class="d-flex flex-wrap justify-content-between align-items-start gap-3">
                     <div>
                        <h5 class="mb-1">Listado de ventas</h5>
                        <p class="mb-0 text-body-secondary fs-9">
                           Consulta el detalle de cada ticket, sus importes y el desglose por marca.
                        </p>
                     </div>

                     <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                           <i data-feather="list" style="width:16px;height:16px;"></i>
                        </button>
                        <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                           <i data-feather="grid" style="width:16px;height:16px;"></i>
                        </button>
                        <button class="btn btn-sm btn-phoenix-secondary btn-icon">
                           <i data-feather="settings" style="width:16px;height:16px;"></i>
                        </button>
                     </div>
                  </div>
               </div>

               <div class="card-body p-0">
                  <div class="table-responsive scrollbar-overlay">
                     <table class="table table-hover fs-9 mb-0">
                        <thead>
                           <tr>
                              <th class="sort align-middle ps-3" data-sort="folio">FOLIO</th>
                              <th class="sort align-middle" data-sort="fecha">FECHA</th>
                              <th class="sort align-middle" data-sort="sucursal">SUCURSAL</th>
                              <th class="sort align-middle" data-sort="marca">MARCA(S)</th>
                              <th class="sort align-middle" data-sort="productos">PRODUCTOS</th>
                              <th class="sort align-middle" data-sort="metodo">MÉTODO</th>
                              <th class="sort align-middle" data-sort="subtotal">SUBTOTAL</th>
                              <th class="sort align-middle" data-sort="descuento">DESCUENTO</th>
                              <th class="sort align-middle" data-sort="comision">COMISIÓN</th>
                              <th class="sort align-middle" data-sort="neto">NETO MARCA</th>
                              <th class="sort align-middle" data-sort="total">TOTAL</th>
                              <th class="sort align-middle" data-sort="vendedor">VENDEDOR</th>
                              <th class="sort align-middle" data-sort="estado">ESTADO</th>
                              <th class="align-middle pe-3"></th>
                           </tr>
                        </thead>

                        <tbody class="list">

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2048</a>
                              </td>
                              <td class="fecha align-middle">31/05/2025 14:32</td>
                              <td class="sucursal align-middle">Centro</td>
                              <td class="marca align-middle">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-phoenix fs-10 badge-kollabi-purple">M</span>
                                    <span>MagentaTLX</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">5</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-info">Tarjeta</span>
                              </td>
                              <td class="subtotal align-middle">$5,200.00</td>
                              <td class="descuento align-middle text-danger">$260.00</td>
                              <td class="comision align-middle">$780.00</td>
                              <td class="neto align-middle">$4,160.00</td>
                              <td class="total align-middle fw-semibold">$4,940.00</td>
                              <td class="vendedor align-middle">Ana Morales</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Completada</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2047</a>
                              </td>
                              <td class="fecha align-middle">31/05/2025 11:08</td>
                              <td class="sucursal align-middle">Angelópolis</td>
                              <td class="marca align-middle">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-secondary">L</span>
                                    <span>Luna Artesanal</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">3</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Efectivo</span>
                              </td>
                              <td class="subtotal align-middle">$3,400.00</td>
                              <td class="descuento align-middle">$0.00</td>
                              <td class="comision align-middle">$510.00</td>
                              <td class="neto align-middle">$2,890.00</td>
                              <td class="total align-middle fw-semibold">$3,400.00</td>
                              <td class="vendedor align-middle">Carlos Rojas</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Completada</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2046</a>
                              </td>
                              <td class="fecha align-middle">30/05/2025 17:45</td>
                              <td class="sucursal align-middle">Galerías</td>
                              <td class="marca align-middle">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-warning">F</span>
                                    <span>Folk &amp; Co.</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">7</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-info">Transferencia</span>
                              </td>
                              <td class="subtotal align-middle">$6,850.00</td>
                              <td class="descuento align-middle text-danger">$350.00</td>
                              <td class="comision align-middle">$1,027.50</td>
                              <td class="neto align-middle">$5,472.50</td>
                              <td class="total align-middle fw-semibold">$6,500.00</td>
                              <td class="vendedor align-middle">María López</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-warning">Pendiente</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2045</a>
                              </td>
                              <td class="fecha align-middle">30/05/2025 13:22</td>
                              <td class="sucursal align-middle">Roma Norte</td>
                              <td class="marca align-middle">
                                 <div>
                                    <div class="d-flex align-items-center gap-1 mb-1">
                                       <span class="badge badge-phoenix fs-10 badge-kollabi-purple">M</span>
                                       <span class="badge badge-phoenix fs-10 badge-phoenix-secondary">L</span>
                                       <span class="badge badge-phoenix fs-10 badge-phoenix-warning">F</span>
                                    </div>
                                    <span class="fs-9 text-body-secondary">Varias marcas · 3 marcas</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">6</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-info">Tarjeta</span>
                              </td>
                              <td class="subtotal align-middle">$4,980.00</td>
                              <td class="descuento align-middle text-danger">$280.00</td>
                              <td class="comision align-middle">$747.00</td>
                              <td class="neto align-middle">$3,953.00</td>
                              <td class="total align-middle fw-semibold">$4,700.00</td>
                              <td class="vendedor align-middle">Luis Hernández</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Completada</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2044</a>
                              </td>
                              <td class="fecha align-middle">29/05/2025 16:10</td>
                              <td class="sucursal align-middle">Condesa</td>
                              <td class="marca align-middle">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-warning">C</span>
                                    <span>Casa Miel</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">4</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Efectivo</span>
                              </td>
                              <td class="subtotal align-middle">$2,950.00</td>
                              <td class="descuento align-middle text-danger">$150.00</td>
                              <td class="comision align-middle">$442.50</td>
                              <td class="neto align-middle">$2,357.50</td>
                              <td class="total align-middle fw-semibold">$2,800.00</td>
                              <td class="vendedor align-middle">Sofía Ramírez</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-success">Completada</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                           <tr>
                              <td class="folio align-middle ps-3">
                                 <a href="#sales-offcanvas" data-bs-toggle="offcanvas" class="fw-semibold text-body-emphasis">V-2043</a>
                              </td>
                              <td class="fecha align-middle">28/05/2025 10:05</td>
                              <td class="sucursal align-middle">Centro</td>
                              <td class="marca align-middle">
                                 <div class="d-flex align-items-center gap-2">
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-info">A</span>
                                    <span>Aura Studio</span>
                                 </div>
                              </td>
                              <td class="productos align-middle">2</td>
                              <td class="metodo align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-info">Tarjeta</span>
                              </td>
                              <td class="subtotal align-middle">$1,750.00</td>
                              <td class="descuento align-middle">$0.00</td>
                              <td class="comision align-middle">$262.50</td>
                              <td class="neto align-middle">$1,487.50</td>
                              <td class="total align-middle fw-semibold">$1,750.00</td>
                              <td class="vendedor align-middle">Daniel Vega</td>
                              <td class="estado align-middle">
                                 <span class="badge badge-phoenix fs-10 badge-phoenix-danger">Cancelada</span>
                              </td>
                              <td class="align-middle pe-3 text-end">
                                 <button class="btn btn-sm btn-reveal">
                                    <i data-feather="more-vertical" style="width:16px;height:16px;"></i>
                                 </button>
                              </td>
                           </tr>

                        </tbody>
                     </table>
                  </div>
               </div>

               <div class="card-footer bg-transparent border-0">
                  <div class="row align-items-center justify-content-between g-3">
                     <div class="col-auto">
                        <p class="mb-0 text-body-secondary fs-9">
                           Mostrando 1–6 de 326 ventas
                        </p>
                     </div>

                     <div class="col-auto">
                        <nav>
                           <ul class="pagination pagination-sm mb-0">
                              <li class="page-item">
                                 <a class="page-link" href="#!">&laquo;</a>
                              </li>
                              <li class="page-item active">
                                 <a class="page-link" href="#!">1</a>
                              </li>
                              <li class="page-item"><a class="page-link" href="#!">2</a></li>
                              <li class="page-item"><a class="page-link" href="#!">3</a></li>
                              <li class="page-item"><a class="page-link" href="#!">4</a></li>
                              <li class="page-item"><a class="page-link" href="#!">5</a></li>
                              <li class="page-item disabled"><span class="page-link">...</span></li>
                              <li class="page-item"><a class="page-link" href="#!">55</a></li>
                              <li class="page-item">
                                 <a class="page-link" href="#!">&raquo;</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         @include('layout.administrador.footer')

      </div>
   </main>

   @include('layout.administrador.assets')

   <!-- Si después quieres, aquí podemos conectar Chart.js, flatpickr, select2 y list.js -->
</body>

</html>