<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    //
    public function index()
    {
        $pageTitle = "Llyrod | Home";
        $cards = [
            [
                "id" => "mineria",
                "imagen" => "assets/img/home/mineria_home.png ",
                "icon" => "<BsRecycle size={24} />",
                "tittle" => "Minería & Gestión Social",
                "link" => "#",
            ],
            [
                "id" => "due_diligence",
                "imagen" => "assets/img/home/inteligencia_home.png",
                "icon" => "<BsGraphUpArrow size={24} />",
                "tittle" => "Due Diligence",
                "link" => "#",
            ],
            [
                "id" => "tecnologia",
                "imagen" => "assets/img/home/incubadora_home.png",
                "icon" => "<BsSun size={24} />",
                "tittle" => "Digital information",
                "link" => "#",
            ]
        ];


        $cliens = [
            [
                'nombre' => 'NTT data',
                'imagen' => 'assets/img/clients/NTT_DATA.png',
                'imagenResponsive' => 'assets/img/clients/NTT_DATA_logo.png'
            ],
            [
                'nombre' => 'Minsur',
                'imagen' => 'assets/img/clients/MINSUR.png',
                'imagenResponsive' => 'assets/img/clients/MINSUR_logo.png'
            ],
            [
                'nombre' => 'Minera Raura',
                'imagen' => 'assets/img/clients/MINERIA_RAURA_logo.png',
                'imagenResponsive' => 'assets/img/clients/MINERIA_RAURA.png'
            ],
            [
                'nombre' => 'Insuco – Yanacocha',
                'imagen' => 'assets/img/clients/minsur.png',
                'imagenResponsive' => 'assets/img/clients/minsur.png'
            ],
            [
                'nombre' => 'Mar Co. Ltd. - Yamae Group Holding Japan – Japan',
                'imagen' => 'assets/img/clients/Mar_Co._Ltd.png',
                'imagenResponsive' => 'assets/img/clients/Mar_Co._Ltd.png'
            ],
            [
                'nombre' => 'Reybanpac – Ecuador',
                'imagen' => 'assets/img/clients/REYBANPAC.png',
                'imagenResponsive' => 'assets/img/clients/REYBANPAC.png'
            ],
            [
                'nombre' => 'Favorita',
                'imagen' => 'assets/img/clients/FAVORITA.png',
                'imagenResponsive' => 'assets/img/clients/FAVORITA.png'
            ],
            [
                'nombre' => 'Pesquera Reymar – Chile',
                'imagen' => 'assets/img/clients/PESQUEDA_REYMAR.png',
                'imagenResponsive' => 'assets/img/clients/PESQUEDA_REYMAR.png'
            ],

        ];




        return view('welcome', compact('cards', 'pageTitle','cliens'));
    }
    public function industria()
    {
        $pageTitle = "Llyrod | Nuestros Trabajos";
        $cardsMineria = [
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/mineria1.png",
                        "alt" => "Mineria1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria2.png",
                        "alt" => "Mineria2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria3.png",
                        "alt" => "Mineria3"
                    ]
                ],
                "tittle" => "Diagnóstico de potencialidades productivas  –  Raura",
                "texto" =>
                "El diagnóstico abarcó 43,616 hectáreas, con 1,536 habitantes distribuidos en 3 regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, pecuarias y agrícolas, condiciones de las tierras, fuentes de agua, entre otros. Además, se formuló proyectos acorde a sus potencialidades.",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/mineria4.png",
                        "alt" => "Mineria4"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria5.png",
                        "alt" => "Mineria5"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria6.png",
                        "alt" => "Mineria6"
                    ]
                ],
                "tittle" => 'PLAN DE PREVENCIÓN DE FENÓMENO DE "EL NIÑO" ',
                "texto" =>
                "Ante una posible afectación del aparato productivo de los sectores, dada por la probabilidad de ocurrencia del fenómeno de El Niño en el 2023, se analizó la base de datos climatológica y modeló los posibles escenarios a enfrentar",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion1.jpg",
                        "alt" => "capacitacion1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion2.jpg",
                        "alt" => "capacitacion2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion3.jpg",
                        "alt" => "capacitacion3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion4.jpg",
                        "alt" => "capacitacion4"
                    ]
                ],
                "tittle" => "Capacitacion ganadera y promocion de productos ganadero",
                "texto" =>
                "El cobre, uno de los metales más fundamentales necesarios en la transición energética, está adquido",
            ],
        ];

        $cardsBi = [
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/mineria1.png",
                        "alt" => "Mineria1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria2.png",
                        "alt" => "Mineria2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria3.png",
                        "alt" => "Mineria3"
                    ]
                ],
                "tittle" => "Diagnóstico de potencialidades productivas  –  Raura",
                "texto" =>
                "El diagnóstico abarcó 43,616 hectáreas, con 1,536 habitantes distribuidos en 3 regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, pecuarias y agrícolas, condiciones de las tierras, fuentes de agua, entre otros. Además, se formuló proyectos acorde a sus potencialidades.",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/mineria4.png",
                        "alt" => "Mineria4"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria5.png",
                        "alt" => "Mineria5"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/mineria6.png",
                        "alt" => "Mineria6"
                    ]
                ],
                "tittle" => 'PLAN DE PREVENCIÓN DE FENÓMENO DE "EL NIÑO" ',
                "texto" =>
                "Ante una posible afectación del aparato productivo de los sectores, dada por la probabilidad de ocurrencia del fenómeno de El Niño en el 2023, se analizó la base de datos climatológica y modeló los posibles escenarios a enfrentar",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion1.jpg",
                        "alt" => "capacitacion1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion2.jpg",
                        "alt" => "capacitacion2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion3.jpg",
                        "alt" => "capacitacion3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/capacitacion4.jpg",
                        "alt" => "capacitacion4"
                    ]
                ],
                "tittle" => "Capacitacion ganadera y promocion de productos ganadero",
                "texto" =>
                "El cobre, uno de los metales más fundamentales necesarios en la transición energética, está adquido",
            ],
        ];

        $cardsTecnologia = [
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/tranformacionDigital/transformacion1.jpg",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Programas Intensivos de Aprendizaje",
                "texto" =>
                "Experiencia de aprendizaje inmersiva y de alto impacto, que proporciona las habilidades y conceptos esenciales en un corto período e impulsa el desarrollo personal y profesional.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/tranformacionDigital/transformacion1.jpg",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Entrenamiento para Data Engineers jr.",
                "texto" =>
                "Desarrollamos diagnósticos de potenciales productivas y articulación comercial en zonas de influencia minera, derivando en el análisis de la viabilidad de cadenas.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/tranformacionDigital/transformacion1.jpg",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Outsourcing especializado",
                "texto" =>
                "Confía en Grupo Llyrod para obtener soluciones de outsourcing especializado. Nuestro enfoque se centra en brindarte servicios personalizados que optimizan tus operaciones y te permiten concentrarte en lo que realmente importa.",
            ],

        ];



        return view('industrias', compact('cardsMineria', 'cardsTecnologia', 'cardsBi', 'pageTitle'));
    }
    public function contact()
    {
        $pageTitle = "Llyrod | Contacto";

        return view('contact', compact('pageTitle'));
    }
}
