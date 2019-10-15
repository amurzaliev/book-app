<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="author-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Author', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'birth_date',
            'rating',

            ['class' => 'yii\grid\ActionColumn'],
            [
                'class'    => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {viewBooks}',
                'buttons'  => [
                    'viewBooks' => function ($url, $model, $key) {
                        return Html::a(
                                'View books',
                                Url::to(['book/view-by-author', 'authorId' => $model->id]),
                                ['class' => 'btn btn-sm btn-primary']
                        );
                    }
                ]
            ],
        ],
    ]); ?>


</div>
