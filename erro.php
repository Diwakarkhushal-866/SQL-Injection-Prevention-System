86% of storage used … If you run out, you won't have enough storage to create, edit, and upload files. Get 100 GB of storage for ₹130.00 ₹35.00/month for 3 months.
errors.php
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>