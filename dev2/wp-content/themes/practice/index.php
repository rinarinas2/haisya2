<?php get_header(); ?>

<!-- Slider main container -->
<div class="swiper">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/top-01.png" alt="">
      <div class="swiper-text-img"><img src="<?php echo get_template_directory_uri() ?>/img/top-text.png" alt=""></div>
    </div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/top-02.png" alt="">
      <div class="swiper-text-img"><img src="<?php echo get_template_directory_uri() ?>/img/top-text.png" alt=""></div>
    </div>
    <div class="swiper-slide"><img src="<?php echo get_template_directory_uri() ?>/img/top-03.png" alt="">

    </div>

  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</div>


<div class="top">

  <section class="top__info">
    <div class="top__info-news">
      <div class="news-title-wrap">
        <div class="news-title-head">
          <h2 class="news-title">お知らせ</h2>
          <span class="news-subtitle">NEWS</span>
        </div>
        <div class="news-list">
          <a href="">過去のお知らせはこちら</a>
        </div>
      </div>
      <a href="" class="top__archive">
        <time class="top-news__published" datetime="2021-07-01T16:42:08+00:00">2021.07.01</time>
        <p class="top-news__text">年末年始の営業時間のお知らせ</p>
      </a>
    </div>
    <div class="top__info-table">
      <img src="<?php echo get_template_directory_uri() ?>/img/medicalTimeSheet.png" alt="">
      <img src="<?php echo get_template_directory_uri() ?>/img/medical-time-pc-1.png" alt="" class="top__info-table-img2">
    </div>
  </section>

  <section class="concept">
    <div class="concept__wrap">
      <div class="concept__img">
        <img src="<?php echo get_template_directory_uri() ?>/img/concept-img1.png" alt="">
      </div>
      <div class="concept__description">
        <span class="concept__subtitle">CONCEPT</span>
        <h2 class="concept__title">
          健康的で素敵な笑顔あふれる<br>
          街づくりを目指して
        </h2>
        <div class="concept__textbox">
          <p class="concept__text">
            私たちは最新の医療技術を追求すると共に、患者様とのコミュニケーションを大事することで、気軽に通いやすく些細なことでも相談できる「街の掛かり付け医」を目指しております。<br>
            お子様からご高齢の方まで、快適な空間で治療が受けられる場を作り、地域医療に貢献しきたいと考えております。
            おちんおちんびろー</p>
        </div>
        <div class="concept__btn">
          <a href="" class="c-btn">当院について</a>
        </div>
      </div>
    </div>
  </section>


  <section class="recommend">
    <div class="recommend__inner inner">
      <div class="section__head">
        <div class="section__head-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
        </div>
        <h2 class="recommend__title">当院の3つのおすすめ</h2>
        <div class="section__head-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
        </div>
      </div>

      <div class="recommend__items">
        <div class="recommend__item">
          <div class="recommend__item-img1">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-1.png" alt="">
          </div>
          <div class="recommend__item-img2">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-01.png" alt="">
          </div>
          <div class="recommend__text">
            <p>
              歯の治療において、小さな違和感は大きなストレスにつながります。
              私たちは常に快適な歯科医療技術の研究を行っております。
            </p>
          </div>
        </div>
        <div class="recommend__item">
          <div class="recommend__item-img1">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-2.png" alt="">
          </div>
          <div class="recommend__item-img2">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-02.png" alt="">
          </div>
          <div class="recommend__text">
            <p>
              「通いやすさ」も医院選びの重要なポイントと考え、2019年のリニューアルを期に更に駅の近くへ場所を移しました。
            </p>
          </div>
        </div>
        <div class="recommend__item">
          <div class="recommend__item-img1">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-3.png" alt="">
          </div>
          <div class="recommend__item-img2">
            <img src="<?php echo get_template_directory_uri() ?>/img/recommend-img-03.png" alt="">
          </div>
          <div class="recommend__text">
            <p>朝から夜までお仕事をされている方のために、診療時間を見直しました。<br>
              <span>※駆け込みでも対応可能ですが、事前にご連絡いただけるとスムーズです。</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="medical__bg1">
    <img src="<?php echo get_template_directory_uri() ?>/img/bg-top-1.png" alt="">
  </div>
  <section class="medical">
    <div class="medical__inner inner">
      <div class="section__head">
        <div class="section__head-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
        </div>
        <h2 class="medical__title">診療案内</h2>
        <div class="section__head-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
        </div>
      </div>
      <div class="medical__content">
        <div class="medical__left">
          <div class="medical__left-content">
            <div class="medical__left-title">
              一般診療
            </div>
            <div class="medical__left-text">
              虫歯・入れ歯・小児歯科
            </div>
          </div>
        </div>
        <div class="medical__right">
          <div class="medical__right-content">
            <div class="medical__right-title">
              特殊診療
            </div>
            <div class="medical__right-text">
              インプラント・ホワイトニング
              予防歯科・口腔外科・審美歯科

            </div>
          </div>
        </div>
      </div>
      <div class="medical__lead">
        <div class="medical__lead-text">
          <p>当院では、患者さんの歯の健康状態や治療方針を丁寧にカウンセリングし、十分ご理解していただいた上で治療いたします。<br>
            痛みに配慮することと、可能な限り削らない・抜かない治療に努めております。<br>
            <span>※特殊性の高い矯正治療などは保険の適応外となります。 これらの治療を行う際は事前に詳細と費用のご説明いたします。
            </span>
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="medical__bg2">
    <img src="<?php echo get_template_directory_uri() ?>/img/bg-bottom-1.png" alt="">
    <div class="medical__bg-deco1">
      <img src="<?php echo get_template_directory_uri() ?>/img/bottom-deco-1.png" alt="">
    </div>
    <div class="medical__bg-deco2">
      <img src="<?php echo get_template_directory_uri() ?>/img/bottom-deco-2.png" alt="">
    </div>
  </div>

  <section class="blog">
    <div class="section__head">
      <div class="section__head-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
      </div>
      <h2 class="medical__title">スタッフブログ</h2>
      <div class="section__head-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/title-deco-1.png" alt="">
      </div>
    </div>
    <div class="blog__lists blog__lists-inner">
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
      <a href="" class="blog__card">
        <div class="blog__card-img">
          <img src="<?php echo get_template_directory_uri() ?>/img/blog-1.png" alt="">
        </div>
        <div class="blog__card-body">
          <p class="blog__card-category">その他</p>
          <div class="blog__card-title">
            記事のタイトルが入ります。記事のタイトルが入ります。記事のタイトルが入ります。
          </div>
          <time class="blog__card-published">2020.02.14</time>
        </div>
      </a>
    </div>
    <div class="blog__btn">
      <a href="" class="c-btn">スタッフブログ一覧はこちら</a>
    </div>
  </section>

</div>

<?php get_footer(); ?>