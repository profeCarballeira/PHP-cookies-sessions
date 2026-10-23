<?php
// Always start this first
session_start();

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
          		
    	// Verify user password and set $_SESSION
    	if ( ($_POST['password']==="abc123.") and ($_POST['username']==="norlan" )) {
    		$_SESSION['user_id'] = "ok";
            echo "you are logged on <br>";
            echo '<a href="y-page1.php">Page 1</a>';
    	}
        else {
            echo "wrong account, try with norlan and abc123.<br>";
        }
    }
}
?>