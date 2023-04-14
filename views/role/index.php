<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Role</h1>
<ul>
<?php foreach ($roles as $role): ?>
    <li>
        <?= $role->id . '. ' . $role->nama . ' : ' . $role->keterangan ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>