<?php session_start();
require("db_connection.php");
if (isset ($_POST['email']) && isset ($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['error'] = array();
    try {
        $res = mysqli_query($connect, "SELECT * FROM users WHERE
        email = '$email' AND password= '$password' " );
        $row = mysqli_fetch_assoc($res);
        if(!empty($row)) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['fullname'];
            header('Location: ../index.php');
        } else {
            $_SESSION['error'][] = "Wrong Username or Pssword";
            echo '<script language= "javascript">';
            echo 'alert("Wrong Username or Password")';
            echo '</script>';

        }
    } catch (\Throwbale $th) {
        echo $th;
    }
};

?>
<body>
    <form action= 'controller/login_user.php' method="POST">
        <input type="text" name="email" placeholder="Input Email"/>
        <input type="text" name="password" placeholder="Input Password"/>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>