<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ライフスタイルに合わせた多彩な商品">
  <title>商品ラインナップ｜株式会社サンプルホーム</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php include dirname(__DIR__) . '/parts/header.php'; ?>
  <main>
    <section class="c-page-hero" style="background-image: url('https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1920&q=80');">
      <div class="page-hero__content">
        <span class="en">Products</span>
        <h1 class="ja">商品ラインナップ</h1>
      </div>
    </section>
    <nav class="c-breadcrumb">
      <div class="l-container">
        <a href="../index.php">ホーム</a><span>›</span><span>商品ラインナップ</span>
      </div>
    </nav>
    <section class="l-section">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Product Lineup</span>
          <span class="ja">あなたに最適な住まいを</span>
          <span class="desc">ライフスタイルやご予算に合わせて、4つの商品ラインをご用意しています</span>
        </div>
        <div class="p-products__grid">
          <a href="detail.php" class="p-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="PREMIUM LINE">
            <div class="content">
              <h3 class="name">PREMIUM LINE</h3>
              <p class="desc">最高品質の素材と匠の技が生み出す、上質な住まい</p>
              <p class="price">2,800万円〜 <span>（税込・本体価格）</span></p>
            </div>
          </a>
          <a href="detail.php" class="p-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80" alt="NATURAL LINE">
            <div class="content">
              <h3 class="name">NATURAL LINE</h3>
              <p class="desc">自然素材にこだわった、家族にやさしい住まい</p>
              <p class="price">2,200万円〜 <span>（税込・本体価格）</span></p>
            </div>
          </a>
          <a href="detail.php" class="p-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80" alt="SMART LINE">
            <div class="content">
              <h3 class="name">SMART LINE</h3>
              <p class="desc">コストパフォーマンスに優れた、賢い家づくり</p>
              <p class="price">1,800万円〜 <span>（税込・本体価格）</span></p>
            </div>
          </a>
          <a href="detail.php" class="p-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80" alt="HIRAYA LINE">
            <div class="content">
              <h3 class="name">HIRAYA LINE</h3>
              <p class="desc">ワンフロアで完結する、ゆとりの平屋住宅</p>
              <p class="price">2,000万円〜 <span>（税込・本体価格）</span></p>
            </div>
          </a>
        </div>
      </div>
    </section>
  </main>
  <footer class="l-footer">
    <div class="l-footer__cta">
      <div class="l-container">
        <h2 class="l-footer__cta-title">家づくりのご相談はお気軽に</h2>
        <p class="l-footer__cta-desc">まずは無料の資料請求から。あなたの理想の住まいづくりをサポートいたします。</p>
        <div class="l-footer__cta-buttons">
          <a href="../contact/index.php" class="c-btn">資料請求・お問い合わせ</a>
          <a href="../modelhouse/index.php" class="c-btn c-btn--outline">モデルハウスを見学する</a>
        </div>
      </div>
    </div>
    <div class="l-footer__main">
      <div class="l-container">
        <div class="l-footer__info">
          <div class="logo-text">サンプルホーム<small>SAMPLE HOME Inc.</small></div>
          <address>〒100-0001<br>東京都千代田区千代田1-1-1</address>
          <a href="tel:0120-000-000" class="tel">0120-000-000</a>
          <p class="hours">営業時間 9:00〜18:00（水曜定休）</p>
        </div>
        <div class="l-footer__nav-col"><h4>家づくり</h4><ul><li><a href="../features/index.php">特長</a></li><li><a href="../features/design.php">デザイン</a></li><li><a href="../features/performance.php">住宅性能</a></li></ul></div>
        <div class="l-footer__nav-col"><h4>実例</h4><ul><li><a href="../works/index.php">施工事例</a></li><li><a href="../interview/index.php">お客様の声</a></li><li><a href="../products/index.php">商品</a></li></ul></div>
        <div class="l-footer__nav-col"><h4>会社情報</h4><ul><li><a href="../company/index.php">会社概要</a></li><li><a href="../recruit/index.php">採用</a></li><li><a href="../contact/index.php">お問い合わせ</a></li></ul></div>
      </div>
    </div>
    <div class="l-footer__bottom">
      <div class="l-container">
        <div class="l-footer__bottom-nav"><a href="../privacy/index.php">プライバシーポリシー</a></div>
        <p class="l-footer__copyright">© 2025 Sample Home Inc. All Rights Reserved.</p>
      </div>
    </div>
  </footer>
  <div class="l-fixed-cta">
    <a href="../contact/index.php" class="l-fixed-cta__btn l-fixed-cta__btn--primary">📄 資料請求</a>
    <a href="tel:0120-000-000" class="l-fixed-cta__btn l-fixed-cta__btn--secondary">📞 電話で相談</a>
  </div>
  <script src="../js/main.js"></script>
</body>
</html>