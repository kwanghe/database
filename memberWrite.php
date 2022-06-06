<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<?php

		$host = 'localhost';
		$user = 'kwangjo3077';
		$pw = '1234';
		$dbName = 'sungkyul';
		$mysqli = new mysqli($host, $user, $pw, $dbName);

		$member_email = $_POST['userid'];
	    $member_pw_1 = $_POST['userpw'];
	    $member_name = $_POST['username'];
        if($_POST){
            
        }

	$sql = "insert into member (
			member_email,
			member_pw_1,
			member_name
	)";
	
	$sql = $sql. "values (
			'$member_email',
			'$member_pw_1',
			'$member_name'
	)";

	if($mysqli->query($sql)){ 
	  echo '<script>alert("회원가입이 되었습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("fail to insert sql")</script>';
	}

	mysqli_close($mysqli);
	  
	?>

<script>
	location.href = "login.html";
</script>

</html>