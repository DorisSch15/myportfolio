<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/style/main.css') ?>
</head>
<body class="bg-bgColor">
    <header class="container flex justify-between my-4">
        <a class="block font-serif text-lg text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
        <nav class="flex w-2/4 justify-between font-sans text-sm text-textColor">
            <?php foreach ($site->children()->listed() as $subpage): ?>
                <a href="<?= $subpage->url() ?>">
                    <?= $subpage->title() ?>
                </a>
            <?php endforeach ?>
        </nav>
    </header>