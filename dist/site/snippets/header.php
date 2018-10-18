<header class="masthead text-center text-white d-flex" style="background-image:url('content/home/<?php echo $page->header_bgimage() ?>')">
  <div class="container my-auto">
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <h1 class="text-uppercase">
          <strong><?php echo $page->header_headline()->html() ?></strong>
        </h1>
        <hr>
      </div>
      <div class="col-lg-8 mx-auto">
        <p class="text-faded mb-5"><?php echo $page->header_description()->html() ?></p>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">
          <?php echo $page->header_cta_left()->html() ?>
        </a>
      </div>
    </div>
  </div>
  <div class="contact-ctas">
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="tel:<?php echo $site->tel()->html() ?>">
      <i class="fa fa-phone"></i>
    </a>
    <a class="btn btn-primary btn-xl js-scroll-trigger" href="mailto:<?php echo $site->mail()->html() ?>">
      <i class="fa fa-envelope-o"></i>
    </a>
  </div>
</header>