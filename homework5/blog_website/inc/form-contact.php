<!-- CONTACT FORM -->

<form action="actions/contact-action.php" method="post" class="border p-5 mt-3 rounded shadow-sm">
    <div class="mb-3">
        <label for="name">Name</label>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-circle-user"></i></span>
            <input type="text" name="name" class="form-control" autofocus>
        </div>
    </div>
    <div class="mb-3">
        <label for="email">Email</label>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-envelope"></i></span>
            <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="mb-3">
        <label for="">Message</label>
        <div class="input-group">
            <span class="input-group-text"><i class="fa-sharp fa-solid fa-message"></i></span>
            <textarea name="message" rows="5" class="form-control"></textarea>
        </div>
    </div>
    <div class="mb-3">
        <input type="submit" value="send" class="btn btn-primary form-control">
    </div>
</form>
