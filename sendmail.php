 <!DOCTYPE html>
  <head>
  <title>PHP mail script</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
<style>
.go { 
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width:10%;
        color: green;
}
</style>
 </head>
 <body>
  <?php
  //3 lines of code to retrieve the form data sent   "post" 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $comment=$_POST['comment'];

   

/*creation of the $msg variable and
 supplementally adding more details to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Sender Name: $name\r\n ";
    $msg.="Sender E-mail: $email\r\n ";
    $msg.="Moblie No: $mobileno\r\n ";
    $msg.="Comment: $comment\r\n ";
    

    $to="Enter E.Mail Address Here.";   //were the email  sent
    $subject="web Site Feedback";   // subject should the email display
    $mailheaders="From: $email\r\n";  // email of the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo file_get_contents('received.html');
     }
     else
     {
      echo file_get_contents('error.html');
     }
     ?>
     


    
      
       

       
   <p class="go"><a href="index.html">Go back</a></p>

 </body>
</html>
