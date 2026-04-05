<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="サンプルホームの施工事例をご紹介">
  <title>施工事例｜株式会社サンプルホーム</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php include dirname(__DIR__) . '/parts/header.php'; ?>
  <main>
    <section class="c-page-hero" style="background-image: url('https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=1920&q=80');">
      <div class="page-hero__content">
        <span class="en">Works</span>
        <h1 class="ja">施工事例</h1>
      </div>
    </section>
    <nav class="c-breadcrumb">
      <div class="l-container">
        <a href="../index.php">ホーム</a><span>›</span><span>施工事例</span>
      </div>
    </nav>
    <section class="l-section">
      <div class="l-container">
        <div class="p-works__filter">
          <button class="is-active" data-filter="all">すべて</button>
          <button data-filter="modern">モダン</button>
          <button data-filter="natural">ナチュラル</button>
          <button data-filter="japanese">和モダン</button>
          <button data-filter="hiraya">平屋</button>
          <button data-filter="nisetai">二世帯</button>
        </div>
        <div class="p-works__grid">
          <a href="detail.php" class="c-card js-scroll" data-category="modern">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">モダン</span>
              <h3 class="c-card__title">光と風を取り込む平屋の住まい</h3>
              <p class="c-card__meta">東京都世田谷区 K様邸</p>
            </div>
          </a>
          <a href="detail.php" class="c-card js-scroll" data-category="nisetai">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">二世帯</span>
              <h3 class="c-card__title">三世代が快適に暮らす二世帯住宅</h3>
              <p class="c-card__meta">神奈川県横浜市 S様邸</p>
            </div>
          </a>
          <a href="detail.php" class="c-card js-scroll" data-category="natural">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">ナチュラル</span>
              <h3 class="c-card__title">自然素材に包まれたナチュラルモダンの家</h3>
              <p class="c-card__meta">埼玉県さいたま市 M様邸</p>
            </div>
          </a>
          <a href="detail.php" class="c-card js-scroll" data-category="japanese">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">和モダン</span>
              <h3 class="c-card__title">伝統と現代が融合する和モダンの住まい</h3>
              <p class="c-card__meta">千葉県柏市 T様邸</p>
            </div>
          </a>
          <a href="detail.php" class="c-card js-scroll" data-category="hiraya">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">平屋</span>
              <h3 class="c-card__title">庭とつながるワンフロアの暮らし</h3>
              <p class="c-card__meta">東京都府中市 A様邸</p>
            </div>
          </a>
          <a href="detail.php" class="c-card js-scroll" data-category="modern">
            <div class="c-card__image"><img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&q=80" alt="施工事例"></div>
            <div class="c-card__body">
              <span class="c-card__tag">モダン</span>
              <h3 class="c-card__title">シンプルモダンなデザインの家</h3>
              <p class="c-card__meta">神奈川県鎌倉市 N様邸</p>
            </div>
          </a>
        </div>
        <div class="p-works__pagination">
          <span class="current">1</span>
          <a href="#">2</a>
          <a href="#">3</a>
          <a href="#">→</a>
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