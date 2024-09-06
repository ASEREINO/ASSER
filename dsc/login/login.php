<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '442108585');
define('DB_NAME', 'cv');

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $uname = $_POST['name'];
    $pass = $_POST['pass'];

    // التحقق من صحة اسم المستخدم وكلمة المرور
    if ($uname === 'YOUSIF ASIRI' && $pass === '3179') {
        $_SESSION['login_user'] = $uname;
        header("Location: /dsc/home/index.html"); // تأكد من المسار الصحيح للملف
        exit();
    } else {
        echo "<div class='error-message'>اسم المستخدم أو كلمة المرور غير صحيحة.</div>";
    }
}

$conn->close();
?>
