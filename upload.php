<?php $doc_id = 4;
    // require "./patterns/connect/mysql.php";
?>
<!doctype html>
<html>
    <?php
        $title= "";
        require "./patterns/sample-head.php";
    ?>
    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink">
        <?php
            require "./patterns/page-patterns/header.php";
            require "./patterns/page-patterns/main-drawer.php";
            require "./patterns/page-patterns/fab.php";
        ?>
        
        <div class="mdui-container-fluid" style="margin-top: 20px; margin-bottom: 40px;">
            <div class="mdui-container">
            <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = explode(".", $_FILES["file"]["name"]);
        echo $_FILES["file"]["size"] . "B";
        $extension = end($temp);
        if ($_FILES["file"]["size"] <= 2*1024*1024) {
            if ($_FILES["file"]["error"] > 0) {
                echo "错误：" . $_FILES["file"]["error"] . "<br>";
            }
            else {
                echo "上传成功！";
                echo "上传文件名: " . $_FILES["file"]["name"] . "<br>";
                echo "文件类型: " . $_FILES["file"]["type"] . "<br>";
                echo "文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
                echo "文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "<br>";
                if (file_exists("upload/" . $_FILES["file"]["name"])) {
                    echo $_FILES["file"]["name"] . " 文件已经存在。 ";
                }
                else {
                    move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                    echo "文件存储在: " . "upload/" . $_FILES["file"]["name"];
                }
            }
        }
        else {
            echo "太大了";
        }
    }
?>
<div>
    基于php post的文件上传功能，限制2M
    <button class="mdui-btn mdui-color-theme-accent mdui-ripple" mdui-dialog="{target: '#box1'}">
        上传文件
    </button>
</div>

<div id="box1" class="mdui-dialog">
    <div class="mdui-dialog-content">
        <div class="mdui-dialog-title">可以上传文件了！</div>
        随意吧
        限制2M
        <form method="post" enctype="multipart/form-data">
            <div class="mdui-btn mdui-color-theme-accent mdui-ripple">
                <input  type="file" name="file">
            </div>
            
            <button class="mdui-btn mdui-color-theme-accent mdui-ripple" type="submit">
                提交
            </button>
        </form>
    </div>
    <div class="mdui-dialog-actions">
        <button class="mdui-btn mdui-ripple" mdui-dialog-close>取消</button>
    </div>
</div>
            </div>
        </div>
        <?php require "./patterns/sample-script.php"; ?>
    </body>
</html>