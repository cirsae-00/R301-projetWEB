<?php
namespace Views;
class Homepage { // PSR-12: opening brace next line
    private $posts;

    public function show(): void { // PSR-12: opening brace next line
        ob_start();
        ?><h1>Les derniers billets du blog</h1>
        <?php foreach ($this->posts as $post) { /* PSR-12: opening brace next line */ ?>
            <div class="news">
                <h3><?= htmlspecialchars($post->getTitle()); ?><em>: <?= $post->getDate(); ?></em></h3>
                <p>
                    <?= nl2br(htmlspecialchars($post->getContent())); ?><br>
                    <em><a href="../../index.php?action=post&id=<?= urlencode($post->getId()) ?>">+</a></em>
                </p>
            </div>
            <?php
        }
        (new \View\Layout\Layout('Le meilleur blog', ob_get_clean()))->show();
    }
}
