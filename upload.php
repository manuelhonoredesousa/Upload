<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravando</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>


    <div id="hall">

        <h1>Manuel Bunga Honoré de Sousa</h1>
        <ul>
            <li><a class="aa" href="#">Menu</a></li>
            <li><a class="aa" href="#">Phofile</a></li>
            <li><a class="aa" href="#">Logout</a></li>
        </ul>
    </div>

    <form action="up.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>UPLOAD</legend>
                <div class="lo">
                Foto: <input type="file" name="dados"> 
                <div class="btn">
                    <button class="aa" type="submit">Upload</button>

                </div>
            </div>
            </fieldset>
        </form>
        <hr>

        <?php
            require_once "list.php";
        ?>

</body>

</html>