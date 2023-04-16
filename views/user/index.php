<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>User</h1>
<ul>
<?php foreach ($users as $user): ?>
    <li>
        <?= $user->id . '. Nama : ' . $user->nama . ' / email : ' . $user->email . ' / password : ' . $user->password . ' / nomor HP : ' . $user->no_hp . ' / alamat : ' . $user->alamat . ' / role : ' . $user->role->nama ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>