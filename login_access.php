<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['SRN_no']) && isset($_POST['Pwd'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['SRN_no']);
    $pass = validate($_POST['Pwd']);
    if (empty($uname)) {
        header("Location: index.php?error=SRN is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM Student WHERE SRN_no='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['SRN_no'] === $uname && $row['Pwd'] === $pass) {
                echo "Logged in!";
                $_SESSION['SRN_no'] = $row['Pwd'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
