<?php $doc_id = 2;
    // require "./patterns/connect/mysql.php";
?>
<!doctype html>
<html>
    <head id= "header">
        <script src="./patterns/jquery-3.6.0/jquery-3.6.0.min.js"></script>
        <title>Title</title>
    </head>
    <body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink">
        <?php
            require "./patterns/page-patterns/head-background.php";
            require "./patterns/page-patterns/header.php";
            require "./patterns/page-patterns/main-drawer.php";
            require "./patterns/page-patterns/fab.php";
        ?>
        
        <div class="mdui-container-fluid" style="margin-top: 20px; margin-bottom: 40px;">
            <div class="mdui-container">
<h1>Log</h1>
<table class="mdui-table">
    <thead></thead>
    <tbody>
        <tr><td>5.23</td> <td>开始策划并接触html/css/javascript/php/web server/mdui</td></tr>
        <tr><td>5.25</td> <td>建站<br/></td></tr>
        <tr><td>5.27</td> <td>接入 ustc-guest 测试，提交表单成功<br/></td></tr>
        <tr><td>5.28</td> <td>前端结构基本完备。新增Info页面。<br/></td></tr>
        <tr><td>5.29</td> <td>可以上传 2M 文件<br/></td></tr>
        <tr><td>5.30</td> <td>导入 MathJax / 手搓 Markdown 编译器 / 优化前端结构 / 页面链构建完成<br/></td></tr>
        <tr><td>6.8</td> <td>MathJax 替换成 KaTeX, 优化Markdown编译器。<br/></td></tr>
        <tr><td>10.6</td> <td>电脑重装后重新建站。数据库相关内容暂时封存<br/></td></tr>
        <tr><td>10.7</td> <td>从自己的洛谷博客搬运了一些博文<br/></td></tr>
        <tr><td>10.9</td> <td>从网上弄的 js/php-markdown 编译器还不如手搓的好用，遂放弃<br/></td></tr>
    </tbody>
</table>
            </div>
        </div>
        <?php require "./patterns/page-patterns/footer.php"; ?>
        <?php require "./patterns/sample-script.php"; ?>
        <script>
            $(function(){
                $("#header").load("./patterns/sample-header.php")
            });
        </script>
    </body>
</html>