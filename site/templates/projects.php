<?php snippet('header') ?>

<ul class="project-list">
    <?php foreach ($page->children()->listed() as $project): ?>
        <li class="project-item">
            <a href="<?= $project->url() ?>" class="<?= $project->foo() ?>">
                <?= $project->title() ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>
<?php snippet('footer') ?>

