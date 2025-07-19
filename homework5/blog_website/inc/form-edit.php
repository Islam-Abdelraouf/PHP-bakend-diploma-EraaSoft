    
    <!-- EDIT FORM -->
    
    <form method="POST" action="actions/edit-action.php" class="border shadow-sm py-3 px-4 mt-4">
        <!-- old password -->
        <div class="input-set mt-3">
            <label for="oldpass">Old Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                <input type="password" id="oldpass" class="form-control" name="oldpass" placeholder="please enter old password" />
            </div>
        </div>
        <!-- password -->
        <div class="input-set mt-3">
            <label for="newpass">New Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                <input type="password" id="newpass" class="form-control" name="newpass" placeholder="please enter new password" />
            </div>
        </div>
        <!-- repeat password -->
        <div class="input-set mt-3">
            <label for="passrepeat">Repeat New Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="fa-sharp fa-solid fa-lock"></i></span>
                <input type="password" id="passrepeat" class="form-control" name="passrepeat" placeholder="please repeat new password" />
            </div>
        </div>
        <!-- submit button -->
        <div class="input-set mt-4">
            <button type="submit" class="btn btn-primary col-12">Update</button>
        </div>
    </form>
