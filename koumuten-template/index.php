<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="株式会社サンプルホーム｜自然素材と高性能を両立した注文住宅。デザイン・性能・価格のバランスを追求した家づくりをご提案します。">
  <title>株式会社サンプルホーム｜自然素材×高性能の注文住宅</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <?php include __DIR__ . '/parts/header.php'; ?>

  <!-- ===== Main Content ===== -->
  <main>

    <!-- Hero / ファーストビュー -->
    <section class="p-hero">
      <div class="p-hero__slider">
        <div class="p-hero__slide is-active">
          <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=1920&q=80" alt="美しい外観の住宅">
        </div>
        <div class="p-hero__slide">
          <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=1920&q=80" alt="開放感のあるリビング">
        </div>
        <div class="p-hero__slide">
          <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=1920&q=80" alt="自然光が差し込む空間">
        </div>
        <div class="p-hero__slide">
          <img src="https://images.unsplash.com/photo-1600573472592-401b489a3cdc?w=1920&q=80" alt="家族が集うダイニング">
        </div>
        <div class="p-hero__slide">
          <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=1920&q=80" alt="こだわりのキッチン">
        </div>
      </div>
      <div class="p-hero__overlay"></div>
      <div class="p-hero__content">
        <p class="p-hero__sub-copy">自然素材と確かな技術で、家族の未来を守る</p>
        <h1 class="p-hero__main-copy">あなたらしい<br>暮らしをつくる。</h1>
      </div>
    </section>

    <!-- Catchcopy Section -->
    <section class="p-home-catch l-section js-scroll">
      <div class="l-container">
        <p class="p-home-catch__sub">CONCEPT</p>
        <h2 class="p-home-catch__main">デザインと性能、<br>そして暮らしやすさを。</h2>
        <p class="p-home-catch__desc">
          私たちサンプルホームは、「美しさ」と「住み心地」を両立した家づくりを追求しています。<br>
          自然素材を活かしたデザイン、高い断熱性能と耐震性能、そして長く安心して暮らせる保証制度。<br>
          家族一人ひとりの想いに寄り添い、世界にひとつだけの住まいをご提案いたします。
        </p>
      </div>
    </section>

    <!-- Features Section -->
    <section class="p-home-features l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Features</span>
          <span class="ja">家づくりの特長</span>
          <span class="desc">サンプルホームが選ばれる6つの理由</span>
        </div>
        <div class="p-home-features__grid">
          <a href="features/design.php" class="p-home-features__item js-scroll">
            <div class="num">01</div>
            <h3>デザイン</h3>
            <p>暮らしに寄り添う美しい空間デザイン。自然素材を活かした、温もりある住まいをご提案します。</p>
          </a>
          <a href="features/performance.php" class="p-home-features__item js-scroll">
            <div class="num">02</div>
            <h3>住宅性能</h3>
            <p>断熱等級6以上、耐震等級3を標準仕様に。快適で安全な暮らしを実現する高性能住宅です。</p>
          </a>
          <a href="features/price.php" class="p-home-features__item js-scroll">
            <div class="num">03</div>
            <h3>価格</h3>
            <p>適正価格で高品質な住まいを。明確な価格体系で、安心してご検討いただけます。</p>
          </a>
          <a href="features/warranty.php" class="p-home-features__item js-scroll">
            <div class="num">04</div>
            <h3>保証</h3>
            <p>最長60年の長期保証制度。建てた後も安心の、手厚いアフターサポートをご用意しています。</p>
          </a>
          <a href="features/flow.php" class="p-home-features__item js-scroll">
            <div class="num">05</div>
            <h3>家づくりの流れ</h3>
            <p>ご相談から完成、お引き渡しまで。家づくりの全工程を丁寧にサポートいたします。</p>
          </a>
          <a href="features/faq.php" class="p-home-features__item js-scroll">
            <div class="num">06</div>
            <h3>よくあるご質問</h3>
            <p>お客様からよくいただくご質問をまとめました。家づくりの疑問にお答えします。</p>
          </a>
        </div>
        <a href="features/index.php" class="c-btn c-btn--center">家づくりの特長を見る</a>
      </div>
    </section>

    <!-- Works Section -->
    <section class="p-home-works l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Works</span>
          <span class="ja">施工事例</span>
          <span class="desc">私たちが手がけた住まいの実例をご紹介</span>
        </div>
        <div class="p-home-works__grid">
          <a href="works/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="施工事例1">
            </div>
            <div class="c-card__body">
              <span class="c-card__tag">平屋</span>
              <h3 class="c-card__title">光と風を取り込む平屋の住まい</h3>
              <p class="c-card__meta">東京都世田谷区 K様邸</p>
            </div>
          </a>
          <a href="works/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?w=800&q=80" alt="施工事例2">
            </div>
            <div class="c-card__body">
              <span class="c-card__tag">二世帯</span>
              <h3 class="c-card__title">三世代が快適に暮らす二世帯住宅</h3>
              <p class="c-card__meta">神奈川県横浜市 S様邸</p>
            </div>
          </a>
          <a href="works/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600607687644-aac4c3eac7f4?w=800&q=80" alt="施工事例3">
            </div>
            <div class="c-card__body">
              <span class="c-card__tag">ナチュラル</span>
              <h3 class="c-card__title">自然素材に包まれたナチュラルモダンの家</h3>
              <p class="c-card__meta">埼玉県さいたま市 M様邸</p>
            </div>
          </a>
        </div>
        <a href="works/index.php" class="c-btn c-btn--center">施工事例一覧を見る</a>
      </div>
    </section>

    <!-- Numbers Section -->
    <section class="p-home-numbers l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title c-section-title--white">
          <span class="en">Numbers</span>
          <span class="ja">数字で見るサンプルホーム</span>
        </div>
        <div class="p-home-numbers__grid">
          <div class="p-home-numbers__item js-scroll">
            <div class="number" data-count="1500" data-suffix="棟+">0</div>
            <p class="label">累計施工実績</p>
          </div>
          <div class="p-home-numbers__item js-scroll">
            <div class="number" data-count="98" data-suffix="%">0</div>
            <p class="label">お客様満足度</p>
          </div>
          <div class="p-home-numbers__item js-scroll">
            <div class="number" data-count="25" data-suffix="年">0</div>
            <p class="label">創業</p>
          </div>
          <div class="p-home-numbers__item js-scroll">
            <div class="number" data-count="60" data-suffix="年">0</div>
            <p class="label">最長保証期間</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Interview Section -->
    <section class="p-home-interview l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Interview</span>
          <span class="ja">お客様インタビュー</span>
          <span class="desc">実際にサンプルホームで家を建てたお客様の声</span>
        </div>
        <div class="p-home-interview__slider">
          <div class="p-home-interview__track">
            <a href="interview/index.php" class="p-home-interview__item">
              <div class="image"><img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=600&q=80" alt="お客様インタビュー1"></div>
              <div class="body">
                <p class="name">K様ご家族（東京都）</p>
                <h3 class="title">自然素材の家で子供たちがのびのび成長しています</h3>
              </div>
            </a>
            <a href="interview/index.php" class="p-home-interview__item">
              <div class="image"><img src="https://images.unsplash.com/photo-1600566753086-00f18fb6b3ea?w=600&q=80" alt="お客様インタビュー2"></div>
              <div class="body">
                <p class="name">S様ご夫婦（神奈川県）</p>
                <h3 class="title">断熱性能の高さに驚き。冬でもエアコン1台で快適です</h3>
              </div>
            </a>
            <a href="interview/index.php" class="p-home-interview__item">
              <div class="image"><img src="https://images.unsplash.com/photo-1600573472592-401b489a3cdc?w=600&q=80" alt="お客様インタビュー3"></div>
              <div class="body">
                <p class="name">M様ご家族（埼玉県）</p>
                <h3 class="title">営業さんの対応が丁寧で、安心して家づくりを進められました</h3>
              </div>
            </a>
            <a href="interview/index.php" class="p-home-interview__item">
              <div class="image"><img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=600&q=80" alt="お客様インタビュー4"></div>
              <div class="body">
                <p class="name">T様ご家族（千葉県）</p>
                <h3 class="title">理想以上のキッチンが完成。毎日の料理が楽しくなりました</h3>
              </div>
            </a>
          </div>
        </div>
        <div class="p-home-interview__controls">
          <button class="prev" aria-label="前へ">←</button>
          <button class="next" aria-label="次へ">→</button>
        </div>
        <a href="interview/index.php" class="c-btn c-btn--center">お客様の声をもっと見る</a>
      </div>
    </section>

    <!-- Products Section -->
    <section class="p-home-products l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Products</span>
          <span class="ja">商品ラインナップ</span>
          <span class="desc">ライフスタイルに合わせた多彩な商品をご用意</span>
        </div>
        <div class="p-home-products__grid">
          <a href="products/detail.php" class="p-home-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?w=800&q=80" alt="PREMIUM LINE">
            <div class="content">
              <h3 class="name">PREMIUM LINE</h3>
              <p class="desc">最高品質の素材と匠の技が生み出す、上質な住まい</p>
            </div>
          </a>
          <a href="products/detail.php" class="p-home-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=800&q=80" alt="NATURAL LINE">
            <div class="content">
              <h3 class="name">NATURAL LINE</h3>
              <p class="desc">自然素材にこだわった、家族にやさしい住まい</p>
            </div>
          </a>
          <a href="products/detail.php" class="p-home-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=800&q=80" alt="SMART LINE">
            <div class="content">
              <h3 class="name">SMART LINE</h3>
              <p class="desc">コストパフォーマンスに優れた、賢い家づくり</p>
            </div>
          </a>
          <a href="products/detail.php" class="p-home-products__item js-scroll">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800&q=80" alt="HIRAYA LINE">
            <div class="content">
              <h3 class="name">HIRAYA LINE</h3>
              <p class="desc">ワンフロアで完結する、ゆとりの平屋住宅</p>
            </div>
          </a>
        </div>
        <a href="products/index.php" class="c-btn c-btn--center">商品ラインナップを見る</a>
      </div>
    </section>

    <!-- Model House Section -->
    <section class="p-home-modelhouse l-section js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Model House</span>
          <span class="ja">モデルハウス</span>
          <span class="desc">実際の住まいを体感できるモデルハウスをご案内</span>
        </div>
        <div class="p-home-modelhouse__grid">
          <a href="modelhouse/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=600&q=80" alt="モデルハウス1">
            </div>
            <div class="c-card__body">
              <p class="location">東京都世田谷区</p>
              <h3 class="c-card__title">世田谷モデルハウス</h3>
              <p class="c-card__desc">自然光が溢れる開放的なLDKと、機能的な家事動線を体感いただけます。</p>
              <span class="status status--open">常時公開中</span>
            </div>
          </a>
          <a href="modelhouse/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80" alt="モデルハウス2">
            </div>
            <div class="c-card__body">
              <p class="location">神奈川県横浜市</p>
              <h3 class="c-card__title">横浜みなとみらいモデルハウス</h3>
              <p class="c-card__desc">都市型の高性能住宅。コンパクトながら広がりを感じる設計です。</p>
              <span class="status status--reservation">完全予約制</span>
            </div>
          </a>
          <a href="modelhouse/detail.php" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3?w=600&q=80" alt="モデルハウス3">
            </div>
            <div class="c-card__body">
              <p class="location">埼玉県さいたま市</p>
              <h3 class="c-card__title">さいたま新都心モデルハウス</h3>
              <p class="c-card__desc">平屋ならではの暮らしやすさを実感できる、バリアフリー対応モデル。</p>
              <span class="status status--open">常時公開中</span>
            </div>
          </a>
        </div>
        <a href="modelhouse/index.php" class="c-btn c-btn--center">モデルハウス一覧を見る</a>
      </div>
    </section>

    <!-- Blog Section -->
    <section class="p-home-blog l-section l-section--bg js-scroll">
      <div class="l-container">
        <div class="c-section-title">
          <span class="en">Blog</span>
          <span class="ja">コラム・お知らせ</span>
        </div>
        <div class="p-home-blog__grid">
          <a href="#" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=600&q=80" alt="コラム1">
            </div>
            <div class="c-card__body">
              <span class="c-card__date">2025.03.15</span>
              <span class="c-card__tag">コラム</span>
              <h3 class="c-card__title">注文住宅の間取りで失敗しないための5つのポイント</h3>
            </div>
          </a>
          <a href="#" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600573472592-401b489a3cdc?w=600&q=80" alt="コラム2">
            </div>
            <div class="c-card__body">
              <span class="c-card__date">2025.03.10</span>
              <span class="c-card__tag">お知らせ</span>
              <h3 class="c-card__title">春の完成見学会を開催いたします</h3>
            </div>
          </a>
          <a href="#" class="c-card js-scroll">
            <div class="c-card__image">
              <img src="https://images.unsplash.com/photo-1600047509807-ba8f99d2cdde?w=600&q=80" alt="コラム3">
            </div>
            <div class="c-card__body">
              <span class="c-card__date">2025.03.05</span>
              <span class="c-card__tag">コラム</span>
              <h3 class="c-card__title">高気密・高断熱住宅のメリットと選び方</h3>
            </div>
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- ===== Footer ===== -->
  <footer class="l-footer">
    <!-- Footer CTA -->
    <div class="l-footer__cta">
      <div class="l-container">
        <h2 class="l-footer__cta-title">家づくりのご相談はお気軽に</h2>
        <p class="l-footer__cta-desc">まずは無料の資料請求から。あなたの理想の住まいづくりをサポートいたします。</p>
        <div class="l-footer__cta-buttons">
          <a href="contact/index.php" class="c-btn">資料請求・お問い合わせ</a>
          <a href="modelhouse/index.php" class="c-btn c-btn--outline">モデルハウスを見学する</a>
        </div>
      </div>
    </div>

    <!-- Footer Main -->
    <div class="l-footer__main">
      <div class="l-container">
        <div class="l-footer__info">
          <div class="logo-text">
            サンプルホーム
            <small>SAMPLE HOME Inc.</small>
          </div>
          <address>
            〒100-0001<br>
            東京都千代田区千代田1-1-1<br>
            サンプルビル3F
          </address>
          <a href="tel:0120-000-000" class="tel">0120-000-000</a>
          <p class="hours">営業時間 9:00〜18:00（水曜定休）</p>
          <div class="l-footer__sns">
            <a href="#" aria-label="Instagram">📷</a>
            <a href="#" aria-label="YouTube">▶</a>
            <a href="#" aria-label="LINE">💬</a>
          </div>
        </div>

        <div class="l-footer__nav-col">
          <h4>家づくり</h4>
          <ul>
            <li><a href="features/index.php">家づくりの特長</a></li>
            <li><a href="features/design.php">デザイン</a></li>
            <li><a href="features/performance.php">住宅性能</a></li>
            <li><a href="features/price.php">価格</a></li>
            <li><a href="features/warranty.php">保証</a></li>
            <li><a href="features/flow.php">家づくりの流れ</a></li>
            <li><a href="features/faq.php">よくあるご質問</a></li>
          </ul>
        </div>

        <div class="l-footer__nav-col">
          <h4>実例・商品</h4>
          <ul>
            <li><a href="works/index.php">施工事例</a></li>
            <li><a href="interview/index.php">お客様インタビュー</a></li>
            <li><a href="products/index.php">商品ラインナップ</a></li>
            <li><a href="modelhouse/index.php">モデルハウス</a></li>
          </ul>
        </div>

        <div class="l-footer__nav-col">
          <h4>会社情報</h4>
          <ul>
            <li><a href="company/index.php">会社概要</a></li>
            <li><a href="recruit/index.php">採用情報</a></li>
            <li><a href="contact/index.php">資料請求・お問い合わせ</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Footer Bottom -->
    <div class="l-footer__bottom">
      <div class="l-container">
        <div class="l-footer__bottom-nav">
          <a href="privacy/index.php">プライバシーポリシー</a>
          <a href="#">サイトマップ</a>
        </div>
        <p class="l-footer__copyright">© 2025 Sample Home Inc. All Rights Reserved.</p>
      </div>
    </div>
  </footer>

  <!-- ===== Fixed CTA ===== -->
  <div class="l-fixed-cta">
    <a href="contact/index.php" class="l-fixed-cta__btn l-fixed-cta__btn--primary">
      📄 資料請求
    </a>
    <a href="tel:0120-000-000" class="l-fixed-cta__btn l-fixed-cta__btn--secondary">
      📞 電話で相談
    </a>
  </div>

  <script src="js/main.js"></script>
</body>
</html>
