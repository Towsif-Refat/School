<?php

$class = $subject = $nsubject = $message = "";
$eclass = $esubject = $ensubject = $enmessage = "";
$error = $message = "";
$errorFlag=0;

if($_SERVER["REQUEST_METHOD"] == "POST")
  {  
   

      if(empty($_POST["title"]))  
      {  
           $ensubject = "Enter notice subject"; 
           $errorFlag=1; 
      }
    
      if(empty($_POST["notice"]))  
      {  
           $enmessage = "Please write the Message body";  
           $errorFlag=1;
      } 
      if($errorFlag==0)
      { 
        // $class,$subject,$title,$notice
       $res=  StudentNoticeSend($_POST['class'],$_POST['subject'],$_POST['title'],$_POST['notice']);
       if($res>0){
        echo "Successfully send";
       }
        
       }
        // else  
        // {  
        //   $error = 'Error';
        // }
    }
?>

