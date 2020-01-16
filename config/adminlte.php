<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'AdminLTE 2',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Hire Me</b>',

    'logo_mini' => '<b>Hire Me</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | light variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we have the option to enable a right sidebar.
    | When active, you can use @section('right-sidebar')
    | The icon you configured will be displayed at the end of the top menu,
    | and will show/hide de sidebar.
    | The slide option will slide the sidebar over the content, while false
    | will push the content, and have no animation.
    | You can also choose the sidebar theme (dark or light).
    | The right Sidebar can only be used if layout is not top-nav.
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs.
    | This was automatically set on install, only change if you really need.
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and a URL. You can also specify an icon from Font
    | Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    */

    'menu' => [
        // [
        //     'text' => 'search',
        //     'search' => true,
        // ],
        //['header' => 'main_navigation'],
        // [
        //     'text'        => 'pages',
        //     'url'         => 'admin/pages',
        //     'icon'        => 'far fa-file',
        //     'label'       => 4,
        //     'label_color' => 'success',
        // ],
        // ['header' => 'account_settings'],
        [
            'text' => 'All Users',
            'url'  => '/users/profile',
            'icon' => 'fas fa-fw fa-user',
        ],
        // ***** TUTION START ***** //
        [
            'text'    => 'Tution',
            'url'     => '#',
            'icon' => 'fas fa-book-reader',
            'submenu' => [
                [
                    'text' => 'Class 1-5',
                    'url'  => '/user/posts/1_5',
                ],
                [
                    'text' => 'Class 6-8',
                    'url'  => '/user/posts/6_8',
                ],
                [
                    'text' => 'Class 9-10',
                    'url'  => '/user/posts/9_10',
                ],
                [
                    'text'    => 'Class 11-12',
                    'url'     => '/user/posts/11_12',
                ],
            ],
        ],
        // ***** TUTION END ***** //

        // ***** VEHICALS START ***** //

        [
            'text'    => 'Vehicals',
            'url'     => '#',
            'icon' => 'fas fa-shuttle-van',
            'submenu' => [
                [
                    'text' => 'Ambulance',
                    'url'  => '/user/posts/ambulance',
                ],
                [
                    'text' => 'Cars',
                    'url'  => '/user/posts/cars',
                ],
                [
                    'text' => 'Bikes',
                    'url'  => '/user/posts/bike',
                ],
                [
                    'text' => 'Pickup',
                    'url'  => '/user/posts/pickup',
                ],
                [
                    'text' => 'Truck',
                    'url'  => '/user/posts/track',
                ],
            ],
        ],
        // ***** VEHICALS END ***** //

        // ***** Domestic START ***** //

        [
            'text'    => 'Domestic',
            'url'     => '#',
            'icon' => 'fas fa-people-carry',
            'submenu' => [
                [
                    'text' => 'Carpenter',
                    'url'  => '/user/posts/carpenter',
                ],
                [
                    'text' => 'Cooker',
                    'url'  => '/user/posts/cooker',
                ],
                [
                    'text' => 'Electrician',
                    'url'  => '/user/posts/electrician',
                ],
                [
                    'text' => 'Gasrepairer',
                    'url'  => '/user/posts/gasrepairer',
                ],
                [
                    'text' => 'Locksmith',
                    'url'  => '/user/posts/locksmith',
                ],
                [
                    'text' => 'Maid',
                    'url'  => '/user/posts/maid',
                ],
                [
                    'text' => 'Plumber',
                    'url'  => '/user/posts/plumber',
                ],
            ],
        ],
        // ***** Domestic END ***** //

        // ***** Electronics START ***** //

        [
            'text'    => 'Electronics',
            'url'     => '#',
            'icon' => 'fas fa-plug',
            'submenu' => [
                [
                    'text' => 'Air-Conditioner',
                    'url'  => '/user/posts/airconditioner',
                ],
                [
                    'text' => 'Computer',
                    'url'  => '/user/posts/computer',
                ],
                [
                    'text' => 'Fridge',
                    'url'  => '/user/posts/fridge',
                ],
                [
                    'text' => 'Mobile',
                    'url'  => '/user/posts/mobile',
                ],
                [
                    'text' => 'Television',
                    'url'  => '/user/posts/television',
                ],
                [
                    'text' => 'Oven',
                    'url'  => '/user/posts/oven',
                ],
            ],
        ],
        // ***** Electronics END ***** //

        // ***** Experts START ***** //

        [
            'text'    => 'Experts',
            'url'     => '#',
            'icon' => 'fas fa-id-badge',
            'submenu' => [
                [
                    'text' => 'Architect',
                    'url'  => '/user/posts/architect',
                ],
                [
                    'text' => 'Beautician',
                    'url'  => '/user/posts/beautician',
                ],
                [
                    'text' => 'Developer',
                    'url'  => '/user/posts/developer',
                ],
                [
                    'text' => 'Doctor',
                    'url'  => '/user/posts/doctor',
                ],
                [
                    'text' => 'Driver',
                    'url'  => '/user/posts/driver',
                ],
                [
                    'text' => 'Decorator',
                    'url'  => '/user/posts/decorator',
                ],
                [
                    'text' => 'Lawyer',
                    'url'  => '/user/posts/lawyer',
                ],
                [
                    'text' => 'Photographer',
                    'url'  => '/user/posts/photographer',
                ],
            ],
        ],
        // ***** Experts END ***** //

        // ***** Helpers START ***** //

        [
            'text'    => 'Helpers',
            'url'     => '#',
            'icon' => 'fas fa-hands-helping',
            'submenu' => [
                [
                    'text' => 'Bazarman',
                    'url'  => '/user/posts/bazarman',
                ],
                [
                    'text' => 'Cobler',
                    'url'  => '/user/posts/cobler',
                ],
                [
                    'text' => 'Dancer',
                    'url'  => '/user/posts/dancer',
                ],
                [
                    'text' => 'Daylabour',
                    'url'  => '/user/posts/daylabour',
                ],
                [
                    'text' => 'Vhanktiman',
                    'url'  => '/user/posts/vhanktiman',
                ],
                [
                    'text' => 'Others',
                    'url'  => '/user/posts/others',
                ],
            ],
        ],
        // ***** Heloers END ***** //


        // ['header' => 'labels'],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Configure which JavaScript plugins should be included. At this moment,
    | DataTables, Select2, Chartjs and SweetAlert are added out-of-the-box,
    | including the Javascript and CSS files from a CDN via script and link tag.
    | Plugin Name, active status and files array (even empty) are required.
    | Files, when added, need to have type (js or css), asset (true or false) and location (string).
    | When asset is set to true, the location will be output using asset() function.
    |
    */

    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => true,
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
];
