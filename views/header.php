<header>
  <?php if (!isset(ViewHelper::$headerImage)): ?>
    <h1 class="sixteen columns"><?php echo ViewHelper::$header; ?></h1>
  <?php else: ?>
    <h1 class="sixteen columns has-image" style="background-image: url(<?php echo ViewHelper::$headerImage; ?>), linear-gradient(0deg,#ffd4e4 0,#c2d9ff 60%) !important;; background-position: center; border-radius: 15px;">
    <?php echo ViewHelper::$header; ?>
    </h1>
    <h4 class="sixteen columns" style="text-align: center; margin-top: 5px;margin-bottom: 20px">Un faire-part de naissance unique au monde</h4>
    
  <?php endif; ?>
</header>
