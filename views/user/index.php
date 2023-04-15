<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>User</h1>
<ul>
<?php foreach ($users as $user): ?>
    <li>
        <?= $role->id . '. ' . $role->nama . ' : ' . $role->keterangan ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>