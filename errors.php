<?php set_time_limit(30); if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error): ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php endif ?>

<?php if(count($errors) === 0): ?>
	<div class="success">
		<p><?php echo "You have Successfully Registered!" ?></p>
	</div>
<?php endif ?>
