<?php include("../oop-login/templates/header.html.php")?>
    <title>Registration</title>
</head>
<body>

    <div class="container">
        <form action="includes/signup.inc.php" method="post">
            <h1 class="primary-heading">
                Registration
            </h1>
            <div class="form-group">
            <label for="username">Username</label>
                <input type="text" name="username"  class ="form-control" placeholder="Username" id ="username">
            </div>
        
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password"  class ="form-control"placeholder="Password">
            </div>

            <div class="form-group">
                <label for="conpassword">Confirm Password</label>
                <input type="password" name="conpassword" class ="form-control" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class ="form-control" placeholder="Email">
            </div>
            <input type="submit" value="Register" class = "primary primary-btn" name="submit">

            <div class = "register">
            <a href ="../oop-login/index.php" class="register-link">Login</a>
            </div>
        <?php 
        header("Refresh:60 url = index.php");
        include('../oop-login/includes/errors.inc.php');
        ?>
        </form>
    </div>
</body>
<footer class="footer">
    <div class="footer-text">
        
    </div>
</footer>
<script src="js/main.js"></script>
</html>