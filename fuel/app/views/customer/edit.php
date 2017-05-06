<h3>編集 <span class='muted'>#<?php echo $customer->id; ?></h3>
<br>

<?php echo render('customer/_form'); ?>
<p>
	<?php echo Html::anchor('customer/view/'.$customer->id, '表示'); ?> |
	<?php echo Html::anchor('customer', '戻る'); ?></p>
