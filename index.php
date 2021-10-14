<?php

if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}
?>
<html>
<head></head>
    <body>
    <?php echo "controller = ".$controller.", action = ".$action;?>
    <br>[<a href="?controller=pages&action=home">Home </a>] 
        [<a href="?controller=staff&action=index">Staff</a>]
        [<a href="?controller=quotationDetail&action=index">StaffDaily</a>]
        [<a href="?controller=staffposition&action=index">Staff Position</a>]
    <br>

    <?php require_once("./routes.php"); ?>
    
</body>   
</html>

