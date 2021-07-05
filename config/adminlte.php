<?php
return [

    /*
    |--------------------------------------------------------------------------
    | Title/Titulo
    |--------------------------------------------------------------------------
    |
    |¿como funciona? esto para resumir
    |
    */
    /*Remplaza por completo la etiqueta title de head*/
    'title' => '25 watt',
    /*
     | Le agrega un prefijo como "adminlte |" seguido por lo que pongas vos en tu vista.
     | pero como agregas un titulo en tu vista con @section('title', ' lo que le sigue al prefijo')
     | pero el @section() va en la vista
    */
    'title_prefix' => '',
    /*Le agrega un subfijo como " | adminlte" predecedido por lo que pongas vos en tu vista.*/
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    |pondremos poner en linea nuestro favico, pero tiene que estar un carpeta
    |llamada favicons con el archivo "favicon.ico" todo dentro en la carpeta public
    |
    |
    */
    //esta opcion pone nuestro favicon no pueden estar las dos opciones en true
    'use_ico_only' => true,
    //esta opcion pone el favicon segun la pantalla / dispositivo
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    |datos con respecto a tu proyecto y su logo
    |
    */
    //nombre que el proyecto aparecera debajo o al lado del logo
    'logo' => '<b>25</b> watts',
    //ubicación del logo
    'logo_img' => 'images/logo.png',
    //clases de bootstraps 4 para el logo
    'logo_img_class' => null,
    //version mas chica del logo
    'logo_img_xl' => null,
    //clase al llega a una pantalla xs
    'logo_img_xl_class' => null,
    //nombre que tendra la imagen del logo
    'logo_img_alt' => null,

    /*
    |--------------------------------------------------------------------------
    | User Menu/ Menu de Usuario
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | El menu de usuario es un pequeño panel que se despliega
    | en la esquina superior derecha con el nombre del usuario
    |
    */
    //verdadero= hay panel de usuario | falso= boton para cerrar sesion
    'usermenu_enabled' => true,
    //habilita un espacion donde pondremos los datos del usuario
    'usermenu_header' => true,
    //color del fondo del espacio con los datos de usuario segun la clase de bootstraps
    'usermenu_header_class' => 'bg-dark text-white',
    //si tiene imagen de usuario para esta función, deberá agregar una función adicional nombrada adminlte_image()
    //dentro del Usermodelo, generalmente ubicada en el app/User.
    //phparchivo. El tamaño de imagen recomendado es: 160x160px .
    'usermenu_image' => true,
    //Si habilitar la descripción de usuario para el menú de usuario.
    //Importante: para esta función, deberá agregar una función adicional nombrada adminlte_desc()
    //dentro del Usermodelo, generalmente ubicada en el app/User.phparchivo.
    'usermenu_desc' => true,
    //Si habilitar si la URL del perfil de usuario se puede establecer dinámicamente para el usuario
    // en lugar de usar la opción de configuración profile_url.
    //Importante: para esta función, debe agregar una función adicional nombrada adminlte_profile_url()
    //dentro del Usermodelo. El valor de retorno debe ser una cadena, no una ruta o URL.
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    |esta area se encarga
    |
    */
    //al poner en true esta opcion el siderbar  y su contenido es posicionado en el navbar
    'layout_topnav' => null,
    //le da todo el contenido un ancho maximo 1250
    'layout_boxed' => null,
    //siderbar pasa a estar fixeado
    'layout_fixed_sidebar' => null,
    //navbar pasa a estar fixeado
    'layout_fixed_navbar' => null,
    //footer pasa a estar fixeado
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    */
    //clases para el card de las vistas auth
    'classes_auth_card' => 'card shadow bg-dark border-0',
    //clases para los encabezados
    'classes_auth_header' => 'bg-dark text-white text-center border-0',
    //clases del cuerpo
    'classes_auth_body' => 'bg-dark border-0',
    //class del footer
    'classes_auth_footer' => 'text-center border-0 text-white bg-dark',
    //Clases adicionales para los íconos de entrada (íconos impresionantes de fuentes relacionados con los campos de entrada).
    'classes_auth_icon' => 'text-light border-0 ',
    //Clases adicionales para los botones de envío.
    'classes_auth_btn' => 'btn-flat btn-secondary outline-light',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |Puede cambiar la apariencia y el comportamiento del panel de administración,
    |puede agregar clases adicionales al cuerpo, marca, barra lateral,
    |navegación de barra lateral, navegación superior y contenedor de navegación superior.
    |
    |
    */
    //Clases extra para el cuerpo
    'classes_body' => '',

    //Clases extra para la marca. Las clases se agregarán al elemento
    // a.navbar-brand si layout_topnav se usa, de lo contrario,
    // se agregarán al elemento a.brand-link.
    'classes_brand' => '',

    //Clases extra para el texto de la marca.
    // Las clases se agregarán al elemento span.brand-text
    'classes_brand_text' => '',

    //Clases para el contenedor de encabezado de contenido. Las clases se agregarán al contenedor del
    // elemento div.content-header. Si lo dejó vacío, se container usará una clase predeterminada cuando layout_topnavse
    // use; de lo contrario container-fluid, se usará como predeterminada.
    'classes_content_wrapper' => '',

    //Clases para contenedor contenedor de contenido.
    // Las clases se agregarán al contenedor del elemento div.content-wrapper.
    'classes_content_header' => 'text-center user-select-none shadow-lg p-3 mb-5',

    //Clases para el contenedor de contenido. Las clases se agregarán al contenedor del elemento div.content.
    // Si lo dejó vacío, se container usará una clase predeterminada cuando se use layout_topnav;
    // de lo contrario container-fluid, se usará como predeterminada.
    'classes_content' => '',

    //Clases adicionales para la barra lateral. Las clases se agregarán al elemento aside.main-sidebar.
    // Hay algunas clases integradas que puede usar aquí para personalizar el tema de la barra lateral:
    //¿Dónde <color>hay un color disponible de AdminLTE ? https://adminlte.io/themes/v3/pages/UI/general.html
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',

    //Clases adicionales para la navegación de la barra lateral.
    // Las clases se agregarán al elemento ul.nav.nav-pills.nav-sidebar.
    // Hay algunas clases integradas que puede usar aquí:
    //
    //nav-child-indent para sangrar los elementos secundarios.
    //nav-compact para obtener un estilo de navegación compacto.
    //nav-flat para obtener un estilo de navegación plano.
    //nav-legacy para obtener un estilo de navegación v2 heredado.
    'classes_sidebar_nav' => 'nav-flat',

    //Clases adicionales para la barra de navegación superior.
    // Las clases se agregarán al elemento nav.main-header.navbar.
    // Hay algunas clases integradas que puede usar aquí para personalizar el tema topnav:
    //
    //navbar-<color>
    'classes_topnav' => 'navbar-dark navbar-light',

    //Clases extra para la navegación superior. Las clases se agregarán al elemento nav.main-header.navbar.
    // Cuando se habilita, layout_topnavla recomendación es usar navbar-expand-md
    // para que los elementos se contraigan automáticamente en un botón de menú en tamaños de pantalla bajos.
    // De lo contrario, quédese con la clase navbar-expand.
    'classes_topnav_nav' => 'navbar-expand',

    //Clases adicionales para el contenedor de la barra de navegación superior.
    // Las clases se agregarán al  elemento div contenedor interno nav.main-header.navbar
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    |
    |Puede modificar la barra lateral, por ejemplo, puede deshabilitar la mini barra lateral contraída,
    |comenzar con una barra lateral contraída, habilitar el colapso automático de la barra lateral en un
    |tamaño de pantalla específico, habilitar la opción de recordar el colapso de la barra lateral,
    |cambiar el tema de la barra de desplazamiento o la opción de ocultar automáticamente,
    |deshabilitar la navegación de la barra lateral acordeón y
    |cambie la velocidad de animación del elemento del menú de navegación de la barra lateral
    */

    //Habilita / deshabilita la mini barra lateral contraída para el escritorio y pantallas más grandes (> = 992px),
    // puede configurar esta opción en true, falseo 'md'
    //habilitarla para tabletas pequeñas y pantallas más grandes (> = 768px).
    'sidebar_mini' => true,

    //Activa / desactiva el modo contraído de forma predeterminada.
    'sidebar_collapse' => true,

    //Habilita / deshabilita el colapso automático estableciendo un ancho mínimo para colapsar automáticamente.
    'sidebar_collapse_auto_size' => false,

    //Habilita / deshabilita la secuencia de comandos para recordar y contraer.
    'sidebar_collapse_remember' => false,

    //Habilita / deshabilita la transición después de volver a cargar la página.
    'sidebar_collapse_remember_no_transition' => true,

    //Cambia el tema de la barra de desplazamiento de la barra lateral.
    'sidebar_scrollbar_theme' => 'os-theme-dark',

    //Cambia el activador de ocultación automática de la barra de desplazamiento de la barra lateral.
    'sidebar_scrollbar_auto_hide' => 'l',

    //Activa / desactiva la función de acordeón de navegación de la barra lateral.
    'sidebar_nav_accordion' => true,

    //Cambia la velocidad de animación de la diapositiva de la barra lateral.
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    |
    |Aquí tienes la opción de habilitar una barra lateral derecha. Cuando está activo, puede utilizar
    |la @section('right-sidebar') sección para configurar su contenido.
    |El icono que configure se mostrará al final del menú superior y mostrará / ocultará la barra lateral.
    |La opción de diapositiva deslizará la barra lateral sobre el contenido,
    |mientras falseque empujará el contenido sin animación.
    |También puede elegir el tema de la barra lateral (oscuro o claro).
    */
    //Activa / desactiva la barra lateral derecha.    'right_sidebar' => true,

    //Cambia el icono del botón alternador de la barra lateral derecha en la navegación superior
    'right_sidebar_icon' => 'fas fa-cogs',
    //Cambia el tema de la barra lateral derecha, las siguientes opciones están disponibles: dark& light.
    'right_sidebar_theme' => 'dark',
    //Activa / desactiva la animación de diapositivas.
    'right_sidebar_slide' => false,
    //Habilita / deshabilita la inserción de contenido en lugar de superposición para la barra lateral derecha
    'right_sidebar_push' => true,
    //Cambia el tema de la barra de desplazamiento de la barra lateral. El valor predeterminado es os-theme-light.
    'right_sidebar_scrollbar_theme' => 'os-theme-dark',
    //Cambia el activador de ocultación automática de la barra de desplazamiento de la barra lateral.
    // El valor predeterminado es l.
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | Las siguientes opciones de configuración proporcionan una forma de configurar las URL para el inicio de sesión,
    | el registro y otros enlaces del panel de administración.
    | Puede cambiar su panel de control, cerrar sesión, iniciar sesión y registrar URL.
    |
    */

    //Ya sea para usar en route()lugar del url()método Laravel para generar las URL.
    'use_route_url' => false,
    //Cambia la URL del panel / logotipo. Esta URL se utilizará, por ejemplo,
    // cuando haga clic en el logotipo superior izquierdo.
    'dashboard_url' => 'home',
    //Cambia la URL del botón de cierre de sesión. Esta URL se utilizará cuando haga clic en el botón Cerrar sesión.
    'logout_url' => 'logout',
    //Cambia la URL de inicio de sesión. Esta URL se utilizará cuando haga clic en el botón de inicio de sesión.
    'login_url' => 'login',
    //Cambia la URL de registro.
    // Configure esta opción para false ocultar el enlace de registro que se muestra en la vista de inicio de sesión.
    'register_url' => false,
    //Cambia la URL de restablecimiento de contraseña. Esta URL debe apuntar a la vista que muestra el
    // formulario de restablecimiento de contraseña. Configure esta opción para false ocultar el enlace
    // de restablecimiento de contraseña que se muestra en la vista de inicio de sesión.
    'password_reset_url' => 'password/reset',
    //Cambia la URL de correo electrónico de la contraseña.
    // Esta URL debe apuntar a la vista que muestra el formulario de enlace de restablecimiento de envío.
    'password_email_url' => 'password/email',
    //Cambia la URL del perfil de usuario. Cuando no false, mostrará un botón en el menú de usuario.
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    |https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        [
            'text' => 'search',
            'search' => false,
            'topnav' => true,
        ],

        ['header' => 'Administración',],
        //        [
        //            'text' => 'profile',
        //            'url'  => 'admin/settings',
        //            'icon' => 'fas fa-fw fa-bars',
        //            'can' =>'permiso'
        //        ],
        //        [
        //            'text' => 'change_password',
        //            'url'  => 'admin/settings',
        //            'icon' => 'fas fa-fw fa-lock',
        //        ],

        [

        ]


    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css',
                ],
//                [
//                    'type' => 'js',
//                    'asset' => false,
//                    'location' => 'https://code.jquery.com/jquery-3.5.1.js',
//                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => 'https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.full.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'icheck-bootstrap' => [
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => true,
                    'location' => 'https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    */

    'livewire' => false,
];
