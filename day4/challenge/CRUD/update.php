<?php
require_once 'actions/db_connect.php';

if ($_POST['id']) {
    $id = $_POST['id'];
    $sql = "SELECT * FROM dishes WHERE dishID = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $id = $data['dishID'];
        $image = $data['image'];
        $name = $data['name'];
        $price = $data['price'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Menu</title>
    <?php require_once 'components/boot.php' ?>
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }

        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>

<body class="vh-100 d-flex align-items-center justify-content-space-around">

    <fieldset class="w-75 h-50 bg-warning mx-auto my-auto">

        <legend class='h2'>Update Menu <img class='img-thumbnail rounded-circle' src='pictures/<?= $image ?>' alt="<?= $name ?>"></legend>

        <form method="POST" action="actions/a_update.php" enctype="multipart/form-data">
            <div class="w-75 bg-white mx-auto my-auto">
                <div class="d-flex align-items-center p-3">
                    <div class="w-25">Image of the dish</div>
                    <input type="file" name="image" />
                </div>

                <div class="d-flex align-items-center p-3">
                    <div class="w-25">dish name</div>
                    <input type='text' name="dishName" placeholder="maroni" value="<?= $name ?>" />
                </div>

                <div class="d-flex align-items-center p-3">
                    <div class="w-25">Price</div>
                    <input type="number" name="price" placeholder="1.11" value="<?= $price ?>" />
                </div>

                <div class="p-3">
                    <input type="hidden" name="id" value="<?= $id ?>" />
                    <input type="hidden" name="image" value="<?= $image ?>" />
                    <button class='btn btn-success' type="submit">Save Changes</button>
                    <a href="index.php"><button class='btn btn-warning' type="button">Back</button></a>
                </div>
            </div>
        </form>

    </fieldset>
</body>

</html>