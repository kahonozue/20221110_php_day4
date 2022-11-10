<?php

require_once 'actions/db_connect.php';

// get id for sql statement
$dish_id = $_GET['dishId'];
echo $dish_id;

// fetch "meal_description" from dishes table using dishID 
$sql = "SELECT meal_description FROM dishes WHERE dishID = $dish_id";
$result = mysqli_query($connect, $sql);
$div = '';
if (mysqli_num_rows($result) == "" || mysqli_num_rows($result) == null) {
    $div = "no description for this meal.";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $div = $row['meal_description'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>

<body>

    <div><?= $div ?></div>


</body>

</html>