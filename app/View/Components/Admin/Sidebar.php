<?php

namespace App\View\Components\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\View\Component;

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
                'name' => 'Dashboard',
                'description' => 'Administration Control',
            ],
            [
                'type' => 'link',
                'name' => 'Dashboard',
                'icon' => 'fa fa-home',
                'link' => route('home'),
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
                'type' => 'link',
                'name' => 'Activities',
                'icon' => 'fa fa-book',
                'link' => adminRedirectRoute('activity'),
                'conditions' => [
                    [
                        'type' => 'and',
                        'condition' => auth()->user()->hasRole('admin')
                    ]
                ]
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
