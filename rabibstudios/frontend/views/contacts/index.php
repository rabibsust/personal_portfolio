<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContactsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contacts-index">

  <h1>
    <?= Html::encode($this->title) ?>
  </h1>

  <?php Pjax::begin(); ?>    <?= GridView::widget([
      'dataProvider' => $dataProvider,
      'filterModel' => $searchModel,
      'columns' => [
        'name',
        'email:email',
        'comment:ntext',
        'creation_date',
        'ip',
        ['class' => 'yii\grid\ActionColumn',
          'template' => '{delete}',
          'header'=>'Delete'
        ],
      ],
    ]); ?>
  <?php Pjax::end(); ?>
</div>
