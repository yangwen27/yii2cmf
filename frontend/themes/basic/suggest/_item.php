<?php
/**
 * Created by PhpStorm.
 * User: yidashi
 * Date: 16/5/31
 * Time: 下午5:36
 */
use yii\helpers\Markdown;

?>
<li class="media" data-key="<?=$model->id?>">
<div class="media-left">
    <a href="<?= \yii\helpers\Url::to(['/user', 'id' => $model->user_id])?>">
        <img class="media-object" src="<?= $model->profile->avatarUrl?>">
    </a>
</div>
<div class="media-body">
    <div class="media-heading"><a href="<?= \yii\helpers\Url::to(['/user', 'id' => $model->user_id])?>"><?=$model->user->username?></a> 发表于 <?=date('Y-m-d H:i', $model->created_at)?></div>
    <div class="media-content"><?= Markdown::process($model->content, 'gfm')?></div>
</div>
</li>
