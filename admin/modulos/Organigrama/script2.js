$(function () {
    var data = {
        'name': 'Jonathan Solis',
        'title': 'Dirección General',
        'image': 'personal/john.png',
        'children': [
            {
                'name': 'Karla Aguilar',
                'title': 'Coordinación General',
                'image': 'personal/karla.png',
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
                                'children': [
                                    {
                                        'name': 'Rick',
                                        'title': 'Coord Mtto.',
                                        'image': 'personal/rick.jpg',
                                        'children': [
                                            {
                                                'name': 'Mariana Tapia',
                                                'title': 'Mtto. Central',
                                                'image': 'personal/mariana.png',
                                                'children': [
                                                    { 'name': 'Daniel Patiño', 'title': 'Auxiliar  Mtto. Central', 'image': 'personal/dani.png' }
                                                ]
                                            },
                                            { 'name': 'Francisco Cisneros', 'title': 'Logistica Mtto.', 'image': 'personal/fran.png' }
                                        ]
                                    },
                                    {
                                        'name': 'Christian Garcia',
                                        'title': 'Operaciones',
                                        'image': 'personal/chris.png',
                                        'children': [
                                            {
                                                
                                                'name': 'Fernanda Pantoja',
                                                'title': 'Seg. Proyectos',
                                                'image': 'personal/fernanda.png',
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
                                                                'children': [
                                                                    {
                                                                        'name': 'Falconi',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/erick.png',
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
                                                                'children': [
                                                                    {
                                                                        'name': 'Yamileth Sabino',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/yami.png',
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
                                                                'name': 'Vacante',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/vacante.png',
                                                                'children': [
                                                                    {
                                                                        'name': 'Raúl Tierrablanca',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/raul.png',
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
                                                                'name': 'Asael Gavia',
                                                                'title': 'Lider de proyecto.',
                                                                'image': 'personal/asael.png',
                                                                'children': [
                                                                    {
                                                                        'name': 'Damián Acosta',
                                                                        'title': ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/damian.png',
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
                                                                'image': 'personal/juanca.png',
                                                                'children': [
                                                                    {
                                                                        'name': 'Daniel', 'title':
                                                                            ' Aux. Lider de proyecto.',
                                                                        'image': 'personal/damian.png',
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
                                                                'image': 'personal/juanca.png',
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
                                                'children': []  
                                            }
                                        ]
                                    },
                                    { 'name': 'Vacante', 'title': 
                                        'Coord. Transportes', 
                                        'image': 'personal/vacante.png',
                                        'children':[
                                            {'name': 'Vacante', 'title': 'Patio', 'image': 'personal/vacante.png'}
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
                            { 'name': 'Raul Tierrablanca', 'title': 'Ing. e Izaje', 'image': 'personal/raul.png' },
                            { 'name': 'Salvador Solis', 'title': 'Ing. e Izaje', 'image': 'personal/chava.png' },
                            { 'name': 'Javier Rocha', 'title': 'Ing. e Izaje', 'image': 'personal/javier.png' }
                        ]
                    },
                    {
                        'name': 'Departamento 3',
                        'title': 'Dpto Comercial',
                        'isDepartment': true,
                        'children': [
                            {
                                'name': 'Vacante',
                                'title': 'Gte Comercial',
                                'image': 'personal/vacante.png',
                                'children': [
                                    {
                                        'name': 'Vacante',
                                        'title': 'Coord Comercial',
                                        'image': 'personal/vacante.png',
                                        'children': [
                                            { 'name': 'Martin Rodriguez', 'title': 'Ventas', 'image': 'personal/martin.png' },
                                            { 'name': 'Vacante', 'title': 'Aux Admon', 'image': 'personal/vacante.png' }
                                            , { 'name': 'Julian Gaytan', 'title': 'Licitaciones', 'image': 'personal/julian.png' }
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
                                'children': [
                                    { 'name': 'Fernanda Amor', 'title': 'Contratoría', 'image': 'personal/fer.png' },
                                    {
                                        'name': 'Ivonne Luna',
                                        'title': 'Coord Finanzas',
                                        'image': 'personal/ivonne.png',
                                        'children': [
                                            { 'name': 'Perla Barrones', 'title': 'Tesorería', 'image': 'personal/perla.png' },
                                            { 'name': 'Diana Ojeda', 'title': 'Tesorería', 'image': 'personal/diana.png' },
                                            { 'name': 'Victor Alvarado', 
                                                'title': 'Contabilidad',
                                                 'image': 'personal/vic.png',
                                                  'children':[
                                                    { 'name': 'Dulce Maria', 'title': 'Aux. Contable', 'image': 'personal/dulce.png' }
                                                  ]
                                                 },
                                            { 'name': 'Juan Tovar', 'title': 'Área Legal', 'image': 'personal/doors.jpg' }
                                        ]
                                    },
                                    {
                                        'name': 'Vacante',
                                        'title': 'Gerente compras',
                                        'image': 'personal/vacante.png',
                                        'children': [
                                            {
                                                'name': 'Julio Hernández',
                                                'title': 'Coord. Sistemas',
                                                'image': 'personal/julio.png',
                                                'children': [
                                                    { 'name': 'Adrian Gallegos', 'title': 'Sistemas', 'image': 'personal/adrian.png' },
                                                    { 'name': 'Alan Soto', 'title': 'Sistemas', 'image': 'personal/alan.png' }
                                                ]
                                            },
                                            {
                                                'name': 'Denis Soto',
                                                'title': 'Compras central',
                                                'image': 'personal/denni.png',
                                                'children': [
                                                    { 'name': 'José Elizarrarás', 'title': 'Almacén', 'image': 'personal/jose.png' },
                                                    { 'name': 'Antelmo Aguilar', 'title': 'Almacén', 'image': 'personal/antelmo.png' },
                                                    { 'name': 'Ramon Calderon', 'title': 'Comprador', 'image': 'personal/ramon.png' },
                                                    { 'name': 'Christian Soto', 'title': 'Comprador', 'image': 'personal/chrissoto.png' }
                                                ]
                                            },
                                            { 'name': 'Miguel Gallardo', 'title': 'Compras por pagar', 'image': 'personal/mike.png' }
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
                            { 'name': 'Vacante', 'title': 'Seguridad', 'image': 'personal/vacante.png' }
                        ]
                    },
                    {
                        'name': 'Departamento 6',
                        'title': 'Meditación',
                        'isDepartment': true,
                        'children': [
                            { 'name': 'Estefany Solis', 'title': 'Meditación', 'image': 'personal/estefi.png' }
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
                                'children': [
                                    {
                                        'name': 'Martha Caballero',
                                        'title': 'Gestora RRHH',
                                        'image': 'personal/martha.png',
                                        'children': [
                                            {
                                                'name': 'Nohemí Medina',
                                                'title': 'Jefa de reclutamiento',
                                                'image': 'personal/nohemi.png',
                                                'children': [
                                                    {
                                                        'name': 'Vacante',
                                                        'title': 'Jefa de reclutamiento',
                                                        'image': 'personal/chava.png',
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
                                                                            { 'name': 'Juliana', 'title': 'RRHH', 'image': 'personal/july.png' }
                                                                        ]

                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Minatitlán',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Alejandra', 'title': 'RRHH', 'image': 'personal/ale.png' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'F6',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'F1',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Cadereyta',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png' }
                                                                        ]
                                                                    },
                                                                    {
                                                                        'name': 'Departamento 4',
                                                                        'title': 'Coatzacoalcos',
                                                                        'isDepartment': true,
                                                                        'children': [
                                                                            { 'name': 'Vacante', 'title': 'RRHH', 'image': 'personal/vacante.png' }
                                                                        ]
                                                                    }
                                                                ]
                                                            }
                                                        ]
                                                    },
                                                ]
                                            },

                                           
                                            { 'name': 'José Candido', 'title': 'Vigilancia', 'image': 'personal/chava.png' },
                                            { 'name': 'Rosarlio', 'title': 'Vigilancia', 'image': 'personal/chava.png' },
                                            { 'name': 'Luis', 'title': 'Vigilancia', 'image': 'personal/chava.png' },
                                            {
                                                'name': 'Patricia Pérez',
                                                'title': 'Nutrición',
                                                'image': 'personal/paty.png',
                                                'children': [
                                                    { 'name': 'Antonia Cárdenas', 'title': 'Nutrición', 'image': 'personal/toñita.png' },
                                                    { 'name': 'Teresa Rodrigues', 'title': 'Nutrición', 'image': 'personal/teresa.png' },
                                                    { 'name': 'Erika Puente', 'title': 'Nutrición', 'image': 'personal/erika.png' }

                                                ]
                                            },
                                            { 'name': 'Vacante', 'title': 'Practicante RRHH', 'image': 'personal/vacante.png' },
                                            { 'name': 'Vacante', 'title': 'Practicante RRHH', 'image': 'personal/vacante.png' }
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
        },
        'pan': true, // Permite arrastrar para navegar
        'zoom': true, // Permite hacer zoom con la rueda del ratón
        'zoominLimit': 7,
        'zoomoutLimit': 0.5
    });
});
