<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Retrieve the site name.
     */
    public function siteName(): string
    {
        return get_bloginfo('name', 'display');
    }

    /**
     * Normalized nav items for the header (primary_navigation location).
     * Each item: { url, label, isActive, children[] }
     */
    public function headerMenuItems(): array
    {
        return $this->resolveMenuItems('primary_navigation');
    }

    /**
     * Normalized nav items for the footer (footer_navigation location).
     * Falls back to primary_navigation, then hardcoded defaults.
     * Only top-level items are returned (no children needed in footer).
     */
    public function footerMenuItems(): array
    {
        $items = $this->resolveMenuItems('footer_navigation')
            ?: $this->resolveMenuItems('primary_navigation');

        // Strip children for footer — just flat top-level links
        return array_map(fn ($item) => array_merge($item, ['children' => []]), $items);
    }

    /**
     * Retrieve the display-formatted phone number.
     */
    public function phoneDisplay(): string
    {
        return get_theme_mod('ocart_phone_number', '(000) 000-0000');
    }

    /**
     * Retrieve the tel: URI for the phone number.
     */
    public function phoneTel(): string
    {
        return 'tel:+1' . preg_replace('/[^0-9]/', '', $this->phoneDisplay());
    }

    /**
     * Resolve menu items for a given theme location into a nested tree.
     * Returns WP menu items when a menu is assigned (uses WP active classes).
     * Falls back to hardcoded defaults with URL-based detection.
     *
     * @return array<int, array{url: string, label: string, isActive: bool, children: array}>
     */
    private function resolveMenuItems(string $location): array
    {
        $locations = get_nav_menu_locations();

        if (! empty($locations[$location])) {
            $items = wp_get_nav_menu_items($locations[$location]);

            if ($items) {
                return $this->buildMenuTree($items);
            }
        }

        return $this->defaultNavItems();
    }

    /**
     * Build a nested menu tree from WP's flat menu item list.
     * Supports unlimited depth but practically handles 2–3 levels.
     *
     * @param  \WP_Post[]  $items  Flat list from wp_get_nav_menu_items()
     * @return array<int, array{url: string, label: string, isActive: bool, children: array}>
     */
    private function buildMenuTree(array $items): array
    {
        $tree    = [];
        $lookup  = [];

        foreach ($items as $item) {
            $node = [
                'url'      => $item->url,
                'label'    => $item->title,
                'isActive' => (bool) array_intersect(
                    ['current-menu-item', 'current-menu-ancestor', 'current-menu-parent'],
                    (array) $item->classes
                ),
                'children' => [],
            ];

            $lookup[$item->ID] = &$node;

            if ($item->menu_item_parent && isset($lookup[$item->menu_item_parent])) {
                $lookup[$item->menu_item_parent]['children'][] = &$node;
            } else {
                $tree[] = &$node;
            }

            unset($node);
        }

        return $tree;
    }

    /**
     * Hardcoded fallback nav items used when no WP menu is assigned.
     *
     * @return array<int, array{url: string, label: string, isActive: bool, children: array}>
     */
    private function defaultNavItems(): array
    {
        $defaults = [
            '/'               => 'Home',
            '/about'          => 'About',
            '/practice-areas' => 'Practice Areas',
            '/results'        => 'Results',
            '/faq'            => 'FAQ',
            '/contact'        => 'Contact',
        ];

        return array_map(fn ($path, $label) => [
            'url'      => home_url($path),
            'label'    => $label,
            'isActive' => $path === '/'
                ? is_front_page()
                : request()->is(ltrim($path, '/')) || request()->is(ltrim($path, '/') . '/*'),
            'children' => [],
        ], array_keys($defaults), array_values($defaults));
    }
}
