<!-- FOOTER SECTION -->
<?php include 'inc/header.php'; ?>

<!-- NAVBAR SECTION -->
<?php include 'inc/nav.php'; ?>

<!-- INCLUDE SECTION -->
<?php include 'core/functions.php'; ?>
<?php include 'core/csv-functions.php'; ?>

<!-- Body Contents -->

<!-- Page Title -->
<?php addTitleSection("Messages"); ?>


<!-- CONTACT US FORM -->
<div class="container px-4">

    <div class="col-12 py-2 px-0 mt-4">
        <div class="row">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">MESSAGE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $messagesPool = readCsvDataArr("database/messages.csv"); ?>
                    <?php foreach ($messagesPool as $message): ?>
                        <tr>
                            <td><?= $message[0]; ?></td>
                            <td><?= $message[1]; ?></td>
                            <td><?= $message[2]; ?></td>
                            <td><?= $message[3]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<!-- FOOTER SECTION -->
<?php include 'inc/footer.php'; ?>