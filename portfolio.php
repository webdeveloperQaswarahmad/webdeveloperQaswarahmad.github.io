<?php
if(isset($_POST['submit'])){
    $Name=$_post['Name'];
    $Email=$_post['Email'];
    $Subject=$_post['Subject'];
    $project=$_post['project'];

$mailto = "qaswarahmad2019@gmail.com";
$headers = "From :".$Email;
$text = "You have received an e-mail from".$Name.".\n\n".$project;


    mail($mailto,$Subject,$text,$headers );
    header("Location:portfolio.html?mailsend");
}














?>