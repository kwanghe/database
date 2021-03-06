<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>ToDo</title>
    <script src="module.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="add" onclick="addTodo()"><span>일 추가하기</span></div>
    <div class="add" onclick="addTodo1()" style="
    border-bottom: 2px solid #f1b5ea;"><span>할일 제거</span></div>
    <div class="add" onclick="addTodo2()" style="
        border-bottom: 2px solid #f1b5ea;"><span>하고있는일 제거</span></div>
    <div class="add" onclick="addTodo3()" style="
        border-bottom: 2px solid #f1b5ea;"><span>한일 제거</span></div>    
    <div class="add" onclick="logout()" style="
    border-bottom: 2px solid #f1b5ea;"><span>로그아웃</span></div>
    <div class="wrap_menu">
        <div class="sec_wrapper" id="todo_wrapper">
            <div class="menu" id="m_todo"><span>할 일</span></div>
                <table>
                <?php
                    $con = mysqli_connect("localhost","kwangjo3077","1234","sungkyul");
                    $sql = "SELECT * FROM to_do"; 
                    $result = mysqli_query($con, $sql);
            
                    if($result !=''){
                    
                        while($row = mysqli_fetch_assoc($result)) {
            
                            $data = $row['todo_data'];
                            $title = $row['todo_title'];
                            $number = $row['number'];
                            echo '<tr>';
                            echo '<td class="t_title" colspan="2">';
                            echo $number;
                            echo " .";
                            echo $title;
                            echo '</td>';
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td class="t_detail">';
                            echo $data;
                            echo '</td>';
                         
                            echo '</tr>';
                        }
                    } 
                    mysqli_close($mysqli);        
                ?>
                </table>
        </div>
        <div class="sec_wrapper" id="doing_wrapper">
            <div class="menu" id="m_doing"><span>하고 있는 일</span></div>
            <table>
                <?php
            
                                    $con = mysqli_connect("localhost","kwangjo3077","1234","sungkyul");
                                    $sql = "SELECT * FROM to_doing"; 
                                    $result = mysqli_query($con, $sql);
                            
                                    if($result !=''){
                                    
                                        while($row = mysqli_fetch_assoc($result)) {
                            
                                            $data = $row['to_doing_data'];
                                            $title = $row['to_doing_title'];
                                            $number = $row['number'];
                                            echo '<tr>';
                                            echo '<td class="t_title" colspan="2">';
                                            echo $number;
                                            echo " .";
                                            echo $title;
                                            echo '</td>';
                                            echo '</tr>';
                                            echo '<tr>';
                                            echo '<td class="t_detail">';
                                            echo $data;
                                            echo '</td>';
                                           
                                            echo '</tr>';
                                        }
                                    } 
                                  mysqli_close($mysqli);          
                                ?>
            </table>
        </div>
        <div class="sec_wrapper" id="done_wrapper">
            <div class="menu" id="m_done"><span>한 일</span></div>
            <table>
               <?php
                                   $con = mysqli_connect("localhost","kwangjo3077","1234","sungkyul");
                                   $sql = "SELECT * FROM to_end"; 
                                   $result = mysqli_query($con, $sql);
                           
                                   if($result !=''){
                                   
                                       while($row = mysqli_fetch_assoc($result)) {
                           
                                           $data = $row['to_end_data'];
                                           $title = $row['to_end_title'];
                                           $number = $row['number'];
                                           echo '<tr>';
                                           echo '<td class="t_title" colspan="2">';
                                           echo $number;
                                           echo " .";
                                           echo $title;
                                           echo '</td>';
                                           echo '</tr>';
                                           echo '<tr>';
                                           echo '<td class="t_detail">';
                                           echo $data;
                                           echo '</td>';
                                          
                                           echo '</tr>';
                                       }
                                   } 
                                   mysqli_close($mysqli);        
                               ?>
            </table>
        </div>

    </div>

    <div id="hide">
        <div id="add_todo">
            <h2 style="text-align: center; color:black;">할일 등록</h2>
            <hr style="border:1px solid lightgrey;">
            <form name="addform" method="post" action="dataWrite.php">
                <p class="addText">주제</p>
                <input type="text" name="title" placeholder="제목" required /><br>
                <p class="addText">어떤 일인가요?</p>
                <input type="text" name="data" placeholder="상세설명" required /><br>
                <p class="addText">할일, 하고있는일, 한일 중에 선택하세요.</p>
                <div class="rank">
                    <label><input type="radio" name="rank" value="1" checked="checked">할일</label>
                    <label><input type="radio" name="rank" value="2">하고 있는 일</label>
                    <label><input type="radio" name="rank" value="3">한 일</label>
                </div>
                <div class="addtodo_buttonlist">
                    <input type="button" value="닫기" name="" style="background: #ea8d8a; cursor: pointer;" onclick="hide_addTodo()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                    <input type="reset" value="지우기" name="" style="background: #efb64b; cursor: pointer;" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                    <input type="submit" value="등록" name="" style="background: rgb(50, 162, 210); cursor: pointer;" onclick="hide_addTodo()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                </div>
            </form>
        </div>
    </div>
    <div id="hide1">
            <div id="add_todo1">
                <h2 style="text-align: center; color:black;">할일 제거</h2>
                <hr style="border:1px solid lightgrey;">
                <form name="addform1" method="post" action="alter.php">
                
                    <p class="addText">할일 번호</p>
                    <input type="text" name="title" placeholder="숫자입력"  required /><br>
                    
                    <div class="rank">
                        <label><input type="radio" name="rank" value="1" checked="checked">할일</label>
                  
                    </div>
                    <div class="addtodo_buttonlist">
                        <input type="button" value="닫기" name="" style="background: #ea8d8a; cursor: pointer;" onclick="hide_addTodo1()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                        <input type="reset" value="지우기" name="" style="background: #efb64b; cursor: pointer;" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                        <input type="submit" value="제거" name="" style="background: rgb(50, 162, 210); cursor: pointer;" onclick="hide_addTodo1()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                    </div>
                </form>
            </div>
        </div>
            <div id="hide2">
                    <div id="add_todo2">
                        <h2 style="text-align: center; color:black;">하고 있는일 제거</h2>
                        <hr style="border:1px solid lightgrey;">
                        <form name="addform2" method="post" action="alter.php">
                        
                            <p class="addText">하고 있는일 번호</p>
                            <input type="text" name="title" placeholder="번호입력"  required /><br>
                            
                            <div class="rank">
                                <label><input type="radio" name="rank" value="2" checked="checked">하고 있는 일</label>
                          
                            </div>
                            <div class="addtodo_buttonlist">
                                <input type="button" value="닫기" name="" style="background: #ea8d8a; cursor: pointer;" onclick="hide_addTodo2()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                                <input type="reset" value="지우기" name="" style="background: #efb64b; cursor: pointer;" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                                <input type="submit" value="제거" name="" style="background: rgb(50, 162, 210); cursor: pointer;" onclick="hide_addTodo2()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                        </div>
                    </form>
                </div>
         </div>
    <div id="hide3">
            <div id="add_todo3">
                <h2 style="text-align: center; color:black;">한일 제거</h2>
                <hr style="border:1px solid lightgrey;">
                <form name="addform3" method="post" action="alter.php">
                
                    <p class="addText">한일 번호</p>
                    <input type="text" name="title" placeholder="번호입력"  required /><br>
                    
                    <div class="rank">
                        <label><input type="radio" name="rank" value="3" checked="checked">한 일</label>
                  
                    </div>
                    <div class="addtodo_buttonlist">
                        <input type="button" value="닫기" name="" style="background: #ea8d8a; cursor: pointer;" onclick="hide_addTodo3()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                        <input type="reset" value="지우기" name="" style="background: #efb64b; cursor: pointer;" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                        <input type="submit" value="제거" name="" style="background: rgb(50, 162, 210); cursor: pointer;" onclick="hide_addTodo3()" onmouseover="this.style.textDecoration= 'underline';" onmouseout="this.style.textDecoration='none';">
                    </div>
                </form>
            </div>
        </div>                
</body>

</html>
