<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My PHP Website</title>
</head>

<body>
  <h1>My PHP Website</h1>
  <p>Here is some static content.</p>
  <p><?php echo "Here is some dynamic content"; ?></p>
  <p>
  <?php
  $img = '/root/git/docker/src/HCL.png';
	header('Content-Type: image/jpeg');
	readfile($img);
  ?>
</p>
</body>
</html>
