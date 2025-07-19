<?php
// REGISTER FORM "INCLUDE"
?>

<div class="container py-2">
    <form method="POST" action="register-handler.php">
        <div class="mt-3">
            <!-- <img class="d-block mx-auto mb-2" src="images/login.png" alt="login-icon" height="100" /> -->
            <h3 class="text-center text" style="font-weight: 300; text-transform: uppercase;">Registeration Form</h3>
        </div>
        <!-- username input -->
        <div class="input-set mt-3">
            <label for="username">Username</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-circle-user"></i></span>
                <input type="text" id="username" class="form-control" name="username" placeholder="please enter username" autofocus />
            </div>
        </div>
        <!-- email address input -->
        <div class="input-set mt-3">
            <label for="email">Email Address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-envelope"></i></span>
                <input type="email" id="email" class="form-control" name="email" placeholder="please enter valid email" />
            </div>
        </div>
        <!-- password -->
        <div class="input-set mt-3">
            <label for="pass">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                <input type="password" id="pass" class="form-control" name="pass" placeholder="please enter password" />
            </div>
        </div>
        <!-- repeat password -->
        <div class="input-set mt-3">
            <label for="pass-repeat">Repeat Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                <input type="password" id="pass-repeat" class="form-control" name="pass-repeat" placeholder="please repeat password" />
            </div>
        </div>
        <!-- phone input -->
        <div class="input-set mt-3">
            <label for="phone">Phone</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-circle-user"></i></span>
                <input type="number" id="phone" class="form-control" name="phone" placeholder="please enter Phone Number" />
            </div>
        </div>
        <!-- submit button -->
        <div class="input-set mt-5">
            <button type="submit" value="signup" class="btn btn-outline-primary d-grid gap-2 col-12 mx-auto ">Submit</button>
            <br><span class="d-block text-end small">By Islam Abdelraouf</span>
        </div>
    </form>
</div>