<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/style/main.css') ?>
</head>
<body class="container bg-bgColor">
    <header class="flex justify-between my-4 bg-orange-400">
        <a class="block my-auto font-serif text-2xl text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
        <div>
            <button class="text-textColor bg-blue-400 size-20 md:hidden">
                <span class="text-3xl">&#9776;</span>
            </button>
            <nav class="bg-green-500 hidden md:block md:my-auto font-sans text-sm text-textColor">
                <?php foreach ($site->children()->listed() as $subpage): ?>
                    <a class="md:pl-32 lg:pl-48" href="<?= $subpage->url() ?>">
                        <?= $subpage->title() ?>
                    </a>
                <?php endforeach ?>
            </nav>
        </div>
    </header>