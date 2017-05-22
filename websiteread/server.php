<?php
require('session.php');

$id_session = $_POST['id_session'];

if (isset($id_session)) {

    if ($id_session != "") {
        $handler = new Session();
        session_set_save_handler($handler, true);
        session_write_close();
        session_id($id_session);
        session_start();
        if (isset($_SESSION['value'])) {
            echo "Value_session: " . $_SESSION['value'];
        } else {
            echo "Session không tồn tại";
        }
    } else {
        echo "Bạn chưa nhập ID session";
    }

} else {
    echo "ID không tồn tại";
}