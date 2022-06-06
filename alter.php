<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<?php
	$host = 'localhost';
	$user = 'kwangjo3077';
	$pw = '1234';
	$dbName = 'sungkyul';
	$mysqli = new mysqli($host, $user, $pw, $dbName);
	
	
    $data_title = $_POST['title'];
    $data_title = addslashes($data_title);
    $data_rank = $_POST['rank'];

    
    if($data_rank == 1){
        $sql = "DELETE FROM to_do WHERE number = $data_title";   
    }
    else if($data_rank == 2){
            $sql = "DELETE FROM to_doing WHERE number = $data_title";   
    }
    else if($data_rank == 3){
        $sql = "DELETE FROM to_end WHERE number = $data_title";   
    }    
	if($mysqli->query($sql)){ 
	  echo '<script>alert("일을 삭제했습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("실패했습니다")</script>';
	}



    mysqli_close($mysqli);
    
?>

<script>
	location.href = "index.php";
</script>

</html>