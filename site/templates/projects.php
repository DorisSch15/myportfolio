<?php snippet('header') ?>

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
<?php snippet('footer') ?>

