<?php include("../oop-login/templates/header.html.php"); ?>
    <title>Login</title>
</head>
<body>

    <div class="container">
        <form action="includes/login.inc.php" method="post">
            <h1 class="primary-heading">
                Login
            </h1>
            <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username"  class ="form-control" placeholder="Username" id ="username">
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"  class ="form-control"placeholder="Password">
            </div>
            <input type="submit" value="Login" class = "primary primary-btn" name="submit">

            <div class = "register">
            <a href ="../oop-login/registration.php" class="register-link">Register Here</a>
            </div>
            

            
        

        <?php 
        header("Refresh:60 url = index.php");
        include('../oop-login/includes/errors.inc.php');
        ?>
        </form>
    </div>
</body>
<script src="js/main.js"></script>
</html>