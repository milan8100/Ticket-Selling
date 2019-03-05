<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Movies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="movies-form">
    

    <?php $form = ActiveForm::begin([
        'options' => ['enctype' => 'multipart/form-data']        
        ]); ?>
<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-layers"></i>Movies Detail </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">

    <?= $form->field($model, 'ticket_id')->textInput() ?>

    <?= $form->field($model, 'artist_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'language_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'mv_pic')->fileInput() ?>

    <?= $form->field($model, 'mv_category')->textInput() ?>

    <?= $form->field($model, 'mv_name')->textInput() ?>

    <?= $form->field($model, 'mv_art_name')->textInput() ?>

    <?= $form->field($model, 'mv_ticket')->textInput() ?>

    <?= $form->field($model, 'mv_language')->textInput() ?>

    <?= $form->field($model, 'mv_location')->textInput() ?>

    <?= $form->field($model, 'is_active')->dropDownList([ 'Active' => 'Active', 'Not Active' => 'Not Active', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'button border margin-top-10']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
                                                </div>
                                        </div>
                                </div>
                        </div>
    </div>
</div>
