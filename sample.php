<?php $doc_id = 3;
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
            <h1> 问天地好在 </h1>
<h1> どうも、世界 </h1>
<h1> Hello World! </h1>
<div>
    This is my first html document
</div>
<div>
    <?php echo "this is hello world from php."; ?>
</div>
<div>
    <?php //OutputConnectStatus(); ?>
</div>

<div class="mdui-panel" mdui-panel>
    <div class="mdui-panel-item">
        <div class="mdui-panel-item-header">
            <div class="mdui-panel-item-title">Start and end dates</div>
            <div class="mdui-panel-item-summary">Start date: May 25, 2022</div>
            <div class="mdui-panel-item-summary">End date: Not set</div>
            <i class="mdui-panel-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
        </div>
        <div class="mdui-panel-item-body">
            <p>Third content</p>
            <p>Third content</p>
            <p>Third content</p>
            <p>Third content</p>
            <p>Third content</p>
            <p>Third content</p>
            <div class="mdui-panel-item-actions">
                <button class="mdui-btn mdui-ripple" mdui-panel-item-close>
                    cancel
                </button>
                <button class="mdui-btn mdui-ripple">
                    save
                </button>
            </div>
        </div>
    </div>
</div>

<div class="mdui-spinner"></div>

<div>
    $$ e^x=\sum_{k\geq 0}\frac{x^k}{k!} $$
    Mobius inversion: $ \sum_{d|n}\mu(d) = \varepsilon(n)$
</div>

<div class="markdown">
    <?php require "blog/ma-2.md" ?>
</div>

<!--div class="video-container video-rounded">
    <iframe src="./file/run_so_fast.mp4" frameborder="0" allowfullscreen></iframe>
</div-->
            </div>
        </div>
        <?php require "./patterns/page-patterns/footer.php"; ?>
        <?php require "./patterns/sample-script.php"; ?>
    </body>
</html>