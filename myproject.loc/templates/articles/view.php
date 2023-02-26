<?php include __DIR__ . '/../header.php';
if ($user !== null && $user->isAdmin()) : ?>
    <a href="/articles/<?= $article->getId() ?>/edit">Редактировать</a>
<?php endif; ?>
<h1><?= $article->getName() ?></h1>
<p><?= $article->getText() ?></p>
<p>Автор: <?= $article->getAuthor()->getNickname() ?></p>
<!-- Если не админ не показываем ссылку! -->
<?php if ($user !== null && $user->isAdmin()) : ?>
    <p><a href="/articles/<?= $article->getId() ?>/edit">Редактировать</a></p>
<?php endif ?>
<?php include __DIR__ . '/../footer.php'; ?>
