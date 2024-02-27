<?php snippet('header') ?>

<ul class="grid mobile:grid-rows-1 tablet:grid-rows-2 desktop:grid-rows-3">
    <?php foreach ($page->children()->listed() as $project): ?>
        <li class="w-4/12">
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

