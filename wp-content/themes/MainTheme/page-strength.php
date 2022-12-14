<?php global $img_path_normal_1;
global $img_path_normal_2;
?>

<?php get_header(); ?>

<?php
/*
Template Name:テムソンの強み
*/
?>

<main class="p-strength">
  <section class="l-page-FV animated fadeIn wow">
    <div class="l-page-FV__wrap">
      <div class="l-page-FV__left">
        <h1 class="font-en">ONE STOP
          <picture>
            <source srcset="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>common/strength-title.png, <?php echo esc_url(get_template_directory_uri()) . $img_path_normal_2 ?>common/strength-title@2x.png 2x">
            <img class="p-strength-title-img" src="<?php echo esc_url(get_template_directory_uri()) . $img_path_normal_1 ?>common/strength-title.png" alt="">
          </picture>
        </h1>
      </div>
      <div class="l-page-FV__desc">
        <div class="l-breadcrumb">
          <?php bcn_display(); ?>
        </div>
        この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。
        文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、
        行間等を確認するために入れています。
      </div>
    </div>
  </section>

  <section class="p-strengthMenu animated fadeIn wow">

    <div class="p-strengthMenu__wrap">
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">マニシング加工</h3>
            <p>紙図面、2D・3DCADデータから制作可能です。<br>
              3D加工にも対応いたします。</p>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">NC 旋盤加工</h3>
            <p>独自の技術や経験を生かした加工に自身があります。<br>
              どんなことでもまずはご相談ください。</p>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">ワイヤーカット加工</h3>
            <p>繊細な形状加工や熱処理後の精度加工、
              ワイヤーのみの追加工などにも対応します。</p>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">汎用加工</h3>
            <p>単品1個から小ロット量産まで大小さまざまな加工に対応いたします。<br class="SP-none">
              また市販部品の追加工など、ニーズにあわせて受難に対応いたします。</p>
          </div>
        </div>
      </div>
    </div>
    <div class="p-strengthMenu__BottomWrap">
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">フライス<br>
              加工</h3>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">平面<br>
              研削</h3>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">旋盤<br>
              加工</h3>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">鋳物<br>
              加工</h3>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">治具<br>
              製作</h3>
          </div>
        </div>
      </div>
      <div class="p-strengthMenu__item">
        <div class="p-strengthMenu__dark">
          <div class="p-strengthMenu__text">
            <h3 class="bold">組立</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-strengthContent animated fadeIn wow" id="content">
    <h2 class="c-section-title bold">事業内容</h2>
    <div class="l-innner">
      <div class="p-strengthContent__wrap">
        <div class="p-strengthContent__item">
          <div class="p-strengthContent__dark">
            <div class="p-strengthContent__text">
              <h3 class="bold">ロボット産業</h3>
            </div>
          </div>
        </div>
        <div class="p-strengthContent__item">
          <div class="p-strengthContent__dark">
            <div class="p-strengthContent__text">
              <h3 class="bold">機械工具</h3>
            </div>
          </div>
        </div>
        <div class="p-strengthContent__item">
          <div class="p-strengthContent__dark">
            <div class="p-strengthContent__text">
              <h3 class="bold">工作機械</h3>
            </div>
          </div>
        </div>
        <div class="p-strengthContent__item">
          <div class="p-strengthContent__dark">
            <div class="p-strengthContent__text">
              <h3 class="bold">半導体</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="p-strengthFacility animated fadeIn wow" id="facility">
    <h2 class="c-section-title bold">主要設備一覧</h2>
    <div class="l-inner js-scrollable">
      <table border="1" class="p-strength__table">
        <tr>
          <th>マシン</th>
          <td>メーカー</td>
          <td>型式</td>
          <td>加工サイズ</td>
        </tr>
        <tr>
          <th>5軸マシニングセンタ</th>
          <td>MAZAK</td>
          <td>VARIAXIS J 500/5X</td>
          <td>φ500×400</td>
        </tr>
        <tr>
          <th>マシニングセンタ</th>
          <td>MAZAK</td>
          <td>VCS-530CLH</td>
          <td>1050×530×510</td>
        </tr>
        <tr>
          <th></th>
          <td>MAZAK</td>
          <td>VTC-16A</td>
          <td>560×410×510</td>
        </tr>
        <tr>
          <th></th>
          <td>brother</td>
          <td>S500</td>
          <td>500×400×300</td>
        </tr>
        <tr>
          <th></th>
          <td>brother</td>
          <td>S700</td>
          <td>700×400×300</td>
        </tr>
        <tr>
          <th>NC複合旋盤</th>
          <td>MAZAK</td>
          <td>QTN-250II MY</td>
          <td>10インチチャック×500</td>
        </tr>
        <tr>
          <th></th>
          <td>MAZAK</td>
          <td>QTN-200MA</td>
          <td>8インチチャック×500</td>
        </tr>
        <tr>
          <th>NC旋盤</th>
          <td>MAZAK</td>
          <td>QTS-100S</td>
          <td>6インチチャック×350</td>
        </tr>
        <tr>
          <th>ワイヤーカット放電加工機</th>
          <td>三菱電機</td>
          <td>DIAX QA10</td>
          <td>350×250×200</td>
        </tr>
        <tr>
          <th>汎用フライス</th>
          <td>大隈豊和</td>
          <td>SMT-2R</td>
          <td>1350×300</td>
        </tr>
        <tr>
          <th></th>
          <td>山崎技研</td>
          <td>YZ-8C</td>
          <td>1500×350</td>
        </tr>
        <tr>
          <th>汎用旋盤</th>
          <td>滝沢鉄工所</td>
          <td>TAL-460</td>
          <td>10インチチャック×800</td>
        </tr>
        <tr>
          <th>平面研削機</th>
          <td>岡本工作機械</td>
          <td>PSC-52AN</td>
          <td>450×200</td>
        </tr>
        <tr>
          <th>3次元CADCAM</th>
          <td>ゼネテック</td>
          <td>Mastercam</td>
          <td>Level3</td>
        </tr>
        <tr>
          <th>画像測定顕微鏡</th>
          <td>Mitutoyo</td>
          <td></td>
          <td>200×170×200</td>
        </tr>
      </table>

      <p>他、ボール盤、ペンチレース、コンターマシン、精密切断機、工具研磨機など</p>
    </div>
  </section>

  <section class="p-strengthColumn animated fadeIn wow">
    <div class="p-strengthColumn__list">
      <div class="p-strengthColumn__item">
        <div class="p-strengthColumn__left">
          <div class="p-strengthColumn__leftImg">
          </div>
        </div>
        <div class="p-strengthColumn__right">
          <div class="p-strengthColumn__rightTop">
            <h3 class="bold">品質保証体制</h3>
          </div>
          <div class="p-strengthColumn__rightBottom">
            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ</p>
          </div>
        </div>
      </div>
      <div class="p-strengthColumn__item">
        <div class="p-strengthColumn__left">
          <div class="p-strengthColumn__leftImg">
          </div>
        </div>
        <div class="p-strengthColumn__right">
          <div class="p-strengthColumn__rightTop">
            <h3 class="bold">自社開発「楽まきくん」</h3>
          </div>
          <div class="p-strengthColumn__rightBottom">
            <p>この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れています。この文章はダミーです。文字の大きさ、量、字間、行間等を確認するために入れ</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>