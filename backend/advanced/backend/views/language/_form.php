<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\language */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-layers"></i>Language Detail </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">



<div class="language-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'artist_id')->textInput() ?>

    <?= $form->field($model, 'location_id')->textInput() ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'movie_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

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
