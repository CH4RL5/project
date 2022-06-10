
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<!-- Stylesheets -->
     <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
        <link href="../CSS/stylesProfile.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>

    <?php include_once ("./Layout/header.php")?>
    <style type="text/css"> 
    #register {display: none !important};
    </style> 
    <main class="cuerpo">
        <div class="div__content">
            <form action="userForm" class="userForm" id="userForm" method="POST">
                <h1 class="tittle__formUser">User Data</h1>
                <Label for="name" class="Lname">Username </Label>
                <input type="text" name="name" id="name" placeholder="Username">
                <Label for="email" class="Lemail">Email</Label>
                <input type="text" name="email" id="name" placeholder="Email">
                <Label for="password" class="Lpassword">Password</Label>
                <input type="text" name="password" id="password" placeholder="Password">
                <Label for="phone" class="Lphone">Phone Number</Label>
                <input type="text" name="" id="phone" placeholder="Phone Number">
                <div>
                <button type="submit" id="bUser" class="bUser" value="Edit">Edit</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>