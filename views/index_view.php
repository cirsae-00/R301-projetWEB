<?php
namespace Blog\View; // PSR-12: head blocks must be separated by a single blank line
class Homepage { // PSR-12: opening brace next line
…
    public function show(): void { // PSR-12: opening brace next line
        ob_start();
        ?><h1>Les derniers billets du blog</h1>
        <?php foreach ($this->posts as $post) { /* PSR-12: opening brace next line */ ?>
            <div class="news">
                <h3><?= htmlspecialchars($post->getTitle()); ?><em>: <?= $post->getDate(); ?></em></h3>
                <p>
                    <?= nl2br(htmlspecialchars($post->getContent())); ?><br>
                    <em><a href="index.php?action=post&id=<?= urlencode($post->getId() ?>">+</a></em>
                </p>
            </div>
            <?php
        }
        (new \Blog\Views\Layout('Le meilleur blog', ob_get_clean()))->show();
    }
}
