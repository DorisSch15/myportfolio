<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/style/main.css') ?>
</head>
<body class="bg-bgColor">
    <header class=" container mx-auto flex justify-between">
        <a class="block text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
        <nav class="flex text-textColor">
            <?php foreach ($site->children()->listed() as $subpage): ?>
                <a href="<?= $subpage->url() ?>">
                    <?= $subpage->title() ?>
                </a>
            <?php endforeach ?>
        </nav>
    </header>