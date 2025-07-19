
<!-- LOGIN FORM -->
 
<form action="actions/login-action.php" method="post" class="border py-3 px-4 mt-4 rounded shadow-sm">
    <!-- email address input -->
    <div class="input-set mt-3">
        <label for="email">Email Address</label>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-envelope"></i></span>
            <input type="email" id="email" class="form-control" name="email" placeholder="please enter valid email" autofocus />
        </div>
    </div>
    <!-- password -->
    <div class="input-set mt-3">
        <label for="pass">Password</label>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="please enter password" />
        </div>
    </div>
    <!-- submit button -->
    <div class="input-set mt-4">
        <button type="submit" class="btn btn-primary col-12">Login</button>
        <p class="text-end my-3">New user? <a href="register.php">Register</a></p>
    </div>
</form>