<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/style/main.css') ?>
</head>
<body>
<div class="container mx-auto">
    <header class="bg-neonGreen">
        <a href="<?= $site->url() ?>">DS</a>
        <nav class="menu">
            <?php foreach ($site->children()->listed() as $subpage): ?>
                <a href="<?= $subpage->url() ?>">
                    <?= $subpage->title() ?>
                </a>
            <?php endforeach ?>
        </nav>
    </header>
    <h1 class="text-4xl"><?= $page->title() ?></h1>