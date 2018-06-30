<?php
         $to = "rajputravi701@gmail.com";
         $subject = "Test Mail";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:rrrockingdudeu31@gmail.com \r\n";
         //$header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }




         /*function mail(mysqli $conn){
            $login_id=$_GET['mail'];
            $password=$_GET['password'];
            $query="SELECT * FROM user WHERE u_mail='$login_id'";
            $result=mysqli_query($conn,$query);
            $value=mysqli_fetch_assoc($result);
            if($login_id==$value['u_mail'] && $password==$value['u_pass']){
               $_SESSION["user_id"]=$value['id'];
               $_SESSION["name"] =$value['u_name'];
               header('Location:/blogv1/userpage.php');
            }
            elseif ($login_id=='' && $password=='') {
            echo "Enter Username and password";
            }
            else
            echo "Incorrect credentials";
         }
         if(isset($_GET['Submit']))
         {
            mail($conn);
         }*/
      ?>