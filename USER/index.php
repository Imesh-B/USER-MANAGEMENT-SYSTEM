<!--Import DataBase Connection File-->
<?php require_once('./INC/Connection.php'); ?>

<!--Html Content-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login.css">

    <title>USER MANAGEMENT SYSTEM</title>
</head>

<body>
    <!--Header Section Start-->
    <div class="Header">
        <?php
        include('./Component/Header.php');
        ?>
        <!--Login Fom-->
        <div>
            <?php
            //Import the Login Form
            include('Component/Form-Login.php');

            //Tasks
            //Check for form submition
            //check if the username or passwrod has been entered.
            //check if there are any error in the forms
            //save name and Password in to varible
            //prepare database query
            //check if user is valid
            //send to users.php
            //else send  error
            
            //task 01
            //Create Array
            $errors = array();
            //Check Form Submition
            if (isset($_POST['Submit'])) {
                //Check if the username or password enter
                //Remove space using trim() funtion and check string length<1
                if (!isset($_POST['Email']) || strlen(trim($_POST['Password'])) < 1) {
                    //send the error Code
                    $errors[] = 'Username is Missing ';
                }
                //Remove the space using trim()function and check password lenth <1
                if (!isset($_POST['Password']) || strlen(trim($_POST['Password']))) {
                    $errors[] = 'Password is Missing';
                };
                if(empty($errors)){
                    //check input sql query and remove it using  mysqli_real_escape_string() function  and into the varible its syntax  mysqli_real_escape_string(Connection,Name);
                    $Name=mysqli_real_escape_string($connection,$_POST['Email']);
                    $Password=mysqli_real_escape_string($connection,$_POST['Password']);
                    //encrypt Passwword using sha1()funtion
                    $HashPassword=sha1($Password);
                    
                }

                //Difine the Sql Query
                $SQL="SELECT* FROM user,
                        WHERE email='{$email}'

            }




            ?>
        </div>














    </div>
    <!--Header Section end-->




</body>

</html>


























<!-- Php Connection File connection funtion Close-->
<?php mysqli_close($connection) ?>