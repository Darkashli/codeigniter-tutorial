<h2>HTML Forms</h2>

<h4>Form without helper</h4>

<form action="" method="post" class="" id="" enctype="multipart/form-data">

  First name:<br>
  <input type="text" name="name" value="<php echo $random; ?>">
  <br>
  Last name:<br>
  <input type="text" name="email" value="<php echo $random; ?>">

  <br><br>
  <input type="submit" value="Submit">

</form>

<h4>Form with helper</h4>
<!-- The main benefit of using this tag rather than hard coding your own HTML is that it permits your site to be more portable in the event your URLs ever change. -->
<?php echo form_open(); ?>

<?php echo form_close(); ?>
