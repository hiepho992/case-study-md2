<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>login</title>
</head>

<body class="loginup">
    <section class="login-sign">
        <div class="login">
            <form action="./index.php?controller=User&action=home" method="post">
                <div class="img-btn">
                    <button type="submit">
                        <img src="./icon/google.png" alt="image">
                        Login in with google
                    </button>
                    <p> OR</p>
                   <div>
                   <?php if (isset($_SESSION['success'])) : ?>
                                <p id="success"><?= $_SESSION['success'] ?></p>
                            <?php endif;
                            unset($_SESSION['success']); ?>
                   </div>                   
                           
                 
                </div>
                <div class="img-btn1">
                    <label for="email"><b>Email</b></label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                </div>
                <div class="img-btn1">
                    <label for="password"><b>Password</b></label></td>
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="img-btn1">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <label for="checkbox">Remember me</label>
                    <a href="#">Forgot password?</a>
                </div>
                <div class="img-btn1">
                    <input type="submit" value="Log in">
                    <p>Don't have an account?
                        <a href="./index.php?controller=User&action=singup">Sign up</a>
                    </p>
                </div>

            </form>
        </div>
        <div class="info">
            <div class="icons">
                <span><i class="fas fa-gift"></i></span>
                <h3>Development</h3>
                <p>A modern and clean design system for developing fast and powerful web interfaces.</p>
            </div>
            <div class="icons">
                <span><i class="fas fa-gift"></i></span>
                <h3>Features</h3>
                <p>A modern and clean design system for developing fast and powerful web interfaces.</p>
            </div>
            <div class="icons">
                <span><i class="fas fa-gift"></i></span>
                <h3>Updates</h3>
                <p>A modern and clean design system for developing fast and powerful web interfaces.</p>
            </div>
        </div>
    </section>



</body>

</html>