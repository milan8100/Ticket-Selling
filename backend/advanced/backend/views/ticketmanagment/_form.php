<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TicketManagment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-managment-form">

    <?php $form = ActiveForm::begin(); ?>
<div class="row">
			<div class="col-lg-12">

				<div id="add-listing">

					<!-- Section -->
					<div class="add-listing-section">

						<!-- Headline -->
						<div class="add-listing-headline">
							<h3><i class="sl sl-icon-layers"></i>Ticket Details </h3>
                                                        
						</div>

						<!-- Title -->
						<div class="row with-forms">
							<div class="col-md-6">
<div class="user-form">

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'movie_id')->textInput() ?>

    <?= $form->field($model, 'ticket_id')->textInput() ?>

    <?= $form->field($model, 'no_ticket')->textInput() ?>

    <?= $form->field($model, 'payment_id')->textInput() ?>

    <?= $form->field($model, 'is_active')->dropDownList([ 'Active' => 'Active', 'Not Active' => 'Not Active', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'authKey')->textInput(['maxlength' => true]) ?>

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
</div>
