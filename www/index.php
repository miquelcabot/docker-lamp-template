<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <?php echo "<h1>Docker LAMP Template</h1>"; ?>

    <?php

    // Connection to DB
    $conn = mysqli_connect('db', 'user', 'test', "mydb");


    $query = 'SELECT id, name From Student';
    $result = mysqli_query($conn, $query);

    echo '<table class="table table-striped">';
    echo '<thead><tr><th>id</th><th>name</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td>' . $value['id'] . '</td>';
        echo '<td>' . $value['name'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

    // Close and free result
    $result->close();

    mysqli_close($conn);

    ?>
    </div>
</body>
</html>