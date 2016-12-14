<?php namespace Modules\Dependencias\Sidebar;

use Maatwebsite\Sidebar\Group;
use Maatwebsite\Sidebar\Item;
use Maatwebsite\Sidebar\Menu;
use Modules\Core\Contracts\Authentication;

class SidebarExtender implements \Maatwebsite\Sidebar\SidebarExtender
{
    /**
     * @var Authentication
     */
    protected $auth;

    /**
     * @param Authentication $auth
     *
     * @internal param Guard $guard
     */
    public function __construct(Authentication $auth)
    {
        $this->auth = $auth;
    }

    /**
     * @param Menu $menu
     *
     * @return Menu
     */
    public function extendWith(Menu $menu)
    {
        $menu->group(trans('core::sidebar.content'), function (Group $group) {
            $group->item(trans('Dependencias'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('dependencias::departamentos.title.departamentos'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.dependencias.departamentos.create');
                    $item->route('admin.dependencias.departamentos.index');
                    $item->authorize(
                        $this->auth->hasAccess('dependencias.departamentos.index')
                    );
                });
                $item->item(trans('dependencias::secciones.title.secciones'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.dependencias.secciones.create');
                    $item->route('admin.dependencias.secciones.index');
                    $item->authorize(
                        $this->auth->hasAccess('dependencias.secciones.index')
                    );
                });
                $item->item(trans('dependencias::turnos.title.turnos'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.dependencias.turnos.create');
                    $item->route('admin.dependencias.turnos.index');
                    $item->authorize(
                        $this->auth->hasAccess('dependencias.turnos.index')
                    );
                });
                $item->item(trans('dependencias::aulas.title.aulas'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.dependencias.aulas.create');
                    $item->route('admin.dependencias.aulas.index');
                    $item->authorize(
                        $this->auth->hasAccess('dependencias.aulas.index')
                    );
                });
// append




            });
        });

        return $menu;
    }
}
