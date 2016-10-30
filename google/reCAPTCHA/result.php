<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Google reCAPTCHA Test</title>
</head>
<body>
    <?php
      foreach($_POST as $key => $value){
        echo $key." : ".$value."\n";
      }
    ?>
</body>
</html>