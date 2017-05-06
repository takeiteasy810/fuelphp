<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('名前', 'name', array('class'=>'control-label')); ?>

				<?php echo Form::input('name', Input::post('name', isset($customer) ? $customer->name : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'名前')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('メールアドレス', 'mail', array('class'=>'control-label')); ?>

				<?php echo Form::input('mail', Input::post('mail', isset($customer) ? $customer->mail : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'メールアドレス')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('電話番号', 'tel', array('class'=>'control-label')); ?>

				<?php echo Form::input('tel', Input::post('tel', isset($customer) ? $customer->tel : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'電話番号')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', '保存', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>