<?php snippet('header') ?>

<main>
    <!-- headingSection -- Text and Picture -->
    <section class="py-12"> 
        <div class="container grid grid-cols-1 md:grid-cols-12">
            <?php if ($homePage = page('home')): ?>
            <div class="md:col-span-7 lg:col-span-6">
                <h1 class="text-3xl xl:text-4xl text-textColor">
                    <!-- Showing text with two different colors -->
                    <?php
                        // Sample input string
                        $input = "**Loyal, teamfähig und verantwortungsbewusst** - gemeinsam Kunden im Webbereich weiterbringen";

                        // Regular expression pattern to match **text**
                        $pattern = '/\*\*(.*?)\*\*/';

                        // Replacement pattern with <strong> tags
                        $replacement = '<strong class="text-heroColor">$1</strong>';

                        // Perform the replacement
                        $output = preg_replace($pattern, $replacement, $input);

                        // Output the result
                        echo $output;
                    ?>
                </h1>
                <p class="text-lg my-8 text-textColor"><?= $homePage->text() ?></p>
                <button class="w-fit p-2 my-8 bg-btnColor rounded-md text-textColor">
                    <a href="<?= $site->page('contact') ?>">Jetzt Kontakt aufnehmen</a>
                </button>
            </div>
            <?php endif ?>
            <div class="relative justify-center col-end-2 md:col-end-13 md:col-span-5 lg:col-end-13 lg:col-span-4">
                <img class="absolute md:-top-24 md:-left-52 md:-z-10" src="./../assets/svgs/arrow.svg" alt="Pfeil">
                <img class="bg-heroColor right-6 rounded-3xl origin-bottom -rotate-6 md:translate-x-0" src="./../assets/svgs/aboutme-test.svg" alt="That's me :)">
            </div>
        
        <!-- <div class="col-end-13"> -->
                <!-- <img class="-right-40 h-100 aspect-square" src="./../assets/svgs/me.svg" alt="That's me :)">
                <img class="absolute sm:size-90 sm:-top-24 sm:-left-28 md:-top-20 md:-left-24 lg:-top-20 lg:-left-32 xl:-top-16 xl:-left-44" src="./../assets/svgs/arrow.svg" alt="Pfeil"> -->
            <!-- </div> -->
        </div>
    </section>
    <!-- ICONS -->
    <section class="py-12">
        <div class="container">
            <h2 class="text-center text-3xl text-heroColor">Programme/Spachen, mit denen ich arbeite:</h2>
            <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-9">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./../assets/svgs/html.svg" alt="HTML" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./../assets/svgs/css.svg" alt="CSS" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="./../assets/svgs/node-js.svg" alt="NodeJS" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="./../assets/svgs/php.svg" alt="PHP" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-4 lg:col-span-1" src="./../assets/svgs/git.svg" alt="git" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="./../assets/svgs/sass.svg" alt="Sass" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="./../assets/svgs/kirby.svg" alt="Kirby" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="./../assets/svgs/figma.svg" alt="Figma" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain col-start-2 sm:col-start-3 lg:col-span-1" src="./../assets/svgs/npm.svg" alt="npm" width="158" height="48">
            </div>
        </div>
    </section>
    <!-- BlOG -->
    <section class="py-12">
        <div class="container">
            <?php if ($projectsPage = page('projects')): ?>
                <ul class="grid grid-cols-1 lg:grid-cols-4 xl:grid-cols-6 gap-4 mt-12">
                <?php foreach ($projectsPage->children()->listed()->limit(6) as $project): ?>
                        <li class="h-full flex flex-col border-2 border-heroColor opacity-75 hover:opacity-100 rounded-xl overflow-hidden transition duration-255">
                            <?php if ($image = $project->image()): ?>
                                <a href="<?= $project->url() ?>">
                                    <img class="w-100 border-b-2 border-heroColor" src="<?=$project->image()->crop(800,600)->url() ?>">
                                </a>
                                <div class="h-full m-4 flex flex-col justify-between">
                                    <div>
                                        <h5 class="mb-4 h-14 text-lg text-textColor font-bold line-clamp-2">
                                            <a href="<?= $project->url() ?>">
                                                <?= $project->title() ?>
                                            </a>
                                        </h5>
                                        <p class="text-textColor text-base line-clamp-3">
                                            <a href="<?= $project->url() ?>">
                                                <?= $project->text() ?>
                                            </a>
                                        </p>
                                    </div>
                                    <div class="flex flex-row-reverse mt-8">
                                        <button class="mt-4 text-heroColor font-bold uppercase underline decoration-textColor">
                                            <a href="<?= $project->url() ?>">
                                                Weiterlesen
                                            </a>
                                        </button>
                                    </div>
                                </div>
                            <?php endif ?>
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

