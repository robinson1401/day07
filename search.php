<?php 
    $khoa = array("" => "", "MAT" => "Khoa học máy tính", "KDL" => "Khoa học vật liệu");
    if (isset($_POST['submit'])) {
        session_start();
        $_SESSION["keyword"] = "";
        header('Location: register.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Search</title>
</head>
<body>
    <form method='post' action='register.php'>
        <div class="content">
            <div class="search">
                <table class="table"> 
                    <tr>
                        <?php
                            echo"
                            <td class='td'><label>Phân khoa</label></td>
                            <td><select class='blue-box' name='department'>";
                                foreach ($khoa as $key => $value) {
                                    echo "
                                    <option";
                                    echo (isset($_POST['department']) && $_POST['department'] == $key) ? " selected " : "";
                                    echo " value='" . $key . "'>" . $value . "</option>";
                                }
                                echo "
                                </select></td>"
                        ?>
                    </tr>
                    <tr>
                        <?php
                            echo"
                                <td class='td'><label>Từ khóa</label></td>
                                <td><input type='text' id='input' class='blue-box' name='name' value='";
                                echo isset($_POST['keyword']) ? $_POST['keyword'] : '';
                                echo "'></td>"
                        ?>
                        </tr>
                </table>    
                <button class="find" >Tìm kiếm</button>
            </div>
        
            <div class="number">Số sinh viên tìm thấy: XXX</div>
            <div class="add">
                <button class="action_add" type="submit">Thêm</button>
            </div>
        
            <div class="show">
                <div class="infor">
                    <table class="table">   
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tên sinh viên</th>
                                <th scope="col">Khoa</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th scope="col">Action</th>
                            </tr>      
                            <tr class="tr">
                                <th>1</th>
                                <td>Nguyễn Văn A</td>
                                <td>Khoa học máy tính</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="td_action">Xóa</td>
                                <td class="td_action">Sửa</td>
                            </tr>
                            <tr class="tr">
                                <th>2</th>
                                <td>Trần Thị B</td>
                                <td>Khoa học máy tính</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="td_action">Xóa</td>
                                <td class="td_action">Sửa</td>
                            </tr>
                            <tr class="tr">
                                <th>3</th>
                                <td>Nguyễn Hoàng C</td>
                                <td>Khoa học vật liệu</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="td_action">Xóa</td>
                                <td class="td_action">Sửa</td>
                            </tr>
                            <tr class="tr">
                                <th>4</th>
                                <td>Định Quang D</td>
                                <td>Khoa học vật liệu</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td class="td_action">Xóa</td>
                                <td class="td_action">Sửa</td>
                            </tr>
                        
                    </table>
                </div>
            </div>

        </div>
    </form>
</body>
</html> 