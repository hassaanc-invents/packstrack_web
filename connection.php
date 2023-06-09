<?php
$conn = mysqli_connect("localhost","u552095459_trackingsystem","System1dev@track","u552095459_trackingsystem");
$baseURL = "http://packstrack.com";
function check_login($conn)
    {
        session_start();
      if(isset($_SESSION['logged_username']))
      {
          $id= $_SESSION['admin_id'];
          $query = "SELECT * FROM admin_information WHERE admin_id = '$id' LIMIT 1";
          $result= mysqli_query($conn , $query);
          if($result && mysqli_num_rows($result) >0)
          {
           $userdata = mysqli_fetch_assoc($result);
           return $userdata;
          }
      } else {
      header('Location:login');
      die;
}
}
?>