<?php
$id=$_GET['id'];
deletemenu($id);
header("Location: dashboard.php?m=menu&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=menu&p=list'
</script>-->
