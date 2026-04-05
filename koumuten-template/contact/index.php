<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="資料請求・無料相談はこちら">
  <title>資料請求・お問い合わせ｜株式会社サンプルホーム</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php include dirname(__DIR__) . '/parts/header.php'; ?>
  <main>
    <section class="c-page-hero" style="background-image: url('https://images.unsplash.com/photo-1600573472592-401b489a3cdc?w=1920&q=80');">
      <div class="page-hero__content">
        <span class="en">Contact</span>
        <h1 class="ja">資料請求・お問い合わせ</h1>
      </div>
    </section>
    <nav class="c-breadcrumb">
      <div class="l-container">
        <a href="../index.php">ホーム</a><span>›</span><span>資料請求・お問い合わせ</span>
      </div>
    </nav>
    <section class="l-section l-section--bg">
      <div class="p-contact__form">
        <div class="c-section-title">
          <span class="en">Contact Form</span>
          <span class="ja">お問い合わせフォーム</span>
          <span class="desc">必要事項をご入力の上、送信ボタンを押してください</span>
        </div>
        <form data-validate>
          <div class="p-contact__field">
            <label>お問い合わせ種別 <span class="required">必須</span></label>
            <div class="radio-group">
              <label><input type="radio" name="type" value="request" checked> 資料請求</label>
              <label><input type="radio" name="type" value="consultation"> 無料相談</label>
              <label><input type="radio" name="type" value="modelhouse"> モデルハウス見学</label>
              <label><input type="radio" name="type" value="other"> その他</label>
            </div>
          </div>
          <div class="p-contact__field">
            <label>お名前 <span class="required">必須</span></label>
            <input type="text" name="name" placeholder="山田 太郎" required>
          </div>
          <div class="p-contact__field">
            <label>フリガナ <span class="required">必須</span></label>
            <input type="text" name="furigana" placeholder="ヤマダ タロウ" required>
          </div>
          <div class="p-contact__field">
            <label>メールアドレス <span class="required">必須</span></label>
            <input type="email" name="email" placeholder="example@email.com" required>
          </div>
          <div class="p-contact__field">
            <label>電話番号 <span class="required">必須</span></label>
            <input type="tel" name="tel" placeholder="090-0000-0000" required>
          </div>
          <div class="p-contact__field">
            <label>ご住所</label>
            <input type="text" name="address" placeholder="東京都○○区○○1-2-3">
          </div>
          <div class="p-contact__field">
            <label>建築予定エリア</label>
            <select name="area">
              <option value="">選択してください</option>
              <option value="tokyo">東京都</option>
              <option value="kanagawa">神奈川県</option>
              <option value="saitama">埼玉県</option>
              <option value="chiba">千葉県</option>
              <option value="other">その他</option>
            </select>
          </div>
          <div class="p-contact__field">
            <label>建築予定時期</label>
            <select name="schedule">
              <option value="">選択してください</option>
              <option value="6month">半年以内</option>
              <option value="1year">1年以内</option>
              <option value="2year">2年以内</option>
              <option value="undecided">未定</option>
            </select>
          </div>
          <div class="p-contact__field">
            <label>ご予算</label>
            <select name="budget">
              <option value="">選択してください</option>
              <option value="under2000">2,000万円未満</option>
              <option value="2000-2500">2,000〜2,500万円</option>
              <option value="2500-3000">2,500〜3,000万円</option>
              <option value="3000-3500">3,000〜3,500万円</option>
              <option value="over3500">3,500万円以上</option>
            </select>
          </div>
          <div class="p-contact__field">
            <label>ご相談内容・ご質問</label>
            <textarea name="message" placeholder="ご自由にご記入ください"></textarea>
          </div>
          <div class="p-contact__privacy">
            <label><input type="checkbox" required> <a href="../privacy/index.php" target="_blank">プライバシーポリシー</a>に同意する</label>
          </div>
          <div class="p-contact__submit">
            <button type="submit" class="c-btn c-btn--lg">送信する</button>
          </div>
        </form>
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