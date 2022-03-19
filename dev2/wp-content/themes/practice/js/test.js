  
jQuery(function ($) {
  


var mySwiper = new Swiper('.swiper', {

      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      loop: true,
      pagination: {
        el: '.swiper-pagination',
      },

      effect: "fade", //フェードのエフェクト
      autoplay: {
        delay: 4000, //４秒後に次の画像へ
        disableOnInteraction: false //ユーザー操作後に自動再生を再開する
      },
      speed: 500, //２秒かけながら次の画像へ移動
      allowTouchMove: false, //マウスでのスワイプを禁止
      navigation: { //左右のページ送りを有効にする
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },

    });

    $(function () {
      var topBtn = $('.top-btn');
      topBtn.hide();

      //ボタンの表示設定
      $(window).scroll(function () {
        if ($(this).scrollTop() > 800) {
          //---- 画面を800pxスクロールしたら、ボタンを表示する
          topBtn.fadeIn();
        } else {
          //---- 画面が800pxより上なら、ボタンを表示しない
          topBtn.fadeOut();
        }
      });

      //ボタンをクリックしたら、スクロールして上に戻る
      topBtn.click(function () {
        $('body,html').animate({
          scrollTop: 0
        }, 500);
        return false;
      });
    });
  
  });
