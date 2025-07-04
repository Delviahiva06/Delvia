<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f8f8; }
        .signup-box {
            width: 350px;
            margin: 80px auto;
            padding: 30px 25px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        .signup-box h2 { text-align: center; margin-bottom: 20px; }
        .signup-box label { display: block; margin-bottom: 5px; }
        .signup-box input[type="email"],
        .signup-box input[type="password"] {
            width: 100%; padding: 8px; margin-bottom: 15px;
            border: 1px solid #ccc; border-radius: 4px;
        }
        .signup-box input[type="submit"] {
            width: 100%; padding: 10px; background: #4285f4; color: #fff;
            border: none; border-radius: 4px; cursor: pointer; font-size: 16px;
        }
        .signup-box input[type="submit"]:hover { background: #357ae8; }
        .signup-box .login-link { display: block; text-align: center; margin-top: 10px; color: #4285f4; text-decoration: none; }
        .error { color: red; font-size: 12px; }
    </style>
</head>
<body>
    <div class="signup-box">
        <h2>Sign Up</h2>
        <?php echo validation_errors('<div class="error">', '</div>'); ?>
        <form action="<?php echo site_url('signup/register'); ?>" method="post">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Sign Up">
        </form>
        <a href="<?php echo site_url('login'); ?>" class="login-link">Already have an account? Login</a>
    </div>
</body>
</html> 