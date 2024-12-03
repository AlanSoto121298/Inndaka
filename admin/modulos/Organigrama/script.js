$(function () {
    var data = {
        'name': 'Jonathan Solis',
        'title': 'Dirección General',
        'image': 'personal/john.png',
        "phrase": "Director General de la compañía",
        'children': [
            {
                'name': 'Vacante',
                'title': 'Coordinación General',
                'image': 'personal/vacante.png',
                "phrase": "No tiene Frase",
                'children': [
                    {
                        'name': 'Departamento 1',
                        'title': 'Dpto Operaciones',
                        'isDepartment': true,
                        'children': [
                            {
                                'name': 'Jorge Luis Toledo',
                                'title': 'Coord. Operaciones.',
                                'image': 'personal/jorge.png',
                                "phrase": "No tiene frase",
                                'children': [
                                    {
                                        'name': 'Vacante',
                                        'title': 'Coord Mtto.',
                                        'image': 'personal/vacante.png',
                                        "phrase": "No tiene frase",
                                        'children': [
                                            {
                                                'name': 'Mariana Tapia',
                                                'title': 'Mtto. Central',
                                                'image': 'personal/mariana.png',
                                                "phrase": "La mentira gana partidas pero la verdad gana el juego",
                                                'children': [
                                                    { 'name': 'Daniel Patiño', 'title': 'Auxiliar  Mtto. Central', 'image': 'personal/dani.png', 'phrase':'Trabajamos con pasión' }
                                                ]
                                            },
                                            { 'name': 'Francisco Cisneros', 'title': 'Logistica Mtto.', 'image': 'personal/fran.png','phrase':'La clave para el exito de la organización es el mantenimiento' }
                                        ]
                                    },
                                    {
                                        'name': 'Vacante',
                                        'title': 'Operaciones',
                                        'image': 'personal/vacante.png',
                                        "phrase": "No tiene frase",
                                        'children': [
                                            {
                                                
                                                'name': 'Fernanda Pantoja',
                                                'title': 'Seg. Proyectos',
                                                'image': 'personal/fernanda.png',
                                                "phrase": "La logística que suma",
                                                'children': [{
                                                    'name': 'Departamento 8',
                                                    'title': 'Proyectos',
                                                    'isDepartment': true,
                                                    'children': [{

                                                        'name': 'Departamento 9',
                                                        'title': 'Dos bocas',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Giusep Quiroz',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/giu.png',
                                                                "phrase": "Dos Bocas",
                                                                'children': [
                                                                    {
                                                                        'name': 'Falconi',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/erick.png',
                                                                        "phrase": "Dos Bocas",
                                                                        'children': [
                                                                            {
                                                                                'name': 'Departamento 30',
                                                                                'title': '16 equipos',
                                                                                'isDepartment': true
                                                                            }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]

                                                    },
                                                    {
                                                        'name': 'Departamento 10',
                                                        'title': 'Minatitlan',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Juan Carlos Contreras',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/juanca.png',
                                                                "phrase": "Minatitlan",
                                                                'children': [
                                                                    {
                                                                        'name': 'Yamileth Sabino',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/yami.png',
                                                                        "phrase": "Minatitlan",
                                                                        'children': [
                                                                            {
                                                                                'name': 'Departamento 30',
                                                                                'title': '27 equipos',
                                                                                'isDepartment': true
                                                                            }

                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'name': 'Departamento 11',
                                                        'title': 'F.6.',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Asael Gavia',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/asael.png',
                                                                "phrase": "Escárcega",
                                                                'children': [
                                                                    {
                                                                        'name': 'Raúl Tierrablanca',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/raul.png',
                                                                        "phrase": "Escarcega",
                                                                        'children': [
                                                                            {
                                                                                'name': 'Departamento 30',
                                                                                'title': '8 equipos',
                                                                                'isDepartment': true
                                                                            }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'name': 'Departamento 12',
                                                        'title': 'F.1.',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Damian Acosta',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/damian.png',
                                                                "phrase": "Chetumal",
                                                                'children': [
                                                                    {
                                                                        'name': 'Vacante',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/vacante.png',
                                                                        'children': [
                                                                            {
                                                                                'name': 'Departamento 30',
                                                                                'title': '8 equipos',
                                                                                'isDepartment': true
                                                                            }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'name': 'Departamento 13',
                                                        'title': 'Cadereyta',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Edgar Ortiz',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/vacante.png',
                                                                "phrase": "Cadereyta",
                                                                'children': [
                                                                    {
                                                                        'name': 'Daniel', 'title':
                                                                            ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/vacante.png',
                                                                        "phrase": "Cadereyta",
                                                                        'children': [
                                                                            {
                                                                                'name': 'Departamento 30',
                                                                                'title': '12 equipos',
                                                                                'isDepartment': true
                                                                            }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    {
                                                        'name': 'Departamento 14',
                                                        'title': 'Coatzacoalcos',
                                                        'isDepartment': true,
                                                        'children': [
                                                            {
                                                                'name': 'Miguel Madrigal',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/vacante.png',
                                                                "phrase": "Coatzacoalcos",
                                                                'children': [
                                                                    {
                                                                        'name': 'Departamento 30',
                                                                        'title': '1 equipo',
                                                                        'isDepartment': true
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                    ]
                                                }

                                                ]
                                                
                                            },
                                            {
                                                'name': 'Lizbeth Acosta',
                                                'title': 'Aux Admin Log.',
                                                'image': 'personal/lizbeth.png',
                                                "phrase": "Haz que las cosas imposibles sucedan",
                                                'children': []  
                                            }
                                        ]
                                    },
                                    { 'name': 'Vacante', 'title': 
                                        'Coord. Transportes', 
                                        'image': 'personal/vacante.png',
                                        'children':[
                                            {'name': 'Victor Obregon', 'title': 'Auxiliar de patio', 'image': 'personal/obreonvic.png','phrase':'No tiene frase'}
                                        ] }
                                ]
                            }
                        ]
                    },
                    {
                        'name': 'Departamento 2',
                        'title': 'Dpto Ing. e Izajes',
                        'isDepartment': true,
                        'children': [
                            { 'name': 'Raul Tierrablanca', 'title': 'Ing. e Izaje', 'image': 'personal/raul.png','phrase':'El unico modo de hacer un gran trabajo es amando lo que haces' },
                            { 'name': 'Salvador Solis', 'title': 'Ing. e Izaje', 'image': 'personal/chava.png','phrase':'La disciplina es el puente entre tus metas y tus logros' },
                            { 'name': 'Javier Rocha', 'title': 'Ing. e Izaje', 'image': 'personal/javier.png','phrase':'Proyectando las ideas y los anhelos' }
                        ]
                    },
                    {
                        'name': 'Departamento 3',
                        'title': 'Dpto Comercial',
                        'isDepartment': true,
                        'children': [
                            {
                                'name': 'Vacante',
                                'title': 'Coord Comercial',
                                'image': 'personal/vacante.png',
                                "phrase": "No tiene frase",
                                'children': [
                                    {'name': 'Margarita Moreno','title': 'Soporte comercial','image': 'personal/margarita.png','phrase':'El éxito comercial empieza con una sonrisa y una solución'},
                                    {    
                                        'name': 'Isaac Solis',
                                        'title': 'Relaciones publicas',
                                        'image': 'personal/isaac.png',
                                        "phrase": "Quien no entiende a las personas, no entiende de negocios",
                                        'children': [
                                            { 'name': 'Martin Rodriguez', 'title': 'Soporte Admin', 'image': 'personal/martin.png','phrase':'En medio de cada dificultad  hay una oportunidad' },
                                            { 'name': 'Julian Gaytan', 'title': 'Aux Admon', 'image': 'personal/julian.png','phrase':'Precio es lo que pagas, valor es lo que obtienes' }
                                           
                                        ]
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        'name': 'Departamento 4',
                        'title': 'Dpto Finanzas',
                        'isDepartment': true,
                        'children': [
                            {
                                'name': 'Ximena Gutierrez',
                                'title': 'Gerente Finanzas',
                                'image': 'personal/xime.png',
                                "phrase": "Cada peso cuenta",
                                'children': [
                                    { 'name': 'Fernanda Amor', 'title': 'Contratoría', 'image': 'personal/fer.png','phrase':'Enfocada en la supervisión y el control financiero' },
                                    {
                                        'name': 'Ivonne Luna',
                                        'title': 'Coord Finanzas',
                                        'image': 'personal/ivonne.png',
                                        "phrase": "Planearlo para lograrlo",
                                        'children': [
                                            { 'name': 'Perla Barrones', 'title': 'Tesorería', 'image': 'personal/perla.png','phrase':'Enfocada en la gestión y la liquidez' },
                                            { 'name': 'Diana Ojeda', 'title': 'Tesorería', 'image': 'personal/diana.png' ,'phrase':'Ninguno de nosotros es tan bueno, como todos nosotros juntos'},
                                            { 'name': 'Victor Alvarado', 
                                                'title': 'Contabilidad',
                                                 'image': 'personal/vic.png',
                                                 "phrase": "La contabilidad es el lenguaje universal de los negocios",
                                                  'children':[
                                                    { 'name': 'Dulce Maria', 'title': 'Aux. Contable', 'image': 'personal/dulce.png','phrase':'La clave de la productividad es el orden' }
                                                  ]
                                                 },
                                            { 'name': 'Juan Tovar', 'title': 'Área Legal', 'image': 'personal/vacante.png','phrase':'Enfocado en la ética y responsabilidad' }
                                        ]
                                    },
                                    {
                                        'name': 'Vacante',
                                        'title': 'Gerente compras',
                                        'image': 'personal/vacante.png',
                                        "phrase": "No tiene frase",
                                        'children': [
                                            {
                                                'name': 'Julio Hernández',
                                                'title': 'Coord. Sistemas',
                                                'image': 'personal/julio.png',
                                                "phrase": "El SW es un gran arte, siempre puede ser mejorado",
                                                'children': [
                                                    { 'name': 'Adrian Gallegos', 'title': 'Sistemas', 'image': 'personal/adrian.png','phrase':'El gran motor del cambio es la tecnología' },
                                                    { 'name': 'Alan Soto', 'title': 'Sistemas', 'image': 'personal/alan.png','phrase':'Si lo puedes imaginar lo puedes programar' }
                                                ]
                                            },
                                           
                                            { 'name': 'Miguel Gallardo', 
                                                'title': 'Compras por pagar', 
                                                'image': 'personal/mike.png',
                                                'phrase':'Encargado de la transformación a través de la compra',
                                                'children':[
                                                    { 'name': 'Denis Soto', 
                                                        'title': 'Compras central', 'image': 'personal/denni.png',
                                                        'phrase':'Todo se puede comprar',
                                                    'children':[
                                                        { 'name': 'José Elizarrarás', 'title': 'Almacén', 'image': 'personal/jose.png','phrase':'Prestamos de herramienta y felicidad' },
                                                    { 'name': 'Antelmo Aguilar', 'title': 'Almacén', 'image': 'personal/antelmo.png','phrase':'Enfocado en la organización y eficiencia' },
                                                    { 'name': 'Ramon Calderon', 'title': 'Comprador', 'image': 'personal/ramon.png','phrase':'Enfocado en la precisión  y el cumplimiento' },
                                                    { 'name': 'Christian Soto', 'title': 'Comprador', 'image': 'personal/chrissoto.png','phrase':'Enfocado en la calidad y la relación con los proveedores' }

                                                    ] }
                                                ] }
                                        ]
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        'name': 'Departamento 5',
                        'title': 'Seguridad',
                        'isDepartment': true,
                        'children': [
                            { 'name': 'Vacante', 'title': 'Seguridad', 'image': 'personal/vacante.png','phrase':'No tiene frase' }
                        ]
                    },
                    {
                        'name': 'Departamento 6',
                        'title': 'Meditación',
                        'isDepartment': true,
                        'children': [
                            { 'name': 'Estefany Solis', 'title': 'Meditación', 'image': 'personal/estefi.png','phrase':'El secreto está en ponerle amor a todo lo que haces' }
                        ]
                    },
                    {
                        'name': 'Departamento 7',
                        'title': 'Dpto RRHH',
                        'isDepartment': true,
                        'children': [
                            {
                                'name': 'Lorena Blancarte',
                                'title': 'Coord. RRHH',
                                'image': 'personal/lorena.png',
                                "phrase": "Trascendiendo equipos",
                                'children': [
                                    {
                                        'name': 'Martha Caballero',
                                        'title': 'Gestora RRHH',
                                        'image': 'personal/martha.png',
                                        "phrase": "La pasión por el trabajo es lo que nos hace grandes",
                                        'children': [
                                            {
                                                'name': 'Nohemí Medina',
                                                'title': 'Jefa de reclutamiento',
                                                'image': 'personal/nohemi.png',
                                                "phrase": "El talento gana partidos, pero el trabajo en equipo y la inteligencia ganan campeonatos",
                                                'children': [
                                                    {
                                                        'name': 'Vacante',
                                                        'title': 'Jefa de reclutamiento',
                                                        'image': 'personal/vacante.png',
                                                        "phrase": "No tiene frase",
                                                        'children': [
                                                            {
                                                                'name': 'Departamento 4',
                                                                'title': 'Proyectos',
                                                                'isDepartment': true,
                                                                'children': [
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Dos Bocas',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Juliana', 'title': 'RRHH', 'image': 'personal/july.png','phrase':'Dos bocas' }
                                                                        ]

                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Minatitlán',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Alejandra', 'title': 'RRHH', 'image': 'personal/MinaAle.png','phrase':'Minatitlan' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'F6',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png','phrase':'Chetumal' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'F1',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png','phrase':'Escarcega' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Cadereyta',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png','phrase':'Cadereyta' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Coatzacoalcos',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png','phrase':'Coatzacoalcos' }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                ]
                                            },

                                           
                                            { 'name': 'José Candido', 'title': 'Vigilancia', 'image': 'personal/candido.png','phrase':'Sin frase' },
                                            { 'name': 'Rosarlio', 'title': 'Vigilancia', 'image': 'personal/rosalio.png','phrase':'Sin frase' },
                                            { 'name': 'Luis', 'title': 'Vigilancia', 'image': 'personal/vacante.png','phrase':'Sin frase' },
                                            {
                                                'name': 'Patricia Pérez',
                                                'title': 'Nutrición',
                                                'image': 'personal/paty.png',
                                                "phrase": "Comer bien es invertir en salud para toda la vida",
                                                'children': [
                                                    { 'name': 'Antonia Cárdenas', 'title': 'Nutrición', 'image': 'personal/toñita.png','phrase':'Cocina' },
                                                    { 'name': 'Teresa Rodrigues', 'title': 'Nutrición', 'image': 'personal/teresa.png','phrase':'Cocina' },
                                                    { 'name': 'Erika Puente', 'title': 'Nutrición', 'image': 'personal/erika.png','phrase':'Cocina' }

                                                ]
                                            },
                                            { 'name': 'Vacante', 'title': 'Practicante RRHH', 'image': 'personal/vacante.png','phrase':'Practicante' },
                                            { 'name': 'Vacante', 'title': 'Practicante RRHH', 'image': 'personal/vacante.png','phrase':'Practicante' }
                                        ]
                                    }
                                ]
                            }

                        ]
                    },
                ]
            }
        ]
    };

    $('#chart-container').orgchart({
        'data': data,
        'depth': 3,
        'nodeTemplate': function (data) {
            if (data.isDepartment) {
                return `<div class="orgchart-node">
                            <div class="orgchart-node-department-title">${data.title}</div>
                        </div>`;
            } else {
                return `<div class="orgchart-node">
                            <img src="${data.image}" alt="${data.name}">
                            <div class="orgchart-node-info">
                                <div class="orgchart-node-name">${data.name}</div>
                                <div class="orgchart-node-title">${data.title}</div>
                            </div>
                        </div>`;
            }
        },
        'createNode': function ($node, data) {
            if (data.children && data.children.length > 0) {
                $node.append('<i class="orgchart-node-down"></i>');
            }

            // Añadir el manejador de clics al nodo
            $node.on('click', function () {
                // Rellenar el modal con la información del nodo
                $('#modal-image').attr('src', data.image || 'default-image.png');
                $('#modal-name').text(data.name || 'Nombre no disponible');
                $('#modal-title').text(data.title || 'Título no disponible');
                $('#modal-phrase').text(data.phrase || 'Descripción no disponible'); // Añadir la descripción

                // Mostrar el modal
                $('#myModal').show();
            });
        },
        'pan': true, // Permite arrastrar para navegar
        'zoom': true, // Permite hacer zoom con la rueda del ratón
        'zoominLimit': 7,
        'zoomoutLimit': 0.5
    });

    // Cerrar el modal
    $('.close').on('click', function () {
        $('#myModal').hide();
    });

    // Cerrar el modal cuando se hace clic fuera del contenido del modal
    $(window).on('click', function (event) {
        if ($(event.target).is('#myModal')) {
            $('#myModal').hide();
        }
    });
});
