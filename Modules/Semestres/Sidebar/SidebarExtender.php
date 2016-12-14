<?php namespace Modules\Semestres\Sidebar;

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
            $group->item(trans('Semestres'), function (Item $item) {
                $item->icon('fa fa-copy');
                $item->weight(10);
                $item->authorize(
                     /* append */
                );
                $item->item(trans('semestres::semestres.title.semestres'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.semestres.semestres.create');
                    $item->route('admin.semestres.semestres.index');
                    $item->authorize(
                        $this->auth->hasAccess('semestres.semestres.index')
                    );
                });
                $item->item(trans('semestres::convocatorias.title.convocatorias'), function (Item $item) {
                    $item->icon('fa fa-copy');
                    $item->weight(0);
                    $item->append('admin.semestres.convocatorias.create');
                    $item->route('admin.semestres.convocatorias.index');
                    $item->authorize(
                        $this->auth->hasAccess('semestres.convocatorias.index')
                    );
                });
// append


            });
        });

        return $menu;
    }
}
