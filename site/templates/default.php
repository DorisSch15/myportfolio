<?php snippet('header') ?>

<main class="container">
    <section class="flex">
        <div class="flex flex-col justify-center">
            <h1 class="text-2xl text-heroColor"><?= $page->title() ?></h1>
            <h3 class="text-base text-textColor"><?= $page->text() ?></h3>
            <button class="w-fit p-2 my-8 bg-btnColor rounded-md text-textColor">Jetzt Kontakt aufnehmen</button>
        </div>
        <img class="block" src="./../assets/svgs/arrow.svg" alt="Pfeil">
        <img class="block" src="./../assets/svgs/me.svg" alt="That's me :)">
    </section>
    <section class="flex w-2/4 gap-12 justify-between">
        <div class="w-full">
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
        <div class="w-full">
            <h3 class="text-base text-heroColor">Anwenderkenntnisse</h3>
            <ul class="flex justify-between">
                <li><img class="size-8" src="./../assets/svgs/sass.svg" alt="sass"></li>
                <li><img class="size-8" src="./../assets/svgs/kirby.svg" alt="kirby"></li>
                <li><img class="size-8" src="./../assets/svgs/figma.svg" alt="figma"></li>
                <li><img class="size-8"  src="./../assets/svgs/npm.svg" alt="npm"></li>
            </ul>
        </div>
    </section>
</main>

<?php snippet('footer') ?>

