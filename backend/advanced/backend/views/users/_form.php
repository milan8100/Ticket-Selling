<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-user"></i>User's Personal Information </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
<div class="user-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput() ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>
							</div>
						</div>

                                                </div>
                                        </div>
                                </div>
                        </div>
</div>

<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-location"></i>Location </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
<div class="user-form">

    <?= $form->field($model, 'country')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'state')->textInput(['maxlength' => true]) ?>

							</div>
						</div>

                                                </div>
                                        </div>
                                </div>
                        </div>
</div>

<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-layers"></i>Company's Information </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
<div class="user-form">
    <?= $form->field($model, 'comp_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phno')->textInput() ?>

    <?= $form->field($model, 'comp_email')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

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



