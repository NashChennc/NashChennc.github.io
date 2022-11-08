<?php $doc_id = 7;
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
            require "./patterns/page-patterns/head-background.php";
            require "./patterns/page-patterns/header.php";
            require "./patterns/page-patterns/main-drawer.php";
            require "./patterns/page-patterns/fab.php";
        ?>
        
        <div class="mdui-container-fluid" style="margin-top: 20px; margin-bottom: 40px;">
            <div class="mdui-container mdui-typo">
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$mdfile= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mdfile= test_input($_POST["mdfile"]);
}
?>

<div id="md" class="mdui-card mdui-hoverable" style="zoom:1.2">
    <div class="mdui-card-primary" style="zoom:1.5">
        <div class="mdui-card-primary-title">
            标题
        </div>
        <div class="mdui-card-primary-subtitle">
            副标题
        </div>
    </div>
    <div class="mdui-card-content mdui-p-x-5">
        <div class="mdui-divider"></div>
        <br/>
        <?php
            if($mdfile!="") {
                $filename = "blog/$mdfile.md";
                $fp = fopen($filename, "r");
                $contents = fread($fp, filesize($filename));
                $contents = htmlspecialchars($contents);
                echo "<div class= \"markdown\">$contents</div>";
                fclose($fp);
            }
        ?>
    </div>
</div>

<form method="post" action="#md" name="mdform" onsubmit="return checkform()">
    <div class="mdui-row">
        <div id= "docname" class="mdui-textfield mdui-col-xs-3">
            <label class="mdui-textfield-label">页面名称</label>
            <input class="mdui-textfield-input" type="text" maxlength="30" name="mdfile" value="<?php echo $mdfile; ?>"/>
            <div class="mdui-textfield-error">页面名称不能为空</div>
        </div>
        <div class="mdui-col-xs-1 mdui-p-t-5">
            <button class="mdui-btn mdui-color-theme-accent mdui-btn-raised mdui-ripple" type="submit">
                提交
            </button>
        </div>
    </div>
</form>
<br/>
<script>
    function checkform() {
        var x1= document.forms["mdform"]["mdfile"].value;
        var flag= true;
        if(x1==null || x1=="") {
            document.getElementById("docname").className+=" mdui-textfield-invalid";
            flag= false;
        }
        if(flag) return true;
        mdui.snackbar({message: "请检查输入",timeout: 800});
        return false;
    }
</script>

            </div>
        </div>
        <?php require "./patterns/page-patterns/footer.php"; ?>
        <?php require "./patterns/sample-script.php"; ?>
    </body>
</html>