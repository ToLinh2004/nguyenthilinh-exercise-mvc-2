<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <p>List of students: </p>
        <?php foreach ($allStudent as $students): ?>
       <li> <?php echo $students['name'] . ' in class ' . $students['class'] . ' is ' .$students['age']; ?></li>
    <?php endforeach;?>
</body>

</html>

