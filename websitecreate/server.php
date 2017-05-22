<?php
require('session.php');

$id_session = $_POST['id_session'];
$value_session = $_POST['value_session'];

if (isset($id_session)) {//kiểm tra id sesstion tồn tại
    if ($id_session != "") {//kiểm tra id session khác null
        $handler = new Session();//khai báo class session
        session_set_save_handler($handler, true);// khởi tạo hàm handle
        session_start();//khởi tạo session
        session_id($id_session);//khởi tạo session id
        $_SESSION['value'] = $value_session;//lưu giá trị vào session
        echo "ID_session: " . $id_session . "</br>";
        echo "Value_session: " . $value_session;
    } else {
        echo "Bạn chưa nhập ID";
    }
} else {
    echo "ID không tồn tại";
}