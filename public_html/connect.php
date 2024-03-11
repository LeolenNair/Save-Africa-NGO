<html>
    <head>
        <title></title>
    </head>
    <body>
<?php
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $eMail = $_POST['eMail'];
    $Question = $_POST['Question'];
    $radioButton = $_POST['radioButton'];
    
    //database connection
?>
Welcome <?php echo $_POST["fname"]; ?>
Your eMail is <?php echo $_POST["eMail"]; ?>
    </body>
</html>