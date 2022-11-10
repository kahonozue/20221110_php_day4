<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require_once "components/boot.php" ?>

    <title>Add Menu</title>
</head>

<body class="vh-100 d-flex align-items-center justify-content-space-around">
    <fieldset class="w-75 h-50 bg-warning mx-auto my-auto">

        <legend class="h2">Add Menu</legend>
        
        <form method="POST" action="actions/a_create.php?id=2" enctype="multipart/form-data">
            <div class="w-75 bg-white mx-auto my-auto">
                <div class="d-flex align-items-center p-3">
                    <div class="w-25">Image of the dish</div>
                    <input type="file" name="image" />
                </div>

                <div class="d-flex align-items-center p-3">
                    <div class="w-25">dish name</div>
                    <input type='text' name="dishName" />
                </div>

                <div class="d-flex align-items-center p-3">
                    <div class="w-25">Price</div>
                    <input type="number" name="price" />
                </div>

                <div class="p-3">
                    <button class='btn btn-success' type="submit">Insert Product</button>
                    <a href="index.php"><button class='btn btn-warning' type="button">Home</button></a>
                </div>
            </div>
        </form>
    
    </fieldset>
</body>

</html>