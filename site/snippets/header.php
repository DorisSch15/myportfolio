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
        <section class="container flex flex-row justify-between py-4">
            <!-- navLogo -->
            <div>
                <a class="block my-auto font-serif text-4xl text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
            </div>
            <!-- navMobile -->
            <nav id="navMobile" class="fixed top-0 right-0 h-screen w-screen z-50 bg-bgColor hidden flex-row justify-center text-textColor md:hidden">
                <button id="btn-hamClose" class="bg-red-400 flex justify-center md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" class="block fill-heroColor"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
                <ul>
                    <?php foreach ($site->children()->listed() as $subpage): ?>
                        <li class="py-12 bg-blue-400 w-full">
                            <a class="p-2 focus:text-heroColor" href="<?= $subpage->url() ?>">
                            <?= $subpage->title() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
            <!-- navDesktop -->
            <nav id="navDesktop" class="my-auto flex">
                <ul class="hidden md:flex md:item-center md:gap-32 font-sans text-base text-textColor">
                    <?php foreach ($site->children()->listed() as $subpage): ?>
                        <li>
                            <a id="links__item-a" class="p-2 focus:text-heroColor" href="<?= $subpage->url() ?>">
                            <?= $subpage->title() ?></a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <button id="btn-hamIcon" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" class="fill-textColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </button>
            </nav>
        </section>
    </header>