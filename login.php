



<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        //database details. You have created these details in the third step. Use your own.
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'formdb';

        //create connection
        $con = mysqli_connect($host,$username,$password,$dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO signup ( username,password) VALUES ('$username', '$password')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if(isset($rs))
        {
            echo "Your input data successfully save";
        }
      //connection closed.
        mysqli_close($con);
    }
?>