<?php

//echo "hi username";
if (isset($_SESSION['auth'])) {
    echo "<span>Hello, " . $_SESSION['auth']->username . " &nbsp</span>";
}