<?php

/**
 * Theme setup.
 */

namespace App;

use Illuminate\Support\Facades\Vite;

/**
 * Inject styles into the block editor.
 *
 * @return array
 */
add_filter('block_editor_settings_all', function ($settings) {
    $style = Vite::asset('resources/css/editor.css');

    $settings['styles'][] = [
        'css' => "@import url('{$style}')",
    ];

    return $settings;
});

/**
 * Inject scripts into the block editor.
 *
 * @return void
 */
add_action('admin_head', function () {
    if (! get_current_screen()?->is_block_editor()) {
        return;
    }

    if (! Vite::isRunningHot()) {
        $dependencies = json_decode(Vite::content('editor.deps.json'));

        foreach ($dependencies as $dependency) {
            if (! wp_script_is($dependency)) {
                wp_enqueue_script($dependency);
            }
        }
    }
    echo Vite::withEntryPoints([
        'resources/js/editor.js',
    ])->toHtml();
});

/**
 * Use the generated theme.json file.
 *
 * @return string
 */
add_filter('theme_file_path', function ($path, $file) {
    return $file === 'theme.json'
        ? public_path('build/assets/theme.json')
        : $path;
}, 10, 2);

/**
 * Disable on-demand block asset loading.
 *
 * @link https://core.trac.wordpress.org/ticket/61965
 */
add_filter('should_load_separate_core_block_assets', '__return_false');

/**
 * Register the initial theme setup.
 *
 * @return void
 */
add_action('after_setup_theme', function () {
    /**
     * Disable full-site editing support.
     *
     * @link https://wptavern.com/gutenberg-10-5-embeds-pdfs-adds-verse-block-color-options-and-introduces-new-patterns
     */
    remove_theme_support('block-templates');

    /**
     * Register the navigation menus.
     *
     * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
     */
    register_nav_menus([
        'primary_navigation' => __('Primary Navigation', 'sage'),
        'footer_navigation'  => __('Footer Navigation', 'sage'),
    ]);

    /**
     * Disable the default block patterns.
     *
     * @link https://developer.wordpress.org/block-editor/developers/themes/theme-support/#disabling-the-default-block-patterns
     */
    remove_theme_support('core-block-patterns');

    /**
     * Enable plugins to manage the document title.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
     */
    add_theme_support('title-tag');

    /**
     * Enable post thumbnail support.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    /**
     * Enable responsive embed support.
     *
     * @link https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-support/#responsive-embedded-content
     */
    add_theme_support('responsive-embeds');

    /**
     * Enable HTML5 markup support.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
     */
    add_theme_support('html5', [
        'caption',
        'comment-form',
        'comment-list',
        'gallery',
        'search-form',
        'script',
        'style',
    ]);

    /**
     * Enable selective refresh for widgets in customizer.
     *
     * @link https://developer.wordpress.org/reference/functions/add_theme_support/#customize-selective-refresh-widgets
     */
    add_theme_support('customize-selective-refresh-widgets');
}, 20);

/**
 * Shared geo data for Orange County, California.
 * Used by both the standalone schema and the Rank Math filter.
 */
function ocart_geo_area_served(): array
{
    return [
        ['@type' => 'AdministrativeArea', 'name' => 'Orange County, California'],
        ['@type' => 'City', 'name' => 'Anaheim, CA'],
        ['@type' => 'City', 'name' => 'Irvine, CA'],
        ['@type' => 'City', 'name' => 'Santa Ana, CA'],
        ['@type' => 'City', 'name' => 'Fullerton, CA'],
        ['@type' => 'City', 'name' => 'Huntington Beach, CA'],
        ['@type' => 'City', 'name' => 'Newport Beach, CA'],
        ['@type' => 'City', 'name' => 'Orange, CA'],
        ['@type' => 'City', 'name' => 'Costa Mesa, CA'],
        ['@type' => 'City', 'name' => 'Garden Grove, CA'],
    ];
}

function ocart_geo_coordinates(): array
{
    return [
        '@type'     => 'GeoCoordinates',
        'latitude'  => 33.7175,
        'longitude' => -117.8311,
    ];
}

/**
 * Output geo meta tags in <head>.
 *
 * These are safe to output alongside any SEO plugin — Rank Math, Yoast,
 * and others do not emit geo meta tags, so there is no duplication risk.
 * geo.region uses ISO 3166-2 (US-CA) to unambiguously target California,
 * not Orange County, Florida.
 */
add_action('wp_head', function () {
    echo "\n<!-- Geo targeting: Orange County, California (US-CA) -->\n";
    echo '<meta name="geo.region" content="US-CA">' . "\n";
    echo '<meta name="geo.placename" content="Orange County, California">' . "\n";
    echo '<meta name="geo.position" content="33.7175;-117.8311">' . "\n";
    echo '<meta name="ICBM" content="33.7175, -117.8311">' . "\n";

    // Only output our own JSON-LD when Rank Math is NOT active.
    // When Rank Math IS active we inject via rank_math/json_ld filter below
    // to avoid duplicate LocalBusiness entities in the same page.
    if (class_exists('RankMath\RankMath')) {
        return;
    }

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => ['LegalService', 'LocalBusiness'],
        'name'        => 'OC Arrested',
        'description' => 'Criminal defense attorney referral service for Orange County, California. We connect arrested individuals with experienced OC defense lawyers 24/7.',
        'url'         => home_url('/'),
        'telephone'   => get_theme_mod('ocart_phone_number', '(000) 000-0000'),
        'priceRange'  => 'Free Referral',
        'openingHours' => 'Mo-Su 00:00-23:59',
        'address' => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Orange County',
            'addressRegion'   => 'CA',
            'addressCountry'  => 'US',
        ],
        'geo'        => ocart_geo_coordinates(),
        'areaServed' => ocart_geo_area_served(),
    ];

    echo '<script type="application/ld+json">'
        . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
        . '</script>' . "\n";
}, 1);

/**
 * When Rank Math IS active, merge our geo data into its schema output
 * instead of adding a duplicate LocalBusiness block.
 *
 * We find Rank Math's existing LocalBusiness entity (if any) and add our
 * geo + areaServed data to it. If Rank Math hasn't added a LocalBusiness
 * entity yet (e.g. its Local SEO module is off), we append a minimal one.
 *
 * Priority 99 runs after Rank Math builds all its entities.
 */
add_filter('rank_math/json_ld', function (array $data): array {
    $geoProps = [
        'geo'        => ocart_geo_coordinates(),
        'areaServed' => ocart_geo_area_served(),
        'address'    => [
            '@type'           => 'PostalAddress',
            'addressLocality' => 'Orange County',
            'addressRegion'   => 'CA',
            'addressCountry'  => 'US',
        ],
    ];

    $localBusinessTypes = ['LocalBusiness', 'LegalService', 'Attorney', 'LawOffice'];

    // Try to find and extend Rank Math's existing LocalBusiness-family entity
    foreach ($data as $key => &$entity) {
        $types = (array) ($entity['@type'] ?? []);
        if (array_intersect($types, $localBusinessTypes)) {
            $entity = array_merge($entity, $geoProps);
            return $data;
        }
    }
    unset($entity);

    // No LocalBusiness entity found — append a minimal one so geo data lands
    $data['OCALocalBusiness'] = array_merge([
        '@type'     => ['LegalService', 'LocalBusiness'],
        'name'      => 'OC Arrested',
        'url'       => home_url('/'),
        'telephone' => get_theme_mod('ocart_phone_number', '(000) 000-0000'),
    ], $geoProps);

    return $data;
}, 99);

/**
 * Register theme customizer settings.
 *
 * @return void
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    $wp_customize->add_section('ocart_contact', [
        'title'    => __('Contact Information', 'sage'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('ocart_phone_number', [
        'default'           => '(000) 000-0000',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    ]);

    $wp_customize->add_control('ocart_phone_number', [
        'label'   => __('Phone Number', 'sage'),
        'section' => 'ocart_contact',
        'type'    => 'text',
    ]);
});

/**
 * Register the theme sidebars.
 *
 * @return void
 */
add_action('widgets_init', function () {
    $config = [
        'before_widget' => '<section class="widget %1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ];

    register_sidebar([
        'name' => __('Primary', 'sage'),
        'id' => 'sidebar-primary',
    ] + $config);

    register_sidebar([
        'name' => __('Footer', 'sage'),
        'id' => 'sidebar-footer',
    ] + $config);
});
