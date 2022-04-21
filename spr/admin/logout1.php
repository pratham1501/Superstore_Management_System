<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
    header("Location:sprdb\spr\admin\index.php"); // Redirecting To Home Page
}
?>


