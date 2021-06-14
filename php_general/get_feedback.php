<?php 
    session_start();
    $_SESSION['post-data'] = $_POST;

     // GET USER RATING/COMMENT AND INSERT IN DATABASE
    if(isset($_POST['ratingvalue'])){

        $userRating = explode("_", $_SESSION['post-data']['ratingvalue']);
        $_SESSION['rating'] = $userRating[0];
        $_SESSION['point'] = $userRating[1];
    }

    if(isset($_POST['comment'])){

        $userComment = $_SESSION['post-data']['comment'];
        $_SESSION['comment'] = $userComment;

        $dbuser = '--YOUR DATA--';
        $dbpass = '--YOUR DATA--';
        $dbhost = --YOUR DATA--
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
        $dbname = '--YOUR DATA--';
        mysqli_select_db($connection, $dbname) or die("Could not open the database '$dbname'");

        if($_SESSION['comment'] == 'nocomment'){
            
            $query_string = "INSERT INTO feedback (rating, point) 
            VALUES('" . $_SESSION['rating'] . "', '" . $_SESSION['point'] . "')";
            mysqli_query($connect, $query_string);    
            exit;
        }
    }

    if(isset($_POST['finishfeedback']) && !empty($_SESSION['comment'])){
        $dbuser = '--YOUR DATA--';
        $dbpass = '--YOUR DATA--';
        $dbhost = --YOUR DATA--
        $connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Unable to connect to '$dbhost'");
        $dbname = '--YOUR DATA--';
        mysqli_select_db($connection, $dbname) or die("Could not open the database '$dbname'");

        $userCommentText = $_SESSION['post-data']['finishfeedback'];
        $_SESSION['finishfeedback'] = $userCommentText;   

        $query_string = "INSERT INTO feedback (rating, point, comment) 
        VALUES('" . $_SESSION['rating'] . "', '" . $_SESSION['point'] . "', '" . $_SESSION['finishfeedback'] . "')";
        mysqli_query($connect, $query_string);    
        exit;
    }
?>