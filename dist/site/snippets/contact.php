<section id="<?php echo $page->contact_scrollpoint()->html() ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading"><?php echo $page->contact_headline()->html() ?></h2>
        <hr class="my-4">
        <p class="mb-5"><?php echo $page->contact_text()->html() ?></p>
      </div>
    </div>
    <div class="row contact-items">
    
      <div class="col-sm-4 ml-auto text-center contact-item">
        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
        <p>
          <a href="tel:<?php echo $site->tel()->html() ?>"><?php echo $site->tel()->kt() ?></a>
        </p>
      </div>
      <div class="col-sm-4 mr-auto text-center contact-item">
        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
        <p>
          <a href="mailto:<?php echo $site->mail()->html() ?>"><?php echo $site->mail()->kt() ?></a>
        </p>
      </div>
      <div class="col-sm-4 mr-auto text-center contact-item">
        <i class="fa fa-map-marker fa-3x mb-3 sr-contact"></i>
        <p>
          <?php echo $site->adress()->kt() ?>
        </p>
      </div>
    </div>
  </div>
</section>