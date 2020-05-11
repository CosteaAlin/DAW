<?php  
       if(isset($_POST['submit']))
       {
        $email=$_POST['email'];
        $message=$_POST['message'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo "<span class='form-error'>Invalid e-mail format!</span>";
      }
      else{
         $connection= mysqli_connect('localhost','root','',
         'template7');
         $query="INSERT INTO contactdata(email,message) VALUES ('$email', '$message')";
         $result=mysqli_query($connection,$query);
         echo "<span class='form-succes'>Your message has been sent!</span>";
         mail($email,"Test Subject", "Thank you for your message!","From: modus123modus@gmail.com");
      }
       }
          
?>
<script>
    $(".email-input, .message-input").val("");
</script>