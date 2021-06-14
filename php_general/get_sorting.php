<?php 
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['house'])){
        $dbuser = '--YOUR DATA--';
        $dbpass = '--YOUR DATA--';
        $dbhost = --YOUR DATA--
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");

        $dbname = '--YOUR DATA--';
        mysqli_select_db($connection, $dbname) or die("Could not open the database '$dbname'");
        
        $query_string = "";
        
        $_SESSION['house'] = $_POST['house'];
        if(isset($_POST['strongs']) && !isset($_POST['milds'])){
            $_SESSION['strongs'] = $_POST['strongs'];

            $query_string = "INSERT INTO sorting (house, strong) 
            VALUES('" . $_SESSION['house'] . "', '" . $_SESSION['strongs'] . "')";
        }
        if(!isset($_POST['strongs']) && isset($_POST['milds'])){
            $_SESSION['milds'] = $_POST['milds'];

            $query_string = "INSERT INTO sorting (house, mild) 
            VALUES('" . $_SESSION['house'] . "', '" . $_SESSION['milds'] . "')";
        }
        if(isset($_POST['strongs']) && isset($_POST['milds'])){
            $_SESSION['strongs'] = $_POST['strongs'];
            $_SESSION['milds'] = $_POST['milds'];

            $query_string = "INSERT INTO sorting (house, strong, mild) 
            VALUES('" . $_SESSION['house'] . "', '" . $_SESSION['strongs'] . "', '" . $_SESSION['milds'] . "')";
        }

        mysqli_query($connect, $query_string);    
        exit;
    }
?>