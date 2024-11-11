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
                "imagen" => "assets/img/home/mineria_home.webp",
                "icon" => "<BsRecycle size={24} />",
                "tittle" => "Minería & Gestión Social",
                "link" => "#",
            ],
            [
                "id" => "due_diligence",
                "imagen" => "assets/img/home/inteligencia_home.webp",
                "icon" => "<BsGraphUpArrow size={24} />",
                "tittle" => "Due Diligence",
                "link" => "#",
            ],
            [
                "id" => "tecnologia",
                "imagen" => "assets/img/home/incubadora_home.webp",
                "icon" => "<BsSun size={24} />",
                "tittle" => "Digital information",
                "link" => "#",
            ]
        ];


        $cliens = [
            [
                'nombre' => 'NTT data',
                'imagen' => 'assets/img/clients/NTT_DATA.webp',
                'imagenResponsive' => 'assets/img/clients/NTT_DATA.webp'
            ],
            [
                'nombre' => 'Founderz',
                'imagen' => 'assets/img/clients/Founderz.webp',
                'imagenResponsive' => 'assets/img/clients/Founderz.webp'
            ],
            [
                'nombre' => 'Minsur',
                'imagen' => 'assets/img/clients/MINSUR.webp',
                'imagenResponsive' => 'assets/img/clients/MINSUR.webp'
            ],
            [
                'nombre' => 'Minera Raura',
                'imagen' => 'assets/img/clients/MINERIA_RAURA.webp',
                'imagenResponsive' => 'assets/img/clients/MINERIA_RAURA.webp'
            ],
            [
                'nombre' => 'Insuco – Yanacocha',
                'imagen' => 'assets/img/clients/Insuco.webp',
                'imagenResponsive' => 'assets/img/clients/Insuco.webp'
            ],
            [
                'nombre' => 'Mar Co. Ltd. - Yamae Group Holding Japan – Japan',
                'imagen' => 'assets/img/clients/Mar_Co._Ltd.webp',
                'imagenResponsive' => 'assets/img/clients/Mar_Co._Ltd.webp'
            ],
            [
                'nombre' => 'Reybanpac – Ecuador',
                'imagen' => 'assets/img/clients/REYBANPAC.webp',
                'imagenResponsive' => 'assets/img/clients/REYBANPAC.webp'
            ],

            [
                'nombre' => 'Pesquera Reymar – Chile',
                'imagen' => 'assets/img/clients/PESQUEDA_REYMAR.webp',
                'imagenResponsive' => 'assets/img/clients/PESQUEDA_REYMAR.webp'
            ],

        ];




        return view('welcome', compact('cards', 'pageTitle', 'cliens'));
    }
    public function industria()
    {
        $pageTitle = "Llyrod | Nuestros Trabajos";

        $cardsMineria = [
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico1.webp",
                        "alt" => "Diagnostico 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico2.webp",
                        "alt" => "Diagnostico 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico3.webp",
                        "alt" => "Diagnostico 3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/DiagnósticoPotencialRaura/diagnostico4.webp",
                        "alt" => "Diagnostico 4"
                    ]
                ],
                "tittle" => "Diagnóstico Socioeconómico y Diseño del Portafolio de Inversión Social",
                "texto" =>
                "El diseño y puesta en marcha del diagnóstico realizado, tuvo una cobertura de 43,616 hectáreas y 1,536 habitantes distribuidos en tres regiones del Perú. Incluyó un análisis socioeconómico, evaluación de actividades productivas, condiciones endémicas y oportunidades comerciales sobre las que se diseñaron proyectos alineados con dichas potencialidades, optimizando el impacto de las inversiones sociales en estas comunidades.",
                "fondo" => "assets/industrial/mineria/DiagnósticoPotencialRaura/fondo.webp"
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria1.webp",
                        "alt" => "Plan de prevencion 1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria2.webp",
                        "alt" => "Plan de prevencion 2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/PlanPrevencion/mineria3.webp",
                        "alt" => "Plan de prevencion 3"
                    ]
                ],
                "tittle" => 'Plan de prevención de fenómeno de "El Niño" ',
                "texto" =>
                "Ante una posible afectación del aparato productivo de los sectores, dada por la probabilidad de ocurrencia del fenómeno de El Niño en el 2023, se analizó la base de datos climatológica y modeló los posibles escenarios a enfrentar. Este estudio tomo en cuenta condiciones propias de cada sector así como información de las principales instancias gubernamentales generadoras de estudios relativos a estos fenómenos climatológicos. Usamos lo último en tecnología para que el usuario acceda a esta información con absoluta facilidad.",
                "fondo" => "assets/industrial/mineria/PlanPrevencion/fondo.webp"
            ],
            [
                "imagenes" => [
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion1.webp",
                        "alt" => "capacitacion1"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion2.webp",
                        "alt" => "capacitacion2"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion3.webp",
                        "alt" => "capacitacion3"
                    ],
                    [
                        "imagen" => "assets/industrial/mineria/CapacitacionGanadera/capacitacion4.webp",
                        "alt" => "capacitacion4"
                    ]
                ],
                "tittle" => "Fortalecimiento y capacidad agropecuarias",
                "texto" =>
                "Impulsamos el desarrollo técnico agropecuario mediante nuevas tecnologías educativas, promoviendo prácticas que mejoran la eficiencia, cuidan los recursos naturales y aseguran la sostenibilidad. Metodologías adaptadas a las diferentes realidades que conforman cada región es el diferenciador de nuestra propuesta. Acceso a la línea base y resultados a través de las plataformas desarrolladas por nuestros profesionales.",
                "fondo" => "assets/industrial/mineria/CapacitacionGanadera/fondo.webp"
            ],
        ];
         //! arreglar las imagenes y los textos
        $cardsBi = [
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital1.webp",
                    "alt" => "Programas de Aprendizaje para empresas"

                ],
                "tittle" => "Programas de Aprendizaje para empresas",
            ],
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital2.webp",
                    "alt" => "Entrenamiento para Data Engineers jr"

                ],
                "tittle" => 'Entrenamiento para Data Engineers Jr ',
            ],
            [
                "imagenes" => [

                    "imagen" => "assets/industrial/tranformacionDigital/tranformacionDigital3.webp",
                    "alt" => "Outsourcing especializado"

                ],
                "tittle" => "Outsourcing especializado",

            ],
        ];

        $cardsTecnologia = [
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia1.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoreo y análisis de datos de almacenes en Japón.",
                "texto" =>
                "Experiencia de aprendizaje inmersiva y de alto impacto, que proporciona las habilidades y conceptos esenciales en un corto período e impulsa el desarrollo personal y profesional.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia2.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoreo y análisis de datos de una planta empacadora en Ecuador",
                "texto" =>
                "Desarrollamos diagnósticos de potenciales productivas y articulación comercial en zonas de influencia minera, derivando en el análisis de la viabilidad de cadenas.",
            ],
            [
                "imagenes" => [
                    "imagen" => "assets/industrial/inteligenciaNegocios/inteligencia3.webp",
                    "alt" => "transformacion1"
                ],
                "tittle" => "Monitoring and Data Analytics from Seafood Plants in Chile",
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
