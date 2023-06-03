<?php

//普通の投稿タイプ　TRAVEL
function post_has_archive( $args, $post_type ) {
	if ( 'post' == $post_type ) {
        $slug = 'travel';
        $args['rewrite'] = array(
        'slug' => $slug,
        'with_front' => true,
        );
        
		$args['has_archive'] = 'travel'; /* 任意のURL(アーカイブにつけるスラッグ名) */
        $args['label'] = 'TRAVEL' ; /*「投稿」のラベル名 */
        
	}
	return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

/* 固定ページのスラッグをクラス名に追加 */
function my_body_class($classes) {
    if (is_page()) {
        $page = get_post();
        $classes[] = $page->post_name;
    }
    return $classes;
}
add_filter('body_class', 'my_body_class');


//パンくずリスト　キャンペーン追加
function bcn_add($bcnObj) {
    // デフォルト投稿のアーカイブかどうか
    if (is_post_type_archive('post')) {
            // 新規のtrailオブジェクトを末尾に追加する
        $bcnObj->add(new bcn_breadcrumb('TRAVEL', null, array('archive', 'post-clumn-archive', 'current-item')));
        // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
        $trail_tmp = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
        
    // デフォルト投稿の記事かどうか
    } elseif (is_singular('post')) {
        // 新規のtrailオブジェクトを末尾に追加する
        $bcnObj->add(new bcn_breadcrumb('TRAVEL', null, array('archive', 'post-clumn-archive', 'current-item'), home_url('/travel'), null, true));
        // trailオブジェクト1とtrailオブジェクト2の中身を入れ替える
        $trail_tmp = clone $bcnObj->trail[2];
        $bcnObj->trail[2] = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = $trail_tmp;
    // 自社所有物件のアーカイブかどうか
    } elseif (is_post_type_archive('property')) {
        // 新規のtrailオブジェクトを末尾に追加する
        $bcnObj->add(new bcn_breadcrumb('自社所有物件', null, array('archive', 'post-clumn-archive', 'current-item')));
        // trailオブジェクト0とtrailオブジェクト1の中身を入れ替える
        $trail_tmp = clone $bcnObj->trail[1];
        $bcnObj->trail[1] = clone $bcnObj->trail[0];
        $bcnObj->trail[0] = $trail_tmp;
    }
    return $bcnObj;
}
add_action('bcn_after_fill', 'bcn_add');


//ページネーション
function pagination( $pages, $paged, $range = 3, $show_only = false ) {

    $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
    $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように
    $text_before = '前へ';
    $text_next = '次へ';

    if ( $show_only && $pages === 1 ) {
        // １ページのみで表示設定が true の時
        echo '<p class="singlePager">1</p>';
        return;
    }

    if ( $pages === 1 ) {
        return;
    }    // １ページのみで表示設定もない場合

    if ( 1 !== $pages ) {
        //２ページ以上の時
        echo '<ul class="pagination">';
        // echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
        //現在のページ数などを表示する場合はこの上のコメントアウトを外す。
        if ( $paged > $range + 1 ) {
            // 「最初へ」 の表示
            echo '<li><a href="', get_pagenum_link( 1 ), '" class="first"><span>', $text_first, '</span></a></li>';
        }
        if ( $paged > 1 ) {
            // 「前へ」 の表示
            echo '<a href="', get_pagenum_link( $paged - 1 ), '" class="prev"><div class="arrow"></div><p>', $text_before, '</p></a>';
        }
        for ( $i = 1; $i <= $pages; $i ++ ) {
            if ( $i <= $paged + $range && $i >= $paged - $range ) {
                // $paged +- $range 以内であればページ番号を出力
                if ( $paged === $i ) {
                    echo '<li><a href="', get_pagenum_link( $i ), '" class="active"><span>', $i, '</span></a></li>';
                } else {
                    echo '<li><a href="', get_pagenum_link( $i ), '" class="pager"><span>', $i, '</span></a></li>';
                }
            }
        }
        if ( $paged < $pages ) {
            // 「次へ」 の表示
            echo '<a href="', get_pagenum_link( $paged + 1 ), '" class="next"><p>', $text_next, '</p><div class="arrow"></div></a>';
        }
        if ( $paged + $range < $pages ) {
            // 「最後へ」 の表示
            echo '<a href="', get_pagenum_link( $pages ), '" class="last">', $text_last, '</a>';
        }
        echo '</ul>';
    }
}


// 投稿ページのパーマリンクをカスタマイズ　キャンペーン記事ページのパーマリンク
function add_article_post_permalink( $permalink ) {
    $permalink = '/travel' . $permalink;
    return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );

function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['travel/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );


// All in one SEOのタイトルタグ出力を停止
add_filter( 'aioseo_disable_title_rewrites', 'aioseo_disable_term_title_rewrites' );
function aioseo_disable_term_title_rewrites( $disabled ) {
   return true;
}


/* ---------- カスタム投稿タイプ　物件情報  　を追加 ---------- */
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type( // カスタム投稿タイプの追加関数
    'property',//カスタム投稿タイプ名（半角英数字の小文字）
    array( //オプション（以下）
      'label' => '物件情報', // 管理画面上の表示（日本語でもOK）
      'public' => true, // 管理画面に表示するかどうかの指定
      'has_archive' => true, // 投稿した記事の一覧ページを作成する
      'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
      'supports' => array( // サポートする機能（以下）
        'title',  // タイトル
        'editor', // エディター
        'thumbnail', // アイキャッチ画像
        'revisions' // リビジョンの保存
      ),
    )
  );

  register_taxonomy(
    'property-cat',
    'property',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'singular_label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_ui' => true
    )
  );

  register_taxonomy(
    'property-tag',
    'property',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
    )
  );
}


/* ---------- thumbnailの有効化---------- */
// add_theme_support('post-thumbnails');


/* ---------- カスタム投稿タイプ　物件情報　アーカイブページ表示件数 ---------- */
// function change_posts_per_page($query) {
//     if ( is_admin() || ! $query->is_main_query() )
//     return;
//     if ( $query->is_post_type_archive('property') ) { //カスタム投稿タイプを指定
//         $query->set( 'posts_per_page', '-1' ); //表示件数を指定
//     }
// }
// add_action( 'pre_get_posts', 'change_posts_per_page' );


//カスタム投稿アーカイブページの並び順を変更
// function change_posts_per_page($query) {

//     //管理画面,メインクエリに干渉しないために必須
//     if( is_admin() || ! $query->is_main_query() ){
//         return;
//     }

//     //カスタム投稿「product」アーカイブページ　投稿日時が古い順でソート
//     if ( $query->is_post_type_archive( 'product' ) //productのアーカイブページまたは
//         ||
//          $query->is_tax() ) //カスタム分類のアーカイブページが表示されているか
//         {
//             $query -> set('order','ASC'); //昇順
//         return;
//         }
// }
// add_action( 'pre_get_posts', 'change_posts_per_page' ); //pre_get_postsでメインクエリが実行される前のクエリを書き換える