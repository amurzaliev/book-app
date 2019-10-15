<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';

use yii\helpers\Url; ?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Book App</h1>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['author/index']); ?>">Authors</a></p>
        <p><a class="btn btn-lg btn-warning" href="<?= Url::to(['book/index']); ?>">Books</a></p>
    </div>

</div>
</div>
