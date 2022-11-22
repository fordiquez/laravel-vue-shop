<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Create the new menu item.
     * @param Menu $menu
     * @param string $title
     * @param string|null $route
     * @param string|null $url
     * @return mixed
     */
    protected function menuItem(Menu $menu, string $title, string $route = null, string $url = null): mixed
    {
        return MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __($title),
            'url'     => $url,
            'route'   => $route
        ]);
    }

    /**
     * Filling menu item with data values.
     * @param MenuItem $menuItem
     * @param string $icon
     * @param int $order
     * @param int|null $parentId
     * @param string $target
     * @param string|null $color
     * @return void
     */
    protected function fillMenuItem(MenuItem $menuItem, string $icon, int $order, int $parentId = null, string $target = '_self', string $color = null): void
    {
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => $target,
                'icon_class' => $icon,
                'color'      => $color,
                'parent_id'  => $parentId,
                'order'      => $order,
            ])->save();
        }
    }

    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run(): void
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.dashboard', 'voyager.dashboard');
        $this->fillMenuItem($menuItem, 'voyager-boat', 1);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.roles', 'voyager.roles.index');
        $this->fillMenuItem($menuItem, 'voyager-lock', 2);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.users', 'voyager.users.index');
        $this->fillMenuItem($menuItem, 'voyager-person', 3);

        $usersMenuItem = $this->menuItem($menu, 'Users Items');
        $this->fillMenuItem($usersMenuItem, 'voyager-people', 4);

        $menuItem = $this->menuItem($menu, 'Order Recipients', 'voyager.order-recipients.index');
        $this->fillMenuItem($menuItem, 'voyager-group', 1, $usersMenuItem->id);

        $menuItem = $this->menuItem($menu, 'User Addresses', 'voyager.user-addresses.index');
        $this->fillMenuItem($menuItem, 'voyager-truck', 2, $usersMenuItem->id);

        $menuItem = $this->menuItem($menu, 'User Contacts', 'voyager.user-contacts.index');
        $this->fillMenuItem($menuItem, 'voyager-phone', 3, $usersMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Categories', 'voyager.categories.index');
        $this->fillMenuItem($menuItem, 'voyager-categories', 5);

        $menuItem = $this->menuItem($menu, 'Tags', 'voyager.tags.index');
        $this->fillMenuItem($menuItem, 'voyager-tag', 6);

        $menuItem = $this->menuItem($menu, 'Goods', 'voyager.goods.index');
        $this->fillMenuItem($menuItem, 'voyager-shop', 7);

        $goodsMenuItem = $this->menuItem($menu, 'Goods Items');
        $this->fillMenuItem($goodsMenuItem, 'voyager-bag', 8);

        $menuItem = $this->menuItem($menu, 'Goods Statuses', 'voyager.good-statuses.index');
        $this->fillMenuItem($menuItem, 'voyager-activity', 1, $goodsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Goods Tags', 'voyager.good-tag.index');
        $this->fillMenuItem($menuItem, 'voyager-book', 2, $goodsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Goods Images', 'voyager.good-images.index');
        $this->fillMenuItem($menuItem, 'voyager-photos', 3, $goodsMenuItem->id);

//        $menuItem = $this->menuItem($menu, 'Attributes', 'voyager.attributes.index');
//        $this->fillMenuItem($menuItem, 'voyager-params', 4, $goodsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Reviews', 'voyager.reviews.index');
        $this->fillMenuItem($menuItem, 'voyager-chat', 5, $goodsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Review Images', 'voyager.review-images.index');
        $this->fillMenuItem($menuItem, 'voyager-upload', 6, $goodsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Orders', 'voyager.orders.index');
        $this->fillMenuItem($menuItem, 'voyager-basket', 9);

        $ordersMenuItem = $this->menuItem($menu, 'Orders Items');
        $this->fillMenuItem($ordersMenuItem, 'voyager-logbook', 10);

        $menuItem = $this->menuItem($menu, 'Promo Codes', 'voyager.promo-codes.index');
        $this->fillMenuItem($menuItem, 'voyager-ticket', 1, $ordersMenuItem->id);

        $menuItem = $this->menuItem($menu, 'Order Histories', 'voyager.order-histories.index');
        $this->fillMenuItem($menuItem, 'voyager-calendar', 2, $ordersMenuItem->id);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.media', 'voyager.media.index');
        $this->fillMenuItem($menuItem, 'voyager-images', 11);

        $toolsMenuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.tools');
        $this->fillMenuItem($toolsMenuItem, 'voyager-tools', 12);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.menu_builder', 'voyager.menus.index');
        $this->fillMenuItem($menuItem, 'voyager-list', 1, $toolsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.database', 'voyager.database.index');
        $this->fillMenuItem($menuItem, 'voyager-data', 2, $toolsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.compass', 'voyager.compass.index');
        $this->fillMenuItem($menuItem, 'voyager-compass', 3, $toolsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.bread', 'voyager.bread.index');
        $this->fillMenuItem($menuItem, 'voyager-bread', 4, $toolsMenuItem->id);

        $menuItem = $this->menuItem($menu, 'voyager::seeders.menu_items.settings', 'voyager.settings.index');
        $this->fillMenuItem($menuItem, 'voyager-settings', 13);
    }
}
