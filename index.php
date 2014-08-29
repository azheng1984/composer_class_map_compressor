<?php
if (isset($_GET['b'])) {
    echo file_get_contents('php://input');
    print_r($_POST);
    echo $_SERVER['REQUEST_METHOD'];
    exit;
}
