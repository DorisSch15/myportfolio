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
    <header class="flex justify-between bg-neonGreen">
        <a class="block" href="<?= $site->url() ?>">DS</a>
        <nav class="flex">
            <?php foreach ($site->children()->listed() as $subpage): ?>
                <a href="<?= $subpage->url() ?>">
                    <?= $subpage->title() ?>
                </a>
            <?php endforeach ?>
        </nav>
    </header>