<?php
include('./template-parts/header.php');
?>
    <div class="signup">
        <div class="sign1">
                <div><h2>Create An Account</h2></div>
                <div><h2><a href="login.php">LOG IN?</a></h2></div>
            </div>
            <div class="from">
                <form action="#">
                    <label for="first">First Name</label>
                    <input type="text" name="first" id="first" placeholder="First Name" required class="firstname">
                    <label for="last">Last Name</label>
                    <input type="text" name="last" id="last" placeholder="Last Name" required class="secondname">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" required class="mail">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Password" required class="Password">
                    <label for="repass">Conform Password</label>
                    <input type="password" name="pass" id="pass" placeholder="Conform Password" required>

                    <input type="submit" class="btn-primary" value="Create New Account">
                </form>
                
            </div>
    </div>


<?php
include('./template-parts/footer.php');
?>