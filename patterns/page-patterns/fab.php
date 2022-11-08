<script>
    function submitinfo() {
        // document.getElementById("page_editor").submit();
    }
</script>

<div id="exampleFab" class="mdui-fab-wrapper" mdui-fab="{trigger: 'hover'}">
    <button class="mdui-fab mdui-ripple mdui-color-theme-accent" onclick="submitinfo();">
        <i class="mdui-icon material-icons">add</i>
        <i class="mdui-icon mdui-fab-opened material-icons">edit</i>
    </button>
    <div class="mdui-fab-dial">
        <a href="./mdview.php" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-teal">
            <i class="mdui-icon material-icons">bookmark</i>
        </button>
        <a href="./upload.php" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-blue-700">
            <i class="mdui-icon material-icons">backup</i>
        </a>
        <a href="./" class="mdui-fab mdui-fab-mini mdui-ripple mdui-color-indigo">
            <i class="mdui-icon material-icons">settings</i>
        </a>
    </div>
</div>