
<!-- ADD POST FORM -->

<form action="actions/post-create-action.php" method="post" enctype="multipart/form-data" class="border p-5 mt-3 rounded shadow-sm">
    
    <!-- 
    these fields were cancelled to be generated automatically by PHP 
    
     // post id // 
    <div class="mb-3">
        <label for="id" class="form-label">Post ID</label>
        <input type="text" name="id" class="form-control" autofocus>
    </div>

     // post username //
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" autofocus>
    </div> 
    -->

    <!-- post title -->
    <div class="mb-3">
        <label for="title" class="form-label">Post Title</label>
        <input type="text" name="title" class="form-control" autofocus>
    </div>
    <!-- post body -->
    <div class="mb-3">
        <label for="body" class="form-label">Post Body</label>
        <textarea name="body" rows="5" class="form-control"></textarea>
    </div>
    <!-- post image upload -->
    <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input type="file" name="image" class="form-control">
    </div>
    <!-- post Submit -->
    <div class="mb-3">
        <input type="submit" value="Create Post" class="btn btn-primary form-control">
    </div>
</form>