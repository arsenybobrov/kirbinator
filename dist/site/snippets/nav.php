<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">

    <a class="navbar-brand js-scroll-trigger" href="#page-top">

      <?php if ($image = $site->mainlogo()->toFile()): ?>
        <img src="<?= $image->url() ?>" alt="" />
      <?php else: ?>
        <?php echo $site->title()->html() ?>
      <?php endif ?>

    </a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

      <ul class="navbar-nav ml-auto">

        <?php
        $navigation = $page->navigation()->toStructure();

        foreach($navigation as $navitem): ?>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#<?php echo $navitem->href()->html() ?>"><?php echo $navitem->title()->html() ?></a>
          </li>
        <?php endforeach ?>

      </ul>

    </div>
  </div>
</nav>