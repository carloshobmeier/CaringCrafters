<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style/login.css">
    <link rel="stylesheet" href="./style/setup.css">
</head>
<body>
    <div class="login-form-container mx-auto text-center">
        <h1>Log In</h1>
        <form class="needs-validation" novalidate action="home.php" method="get" id="loginForm">
            <div class="mb-4">
                <label for="form-email" class="form-label">Email</label>
                <input type="email" class="form-control" id="form-email">
                <div class="invalid-feedback" id="email-feedback">
                    Please type a valid email.
                </div>
            </div>
            <div class="mb-4">
                <label for="form-password" class="form-label">Password</label>
                <input type="password" class="form-control" id="form-password">
                <div class="invalid-feedback" id="password-feedback">
                    This is not a valid password. It needs to be at least 8 letters and an uppercase letter.
                </div>
            </div>
            <button class="submit">Log In</button>
        </form>
    </div>
    <div class="footer-container-form">
    <?php include('./src/components/footer.php') ?>

    </div>
    <script src="./assets/scripts/login.js"></script>
</body>
</html>