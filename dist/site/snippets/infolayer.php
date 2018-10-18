<section class="bg-primary" id="<?php echo $page->infolayer_scrollpoint()->html() ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white"><?php echo $page->infolayer_headline()->html() ?></h2>
        <hr class="light my-4">
        <p class="text-faded mb-4"><?php echo $page->infolayer_description()->html() ?></p>
        <a class="btn btn-light btn-xl js-scroll-trigger" href="#<?php echo $page->infolayer_cta_scrollpoint()->html() ?>">
          <?php echo $page->infolayer_cta()->html() ?>
        </a>
      </div>
    </div>
  </div>
</section>