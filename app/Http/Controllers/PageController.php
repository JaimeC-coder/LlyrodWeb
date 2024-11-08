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
                "imagen" => "assets/img/home/mineria_home.png",
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
                'imagenResponsive' => 'assets/img/clients/NTT_DATA.png'
            ],
            [
                'nombre' => 'Founderz',
                'imagen' => 'assets/img/clients/Founderz.png',
                'imagenResponsive' => 'assets/img/clients/Founderz.png'
            ],
            [
                'nombre' => 'Minsur',
                'imagen' => 'assets/img/clients/MINSUR.png',
                'imagenResponsive' => 'assets/img/clients/MINSUR.png'
            ],
            [
                'nombre' => 'Minera Raura',
                'imagen' => 'assets/img/clients/MINERIA_RAURA.png',
                'imagenResponsive' => 'assets/img/clients/MINERIA_RAURA.png'
            ],
            [
                'nombre' => 'Insuco – Yanacocha',
                'imagen' => 'assets/img/clients/Insuco.png',
                'imagenResponsive' => 'assets/img/clients/Insuco.png'
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
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico1.jpg",
                        "alt" => "Diagnostico 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico2.jpg",
                        "alt" => "Diagnostico 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico3.jpg",
                        "alt" => "Diagnostico 3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico4.jpg",
                        "alt" => "Diagnostico 4"
                    ]
                ],
                "tittle" => "Diagnóstico de potencialidades productivas  –  Raura",
                "texto" =>
                "El diagnóstico abarcó 43,616 hectáreas, con 1,536 habitantes distribuidos en 3 regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, pecuarias y agrícolas, condiciones de las tierras, fuentes de agua, entre otros. Además, se formuló proyectos acorde a sus potencialidades.",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria1.png",
                        "alt" => "Plan de prevencion 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria2.png",
                        "alt" => "Plan de prevencion 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria3.png",
                        "alt" => "Plan de prevencion 3"
                    ]
                ],
                "tittle" => 'PLAN DE PREVENCIÓN DE FENÓMENO DE "EL NIÑO" ',
                "texto" =>
                "Ante una posible afectación del aparato productivo de los sectores, dada por la probabilidad de ocurrencia del fenómeno de El Niño en el 2023, se analizó la base de datos climatológica y modeló los posibles escenarios a enfrentar",
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion1.jpg",
                        "alt" => "capacitacion1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion2.jpg",
                        "alt" => "capacitacion2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion3.jpg",
                        "alt" => "capacitacion3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion4.jpg",
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

                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico1.jpg",
                        "alt" => "Programas Intensivos de Aprendizaje"

                ],
                "tittle" => "Programas Intensivos de Aprendizaje",
                "texto" =>
                "El diagnóstico abarcó 43,616 hectáreas, con 1,536 habitantes distribuidos en 3 regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, pecuarias y agrícolas, condiciones de las tierras, fuentes de agua, entre otros. Además, se formuló proyectos acorde a sus potencialidades.",
            ],
            [
                "imagenes" => [

                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria3.png",
                        "alt" => "Entrenamiento para Data Engineers jr"

                ],
                "tittle" => 'Entrenamiento para Data Engineers jr" ',
                "texto" =>
                "Ante una posible afectación del aparato productivo de los sectores, dada por la probabilidad de ocurrencia del fenómeno de El Niño en el 2023, se analizó la base de datos climatológica y modeló los posibles escenarios a enfrentar",
            ],
            [
                "imagenes" => [

                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion3.jpg",
                        "alt" => "Outsourcing especializado"

                ],
                "tittle" => "Outsourcing especializado",
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
                "tittle" => "Programa de desarollo Japon",
                "texto" =>
                "Experiencia de aprendizaje inmersiva y de alto impacto, que proporciona las habilidades y conceptos esenciales en un corto período e impulsa el desarrollo personal y profesional.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/tranformacionDigital/transformacion2.jpg",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Programa de calidad para la industria frutícola",
                "texto" =>
                "Desarrollamos diagnósticos de potenciales productivas y articulación comercial en zonas de influencia minera, derivando en el análisis de la viabilidad de cadenas.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/tranformacionDigital/transformacion3.jpg",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Programa de calidad para la industria pesquera",
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
