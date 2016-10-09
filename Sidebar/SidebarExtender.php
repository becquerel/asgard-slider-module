<?php namespace Modules\Slider\Sidebar;

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
            $group->weight(100);
            $group->item(trans('slider::menu.title'), function (Item $item) {
                $item->weight(3);
                $item->icon('fa fa-bars');
                $item->route('admin.slider.slider.index');
                $item->authorize(
                    $this->auth->hasAccess('slider.sliders.index')
                );
            });
        });

        return $menu;
    }
}
