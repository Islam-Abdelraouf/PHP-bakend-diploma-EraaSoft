<?php

// <!-- config -->
require_once('../../app/config.php');
require_once('../../database/db-config.php');

// <!-- functions files -->
require_once('../../app/func-main.php');
require_once('../../app/func-db.php');

// <!-- Header -->
require_once('../inc/header.php');
// <!-- Navigation -->
require_once('../inc/nav.php');

//$motherPage = URL . 'admin/messages.php';
?>


<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    $_SESSION['errors'] = array("Un-authorized Request!");
    redirect($motherPage);
}

if (! empty($_POST['id-edit'])) {
    $messageId = $_POST['id-edit'];
    echo "<br>";
    echo "<h1 class=' display-3'>Message Reply</h1> <br>";
    echo "<h3>Under construction!</h3> <br>";
    dumpDie("Message to be replied has an Id of : " . $messageId, 1);
}

require_once('../inc/footer.php');
?>