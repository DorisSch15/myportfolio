<?php snippet('header') ?>

<ul class="grid grid-rows-3 gap-3">
    <?php foreach ($page->children()->listed() as $project): ?>
        <li class="size-auto bg-red-500">
            <a href="<?= $project->url() ?>" class="<?= $project->title() ?>">
                <?php if ($image = $project->image()): ?>
                    <?= $project->image()->crop(300) ?>
                    <?= $project->title() ?>
                <?php endif ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<?php snippet('footer') ?>

