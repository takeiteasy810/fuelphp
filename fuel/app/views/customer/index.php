<h3>ユーザリスト</h3>
<br>
<?php if ($customers): ?>
<table class="table table-striped">
	<thead>
		<tr>
                        <th>#</th>
			<th>名前</th>
			<th>メールアドレス</th>
			<th>電話番号</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($customers as $item): ?>		<tr>

                        <td><?php echo $item->id; ?></td>
			<td><?php echo $item->name; ?></td>
			<td><?php echo $item->mail; ?></td>
			<td><?php echo $item->tel; ?></td>
			<td>
				<div class="btn-toolbar">
					<div class="btn-group">
						<?php echo Html::anchor('customer/view/'.$item->id, '<i class="icon-eye-open"></i> 表示', array('class' => 'btn btn-default btn-sm')); ?>
						<?php echo Html::anchor('customer/edit/'.$item->id, '<i class="icon-wrench"></i> 編集', array('class' => 'btn btn-default btn-sm')); ?>
						<?php echo Html::anchor('customer/delete/'.$item->id, '<i class="icon-trash icon-white"></i> 削除', array('class' => 'btn btn-sm btn-danger', 'onclick' => "return confirm('削除してもよろしいですか?')")); ?>
                                        </div>
				</div>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Customers.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('customer/create', '新規追加', array('class' => 'btn btn-success')); ?>

</p>
