<div class="container col-6">
    <form method="POST" action="handlers/register-handler.php">
        <!-- username input -->
        <div class="input-set mt-3">
            <label for="username">Name</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-circle-user"></i></span>
                <input type="text" id="name" class="form-control" name="name" placeholder="please enter your name" autofocus />
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
        <!-- submit button -->
        <div class="input-set mt-4">
            <button type="submit" class="btn btn-primary col-12">Register</button>
            <p class="text-end my-3">Already registered? <a href="login.php">Login</a></p>
        </div>
    </form>
</div>