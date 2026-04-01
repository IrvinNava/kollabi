@php
$title = 'Agenda';
@endphp

@include('layout.administrador.header')

<body data-page="schedule-page">

  <main class="main" id="top">

    @include('layout.administrador.sidebar')
    @include('layout.administrador.topbar')

    <div class="content">
      <div class="row g-0 mb-4 align-items-center">
        <div class="col-5 col-md-6">
          <h4 class="mb-0 text-body-emphasis fw-bold fs-md-6"><span class="calendar-day d-block d-md-inline mb-1"></span><span class="px-3 fw-thin text-body-quaternary d-none d-md-inline">|</span><span class="calendar-date"></span></h4>
        </div>
        <div class="col-7 col-md-6 d-flex justify-content-end">
          <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addEventModal"> <span class="fas fa-plus pe-2 fs-10"></span>Agendar visita</button>
        </div>
      </div>
      <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-y border-translucent">
        <div class="row py-3 gy-3 gx-0">
          <div class="col-6 col-md-4 order-1 d-flex align-items-center">
            <button class="btn btn-sm btn-phoenix-primary px-4" data-event="today">Hoy</button>
          </div>
          <div class="col-12 col-md-4 order-md-1 d-flex align-items-center justify-content-center">
            <button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="prev" title="Previous"><span class="fas fa-chevron-left"></span></button>
            <h3 class="px-3 text-body-emphasis fw-semibold calendar-title mb-0"> </h3>
            <button class="btn icon-item icon-item-sm shadow-none text-body-emphasis p-0" type="button" data-event="next" title="Next"><span class="fas fa-chevron-right"></span></button>
          </div>
          <div class="col-6 col-md-4 ms-auto order-1 d-flex justify-content-end">
            <div>
              <div class="btn-group btn-group-sm" role="group">
                <button class="btn btn-phoenix-secondary active-view" data-fc-view="dayGridMonth">Mes</button>
                <button class="btn btn-phoenix-secondary" data-fc-view="timeGridWeek">Semana</button>
                <button class="btn btn-phoenix-secondary" data-fc-view="timeGridDay">Día</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="calendar-outline mt-6 mb-9" id="appCalendar"></div>
      
      @include('layout.administrador.footer')

    </div>

    <div class="modal fade" id="eventDetailsModal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border border-translucent"></div>
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
                  <h5 class="mb-3">¿Quién visita?</h5>
                  <label class="form-label" for="brandSelect">Emprendimiento visitante</label>
                  <div class="mb-3">
                    <select class="form-select" id="brandSelect">
                    </select>
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
            <button type="button" class="btn btn-primary">Guardar</button>
          </div>
        </div>
      </div>
    </div>

  </main>

  @include('layout.administrador.assets')

  <link href="{{ asset('admin/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/vendors/flatpickr/flatpickr.min.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/dayjs@1/dayjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/dayjs@1/locale/es.js"></script>

  <script>
    // Fijar dayjs en español
    if (window.dayjs) {
      dayjs.locale('es');
    }
  </script>

  <script src="{{ asset('admin/vendors/fullcalendar/index.global.min.js') }}"></script>

  <!-- Selects -->
  <link href="{{ asset('admin/vendors/choices/choices.min.css') }}" rel="stylesheet">
  <script src="{{ asset('admin/vendors/choices/choices.min.js') }}"></script>

  <script src="{{ asset('admin/js/calendar.js') }}"></script>
  <script src="{{ asset('admin/js/agenda.js') }}"></script>

  <!-- <script>
    $(function() {
      $('#addEventModal').modal('show')
    });
  </script> -->

</body>

</html>