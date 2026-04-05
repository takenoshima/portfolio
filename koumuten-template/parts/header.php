<?php
$siteRoot = realpath(dirname(__DIR__));
$scriptDir = realpath(dirname($_SERVER['SCRIPT_FILENAME'] ?? ''));
$depth = 0;
if ($siteRoot && $scriptDir && strpos($scriptDir, $siteRoot) === 0) {
  $tail = substr($scriptDir, strlen($siteRoot));
  $tail = trim(str_replace('\\', '/', $tail), '/');
  $depth = $tail === '' ? 0 : substr_count($tail, '/') + 1;
}
$prefix = str_repeat('../', $depth);
?>
<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__logo">
      <a href="<?= $prefix ?>index.php">
        <span class="logo-text">
          サンプルホーム
          <small>SAMPLE HOME</small>
        </span>
      </a>
    </div>

    <nav class="l-header__nav">
      <ul>
        <li>
          <a href="<?= $prefix ?>features/index.php">家づくりの特長</a>
          <ul class="l-header__dropdown">
            <li><a href="<?= $prefix ?>features/design.php">デザイン</a></li>
            <li><a href="<?= $prefix ?>features/performance.php">住宅性能</a></li>
            <li><a href="<?= $prefix ?>features/price.php">価格</a></li>
            <li><a href="<?= $prefix ?>features/warranty.php">保証</a></li>
            <li><a href="<?= $prefix ?>features/flow.php">家づくりの流れ</a></li>
            <li><a href="<?= $prefix ?>features/faq.php">よくあるご質問</a></li>
          </ul>
        </li>
        <li><a href="<?= $prefix ?>works/index.php">施工事例</a></li>
        <li><a href="<?= $prefix ?>interview/index.php">お客様の声</a></li>
        <li><a href="<?= $prefix ?>products/index.php">商品ラインナップ</a></li>
        <li><a href="<?= $prefix ?>modelhouse/index.php">モデルハウス</a></li>
        <li><a href="<?= $prefix ?>company/index.php">会社概要</a></li>
      </ul>
    </nav>

    <div class="l-header__actions">
      <a href="<?= $prefix ?>contact/index.php" class="l-header__cta">資料請求・お問い合わせ</a>
      <button class="l-header__hamburger" aria-label="メニューを開く">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </div>
</header>

<div class="l-menu-modal">
  <button type="button" class="l-menu-modal__close" aria-label="メニューを閉じる"></button>
  <div class="l-menu-modal__inner">
    <nav class="l-menu-modal__nav">
      <a href="<?= $prefix ?>index.php"><span class="en">Home</span>ホーム</a>
      <a href="<?= $prefix ?>features/index.php"><span class="en">Features</span>家づくりの特長</a>
      <a href="<?= $prefix ?>features/design.php"><span class="en">Design</span>デザイン</a>
      <a href="<?= $prefix ?>features/performance.php"><span class="en">Performance</span>住宅性能</a>
      <a href="<?= $prefix ?>features/price.php"><span class="en">Price</span>価格</a>
      <a href="<?= $prefix ?>features/warranty.php"><span class="en">Warranty</span>保証</a>
      <a href="<?= $prefix ?>features/flow.php"><span class="en">Flow</span>家づくりの流れ</a>
      <a href="<?= $prefix ?>features/faq.php"><span class="en">FAQ</span>よくあるご質問</a>
      <a href="<?= $prefix ?>works/index.php"><span class="en">Works</span>施工事例</a>
      <a href="<?= $prefix ?>interview/index.php"><span class="en">Interview</span>お客様の声</a>
      <a href="<?= $prefix ?>products/index.php"><span class="en">Products</span>商品ラインナップ</a>
      <a href="<?= $prefix ?>modelhouse/index.php"><span class="en">Model House</span>モデルハウス</a>
      <a href="<?= $prefix ?>company/index.php"><span class="en">Company</span>会社概要</a>
      <a href="<?= $prefix ?>recruit/index.php"><span class="en">Recruit</span>採用情報</a>
      <a href="<?= $prefix ?>contact/index.php"><span class="en">Contact</span>資料請求・お問い合わせ</a>
      <a href="<?= $prefix ?>privacy/index.php"><span class="en">Privacy</span>プライバシーポリシー</a>
    </nav>
    <div class="l-menu-modal__contact">
      <a href="tel:0120-000-000" class="tel">0120-000-000</a>
      <p class="hours">営業時間 9:00〜18:00（水曜定休）</p>
      <a href="<?= $prefix ?>contact/index.php" class="c-btn">資料請求・お問い合わせ →</a>
    </div>
  </div>
</div>
