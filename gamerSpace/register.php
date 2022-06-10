
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <link rel="shortcut icon" href="../Imgs/LogoDog.jpg">
        <meta charset="UTF-8">
        <title>    PetNow </title>
        <mate name="viewport" content="width=device-width, user-scaleble=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <script src="https://kit.fontawesome.com/e9acfae8a2.js" crossorigin="anonymous"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../../CSS/stylePagP.css">
        <link rel="stylesheet" href="../../CSS/estilos2.css">
        <link href="../../CSS/stylesProfile.css" rel="stylesheet">
        </head>
 <body>
    <section>
        <div>
            <form action="register.php" method="post">
                <div>
                    <h1>Regístrate</h1>
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Name" required value="<?php echo $name;?>"/>
                    </div>
                    <div></div>
                </div>
            </form>
        </div>
    </section>

</body>

</html>