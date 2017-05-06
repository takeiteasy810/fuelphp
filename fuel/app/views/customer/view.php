<h3>詳細表示 <span class='muted'>#<?php echo $customer->id; ?></span></h3>
<br>

<table class="table table-striped">
    <tr>
        <th>名前</th><td><?php echo $customer->name; ?></td>
    </tr>
    <tr>
        <th>メールアドレス</th><td><?php echo $customer->mail; ?></td>
    </tr>
    <tr>
        <th>電話番号</th><td><?php echo $customer->tel; ?></td>
    </tr>
</table>

<?php echo Html::anchor('customer/edit/'.$customer->id, '編集'); ?> |
<?php echo Html::anchor('customer', '戻る'); ?>