<!doctype html>
<html>
<meta charset="utf-8">
<body>
  <?php
    $lang="php";
    $a="phpTest";
    $A="phptest2";
    echo $A;

    function test()
    {
      global $lang;
      echo $lang;
    }

    test();
  ?>

</body>
</html>
