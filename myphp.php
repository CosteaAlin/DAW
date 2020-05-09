<?php   
     if(isset($_POST['submit']))
     {
         $email=$_POST['email-input'];
         $message=$_POST['message-input'];
         $connection= mysqli_connect('localhost','root','',
         'template7');
         if(strlen($email)==0 || strlen($message)==0)
         { 
               echo '<script language="javascript">';
               echo 'alert("You must write in all fields.")';
               echo '</script>';
         }
         else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo '<script language="javascript">';
            echo 'alert("Your email is not a valid email address.")';
            echo '</script>';
         }
         else{
            $query="INSERT INTO contactdata(email,message) VALUES ('$email', '$message')";
            $result=mysqli_query($connection,$query);
                  echo '<script language="javascript">';
                  echo 'alert("Your message has been sent.")';
                  echo '</script>';
                  mail($email,"Test Subject", "Something Something","From: modus123modus@gmail.com");
         }
     }
?>