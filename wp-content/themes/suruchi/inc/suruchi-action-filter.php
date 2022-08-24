<?php

// wp nav li class add
function suruchi_nav_on_li_class($classes, $item, $args)
{

    if ('menu-1' === $args->theme_location) {
        $classes[] = "header__menu--items";
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'suruchi_nav_on_li_class', 10, 4);

// wp nav anchor class add
function nav_on_anchor_class($atts)
{
    $atts['class'] = 'header__menu--link';

    return $atts;
}

add_filter('nav_menu_link_attributes', 'nav_on_anchor_class');


// additional checkbox in product_cat texonomoy 

function suruchi_product_cat_addional_option()
{

    // var_dump(term_id());
?>
    <div class="form-field">
        <label for="term_meta[custom_term_meta]">
            <?php _e('Show Vertical', 'suruchi'); ?>
            <input type="checkbox" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="">
        </label>
    </div>
<?php
}
add_action('product_cat_add_form_fields', 'suruchi_product_cat_addional_option', 10, 2);

function suruchi_product_edit_addional_option($term)
{
    $term_id = $term->term_id;
    $term_meta = get_option("taxonomy_$term_id");



?>
    <tr class="form-field">
        <th scope="row" valign="top">
            <label for="term_meta[custom_term_meta]">
                <?php _e('Show Vertical', 'suruchi'); ?>
        </th>
        <td>
            <input type="checkbox" name="term_meta[custom_term_meta]" id="term_meta[custom_term_meta]" value="<?php esc_attr($term_meta['custom_term_meta']) ? esc_attr($term_meta['custom_term_meta']) : ''; ?>">
        </td>
        </label>
    </tr>
<?php
}
add_action('product_cat_edit_form_fields', 'suruchi_product_edit_addional_option', 10, 2);



function save_taxonomy_custom_meta($term_id)
{
    if (isset($_POST['term_meta'])) {
        $t_id = $term_id;
        $term_meta = get_option("taxonomy_$t_id");
        $cat_keys = array_keys($_POST['term_meta']);
        foreach ($cat_keys as $key) {
            // if (isset($_POST['term_meta'][$key])) {
            //     $term_meta[$key] = $_POST['term_meta'][$key];
            // }
            var_dump($key);
        }
        // Save the option array.
        update_option("taxonomy_$t_id", $term_meta);
    }
}
add_action('edited_product_cat', 'save_taxonomy_custom_meta', 10, 2);
add_action('create_product_cat', 'save_taxonomy_custom_meta', 10, 2);
