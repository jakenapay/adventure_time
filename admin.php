<!DOCTYPE hmtl>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
        <title>Admin Log-in</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/admin.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <section>
            <div class="row">
                <div class="col-md-6">
                    <img src="assets\images\admin-login.png" alt="">
                </div>
                <div class="col-md-6 d-flex justify-content-center parent-login-page">
                    <div class="login-page">
                        <h1 class="greeting-h1">Admin Login</h1><br>
                            <form action="admin-login.php" method="post">
                                <input class="form-control admin-username" type="text" placeholder="Admin's Username" aria-label="default input example" name="uname">
                                <input class="form-control admin-password" type="password" placeholder="Password" aria-label="default input example" name="password">
                                <button type="submit" class="btn btn-success">Login</button>
                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                            </form>
                    </div>
                </div>
            </div>
        </section>
        <script src="script\admin.js"></script>
    </body>
</html>