<footer class="footer bg-primary">
    <div class="container">
        <ul class="footer-nav">

            <?php
            $footer_navigation = $page->footer_navigation()->toStructure();

            foreach($footer_navigation as $navitem): ?>
            <li class="footer-nav-item">

                <?php if ($navitem->linktype()->html() == 'no'): ?>
                    <a class="footer-nav-link" data-toggle="modal" data-target="#<?php echo $navitem->href()->html() ?>"><?php echo $navitem->title()->html() ?></a>
                <?php else: ?>
                    <a class="footer-nav-link" href="<?php echo $navitem->href()->html() ?>"><?php echo $navitem->title()->html() ?></a>
                <?php endif ?>
                
            </li>
            <?php endforeach ?>

        </ul>
    </div>
</footer>

<?php
$footer_modals = $page->footer_modals()->toStructure();

foreach($footer_modals as $modalitem): ?>

<div class="modal fade" id="<?php echo $modalitem->modalid()->html() ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalitem->modalid()->html() ?>" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="h5_<?php echo $modalitem->modalid()->html() ?>">
                    <?php echo $modalitem->headline()->html() ?>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $modalitem->text()->kt() ?>
            </div>
        </div>
    </div>    
</div>

<?php endforeach ?>