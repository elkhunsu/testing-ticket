<?php
    $skrip = $this->render('script.js');
    $this->registerJs($skrip, \yii\web\View::POS_END);

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<?php         $items = ArrayHelper::map(\app\models\Lokasi::find()->all(), 'id_lokasi', 'nama_lokasi'); ?>
<div class="event-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_lokasi')->hiddenInput(['maxlength' => true])->label(FALSE) ?>
    <?= $form->field($model, 'nama_event')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'nama_lokasi')->dropDownList($items, ['prompt'=>'Select...']) ?>
   
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>