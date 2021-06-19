<?php 

function login($email, $password){

	$db = dbConnect();

	$query = $db->prepare("SELECT * FROM blog_users WHERE email = ?");
	$query->execute([$email]);

	$user = $query->fetch();

	if($user){
		if(password_verify($password, $user['password'])){
	      return $user;
	    }
	    else{
	      return false;
	    }
	}
	else{
		return false;
	}
}

?>