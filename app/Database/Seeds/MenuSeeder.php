<?php

namespace App\Database\Seeds;

use App\Models\LinkMap;
use App\Models\Menu;
use App\Models\MenuSub;
use App\Models\RolePermission;
use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Dashboard',
                'icon' => 'fa fa-tachometer-alt',
                'controller' => [
                    'path' => 'Admin\DashboardController',
                    'method' => [
                        [
                            'name' => 'index',
                            'accessible_by' => [1]
                        ]
                    ]
                ],

            ],
            [
                'name' => 'Master Data',
                'icon' => 'fa fa-database',
                'menus_sub' => [
                    [
                        'name' => 'Users',
                        'position' => 1,
                        'controller' => [
                            'path' => 'Admin\UserController',
                            'method' => [
                                [
                                    'name' => 'index',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'create',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'edit',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'delete',
                                    'accessible_by' => [1]
                                ]
                            ]
                        ],

                    ],
                    [
                        'name' => 'Roles',
                        'position' => 2,
                        'controller' => [
                            'path' => 'Admin\RoleController',
                            'method' => [
                                [
                                    'name' => 'index',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'create',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'edit',
                                    'accessible_by' => [1]
                                ],
                                [
                                    'name' => 'delete',
                                    'accessible_by' => [1]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $this->seedMenu($data);
    }

    protected function seedMenu($data)
    {
        $menu_model = new Menu();
        $menu_sub_model = new MenuSub();
        $link_map_model = new LinkMap();
        $role_permission_model = new RolePermission();

        foreach ($data as $menu) {
            $menu_model->insert($menu);

            $menu_id = $menu_model->getInsertID();

            if (isset($menu['menus_sub'])) {
                foreach ($menu['menus_sub'] as $menu_sub) {

                    if(!isset($menu_sub['controller'])) {
                        throw new \Exception('Controller not set');
                    }

                    $menu_sub['menu_id'] = $menu_id;

                    $menu_sub_model->insert($menu_sub);

                    $menu_sub_id = $menu_sub_model->getInsertID();

                    foreach ($menu_sub['controller']['method'] as $method) {
                        $link_map_model->insert([
                            'menu_id' => $menu_id,
                            'menu_sub_id' => $menu_sub_id,
                            'controller' => $menu_sub['controller']['path'],
                            'method' => $method['name']
                        ]);

                        if (isset($method['accessible_by'])) {
                            foreach ($method['accessible_by'] as $role_id) {
                                $role_permission_model->insert([
                                    'role_id' => $role_id,
                                    'link_map_id' => $link_map_model->getInsertID()
                                ]);
                            }
                        }
                    }
                }
            } else {
                if(!isset($menu['controller'])) {
                    throw new \Exception('Controller not set');
                }

                foreach ($menu['controller']['method'] as $method) {
                    $link_map_model->insert([
                        'menu_id' => $menu_id,
                        'controller' => $menu['controller']['path'],
                        'method' => $method['name']
                    ]);

                    if (isset($method['accessible_by'])) {
                        foreach ($method['accessible_by'] as $role_id) {
                            $role_permission_model->insert([
                                'role_id' => $role_id,
                                'link_map_id' => $link_map_model->getInsertID()
                            ]);
                        }
                    }
                }
            }
        }

    }
}
