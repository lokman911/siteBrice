<?php


   if (isset($_POST['submit'])){
     $name     = $_POST['name'];
     $subject  = $_POST['subject'];
     $mailForm = $_POST['mail'];
     $message  = $_POST['message'];

     $mailTo = "lokman.68@hotmail.com";

     mail();

   }
