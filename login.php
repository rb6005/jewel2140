<?php
include('./template-parts/header.php');
?>

    <div class="login">
        <h1>Log In</h1>
        <div class="log">
            <form action="#">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" placeholder="Your email" required>
                <label for="pass">Password:</label>
                <input type="password" name="pass" id="pass" placeholder="Password" required>
                <input type="submit" class="btn-primary" />
            </form>
            <div><h2><a href="signup.php">Sign Up?</a></h2></div>
        </div>
    </div>

    

    <?php
include('./template-parts/footer.php');
?>