
<?php 
      $member_password = isset($_COOKIE["member_password"]) ? $_COOKIE["member_password"] : '';
      $member_login = isset($_COOKIE["member_login"]) ? $_COOKIE["member_login"] : '';
      
      if($member_password){
          echo '<script>(user_login("'.$member_login.'","'.$member_password.'",1))</script>';
      }
      
?>
	<!-- Footer section end-->