<?php 
  function init_func(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_post_type('item',[
      'labels'=>[
        'name'=>'商品',
        'singular_name'      => '商品',
        'menu_name'          => '商品',
        'add_new'            => '商品を追加',
        'add_new_item'       => '商品を追加',
        'new_item'           => '新しい商品',
        'edit_item'          => '商品を編集',
        'view_item'          => '商品を見る',
        'all_items'          => '全ての商品',
        'search_items'       => '商品を探す',
        'parent_item_colon'  => '',
        'not_found'          => '商品は見つかりませんでした',
        'not_found_in_trash' => 'ゴミ箱は空です'
      ],
      'public'=> true,  //管理ページに表示
      'has_archive'=>true,//一覧ページを持つ
      'hierarchial'=>true,//親子関係のページが出来る
      'supports'=>[
        //
        'title',
        'editor',
        'page-attributes'
      ],
      'menu_position'=> 5,
      'menu_icon'=>'dashicons-cart'
    ]);

    register_taxonomy('item_category','item',[
      'labels'=>[
        'name'=>'商品カテゴリー',
      ],
      'hierarchical' => true,
      'show_in_rest'=>true,
    ]);
  }
  add_action('init','init_func');
