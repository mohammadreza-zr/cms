<?php
$id=$_GET['id'];
deletePro($id);
header("Location: dashboard.php?m=product&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
