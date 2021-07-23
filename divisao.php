<?PHP
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if ($num2 != 0){
        $div = $num1 / $num2;
    }
    else {
        $div = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php echo $div; ?>
    </h1>
</body>
</html>