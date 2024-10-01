<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('style-name', get_stylesheet_uri());
  wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);
});

function categories_label()
{
  $cats = get_the_category();
  if (!empty($cats)) {
    if (!is_wp_error($cats)) {
      foreach ($cats as $cat) {
        $cat_link = get_category_link($cat->term_id);
        $cat_name = $cat->name;
        $cat_id = $cat->cat_ID;

        // Advanced Custom Fields (ACF) で取得したフィールドの値を取得
        $back_color = get_field('backcolor', 'category_' . $cat_id);
        $txt_color = get_field('textcolor', 'category_' . $cat_id);

       // スタイルをインラインで指定して出力（角を丸くし、paddingを追加）
        echo '<a href="' . esc_url($cat_link) . '" style="background-color:' . esc_attr($back_color) . '; color:' . esc_attr($txt_color) . '; border-radius: 5px; padding: 6px 20px 6px 21px;">' . esc_html($cat_name) . '</a>';
      }
    }
  }
}
