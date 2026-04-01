const editor = new EditorJS({
   holder: 'editorjs',
   i18n: {
      messages: {
         ui: {
            "blockTunes": {
               "toggler": {
                  "Click to tune": "Click para ajustar",
                  "or drag to move": "o arrastre para mover"
               },
            },
            "inlineToolbar": {
               "converter": {
                  "Convert to": "Convertir a"
               }
            },
            "toolbar": {
               "toolbox": {
                  "Add": "Agregar"
               }
            },
            "popover": {
               "Filter": "Buscar en",
               "Nothing found": "No se ha encontrado nada"
            },
            "settings": "Configuración",
            "confirm": "Confirmar",
            "cancel": "Cancelar"
         },
         toolNames: {
            "Text": "Texto",
            "Heading": "Encabezado",
            "List": "Lista",
            "Warning": "Advertencia",
            "Quote": "Cita",
            "Code": "Código",
            "Delimiter": "Separador",
            "Raw HTML": "HTML",
            "Table": "Tabla",
            "Link": "Enlace",
            "Marker": "Marcador",
            "Bold": "Negritas",
            "Italic": "Cursiva",
            "Image": "Imagen",
            "Embed": "Multimedia"
         },
         tools: {
            "warning": {
               "Title": "Título",
               "Message": "Mensaje"
            },
            "link": {
               "Add a link": "Agregar un enlace"
            },
            "stub": {
               "The block can not be displayed": "El bloque no se puede mostrar"
            },
            "image": {
               "Caption": "Subtítulo",
               "Select an Image": "Selecciona una imagen",
               "With border": "Con borde",
               "Stretch image": "Expandir imagen",
               "With background": "Con fondo"
            },
            "embed": {
               "Enter a link": "Ingresa un enlace",
               "Paste a link to embed": "Pega un enlace para insertar",
               "Wrong format": "Formato incorrecto"
            },
            "list": {
               "Ordered": "Lista ordenada",
               "Unordered": "Lista sin orden"
            },
         },
         blockTunes: {
            "delete": {
               "Delete": "Eliminar"
            },
            "moveUp": {
               "Move up": "Subir"
            },
            "moveDown": {
               "Move down": "Bajar"
            }
         }
      }
   },
   tools: {
      header: {
         class: Header,
         inlineToolbar: true,
         config: {
            levels: [1, 2, 3, 4],
            defaultLevel: 2
         }
      },
      paragraph: {
         class: Paragraph,
         inlineToolbar: true
      },
      marker: {
         class: Marker,
         shortcut: 'CMD+SHIFT+M'
      },
      list: {
         class: EditorjsList,
         inlineToolbar: true,
         toolbox: [
            {
               title: 'Lista ordenada',
               data: {
                  style: 'ordered',
               }
            },
            {
               title: 'Lista no ordenada',
               data: {
                  style: 'unordered',
               }
            }
         ]
      },
      image: {
         class: ImageTool,
         config: {
            endpoints: {
               byFile: 'upload.php', // simulado o real
               byUrl: 'https://dummy-endpoint.com/fetchUrl' // puedes dejarlo así si no lo usas
            }
         }
      },
      table: {
         class: Table,
         inlineToolbar: true
      },
      quote: {
         class: Quote,
         inlineToolbar: true,
         config: {
            quotePlaceholder: 'Escribe una cita...',
            captionPlaceholder: 'Autor de la cita...'
         }
      },
      link: {
         class: LinkTool,
         inlineToolbar: true,
         config: {
            placeholder: 'Escribe el enlace...'
         }
      },
      embed: {
         class: Embed,
         inlineToolbar: true,
         config: {
            services: {
               youtube: true,
               twitter: true,
               instagram: true,
            }
         }
      },
   },
   data: {
      blocks: [
         {
            type: "paragraph",
            data: {
               text: "Este reglamento tiene como objetivo establecer normas claras para la sana convivencia y el buen funcionamiento del espacio colectivo."
            }
         },
         {
            type: "header",
            data: {
               text: "1. Respeto y convivencia",
               level: 3
            }
         },
         {
            type: "paragraph",
            data: {
               text: "Todos los miembros deberán tratarse con respeto, evitando cualquier tipo de discriminación, acoso o comportamiento inapropiado dentro del espacio."
            }
         },
         {
            type: "header",
            data: {
               text: "2. Uso responsable del espacio",
               level: 3
            }
         },
         {
            type: "paragraph",
            data: {
               text: "Cada miembro es responsable de mantener su área de trabajo limpia y de respetar los espacios comunes, dejándolos en buenas condiciones después de usarlos."
            }
         },
         {
            type: "header",
            data: {
               text: "3. Horarios y acceso",
               level: 3
            }
         },
         {
            type: "paragraph",
            data: {
               text: "El espacio estará disponible para los miembros de lunes a viernes de 9:00 a.m. a 8:00 p.m. Fuera de ese horario no se permitirá el acceso sin autorización previa."
            }
         },
         {
            type: "header",
            data: {
               text: "4. Promoción y colaboración",
               level: 3
            }
         },
         {
            type: "paragraph",
            data: {
               text: "Se alienta a todos los miembros a colaborar en actividades de difusión y eventos que promuevan el crecimiento del colectivo."
            }
         },
         {
            type: "header",
            data: {
               text: "5. Incumplimientos",
               level: 3
            }
         },
         {
            type: "paragraph",
            data: {
               text: "El incumplimiento de este reglamento podrá derivar en sanciones que van desde una advertencia hasta la suspensión definitiva del espacio, dependiendo de la gravedad de la falta."
            }
         }
      ]
   }

});