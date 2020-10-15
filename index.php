<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime Num</title>
</head>
<body>
<h1 style="color: purple">Hiển thị tất cả các số nguyên tố nhỏ hơn N</h1>
<form action="" method="post">
     Hãy nhập vào số N: <input type="number" name="num" value="" style="color: purple">
    <button type="submit">Hiển thị</button>
</form>
<?php if(isset($_POST["num"])) {
    function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }

        for ($i = 2; $i <= (sqrt($num)); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
    $n = $_POST["num"];
    print ("Các số nguyên tố nhỏ hơn ".$n." là: <br>");
    for ($i = 0; $i < $n; $i++) {
        if (isPrime($i)) {
            echo($i . ", ");
        }
    }

} ?>

</body>
</html>