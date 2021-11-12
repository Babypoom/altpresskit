<header>
  <?php if (!isset(ViewHelper::$headerImage)): ?>
    <h1 class="sixteen columns"><?php echo ViewHelper::$header; ?></h1>
  <?php else: ?>
    <h1 class="sixteen columns has-image" style="background-image: url(<?php echo ViewHelper::$headerImage; ?>), linear-gradient(0deg,#ffd4e4 0,#c2d9ff 60%) !important;; background-position: center;">
      <?php echo ViewHelper::$header; ?>
    </h1>
  <?php endif; ?>
</header>
