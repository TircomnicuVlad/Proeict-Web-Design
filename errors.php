<?php if (count($errors) > 0): ?>
	<div style="width: 80%;margin: 0px auto;padding: 10px; border: 1px solid #a94442;color: #a94442;background: #f2dede;border-radius: 5px;text-align: left; margin-bottom: 25px">
		<?php foreach ($errors as $error): ?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
		<script> setTimeout(function(){ alert("Eroare la Conectare!"); }, 1000);</script>
	</div>
<?php endif ?>