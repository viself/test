<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin();?>

    

    <?= $form->field($model, 'name')->textInput(['maxlength' => 200]) ?>



    <?= $form->field($model, 'id_categorie')->dropDownList($model->allCategories, array('prompt' =>'Выберите категорию')); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();  ?>

</div>