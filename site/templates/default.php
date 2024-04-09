<?php snippet('header') ?>

<main>
    <section class="flex flex-col md:flex-row">
        <div class="w-full md:w-1/2 flex flex-col justify-center bg-red-400">
            <h1 class="text-sm md:text-lg lg:text-2xl text-heroColor"><?= $page->title() ?></h1>
            <h3 class="text-xs lg:text-base text-textColor"><?= $page->text() ?></h3>
            <button class="w-fit p-2 my-8 bg-btnColor rounded-md text-textColor">Jetzt Kontakt aufnehmen</button>
        </div>
        <div class="w-1/2 flex justify-between">
            <img class="bg-green-400 block " src="./../assets/svgs/arrow.svg" alt="Pfeil">
            <img class="bg-yellow-300 block my-auto max-w-full" src="./../assets/svgs/me.svg" alt="That's me :)">
        </div>
    </section>
    <section class="flex flex-col w-full gap-4 md:flex-row lg:w-6/12 md:gap-12 justify-between">
        <div class="w-full">
            <h3 class="text-base text-heroColor">Grundkenntnisse</h3>
            <ul class="flex justify-between">
                <li><img class="size-12 md:size-8" src="./../assets/svgs/html.svg" alt="HTML"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/css.svg" alt="CSS"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/js.svg" alt="JavaScript"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/node-js.svg" alt="Node JS"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/php.svg" alt="PHP"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/git.svg" alt="git"></li>
            </ul>
        </div>
        <div class="w-full">
            <h3 class="text-base text-heroColor">Anwenderkenntnisse</h3>
            <ul class="flex justify-between">
                <li><img class="size-12 md:size-8" src="./../assets/svgs/sass.svg" alt="sass"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/kirby.svg" alt="kirby"></li>
                <li><img class="size-12 md:size-8" src="./../assets/svgs/figma.svg" alt="figma"></li>
                <li><img class="size-12 md:size-8"  src="./../assets/svgs/npm.svg" alt="npm"></li>
            </ul>
        </div>
    </section>
    <section>
        <ul class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-4 mt-12">
        <?php foreach ($page->children()->listed() as $project): ?>
            <li class="p-4 border-2 border-darkPurple">
                <a href="<?= $project->url() ?>" class="<?= $project->title() ?>">
                    <?php if ($image = $project->image()): ?>
                        <figure>
                            <img class="w-100" src="<?= $project->image()->url() ?>">
                            <figcaption>
                                <?= $project->title() ?>
                            </figcaption>
                        </figure>
                    <?php endif ?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>
    </section>
</main>

<?php snippet('footer') ?>

