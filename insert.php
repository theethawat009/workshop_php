<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@200&display=swap" rel="stylesheet">

<style>
  body, h3{
    font-family: 'Prompt', sans-serif;
  }
</style>

<?php
include("connection/config.inc.php");


$fullname = $_POST['txt_fullname'];
$username = $_POST['txt_username'];
$password = $_POST['txt_password'];
$repassword = $_POST['txt_repassword'];

echo $fullname."<br>";
echo $username."<br>";
echo $password."<br>";
echo $repassword."<br>";


$sql = "INSERT INTO tbl_member (id, fullname, username, password, level) VALUES ('', '$fullname', '$username', '$password', 'member')";

if(mysqli_query($conn, $sql)) {
  echo"
  <script>
          Swal.fire({
              icon: 'success',
              title: '<h3>ระบบทำการบันทึกข้อมูลสำเร็จ</h3>',
              imageUrl: 'https://c.tenor.com/rM2go-7SNt4AAAAC/choi-yihyun.gif',
              imageWidth: 400,
              imageHeiht: 200,
              imageAlt: 'giphy',
              timer: 1400
          }).then(function() {
              window.location = 'login.php';
          });
  </script>
  ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn -> close();
?>