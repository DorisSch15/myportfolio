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
        <div class="container py-4 flex flex-col sm:flex-row justify-between">
            <div class="bg-green-800 flex flex-row justify-between w-full sm:w-auto">
                <a class="block bg-blue-400 my-auto font-serif text-4xl text-heroColor" href="<?= $site->url() ?>">Doris Scheliessnig</a>
                <button id="mobile-menu-open" 
                style="display: block;"
                class="bg-orange-500 sm:hidden text-textColor">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <span class="sr-only">Menü</span>
                </button>
                <button id="mobile-menu-close" 
                style="display: none;"
                class="bg-orange-500 sm:hidden text-textColor">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                    <span class="sr-only">Menü schliessen</span>
                </button>
            </div>
        </div>
        <!-- test NavBar -->
        <nav id="nav"
        style="display: none;"
         class="p-4 py-8 sm:py-0 shadow">
            <ul class="font-sans text-base text-textColor flex flex-col sm:flex-row items-center space-y-8 sm:space-y-0 sm:space-x-8 h-full">
                <?php foreach ($site->children()->listed() as $subpage) : ?>
                    <li <?php e($subpage->isOpen(), ' class="text-heroColor"') ?>>
                        <a href="<?= $subpage->url() ?>">
                            <?= $subpage->title() ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </nav>
        <!-- navMobile
            <nav id="navMobile" class="fixed top-0 right-0 h-screen w-screen z-50 bg-bgColor hidden flex-col justify-center text-textColor md:hidden">
                <button id="btn-hamClose" class="bg-red-400 flex justify-center md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" class="block fill-heroColor"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>
                </button>
                <ul>
                    <?php foreach ($site->children()->listed() as $subpage) : ?>
                        <li class="py-12 w-full">
                            <a class="navLink p-2" href="<?= $subpage->url() ?>">
                                <?= $subpage->title() ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </nav>
            <!-- navDesktop -->
        <!-- <nav id="navDesktop" class="my-auto flex">
                <ul class="hidden md:flex md:item-center md:gap-32 font-sans text-base text-textColor">
                    <?php foreach ($site->children()->listed() as $subpage) : ?>
                        <li <?php e($subpage->isOpen(), ' class="text-heroColor"') ?>>
                            <a class="p-2" href="<?= $subpage->url() ?>" >
                                <?= $subpage->title() ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
                <button id="btn-hamIcon" class="md:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26" class="fill-textColor"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </button>
            </nav> -->
        </div>
    </header>