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
    $data_data = $_POST['data'];
    $data_data = addslashes($data_data);
    $data_rank = $_POST['rank'];
    
    if($data_rank ==1){
        $sql = "insert into to_do (
                todo_title,
                todo_data
        )";
            
        $sql = $sql. "values (
                '$data_title',
                '$data_data'
        )";
    }
    else if($data_rank ==2){
            $sql = "insert into to_doing (
                    to_doing_title,
                    to_doing_data
            )";
                
            $sql = $sql. "values (
                    '$data_title',
                    '$data_data'
            )";
    }
    else if($data_rank ==3){
            $sql = "insert into to_end (
                    to_end_title,
                    to_end_data
            )";
                
            $sql = $sql. "values (
                    '$data_title',
                    '$data_data'
            )";
    }
	if($mysqli->query($sql)){ 
	  echo '<script>alert("일이 추가되었습니다.")</script>'; 
	}else{ 
	  echo '<script>alert("실패했습니다")</script>';
	}

	mysqli_close($mysqli);
  
?>

<script>
	location.href = "index.php";
</script>

</html>