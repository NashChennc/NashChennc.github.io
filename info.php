<?php $doc_id = 1;
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
            <div class="mdui-container">
<h1>
    Team Info
</h1>

<table class="mdui-table mdui-table-hoverable">
    <thead>
        <tr>
            <th></th>
            <th>Tools</th>
            <th>Members</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>策划</td>
            <td></td>
            <td>Nash Chen</td>
        </tr>
        <tr>
            <td>前端</td>
            <td>MDUI / CSS</td>
            <td>Nash Chen</td>
        </tr>
        <tr>
            <td>脚本</td>
            <td>PHP / JavaScript</td>
            <td>Nash Chen</td>
        </tr>
        <tr>
            <td>后端</td>
            <td>MySQL / Python / C++</td>
            <td>Nash Chen</td>
        </tr>
        <tr>
            <td>测试</td>
            <td></td>
            <td>Nash Chen</td>
        </tr>
        <tr>
            <td>系统</td>
            <td>Windows / Apache</td>
            <td></td>
        </tr>
    </tbody>
</table>
<h1> Server Info </h1>

<table class="mdui-table mdui-table-hoverable">
    <thead>
        <tr>
            <th>#</th>
            <th>Key</th>
            <th>Value</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
            $i = 0;
            foreach($_SERVER as $x=>$x_value) {
                $i++;
                echo "<tr> <td> $i </td> <td> $x </td>";
                if($x == "PATH") {
                    echo "<td class=\"mdui-text-color-black-disabled\"> Too long / Set Unshown </td> </tr>";
                }
                else {
                    echo "<td>"; var_dump($x_value); echo "</td> </tr>";
                }
            }
        ?>
    </tbody>
</table>
            </div>
        </div>
        <?php require "./patterns/page-patterns/footer.php"; ?>
        <?php require "./patterns/sample-script.php"; ?>
    </body>
</html>