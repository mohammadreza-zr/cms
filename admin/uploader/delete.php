<?php
$id=$_GET['id'];
delete_file($id);
header("Location: dashboard.php?m=uploader&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
