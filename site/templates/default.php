<?php snippet('header') ?>

<main>
    <!-- headingSection -- Text and Picture -->
    <section class="py-12"> 
        <div class="container grid grid-cols-2 gap-2 md:grid-cols-8 md:gap-4 lg:grid-cols-12 lg:gap-6 xl:gap-8 items-center bg-yellow-300 md:bg-red-400 lg:bg-blue-400 xl:bg-gray-400">
        <?php if ($homePage = page('home')): ?>
            <div class="col-span-2 md:col-span-4 lg:col-span-6 xl:col-span-6">
                <h1 class="text-xl xl:text-4xl text-heroColor"><?= $homePage->title() ?></h1>
                <p class="text-base mt-4 xl:text-lg text-textColor"><?= $homePage->text() ?></p>
                <button class="w-fit p-2 my-8 bg-btnColor rounded-md text-textColor">
                    <a href="<?= $site->page('contact') ?>">Jetzt Kontakt aufnehmen</a>
                </button>
            </div>
        <?php endif ?>
            <div class="relative col-end-3 md:col-end-9 md:col-span-3 lg:col-end-13 lg:col-span-4">
                <img class="absolute -right-20 md:static w-full aspect-square" src="./../assets/svgs/me.svg" alt="That's me :)">
                <img class="absolute sm:size-90 sm:-top-24 sm:-left-28 md:-top-20 md:-left-24 lg:-top-16 lg:-left-32 xl:-top-16 xl:-left-44" src="./../assets/svgs/arrow.svg" alt="Pfeil">
            </div>
        </div>
    </section>
    <!-- ICONS -->
    <section class="py-12">
        <div class="container grid grid-cols-1 gap-8 md:grid-cols-2 md:grid-rows-2 lg:grid-cols-3 lg:grid-rows-none">
            <div class="w-full md:row-start-1">
                <h3 class="text-base text-heroColor">Grundkenntnisse</h3>
                <ul class="flex justify-between">
                    <li><img class="size-8" src="./../assets/svgs/html.svg" alt="HTML"></li>
                    <li><img class="size-8" src="./../assets/svgs/css.svg" alt="CSS"></li>
                    <li><img class="size-8" src="./../assets/svgs/js.svg" alt="JavaScript"></li>
                    <li><img class="size-8" src="./../assets/svgs/node-js.svg" alt="Node JS"></li>
                    <li><img class="size-8" src="./../assets/svgs/php.svg" alt="PHP"></li>
                    <li><img class="size-8" src="./../assets/svgs/git.svg" alt="git"></li>
                </ul>
            </div>
            <div class="w-full md:row-start-2 lg:row-start-1 lg:col-start-2">
                <h3 class="text-base text-heroColor">Anwenderkenntnisse</h3>
                <ul class="flex justify-between">
                    <li><img class="size-8" src="./../assets/svgs/sass.svg" alt="sass"></li>
                    <li><img class="size-8" src="./../assets/svgs/kirby.svg" alt="kirby"></li>
                    <li><img class="size-8" src="./../assets/svgs/figma.svg" alt="figma"></li>
                    <li><img class="size-8"  src="./../assets/svgs/npm.svg" alt="npm"></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="py-12">
        <div class="container">
            <?php if ($projectsPage = page('projects')): ?>
                <ul class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-4 gap-4 mt-12">
                <?php foreach ($projectsPage->children()->listed()->limit(4) as $project): ?>
                    <li class="border-2 hover:border-4 border-heroColor opacity-75 hover:opacity-100 rounded-xl overflow-hidden">
                        <a href="<?= $project->url() ?>">
                            <?php if ($image = $project->image()): ?>
                                <img class="w-100 border-b-2 border-heroColor" src="<?=     $project->image()->crop(800,600)->url() ?>">
                                <div class="m-4">
                                    <h5 class="mb-4 text-lg text-heroColor font-bold"><?= $project->title() ?></h5>
                                    <p class="text-textColor text-base line-clamp-3"><?= $project->text() ?></p>
                                    <div class="flex flex-row-reverse">
                                        <button class="mt-4 text-heroColor font-bold uppercase">Weiterlesen</button>
                                    </div>
                                </div>
                            <?php endif ?>
                        </a>
                    </li>
                <?php endforeach ?>
                </ul>
            <?php endif ?>
            <div class="w-full flex flex-row-reverse">
                <button class="p-4">
                    <a href="<?= $site->page('projects') ?>" class="text-lg font-bold uppercase text-textColor hover:text-heroColor ">Mehr</a>
                </button>
            </div>
        </div>
    </section>
</main>

<?php snippet('footer') ?>

