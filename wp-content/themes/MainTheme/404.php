<!-- 404.php -->
<?php get_header(); ?>
<body>
<div class="l-inner">
    <div class="block__404">
        <p class="title__404 bold">404</p>
        <p class="text__404 bold">申し訳ございません。<br>
            指定されたファイルまたはディレクトリは存在いたしません。</p>
        <a class="btn__404 bold" href="<?php echo esc_url(home_url('')); ?>">トップページ</a>
    </div>
</div>

<style>
    .block__404 {
        font-weight: bold;
        font-family: "游ゴシック体", YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
        color: #343434;
        text-align: center;
    }

    .title__404 {
        font-size: 170px;
        font-weight: bold;
        line-height: 1;
        margin-top: 100px;
    }

    .text__404 {
        font-weight: bold;
        font-size: 18px;
        margin-top: 30px;
    }

    .btn__404 {
        margin-top: 30px;
        font-size: 20px;
        font-weight: bold;
        border: 1px solid #343434;
        width: 430px;
        height: 90px;
        display: block;
        line-height: 90px;
        margin-left: auto;
        margin-right: auto;
        margin-bottom: 160px;
        max-width: 100%;
    }
</style>
<?php get_footer(); ?>
