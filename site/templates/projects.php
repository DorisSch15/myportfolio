<?php snippet('header') ?>

<main>
    <section class="pt-16">
        <div class="container">
            <h1 class="text-4xl text-heroColor"><?= $page->title() ?></h1>
            <p class="mt-4 text-lg text-textColor"><?= $page->text() ?></p>
        </div>
    </section>
    <section class="py-4">
        <div class="container">
            <?php if ($projectsPage = page('projects')): ?>
                <ul class="grid grid-cols-1 lg:grid-cols-4 xl:grid-cols-6 gap-4 mt-12">
                <?php foreach ($projectsPage->children()->listed() as $project): ?>
                    <li class="border-2 border-heroColor opacity-75 hover:opacity-100 rounded-xl overflow-hidden">
                        <a href="<?= $project->url() ?>">
                            <?php if ($image = $project->image()): ?>
                                <img class="w-100 border-b-2 border-heroColor" src="<?=     $project->image()->crop(800,600)->url() ?>">
                                <div class="m-4 flex flex-col h-full justify-between">
                                    <div>
                                        <h5 class="mb-4 h-24 text-lg text-heroColor font-bold bg-slate-800 line-clamp-2"><?= $project->title() ?></h5>
                                        <p class="text-textColor text-base line-clamp-3"><?= $project->text() ?></p>
                                    </div>
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
        </div>
    </section>
</main>

<?php snippet('footer') ?>

