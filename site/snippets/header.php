<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title() ?></title>

    <?= css('assets/style/main.css') ?>
</head>
<body class="bg-bgColor">
    <header>
        <div class="container flex justify-between py-4">
            <div>
                <a class="block my-auto font-serif text-3xl text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
            </div>
            <nav class="flex">
                <button class="text-textColor bg-blue-400 size-20 md:hidden">
                    <span class="text-3xl">&#9776;</span>
                </button>
                <ul class="hidden md:flex md:items-center md:gap-32 font-sans text-base text-textColor">
                    <?php foreach ($site->children()->listed() as $subpage): ?>
                        <li>
                            <a class="p-2" href="<?= $subpage->url() ?>">
                            <?= $subpage->title() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </div>
    </header>