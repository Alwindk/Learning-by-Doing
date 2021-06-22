<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Models\UserModel;

class PagesController
{
    private $menu;

    public function __construct()
    {
        $this->getMenu();
    }

    public function index()
    {
        return View::render('site/home.view', [
            'menu' => $this->menu,
            'active' => '/',
        ]);
    }

    public function wiezijnwij()
    {
        return View::render('site/wie-zijn-wij.view', [
            'menu' => $this->menu,
            'active' => 'wie-zijn-wij',
        ]);
    }

    public function werkwijze()
    {
        return View::render('site/werkwijze.view', [
            'menu' => $this->menu,
            'active' => 'werkwijze',
        ]);
    }

    public function klantervaringen()
    {
        return View::render('site/klantervaringen.view', [
            'menu' => $this->menu,
            'active' => 'klantervaringen',
        ]);
    }

    public function contact()
    {
        return View::render('site/contact.view', [
            'menu' => $this->menu,
            'active' => 'contact',
        ]);
    }

    public function onlinetrainingsacteren()
    {
        return View::render('site/online-trainingsacteren.view', [
            'menu' => $this->menu,
        ]);
    }

    public function jannekerenkema()
    {
        return View::render('site/janneke-renkema.view', [
            'menu' => $this->menu,
            'active' => '',
        ]);
    }

    public function luciennescholten()
    {
        return View::render('site/lucienne-scholten.view', [
            'menu' => $this->menu,
        ]);
    }

    public function rollenspel()
    {
        return View::render('site/subpages/rollenspel.view', [
            'menu' => $this->menu,
            'active' => 'oefengesprekken',
        ]);
    }

    public function coaching()
    {
        return View::render('site/subpages/coaching.view', [
            'menu' => $this->menu,
            'active' => 'oefengesprekken',
        ]);
    }

    public function presentatie()
    {
        return View::render('site/subpages/presentatie.view', [
            'menu' => $this->menu,
            'active' => 'oefengesprekken',
        ]);
    }

    public function sollicitatie()
    {
        return View::render('site/subpages/sollicitatie.view', [
            'menu' => $this->menu,
            'active' => 'oefengesprekken',
        ]);
    }

    public function lastigegesprekken()
    {
        return View::render('site/subpages/lastige-gesprekken.view', [
            'menu' => $this->menu,
            'active' => 'oefengesprekken',
        ]);
    }

    private function getMenu()
    {
        $this->menu =
            [
                [
                    'url'  => '/',
                    'name' => 'home',
                ],

                [
                    'url'   => 'werkwijze',
                    'name'  => 'werkwijze'
                ],

                [
                    'url'     => 'oefengesprek',
                    'name'    => 'oefengesprekken',
                    'submenu' => [
                        [
                            'url' => 'rollenspel',
                            'name' => 'oefen je rollenspel',
                        ],

                        [
                            'url' => 'sollicitatie',
                            'name' => 'oefen je sollicitatie',
                        ],

                        [
                            'url' => 'presentatie',
                            'name' => 'oefen je presentatie',
                        ],

                        [
                            'url' => 'coaching',
                            'name' => 'oefen je coaching',
                        ],

                        [
                            'url' => 'lastige-gesprekken',
                            'name' => 'oefen lastige gesprekken',
                        ],
                    ],

                ],

                [
                    'url'  => 'wie-zijn-wij',
                    'name' => 'wie zijn wij',
                ],

                [
                    'url'  => 'klantervaringen',
                    'name' => 'klantervaringen',
                ],

            ];
    }
}
