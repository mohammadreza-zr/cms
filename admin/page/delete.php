<?php
$id=$_GET['id'];
delete_page($id);
header("Location: dashboard.php?m=page&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
