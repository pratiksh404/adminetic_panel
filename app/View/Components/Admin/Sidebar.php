<?php

namespace App\View\Components\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\View\Component;

use Route;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function initializeMenu()
    {
        $menus = [
            [
                'type' => 'breaker',
                'name' => 'General',
                'description' => 'Administration Control',
            ],
            [
                'type' => 'link',
                'name' => 'Dashboard',
                'icon' => 'fa fa-home',
                'link' => route('home'),
                'is_active' => request()->routeIs('home') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'and',
                        'condition' => auth()->user()->hasRole('admin')
                    ]
                ]
            ],
            [
                'type' => 'menu',
                'name' => 'User Management',
                'icon' => 'fa fa-users',
                'is_active' => request()->routeIs('user*') ? 'active' : '',
                'pill' => [
                    'is_active' => 'badge badge-info badge-air-info',
                    'value' => \App\Models\User::count()
                ],
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\User::class)
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\User::class)
                    ]
                ],
                'children' => $this->indexCreateChildren('user')
            ],
            [
                'type' => 'menu',
                'name' => 'Role',
                'icon' => 'fa fa-black-tie',
                'is_active' => request()->routeIs('role*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Role::class)
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Role::class)
                    ]
                ],
                'children' => $this->indexCreateChildren('role')
            ],
            [
                'type' => 'menu',
                'name' => 'Permission',
                'icon' => 'fa fa-check',
                'is_active' => request()->routeIs('permission*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Permission::class)
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Permission::class)
                    ]
                ],
                'children' => $this->indexCreateChildren('permission')
            ],
            [
                'type' => 'menu',
                'name' => 'Setting',
                'icon' => 'fa fa-cog',
                'is_active' => request()->routeIs('setting*') ? 'active' : '',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\Setting::class)
                    ],
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\Setting::class)
                    ]
                ],
                'children' => $this->indexCreateChildren('setting')
            ],
            [
                'type' => 'link',
                'name' => 'Activities',
                'icon' => 'fa fa-book',
                'is_active' => request()->routeIs('activity*') ? 'active' : '',
                'link' => adminRedirectRoute('activity'),
                'conditions' => [
                    [
                        'type' => 'and',
                        'condition' => auth()->user()->hasRole('admin')
                    ]
                ]
            ],
            [
                'type' => 'breaker',
                'name' => 'DEV TOOLS',
                'description' => 'Development Environment',
            ],
            [
                'type' => 'menu',
                'name' => 'Builder',
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => env('APP_ENV') == 'local'
                    ],
                ],
                'children' => [
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 1',
                        'link' => asset('cuba/html/theme/form-builder-1.html'),
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Form Builder 2',
                        'link' => asset('cuba/html/theme/form-builder-2.html'),
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Page Builder',
                        'link' => asset('cuba/html/theme/page-builder.html'),
                    ],
                    [
                        'type' => 'submenu',
                        'name' => 'Buttom Builder',
                        'link' => asset('cuba/html/theme/buttom-builder.html'),
                    ],
                ]
            ],
            [
                'type' => 'link',
                'name' => 'Documentation',
                'link' => asset('cuba/documentation/index.html'),
            ],
        ];

        return $menus;
    }

    private function indexCreateChildren($route)
    {
        $name = Str::ucfirst($route);
        $plural = Str::plural($name);

        $children =  [
            [
                'type' => 'submenu',
                'name' => 'All ' . $plural,
                'is_active' => request()->routeIs($route . '.index') ? 'active' : '',
                'link' => adminRedirectRoute($route),
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('view-any', \App\Models\User::class)
                    ]
                ],
            ],
            [
                'type' => 'submenu',
                'name' => 'Create ' . $route,
                'is_active' => request()->routeIs($route . '.create') ? 'active' : '',
                'link' => adminCreateRoute($route),
                'conditions' => [
                    [
                        'type' => 'or',
                        'condition' => auth()->user()->can('create', \App\Models\User::class)
                    ]
                ],
            ]
        ];
        return $children;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $menus = $this->initializeMenu();
        return view('components.admin.sidebar', compact('menus'));
    }
}
