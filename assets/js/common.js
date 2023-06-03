
//ドロップダウンの設定を関数でまとめる
function mediaQueriesWin(){
    var width = $(window).width();
    if(width <= 1180) {//横幅が1180px以下の場合
        $(".openbtn1").click(function () {//ハンバーガーボタンをクリックしたら
            $(this).toggleClass('active');//ボタンにアクティブクラス付与
            $("nav").toggle(300);//0.3秒で表示したり非表示にしたりする
        });
    
        $("nav").click(function(){//リンク以外をクリックしたとき
            $(".openbtn1").toggleClass('active');//ボタンにアクティブクラス付与
            $("nav").toggle(300);//0.3秒で表示したり非表示にしたりする
        });
    }else{//横幅が1180px以上の場合
    }
}

// ページが読み込まれたらすぐに動かしたい場合の記述
$(window).on('load',function(){
    mediaQueriesWin();/* ドロップダウンの関数を呼ぶ*/
});

//スクロールしてトップへ戻る機能設定
$(function() {

    // 変数にクラスを入れる
    var btn = $('.btn-return');

    //スクロールしてトップへ戻る
    btn.on('click',function () {
        $('body,html').animate({
            scrollTop: 0
        });
    });
});

//TOPページmv
$(function () {
    $('.top-mv-slider').slick({
        arrows: true, // 前・次のボタンを表示する
        dots: false, // ドットナビゲーションを表示する
        appendDots: $('.top-mv-dots'), // ドットナビゲーションの生成位置を変更
        slidesToShow: 1, // 表示させるスライド数
        centerMode: false, // 現在のスライドを中央に表示する
        fade: true,
        autoplay: false,
        autoplaySpeed: 4000,
        speed: 1000,
        prevArrow: '<button class="slide-arrow prev-arrow"><span></span></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><span></span></button>',
        
        responsive: [
            {
              breakpoint: 670, // 1180px以下のサイズに適用
              settings: {
                  arrows: false, // 前・次のボタンを表示する
                  autoplay: true,
              },
            },
          ],
    });
});

//TOPページmv　ページが読み込まれたらフェードイン
$(window).on('load',function(){
    $(".top-mv").addClass("top-mv-fadeIn");
});

//TOPページphotography
$(function () {
    $('.top-photography-slider').slick({
        arrows: true, // 前・次のボタンを表示する
        dots: true, // ドットナビゲーションを表示する
        appendDots: $('.top-photography-dots'), // ドットナビゲーションの生成位置を変更
        slidesToShow: 1, // 表示させるスライド数
        centerMode: false, // 現在のスライドを中央に表示する
        fade: false,
        autoplay: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><span></span></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><span></span></button>',
        customPaging: function(slick,index) {
            // スライダーのインデックス番号に対応した画像のsrcを取得
            var targetImage = slick.$slides.eq(index).find('div').css("background-image");

            var targetImageUrl = targetImage;

            var url = targetImageUrl.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');

            // slick-dots > li　の中に上記で取得した画像を設定
            return '<img src=" ' + url + ' "/>';
        },
        responsive: [
          {
            breakpoint: 1180, // 1180px以下のサイズに適用
            settings: {
                arrows: false, // 前・次のボタンを表示する
            },
          },
        ],
    });
});

//TOPページprev-arrow　要素移動
$(function(){
	if (window.matchMedia('(min-width: 671px)').matches) {
        $(".top-mv-slider .prev-arrow").appendTo(".top-mv-slider .prev");
    }
});

//TOPページnext-arrow　要素移動
$(function(){
	if (window.matchMedia('(min-width: 671px)').matches) {
        $(".top-mv-slider .next-arrow").appendTo(".top-mv-slider .next");
    }
});

//TOPページphotography　要素移動
$(function(){
	if (window.matchMedia('(max-width: 670px)').matches) {
        $(".allCountryButton").appendTo('.top-photography .content');
    }
});





//フッター　要素移動
$(function(){
	if (window.matchMedia('(max-width: 670px)').matches) {
        $(".footer-left-privacy").appendTo('.footer-content');
    }
});

//会社概要ページ　要素移動
$(function(){
	if (window.matchMedia('(max-width: 1180px)').matches) {
        $(".about-greeting-top img").insertBefore('.about-greeting-top p');
    }
});

//物件一覧ページ　要素移動
$(function(){
    if (window.matchMedia('(max-width: 1180px)').matches) {
        $(".property-contentItem").each(function(){
            $(this).find(".right h3").insertBefore($(this).find(".left"));
        })
    }
});

//フェードイン　クラス付与
$(function () {
    $(window).scroll(function () {
        const windowHeight = $(window).height();
        const scroll = $(window).scrollTop();

        $('.fade').each(function () {
            const targetPosition = $(this).offset().top;
            if (scroll > targetPosition - windowHeight + 100) {
                $(this).addClass("fadeIn");
            }
        });
    });
});