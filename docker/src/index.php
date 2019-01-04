<!doctype html>

<html lang="en">
<body>
  <h1>My PHP Website</h1>
  <p>Here is some static content.</p>
  <p><?php echo "Here is some dynamic content";
  $img = 'HCL.png';
	header('Content-Type: image/jpeg');
	readfile($img);
  ?>
</p>
</body>
</html>
