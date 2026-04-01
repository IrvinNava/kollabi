(function (factory) {
  typeof define === 'function' && define.amd ? define(factory) :
    factory();
})((function () {
  'use strict';

  var body = $("body");
  /* -------------------------------------------------------------------------- */

  const camelize = str => {
    const text = str.replace(/[-_\s.]+(.)?/g, (_, c) =>
      c ? c.toUpperCase() : ''
    );
    return `${text.substr(0, 1).toLowerCase()}${text.substr(1)}`;
  };

  const getData = (el, data) => {
    try {
      return JSON.parse(el.dataset[camelize(data)]);
    } catch (e) {
      return el.dataset[camelize(data)];
    }
  };

  /* -------------------------------------------------------------------------- */
  /*                                   Calendar                                 */

  /* -------------------------------------------------------------------------- */
  const renderCalendar = (el, option) => {
    const { merge } = window._;

    // Forzar dayjs en español (si está disponible)
    if (window.dayjs && window.dayjs.locale) {
      try { window.dayjs.locale('es'); } catch (e) { }
    }

    const options = merge(
      {
        initialView: 'dayGridMonth',
        weekNumberCalculation: 'ISO',
        editable: true,
        direction: document.querySelector('html').getAttribute('dir'),
        // Localización FullCalendar
        locale: 'es',
        firstDay: 1, // Lunes
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        buttonText: {
          today: 'Hoy',
          month: 'Mes',
          week: 'Semana',
          day: 'Día'
        }
      },
      option
    );
    const calendar = new window.FullCalendar.Calendar(el, options);
    calendar.render();
    document
      .querySelector('.navbar-vertical-toggle')
      ?.addEventListener('navbar.vertical.toggle', () => calendar.updateSize());
    return calendar;
  };

  const fullCalendarInit = () => {
    const { getData } = window.phoenix.utils;

    const calendars = document.querySelectorAll('[data-calendar]');
    calendars.forEach(item => {
      const options = getData(item, 'calendar');
      renderCalendar(item, options);
    });
  };

  const fullCalendar = {
    renderCalendar,
    fullCalendarInit
  };

  const { dayjs } = window;
  const currentDay = dayjs && dayjs().format('DD');
  const currentMonth = dayjs && dayjs().format('MM');
  const prevMonth = dayjs && dayjs().subtract(1, 'month').format('MM');
  const nextMonth = dayjs && dayjs().add(1, 'month').format('MM');
  const currentYear = dayjs && dayjs().format('YYYY');
  const events = [
    {
      title: 'MagentaTLX',
      start: `${currentYear}-${currentMonth}-01 10:00:00`,
      end: `${currentYear}-${currentMonth}-01 16:00:00`,
      description: "Recordar que debe hacer restock de su inventario y tiene 3 paquetes sin recolectar. Preguntar si tiene disponibilidad de un pedido de 50 recuerdos para un evento.",
      className: 'text-body',
      iconFeather: 'dollar-sign',
      subject: 'Corte mensual',
      location: 'Perpetua Zócalo',
    },
    {
      title: `LunaArtesanal`,
      start: `${currentYear}-${currentMonth}-11 10:00:00`,
      end: `${currentYear}-${currentMonth}-11 10:00:00`,
      subject: 'Corte mensual',
      description: "Lorem",
      className: 'text-body',
      iconFeather: 'refresh-ccw',
      subject: 'Restock',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'VerdeMenta',
      start: `${currentYear}-${currentMonth}-${currentDay} 12:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias, necessitatibus a facilis pariatur nesciunt facere quam fugiat repellendus illum tempora voluptatem.',
      className: 'text-body',
      iconFeather: 'credit-card',
      subject: 'Pago renta',
      location: 'Perpetua Zócalo',
    },
    {
      title: `KúrameMX`,
      start: `${currentYear}-${currentMonth}-16 10:00:00`,
      end: `${currentYear}-${currentMonth}-16 16:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex.',
      className: 'text-body',
      iconFeather: 'refresh-ccw',
      subject: 'Restock',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Tribu Urbana',
      start: `${currentYear}-${currentMonth}-${currentDay} 10:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias.',
      className: 'text-body',
      iconFeather: 'dollar-sign',
      subject: 'Corte mensual',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Flor de Cacto',
      start: `${currentYear}-${currentMonth}-14 10:00:00`,
      description: 'Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias, necessitatibus a facilis pariatur nesciunt facere quam fugiat repellendus illum tempora voluptatem.',
      className: 'text-body',
      iconFeather: 'archive',
      subject: 'Recolección',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Ámbar Co.',
      start: `${currentYear}-${currentMonth}-23 10:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias.',
      className: 'text-body',
      iconFeather: 'dollar-sign',
      subject: 'Corte mensual',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Nube Norte',
      start: `${currentYear}-${currentMonth}-26 10:00:00`,
      description: 'Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias, necessitatibus a facilis pariatur nesciunt facere quam fugiat repellendus illum tempora voluptatem.',
      className: 'text-body',
      iconFeather: 'archive',
      subject: 'Recolección',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Barro&Tela',
      start: `${currentYear}-${nextMonth}-05 10:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias.',
      className: 'text-body',
      iconFeather: 'refresh-ccw',
      subject: 'Restock',
      location: 'Perpetua Zócalo',
    },
    {
      title: 'Estilo Tierra',
      url: 'http://google.com/',
      start: `${currentYear}-${prevMonth}-10 10:00:00`,
      description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias nulla, assumenda consectetur eveniet tempora corporis ex? Ad molestias.',
      className: 'text-body',
      iconFeather: 'archive',
      subject: 'Recolección',
      location: 'Perpetua Zócalo',
    }
  ];

  const getTemplate = event => `
  <div class="">
    <div class="loading-shape"><span>Cargando...</span></div>
    <div class="modal-header ps-card border-bottom border-translucent justify-content-between">

      <div class="d-flex align-items-center" id="scrollspyForms" style="width: 92%;">
        <span class="fa-stack me-2 ms-n1">
          <i class="fas fa-circle fa-stack-2x text-gray-200"></i>
          <i class="fa-stack-1x text-gray-800 fa-regular fa-calendar me-2" data-fa-transform="shrink-2"></i>
        </span>
        <div class="d-flex justify-content-between w-100">
          <h4 class="modal-title text-body-highlight mb-0">${event.title}</h4>
          <span class="badge badge-phoenix fs-10 badge-phoenix-primary pt-1"><i data-feather="${event.extendedProps.iconFeather}" class="me-1" style="height: 12px; width: 12px;"></i>${event.extendedProps.subject}</span>
        </div>
      </div>
      <button type="button" class="btn p-1 fw-bolder" data-bs-dismiss="modal" aria-label="Cerrar">
        <span class='fas fa-times fs-8'></span>
      </button>

    </div>

    <div class="modal-body px-4 pb-card pt-1 fs-9">

      <div class="mt-4 ${event.extendedProps.location ? 'border-bottom pb-3 border-translucent' : ''
    }">
        <h5 class='mb-0 text-body-secondary'><i class="fa-regular fa-clock me-2"></i>Fecha y hora</h5>
        <p class="mb-1 mt-2">
        ${window.dayjs &&
    window.dayjs(event.start).format('dddd, D [de] MMMM [de] YYYY, H:mm')
    } 
        ${event.end
      ? `– ${window.dayjs &&
      window
        .dayjs(event.end)
        .subtract(1, 'day')
        .format('dddd, D [de] MMMM [de] YYYY, H:mm')
      }`
      : ''
    }
        </p>

      </div>

      ${event.extendedProps.location
      ? `
            <div class="mt-4 pb-3 border-bottom border-translucent">
              <h5 class='mb-0 text-body-secondary'><i class="fa-regular fa-flag me-2"></i>Ubicación</h5>
              <p class="mb-0 mt-2">${event.extendedProps.location}</p>
            </div>
          `
      : ''
    }

      ${event.extendedProps.description
      ? `
          <div class="mt-4 pb-3">
            <h5 class='mb-0 text-body-secondary'><i class="fa-regular fa-clipboard me-2"></i>Notas / Recordatorios</h5>
            <p class="mb-0 mt-2">
              ${event.extendedProps.description.split(' ').slice(0, 30).join(' ')}
            </p>
          </div>
        `
      : ''
    } 

    </div>

    <div class="modal-footer d-flex justify-content-end px-card pt-0 border-top-0">
      <a href="#!" class="btn btn-phoenix-secondary btn-sm">
        <span class="fas fa-pencil-alt fs-10 mr-2"></span> Editar
      </a>
      <button class="btn btn-phoenix-danger btn-sm" data-calendar-event-remove >
        <span class="fa-solid fa-trash fs-9 mr-2" data-fa-transform="shrink-2"></span> Eliminar
      </button>
      <a class="btn btn-sm btn-phoenix-secondary d-flex align-items-center flex-wrap">
        <img src="https://localhost/public/admin/img/magenta.jpg" class="rounded-circle me-2" width="20">
        <p class="mb-0">Ir a ${event.title}</p>
      </a>
    </div>
    
  </div>
`;

  /*-----------------------------------------------
  |   Calendar
  -----------------------------------------------*/
  const appCalendarInit = () => {
    const Selectors = {
      ACTIVE: '.active',
      BRAND_SELECT: '#brandSelect',
      ADD_EVENT_FORM: '#addEventForm',
      ADD_EVENT_MODAL: '#addEventModal',
      CALENDAR: '#appCalendar',
      CALENDAR_TITLE: '.calendar-title',
      CALENDAR_DAY: '.calendar-day',
      CALENDAR_DATE: '.calendar-date',
      DATA_CALENDAR_VIEW: '[data-fc-view]',
      DATA_EVENT: 'data-event',
      DATA_VIEW_TITLE: '[data-view-title]',
      EVENT_DETAILS_MODAL: '#eventDetailsModal',
      EVENT_DETAILS_MODAL_CONTENT: '#eventDetailsModal .modal-content',
      EVENT_START_DATE: '#addEventModal [name="startDate"]',
      INPUT_TITLE: '[name="notasTextarea"]'
    };

    const Events = {
      CLICK: 'click',
      SHOWN_BS_MODAL: 'shown.bs.modal',
      SUBMIT: 'submit'
    };

    const DataKeys = {
      EVENT: 'event',
      FC_VIEW: 'fc-view'
    };

    const eventList = events.reduce(
      (acc, val) =>
        val.schedules ? acc.concat(val.schedules.concat(val)) : acc.concat(val),
      []
    );

    // Capitaliza la primera letra respetando acentos
    const capitalizeEs = s => s ? s.charAt(0).toUpperCase() + s.slice(1) : s;

    // Fecha actual en español
    const setCurrentDate = () => {
      const dateObj = new Date();
      const month = dateObj.toLocaleString('es-MX', { month: 'short' });
      const date = dateObj.getDate();
      const dayName = dateObj.toLocaleString('es-MX', { weekday: 'long' });
      const year = dateObj.getFullYear();
      const newdate = `${date} ${month}, ${year}`;
      if (document.querySelector(Selectors.CALENDAR_DAY)) {
        document.querySelector(Selectors.CALENDAR_DAY).textContent = capitalizeEs(dayName);
      }
      if (document.querySelector(Selectors.CALENDAR_DATE)) {
        document.querySelector(Selectors.CALENDAR_DATE).textContent = capitalizeEs(newdate);
      }
    };
    setCurrentDate();

    const updateTitle = currentData => {
      const { currentViewType } = currentData;
      if (currentViewType === 'timeGridWeek') {
        const weekStartsDate = currentData.dateProfile.currentRange.start;
        const weekEndDate = currentData.dateProfile.currentRange.end;
        const startingMonth = weekStartsDate.toLocaleString('es-MX', { month: 'short' });
        const startingDate = weekStartsDate.getDate();
        const endingMonth = weekEndDate.toLocaleString('es-MX', { month: 'short' });
        const endingDate = weekEndDate.getDate();
        document.querySelector(Selectors.CALENDAR_TITLE).textContent =
          `${capitalizeEs(startingMonth)} ${startingDate} - ${capitalizeEs(endingMonth)} ${endingDate}`;
      } else {
        document.querySelector(Selectors.CALENDAR_TITLE).textContent =
          capitalizeEs(currentData.viewTitle);
      }
    };

    const appCalendar = document.querySelector(Selectors.CALENDAR);
    const addEventForm = document.querySelector(Selectors.ADD_EVENT_FORM);
    const addEventModal = document.querySelector(Selectors.ADD_EVENT_MODAL);
    const eventDetailsModal = document.querySelector(
      Selectors.EVENT_DETAILS_MODAL
    );

    const subjectToFeather = (s = '') => {
      const t = s.toLowerCase();
      if (t.includes('corte')) return 'dollar-sign';
      if (t.includes('restock')) return 'refresh-ccw';
      if (t.includes('recolec')) return 'archive';
      if (t.includes('publicación')) return 'edit';
      if (t.includes('pago') || t.includes('renta')) return 'credit-card';
      return 'calendar'; // por defecto
    };

    if (appCalendar) {
      const calendar = fullCalendar.renderCalendar(appCalendar, {
        headerToolbar: false,
        dayMaxEvents: 4,
        // height: 800,
        stickyHeaderDates: false,
        views: {
          week: {
            eventLimit: 3
          }
        },
        eventTimeFormat: {
          hour: '2-digit',
          minute: '2-digit',
          hour12: false // 24h en ES
        },
        events: eventList,
        eventContent: arg => {
          const time = arg.timeText;                  // “10:00” si tiene hora
          const title = arg.event.title || '';
          const { subject } = arg.event.extendedProps || {};
          const { location } = arg.event.extendedProps || {};
          const iconName = subjectToFeather(subject || location || title);

          return {
            html: `
            <div class="nmz-event">
              <div class="nmz-line">
              <p class="mb-0 fw-semibold"> ${title}</p>
                ${time ? `<span class="fs-10">${time}</span> - <span class="calendar-location">${location}</span>` : ''}
              </div>
              ${subject ? `<span class="badge badge-phoenix small badge-phoenix-primary p-1"><i data-feather="${iconName}" class="me-1" style="height: 12px; width: 12px;"></i>${subject}</span>` : ''}
            </div>
          `
          };
        },
        eventDidMount: info => {
          if (window.feather) {
            // reemplaza SOLO si aún no es un SVG
            const needs = info.el.querySelectorAll('i[data-feather]');
            if (needs.length) window.feather.replace({ width: 14, height: 14 });
          }
        },
        dayHeaderFormat: { weekday: 'short' }, // sigue usando abreviaturas
        dayHeaderContent: args => {
          const txt = args.text; // p.ej. "lun"
          return { html: capitalizeEs(txt) }; // "Lun"
        },
        eventClick: info => {
          if (info.event.url) {
            window.open(info.event.url, '_blank');
            info.jsEvent.preventDefault();
          } else {
            const template = getTemplate(info.event);
            const container = document.querySelector(Selectors.EVENT_DETAILS_MODAL_CONTENT);
            container.innerHTML = template;

            // 👇 convierte los <i data-feather="..."> recién inyectados
            if (window.feather) {
              window.feather.replace({ width: 16, height: 16 });
            }

            const modal = new window.bootstrap.Modal(eventDetailsModal);
            modal.show();
          }
          setTimeout(function () {
            body.on("#eventDetailsModal").find(".loading-shape").remove();
          }, 1000);
        },
        dateClick(info) {
          const modal = new window.bootstrap.Modal(addEventModal);
          modal.show();

          const inputEl = document.querySelector(Selectors.EVENT_START_DATE);
          if (!inputEl) return;

          const onlyDate = window.dayjs
            ? window.dayjs(info.date).format('DD-MM-YYYY')
            : info.dateStr.split('T')[0];

          const fp = inputEl._flatpickr;
          if (fp) fp.setDate(onlyDate, true);
          else inputEl.value = onlyDate;
        }
      });

      updateTitle(calendar.currentData);

      document.addEventListener('click', e => {
        // Prev / Next / Today
        if (
          e.target.hasAttribute(Selectors.DATA_EVENT) ||
          e.target.parentNode.hasAttribute(Selectors.DATA_EVENT)
        ) {
          const el = e.target.hasAttribute(Selectors.DATA_EVENT)
            ? e.target
            : e.target.parentNode;
          const type = getData(el, DataKeys.EVENT);
          switch (type) {
            case 'prev':
              calendar.prev();
              updateTitle(calendar.currentData);
              break;
            case 'next':
              calendar.next();
              updateTitle(calendar.currentData);
              break;
            case 'today':
              calendar.today();
              updateTitle(calendar.currentData);
              break;
            default:
              calendar.today();
              updateTitle(calendar.currentData);
              break;
          }
        }

        // Cambio de vista
        if (e.target.hasAttribute('data-fc-view')) {
          const el = e.target;
          calendar.changeView(getData(el, DataKeys.FC_VIEW));
          updateTitle(calendar.currentData);
          document
            .querySelectorAll(Selectors.DATA_CALENDAR_VIEW)
            .forEach(item => {
              if (item === e.target) {
                item.classList.add('active-view');
              } else {
                item.classList.remove('active-view');
              }
            });
        }
      });

      if (addEventForm) {
        addEventForm.addEventListener(Events.SUBMIT, e => {
          e.preventDefault();
          const { title, startDate, endDate, label, description, allDay, subject } =
            e.target;
          calendar.addEvent({
            title: title.value,
            start: startDate.value,
            end: endDate.value ? endDate.value : null,
            allDay: allDay.checked,
            className: `text-${label.value}`,
            description: description.value,
            subject: subject.value
          });
          e.target.reset();
          window.bootstrap.Modal.getInstance(addEventModal).hide();
        });
      }

      // if (addEventModal) {
      //   addEventModal.addEventListener(
      //     Events.SHOWN_BS_MODAL,
      //     ({ currentTarget }) => {
      //       currentTarget.querySelector(Selectors.INPUT_TITLE)?.focus();
      //     }
      //   );
      // }
    }
  };

  const { docReady } = window.phoenix.utils;

  docReady(appCalendarInit);

}));
//# sourceMappingURL=calendar.js.map
