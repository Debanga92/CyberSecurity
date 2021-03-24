<?php

if(isset($_POST['submit']))
{   
$to = "birlawebsolutions.ghy@gmail.com";
$subject = "Response from " .$_POST['name']. "," .$_POST['phnno'];
$message = $_POST['message'];
$headers = $_POST['email'];

   

if(mail($to, $subject, $message, $headers))
{
?>
<script type="text/javascript"> alert("Message sent");
window.location.href = "index.html";
</script>

<?php    
}
else
{
 ?>
<script type="text/javascript"> alert("Try again later");

window.location.href = "index.html";
</script>

<?php 
} 
?>    