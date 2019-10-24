header
<?php if (!empty($data['name'])): ?>
<p>user: <?=$data['name']?></p>
<p>balance: <?=$data['balance']?></p>
<?php else: ?>
<form>
    <p>login</p>
</form>
<?php endif; ?>