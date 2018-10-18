<section id="<?php echo $page->serviceslayer_scrollpoint()->html() ?>">

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading"><?php echo $page->serviceslayer_headline()->html() ?></h2>
        <hr class="my-4">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

      <?php
      $serviceslayer_items = $page->serviceslayer_items()->toStructure();

      foreach($serviceslayer_items as $serviceslayer_item): ?>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x <?php echo $serviceslayer_item->icon()->html() ?> text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3"><?php echo $serviceslayer_item->headline()->html() ?></h3>
            <p class="text-muted mb-0"><?php echo $serviceslayer_item->description()->kt() ?></p>
          </div>
        </div>
      <?php endforeach ?>

    </div>
  </div>
</section>