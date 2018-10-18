<section class="portfolio <?php if ($page->portfoliotype()->html() == 'kachel'): ?> bg-dark  <?php else: ?> p-0 <?php endif ?>" id="<?php echo $page->portfolio_scrollpoint()->html() ?>">
  <div class="container-fluid">

    <?php if ($page->portfoliotype()->html() == 'kachel'): ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading"><?php echo $page->portfolio_headline()->html() ?></h2>
            <hr class="my-4">
            </br>
          </div>
        </div>
      </div>
    <?php endif ?>

    <div class="portfolio_items <?php if ($page->portfoliotype()->html() == 'kachel'): ?> tz2-gallery <?php else: ?> tz-gallery <?php endif ?>">
      <div class="row">

        <?php
        $portfolio = $page->portfolio_items()->toStructure();

        foreach($portfolio as $portfolio_item): ?>

          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">

              <?php if ($image = $portfolio_item->image()->toFile()): ?>
                <a class="lightbox" href="<?= $image->url() ?>">
                  <img src="<?= $image->url() ?>" alt="<?php echo $portfolio_item->headline()->html() ?>">
                </a>
              <?php endif ?>

              <?php if ($page->portfoliotype()->html() == 'kachel'): ?>
                <div class="caption">
                  <h3><?php echo $portfolio_item->headline()->html() ?></h3>
                  <p><?php echo $portfolio_item->description()->kt() ?></p>
                </div>
              <?php endif ?>

            </div>
          </div>

        <?php endforeach ?>

      </div>
    </div>

  </div>
</section>