<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php</title>
</head>
<?php
$h = date('H');

  if ($h <= 6) {
    $c = 0;
  } elseif ($h > 6 && $h <= 12) {
    $c = 1;
  } elseif ($h > 12 && $h <= 18) {
      $c = 2;
  } elseif ($h > 18 && $h <= 24) {
      $c = 3;
  } else {
      $c = 0;
  }

?>
<body style="background-image: url('<?php echo $c; ?>.jpg'); background-size: cover; color: white;">

<h1>php</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur commodi consectetur deleniti, eveniet
    impedit incidunt non numquam possimus quo quod suscipit tempore totam. Accusantium consectetur eius iste repudiandae
    suscipit?</p>
</body>
</html>