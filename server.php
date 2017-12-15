<?php



	// if an action is requested...
	if(!empty($_POST['action'])){
	
		// what action is it?
		switch($_POST['action']){

			// is it "login"?
			case "login" :

				// check input
				if(empty($_POST['email'])){
					$message = "No email set.";
					break;
				} 
				if(empty($_POST['password'])){
					$message = "No password set.";
					break;
				} 


				extract($_POST);


				// connect to server, with user, and select database
				$db = new mysqli("localhost", "root", "root", "mustafa");
				

				// write sql
				$sql = 'SELECT * FROM users where email="' . addslashes($email) . '" AND password="' . addslashes($password) . '"';
				


				// run query
				$user = $db -> query($sql) -> fetch_object();


				// handle it if user isn't found
				if(!$user) {
					$message = "User not found.";
					break;
				} 


				// if user is found, return access token
				$admin = true;


			break;

		}

		
	}

?>