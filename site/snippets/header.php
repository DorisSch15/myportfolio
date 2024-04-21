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
        <section id="desktop-menu" class="container flex justify-between py-4">
            <div>
                <a class="block my-auto font-serif text-4xl text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
            </div>
            <nav class="flex">
                <button id="hamburger-btn" class="text-textColor text-4xl md:hidden">
                    &#9776;
                </button>
                <ul class="hidden md:flex md:items-center md:gap-32 font-sans text-base text-textColor">
                    <?php foreach ($site->children()->listed() as $subpage): ?>
                        <li>
                            <a class="p-2 focus:text-heroColor" href="<?= $subpage->url() ?>">
                            <?= $subpage->title() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </section>
        <!-- <section id="mobile-menu" class="absolute top-0 bg-bgColor w-full text-5xl flex flex-col justify-content-center md:hidden">
            <button class="text-4xl p-4 self-end text-heroColor">
                &times;
            </button>
            <nav class="h-dvh p-8 bg-red-400" aria-label="mobile">
                <ul class="flex flex-col text-center">
                    <?php foreach ($site->children()->listed() as $subpage): ?>
                        <li>
                            <a class="w-full text-heroColor py-4 hover:opacity-75" href="<?= $subpage->url() ?>">
                                <?= $subpage->title() ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
        </section> -->
    </header>