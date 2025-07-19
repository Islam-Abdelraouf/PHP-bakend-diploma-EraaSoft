

<?php // Success alert message ?>
<?php if (isset($_SESSION['success'])) : ?>
    <div class="alert alert-success mx-auto mt-5 mb-1 p-1 text-center">
        <?= $_SESSION['success'] ?>
    </div>
<?php endif; ?>


<?php // Error alert message ?>
<?php if (isset($_SESSION['errors'])) : ?>
    <?php $errors = $_SESSION['errors']; ?>
    <?php foreach ($errors as $error): ?>
        <div class="alert alert-danger my-5 p-1 text-center">
            <?= $error ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


<?php unset($errors, $_SESSION['errors'], $_SESSION['success']); ?>