@php
$title = 'Marcas pendientes';
@endphp

@include('layout.administrador.header')

<body data-page="brand-profile-page">

   <main class="main" id="top">

      @include('layout.administrador.sidebar')
      @include('layout.administrador.topbar')


      <div class="content px-0 pt-navbar">
         <div class="row g-0">

            <div class="col-12 col-xl-9 px-0 bg-body">
               <div class="px-4 px-lg-4 py-5">

                  <div class="row gx-0 gx-sm-5 gy-8 mb-8">

                     <div class="col-12 col-xl-4 col-xxl-4 pe-xl-0">
                        <div class="mb-4 mb-xl-7 sticky-top" style="top:96px;">
                           <div class="row gx-0 gx-sm-7">

                              <div class="col-12 col-sm-aut">
                                 <div class="car border-0">
                                    <div class="card-body d-flex flex-column justify-content-between pb-3">
                                       <div class="row align-items-center g-4 mb-2 text-center text-sm-start">
                                          <div class="col-12 col-sm-auto mb-sm-2">
                                             <div class="avatar avatar-2xl"><img class="rounded-circle" src="{{asset('admin/img/magenta.jpg')}}" alt="" /></div>
                                          </div>
                                          <div class="col-12 col-sm-auto flex-1">
                                             <h3>MagentaTLX</h3>
                                             <p class="text-body-secondary mb-1 fs-9"><span class="me-1" data-feather="tag" style="height: 12px; width: 12px;"></span>Joyería y accesorios</p>
                                          </div>
                                       </div>
                                       <div class="d-flex flex-row gap-2">
                                          <span class="badge badge-phoenix badge-phoenix-success fs-10">
                                             <span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Marca activa
                                          </span>
                                          <span class="badge badge-phoenix badge-phoenix-secondary fs-10"><span class="me-1" data-feather="calendar" style="height: 12px; width: 12px;"></span>Desde: 03/06/2023</span>
                                          <a href="" data-bs-toggle="modal" data-bs-target="#addEventModal" class="btn btn-phoenix-primary btn-icon me-2"><i class="fa-regular fa-calendar"></i></a>
                                       </div>
                                       <div class="d-flex border-top border-dashed mt-3 pt-3">
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-instagram fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-threads fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-tiktok fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-facebook-f fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-x-twitter fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-brands fa-linkedin-in fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon me-2"><span class="fa-solid fa-globe fa-lg"></span></a>
                                          <a href="" target="_blank" class="btn btn-phoenix-primary btn-icon"><span class="fa-brands fa-whatsapp fa-lg"></span></a>
                                       </div>
                                       <div class="d-flex alight-items-center justify-content-between mt-3">
                                          <p class="mb-0 fs-10"><span class="fa-solid fa-circle text-success me-1" data-fa-transform="shrink-8"></span>Última actividad: 25/08/2025 | 10:45 am</p>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="my-4">
                                    <h5><span class="me-2 mb-1" data-feather="info" style="height: 15px; width: 15px;"></span>Representante</h5>
                                    <div class="mx-0 mx-sm-3 mx-lg-0 px-lg-0">
                                       <div class="border-bottom border-translucent py-2">
                                          <table class="w-100 table-stats table-stats fs-9">

                                             <tr>
                                                <td class="py-2">
                                                   <div class="d-inline-flex align-items-center">
                                                      <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-primary" data-feather="user" style="width:14px; height:14px"></span></div>
                                                      <p class="fw-bold mb-0">Nombre</p>
                                                   </div>
                                                </td>
                                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                                <td class="py-2">
                                                   <p class="ps-6 ps-sm-0 fw-semibold mb-0 mb-0 pb-3 pb-sm-0">Elizabeth Hernández Morales</p>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td class="py-2">
                                                   <div class="d-inline-flex align-items-center">
                                                      <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-primary" data-feather="phone" style="width:14px; height:14px"></span></div>
                                                      <p class="fw-bold mb-0">Teléfono</p>
                                                   </div>
                                                </td>
                                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                                <td class="py-2"><a class="ps-6 ps-sm-0 fw-semibold mb-0 pb-3 pb-sm-0 text-body" href="tel:+522411641462">+52 241 164 1462</a></td>
                                             </tr>
                                             <tr>
                                                <td class="py-2">
                                                   <div class="d-flex align-items-center">
                                                      <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-primary" data-feather="mail" style="width:14px; height:14px"></span></div>
                                                      <p class="fw-bold mb-0">Correo</p>
                                                   </div>
                                                </td>
                                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                                <td class="py-2"><a class="ps-6 ps-sm-0 fw-semibold mb-0 text-body" href="mailto:cyberelizabeth@gmail.com">cyberelizabeth@gmail.com</a></td>
                                             </tr>
                                             <tr>
                                                <td class="py-2">
                                                   <div class="d-flex align-items-start">
                                                      <div class="d-flex bg-primary-subtle rounded-circle flex-center me-3" style="width:24px; height:24px"><span class="text-primary" data-feather="map-pin" style="width:14px; height:14px"></span></div>
                                                      <p class="fw-bold mb-0">Dirección</p>
                                                   </div>
                                                </td>
                                                <td class="py-2 d-none d-sm-block pe-sm-2">:</td>
                                                <td class="py-2">Xicohténcatl #1109, 90337 Centro, Apizaco, Tlaxcala</td>
                                             </tr>
                                          </table>
                                       </div>
                                    </div>
                                 </div>

                                 <div class="my-4">
                                    <h5><span class="me-2 mb-1" data-feather="flag" style="height: 15px; width: 15px;"></span>Colocada en:</h5>
                                    <div class="d-flex flex-wrap mt-3">
                                       <span class="badge badge-tag me-2 mb-2">Estantería 1</span>
                                       <span class="badge badge-tag me-2 mb-2">Estantería 2</span>
                                       <span class="badge badge-tag mb-2">Vitrina 1</span>
                                    </div>
                                 </div>

                              </div>

                           </div>
                        </div>
                     </div>

                     <div class="col-12 col-xl-8 col-xxl-8">

                        <!-- Estadísticas -->
                        <div class="card border-0 mb-3">
                           <div class="card-body">
                              <div class="row g-4 g-xl-1 g-xxl-3 justify-content-between">
                                 <div class="col-sm-auto">
                                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center">
                                       <div class="d-flex bg-success-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-success-dark" data-feather="activity" style="width:20px; height:20px"></span></div>
                                       <div>
                                          <p class="fw-bold mb-1">Ventas (mes)</p>
                                          <h4 class="fw-bolder text-nowrap">$8,000.00</h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-auto">
                                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                                       <div class="d-flex bg-info-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-info-dark" data-feather="dollar-sign" style="width:20px; height:20px"></span></div>
                                       <div>
                                          <p class="fw-bold mb-1">Ventas (hoy)</p>
                                          <h4 class="fw-bolder text-nowrap">$637.00</h4>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-auto">
                                    <div class="d-sm-block d-inline-flex d-md-flex flex-xl-column flex-xxl-row align-items-center align-items-xl-start align-items-xxl-center border-start-sm ps-sm-5 border-translucent">
                                       <div class="d-flex bg-primary-subtle rounded flex-center me-3 mb-sm-3 mb-md-0 mb-xl-3 mb-xxl-0" style="width:32px; height:32px"><span class="text-primary-dark" data-feather="shopping-bag" style="width:20px; height:20px"></span></div>
                                       <div>
                                          <p class="fw-bold mb-1">Inventario</p>
                                          <h4 class="fw-bolder text-nowrap">35</h4>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="row g-3 mb-3">
                           <div class="col-md-6">


                              <div class="card card-body border-0 h-100">
                                 <div class="d-flex justify-content-between">
                                    <h5 class="mb-0"><span class="me-2 mb-1" data-feather="dollar-sign" style="height: 15px; width: 15px;"></span>Renta mensual</h5>
                                    <a href="javascript:void(0);" class="text-body-quaternary" data-bs-toggle="modal" data-bs-target="#editPaymentsModal"><i class="fa-solid fa-pen fa-sm"></i></a>
                                 </div>
                                 <div>
                                    <span class="badge badge-phoenix badge-phoenix-secondary fs-10"><span class="me-1" data-feather="box" style="height: 12px; width: 12px;"></span>Plan: Repisa</span>
                                 </div>
                                 <h3 class="text-body-highlight mt-2 mb-2">$1,432.00</h3>
                                 <span class="text-body fw-semibold fs-9"><span class="me-2 mb-1" data-feather="calendar" style="height: 15px; width: 15px;"></span>Antes del 15 del mes</span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="card border-0 w-100 overflow-hidde h-100 ">
                                 <div class="bg-holder d-block bg-card" style="background-image:url({{ asset('admin/img/static/bg_kollabi-waves_v1.png') }});background-position: top right;">
                                 </div>
                                 <div class="d-dark-none">
                                    <div class="bg-holder d-none d-sm-block d-xxl-block bg-card bg-stock" style="background-image:url({{ asset('admin/img/static/bg_stock.svg') }});">
                                    </div>
                                 </div>
                                 <div class="d-light-none">
                                    <div class="bg-holder d-none d-sm-block d-xxl-block bg-card bg-stock" style="background-image:url({{ asset('admin/img/static/bg_stock_light.svg') }});">
                                    </div>
                                 </div>
                                 <div class="card-body position-relative">
                                    <h5 class="mb-2"><span class="me-2 mb-1" data-feather="clipboard" style="height: 15px; width: 15px;"></span>Inventario</h5>
                                    <div class="row">
                                       <div class="col-md-8">
                                          <p class="fs-9 mb-0 lh-sm readmore">Actualiza su estatus a tu criterio. Elizabeth verá la notificación en su perfil.</p>
                                          <div class="dropdown mt-1">
                                             <a class="text-body-secondary dropdown-toggle text-decoration-none dropdown-caret-none" href="#!" data-bs-toggle="dropdown" aria-expanded="false">
                                                <span class="fs-9">
                                                   <span class="text-warning me-1 mb-1" data-feather="alert-circle" style="height: 12px; width: 12px;"></span>
                                                   Regular
                                                   <span class="fa-solid fa-caret-down text-body-secondary fs-9 ms-2"></span>
                                                </span>
                                             </a>
                                             <div class="dropdown-menu shadow-sm" style="min-width:20rem">
                                                <div class="card position-relative border-0">
                                                   <div class="card-body p-0">
                                                      <div class="mx-3">
                                                         <h4 class="mb-3 fw-bold">Estatus del inventario</h4>
                                                         <!-- <h5 class="mb-3">Deal Owner</h5> -->
                                                         <select class="form-select mb-3" aria-label="Default select">
                                                            <option selected="selected">Elige un estatus...</option>
                                                            <option value="1">Bueno</option>
                                                            <option value="2">Regular</option>
                                                            <option value="3">Malo</option>
                                                         </select>
                                                         <div class="text-end">
                                                            <button class="btn btn-link" type="button">Cancelar</button>
                                                            <button class="btn btn-sm btn-primary px-5" type="button">Notificar</button>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>

                                 </div>
                              </div>

                           </div>
                        </div>

                        <!-- Agenda -->
                        <div class="">
                           <div class="card border-0 mb-4">
                              <div class="card-body">
                                 <div class="row g-0">
                                    <div class="col-12 col-sm-3 me-sm-4 custom-calendar-container">
                                       <div class="position-relative custom-calender border rounded d-flex flex-column flex-center mb-4 mb-sm-0 px-0">
                                          <h5 class="fw-bolder lh-sm text-body-tertiary">24</h5>
                                          <p class="mb-0 fs-10 text-body-tertiary fw-semibold">Act, 2025</p>
                                       </div>
                                    </div>
                                    <div class="col-12 col-sm-9 flex-1">
                                       <div class="row">
                                          <div class="col-12 col-xxl-9 mb-2">
                                             <div class="d-flex align-items-center justify-content-between gap-2 mb-3">
                                                <h5 class="mb-0 mb-xxl-0 cursor-pointer mb-0">Recolección de corte</h5>
                                                <div class="badge badge-phoenix fs-10 badge-phoenix-success">Agendado</div>
                                             </div>
                                             <div class="d-sm-flex mb-3 align-items-center">
                                                <h6 class="text-body-tertiary fw-semibold mb-2 mb-sm-0 border-end-sm pe-sm-2 me-sm-2 text-nowrap"><span class="me-2" data-feather="clock" style="width: 16px; height: 16px;"></span><span>12:00 PM - 1:00 PM </span></h6>
                                                <h6 class="text-body-tertiary fw-semibold mb-0 line-clamp-1"> <span class="me-2" data-feather="map-pin" style="width: 16px; height: 16px;"></span><span>Suc. Perpetua Zócalo</span></h6>
                                             </div>
                                             <p class="fs-9 text-body-tertiary mb-0 lh-sm readmore">Recordar que debe hacer restock de su inventario y tiene 3 paquetes sin recolectar. Preguntar si tiene disponibilidad de un pedido de 50 recuerdos para un evento.</p>
                                          </div>
                                          <div class="col-xxl-3">
                                             <button class="btn btn-sm me-2 me-xxl-0 mb-xxl-2 w-xxl-100 btn-phoenix-primary"><span class="me-1 mb-1" data-feather="calendar" style="height: 12px; width: 12px;"></span>Cambiar fecha</button>
                                             <button class="btn btn-sm btn-phoenix-primary w-xxl-100"><span class="me-1 mb-1" data-feather="trash" style="height: 12px; width: 12px;"></span>Cancelar visita</button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <!-- Tabla productos -->
                        <div class="mb-8">
                           <div class="d-flex justify-content-between align-items-center mb-4" id="scrollspyDeals">
                              <h5 class="mb-0"><span class="me-2 mb-1" data-feather="shopping-bag" style="height: 15px; width: 15px;"></span>Últimas ventas</h5>
                              <a class="btn btn-phoenix-primary btn-sm"><span class="me-2 mb-1" data-feather="external-link" style="height: 12px; width: 12px;"></span>Ver ventas</a>
                           </div>
                           <div class="border-top border-bottom border-translucent" id="leadDetailsTable" data-list='{"valueNames":["articulo","monto","stage","stock","fecha"],"page":5,"pagination":true}'>
                              <div class="table-responsive scrollbar mx-n1 px-1">
                                 <table class="table fs-9 mb-0">
                                    <thead>
                                       <tr>
                                          <th class="sort align-middle text-uppercase" scope="col" data-sort="articulo">Artículo</th>
                                          <th class="sort align-middle text-uppercase" scope="col" data-sort="monto">Monto</th>
                                          <th class="sort align-middle text-uppercase" scope="col" data-sort="stock">Stock</th>
                                          <th class="sort align-middle text-uppercase" scope="col" data-sort="fecha">Fecha venta</th>
                                       </tr>
                                    </thead>
                                    <tbody class="list" id="lead-details-table-body">
                                       <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                          <td class="articulo align-middle white-space-nowrap py-2 ps-0">Collar Perla</td>
                                          <td class="monto align-middle white-space-nowrap fw-bold text-body-tertiary py-2 pe-6">$280.00</td>
                                          <td class="stock align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">3</span></td>
                                          <td class="fecha align-middle text-body-tertiary py-2">15/08/2025 | 01:15 pm</td>
                                       </tr>
                                       <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                          <td class="articulo align-middle white-space-nowrap py-2 ps-0">Aretes disney</td>
                                          <td class="monto align-middle white-space-nowrap fw-bold text-body-tertiary py-2 pe-6">$380.00</td>
                                          <td class="stock align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">1</span></td>
                                          <td class="fecha align-middle text-body-tertiary py-2">15/08/2025 | 12:55 pm</td>
                                       </tr>
                                       <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                          <td class="articulo align-middle white-space-nowrap py-2 ps-0">Collar mariposa</td>
                                          <td class="monto align-middle white-space-nowrap fw-bold text-body-tertiary py-2 pe-6">$250.00</td>
                                          <td class="stock align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">2</span></td>
                                          <td class="fecha align-middle text-body-tertiary py-2">15/08/2025 | 12:22 pm</td>
                                       </tr>
                                       <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                          <td class="articulo align-middle white-space-nowrap py-2 ps-0">Pulsera Perlas</td>
                                          <td class="monto align-middle white-space-nowrap fw-bold text-body-tertiary py-2 pe-6">$220.00</td>
                                          <td class="stock align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">3</span></td>
                                          <td class="fecha align-middle text-body-tertiary py-2">15/08/2025 | 11:45 pm</td>
                                       </tr>
                                       <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                          <td class="articulo align-middle white-space-nowrap py-2 ps-0">Joyero tercipelo</td>
                                          <td class="monto align-middle white-space-nowrap fw-bold text-body-tertiary py-2 pe-6">$170.00</td>
                                          <td class="stock align-middle white-space-nowrap text-body py-2"><span class="badge badge-phoenix fs-10 badge-phoenix-secondary">1</span></td>
                                          <td class="fecha align-middle text-body-tertiary py-2">15/08/2025 | 11:00 am</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>

                     </div>


                  </div>

               </div>
            </div>

            <!-- Historial -->
            <div class="col-12 col-xl-3 px-0 border-start-xl border-top-sm">
               <div class="bg-light dark__bg-gray-1100 h-100">
                  <div class="p-4 py-lg-5">
                     <h4 class="text-body-highlight mb-4 fw-bold">Historial de acciones</h4>

                     <div class="timeline-vertical timeline-with-details">

                        <div class="timeline-item position-relative mb-3">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-3">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 JUN, 2023<br class="d-none d-md-block" /> 10:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-hand-holding-dollar text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-0">
                                    <h5 class="fs-9 lh-sm mb-0">Recolección de corte</h5>
                                    <p class="fs-9 text-body-tertiary fw-bold mb-0">Atendió: Manu</p>
                                    <p class="small text-secondary-emphasis mb-0 lh-sm readmore">Se hizo la recolección del corte mensual por $2,000 pesos. También dejó un par de paquetes para recolecci+on con clientes.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="timeline-item position-relative mb-3">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-3">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">20 MAY, 2025<br class="d-none d-md-block" /> 12:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-arrows-rotate text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-0">
                                    <h5 class="fs-9 lh-sm mb-0">Restocking</h5>
                                    <p class="fs-9 text-body-secondary fw-semibold mb-0">Atendió: Manu</p>
                                    <p class="small text-body-secondary mb-0 lh-sm readmore">Se hizo el reabastecimiento de su inventario trayendo 20 artículos.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="timeline-item position-relative mb-3">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-3">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">15 MAY, 2025<br class="d-none d-md-block" /> 2:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-money-bill text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-0">
                                    <h5 class="fs-9 lh-sm mb-0">Pago de mensualidad</h5>
                                    <p class="fs-9 text-body-secondary fw-semibold mb-0">Atendió: Issac</p>
                                    <p class="small text-body-secondary mb-0 lh-sm readmore">Se realizó el pago de mensualidad correspondiente a su renta por $1,500 pesos.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="timeline-item position-relative mb-3">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-3">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">01 JUN, 2023<br class="d-none d-md-block" /> 10:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-hand-holding-dollar text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-0">
                                    <h5 class="fs-9 lh-sm mb-0">Recolección de corte</h5>
                                    <p class="fs-9 text-body-tertiary fw-bold mb-0">Atendió: Manu</p>
                                    <p class="small text-secondary-emphasis mb-0 lh-sm readmore">Se hizo la recolección del corte mensual por $2,000 pesos. También dejó un par de paquetes para recolecci+on con clientes.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="timeline-item position-relative mb-3">
                           <div class="row g-md-3">
                              <div class="col-12 col-md-auto d-flex">
                                 <div class="timeline-item-date order-1 order-md-0 me-md-3">
                                    <p class="fs-10 fw-semibold text-body-tertiary text-opacity-85 text-end">20 MAY, 2025<br class="d-none d-md-block" /> 12:30 PM</p>
                                 </div>
                                 <div class="timeline-item-bar position-md-relative me-3 me-md-0">
                                    <div class="icon-item icon-item-sm rounded-7 shadow-none bg-primary-subtle"><span class="fa-solid fa-arrows-rotate text-primary-dark fs-9"></span></div><span class="timeline-bar border-end border-dashed"></span>
                                 </div>
                              </div>
                              <div class="col">
                                 <div class="timeline-item-content ps-6 ps-md-0">
                                    <h5 class="fs-9 lh-sm mb-0">Restocking</h5>
                                    <p class="fs-9 text-body-secondary fw-semibold mb-0">Atendió: Manu</p>
                                    <p class="small text-body-secondary mb-0 lh-sm readmore">Se hizo el reabastecimiento de su inventario trayendo 20 artículos.</p>
                                 </div>
                              </div>
                           </div>
                        </div>

                     </div>

                     <div class="d-flex justify-content-center">
                        <a href="javascript:void(0);" class="btn btn-primary">Cargar más</a>
                     </div>

                  </div>
               </div>
            </div>
         </div>
         @include('layout.administrador.footer')
      </div>

      <!-- Modal agregar -->
      <div class="modal fade" id="editPaymentsModal" tabindex="-1" aria-labelledby="editPaymentsModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="calendar" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                     </span>
                     <div class="col">
                        <h5 class="mb-1 position-relative fw-bold fs-8"><span>Renta mensual de <strong>MagentaTLX</strong></span></h5>
                        <p class="mb-0 fs-9 small lh-sm">Establece el plan y la fecha de renta mensual.</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body py-0">

                  <div class="row">
                     <div class="col-md-7">
                        <div class="p-3">

                           <h5 class="mb-">Plan</h5>
                           <div class="d-flex justify-content-between mb-2">
                              <p class="fs-9 mb-0">Elige de los planes dados de alta.</p>
                              <a class="fw-bold small" href="{{url('admin/configuracion/planes')}}"><span class="me-1" data-feather="arrow-up-right" style="height: 12px; width: 12px;"></span>Ir a planes</a>
                           </div>
                           <div class="form-icon-container select">
                              <select class="form-select ps-6" name="" id="">
                                 <option value="">Elige una opción...</option>
                                 <option value="">Plan 1</option>
                                 <option value="">Plan 2</option>
                                 <option value="">Plan 3</option>
                                 <option value="">Plan 4</option>
                                 <option value="">Plan 5</option>
                              </select>
                              <span class="form-icon" data-feather="archive" style="height: 15px; width: 15px;"></span>
                           </div>

                           <hr class="my-4">

                           <h5 class="mb-">Fecha límite</h5>
                           <p class="fs-9 mb-2">Establece una fecha como límite para que Elizabeth realice el pago de su mensualidad.</p>

                           <div class="form-icon-container select" style="max-width: 180px;">
                              <select class="form-select ps-6" name="" id="">
                                 <option value="">Elige una fecha...</option>
                                 <option value="">01</option>
                                 <option value="">02</option>
                                 <option value="">03</option>
                                 <option value="">04</option>
                                 <option value="">05</option>
                                 <option value="">06</option>
                                 <option value="">07</option>
                                 <option value="">08</option>
                                 <option value="">09</option>
                                 <option value="">10</option>
                              </select>
                              <span class="form-icon" data-feather="calendar" style="height: 15px; width: 15px;"></span>
                           </div>

                        </div>
                     </div>
                     <div class="col-md-5 bg-body pt-2">
                        <div class="p-3">
                           <p class="mb-2 fs-9 fw-semibold">Características que incluye este plan que elegiste</p>
                           <div>
                              <ul class="list-group list-group-flush fs-9">
                                 <li class="list-group-item bg-transparent list-group-crm text-body py-2"><span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Caracterítica Demo 1</li>
                                 <li class="list-group-item bg-transparent list-group-crm text-body py-2"><span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Caracterítica Demo 2</li>
                                 <li class="list-group-item bg-transparent list-group-crm text-body py-2"><span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Caracterítica Demo 3</li>
                                 <li class="list-group-item bg-transparent list-group-crm text-body py-2"><span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Caracterítica Demo 4</li>
                                 <li class="list-group-item bg-transparent list-group-crm text-body py-2"><span class="me-1" data-feather="check-circle" style="height: 12px; width: 12px;"></span>Caracterítica Demo 5</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Guardar</button>
               </div>
            </div>
         </div>
      </div>

      <div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-4">
               <div class="modal-header">
                  <!-- <h3 class="modal-title" id="addEventModalLabel">Agregar rol</h3> -->

                  <div class="d-flex align-items-center" id="scrollspyForms">
                     <span class="fa-stack me-2 ms-n1">
                        <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
                        <i class="fa-stack-1x text-gray-800" data-feather="calendar" style="height: 15px; width: 15px;" data-fa-transform="shrink-2"></i>
                        <!-- <i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-file-alt" data-fa-transform="shrink-2"></i> -->
                     </span>
                     <div class="col">
                        <h5 class="mb-1 position-relative fw-bold fs-8">Agendar nueva visita</h5>
                        <p class="mb-0 fs-9 small lh-sm">Programa una visita al espacio para facilitar la logística y el control.</p>
                     </div>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

               </div>
               <div class="modal-body py-0">

                  <div class="row">
                     <div class="col-md-5 bg-body pt-2">
                        <div class="p-3">
                           <label class="form-label" for="brandSelect">Emprendimiento visitante</label>
                           <div class="mb-3">
                              <div class="d-flex align-items-center border p-2 rounded-2">
                                 <img src="{{asset('admin/img/magenta.jpg')}}" class="rounded-circle me-2" width="25" height="25">
                                 <p class="m-0 fs-9">MagentaTLX</p>
                              </div>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="exampleTextarea">Motivo</label>
                              <div class="form-icon-container select">
                                 <select class="form-select ps-6" name="" id="">
                                    <option value="0">Elige una opción...</option>
                                    <option value="1">Corte mensual</option>
                                    <option value="2">Reabastecimiento</option>
                                    <option value="3">Pago de renta</option>
                                    <option value="4">Recolección de mercancía</option>
                                 </select>
                                 <span class="form-icon" data-feather="clipboard" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="exampleTextarea">Sucursal</label>
                              <div class="form-icon-container select">
                                 <select class="form-select ps-6" name="" id="">
                                    <option value="0">Elige una opción...</option>
                                    <option value="1">Perpetua Zócalo</option>
                                    <option value="2">Perpetua Home</option>
                                 </select>
                                 <span class="form-icon" data-feather="map-pin" style="height: 15px; width: 15px;"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-7 pt-2">
                        <div class="p-3">

                           <h5 class="mb-3">Fecha y hora</h5>

                           <div class="row g-2">
                              <div class="col-md-8">
                                 <div class="flatpickr-input-container mb-3">
                                    <label class="form-label" for="eventStartDate">Fecha inicio</label>
                                    <div class="form-icon-container">
                                       <input class="form-control datetimepicker ps-6" id="eventStartDate" name="startDate" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                       <span class="form-icon" data-feather="calendar" style="height: 15px; width: 15px;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="flatpickr-input-container mb-3">
                                    <label class="form-label" for="exampleTextarea">Hora inicio</label>
                                    <div class="form-icon-container">
                                       <input class="form-control datetimepicker ps-6" id="timepicker1" type="text" placeholder="hh:mm" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                       <span class="form-icon" data-feather="clock" style="height: 15px; width: 15px;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="row g-2 mb-0">
                              <div class="col-md-8">
                                 <div class="flatpickr-input-container mb-1">
                                    <label class="form-label" for="eventEndDate">Fecha fin</label>
                                    <div class="form-icon-container">
                                       <input class="form-control datetimepicker ps-6" id="eventEndDate" name="endDate" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                       <span class="form-icon" data-feather="calendar" style="height: 15px; width: 15px;"></span>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="flatpickr-input-container mb-1">
                                    <label class="form-label" for="exampleTextarea">Hora fin</label>
                                    <div class="form-icon-container">
                                       <input class="form-control datetimepicker ps-6" id="timepicker1" type="text" placeholder="hh:mm" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true}' />
                                       <span class="form-icon" data-feather="clock" style="height: 15px; width: 15px;"></span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <p class="fs-10 lh-sm">Si la visita ocurrirá el mismo día, elige la misma fecha aquí.</p>

                           <hr class="mt- mb-2">

                           <div class="mb-0">
                              <label class="form-label" for="notasTextarea">Notas / Recordatorios</label>
                              <textarea class="form-control" id="notasTextarea" name="notasTextarea" rows="3"> </textarea>
                           </div>

                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-inverse-light" data-bs-dismiss="modal">Cancelar</button>
                  <button type="button" class="btn btn-primary">Agendar</button>
               </div>
            </div>
         </div>
      </div>

   </main>

   @include('layout.administrador.assets')

   <script src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>

   <!-- Selects -->
   <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

   <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
   <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

   <script src="{{ asset('admin/js/marcas/brand-profile.js') }}"></script>

</body>

</html>