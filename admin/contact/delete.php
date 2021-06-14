<?php
$id=$_GET['id'];
deleteContact($id);
header("Location: dashboard.php?m=contact&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
