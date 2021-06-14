<?php
$id=$_GET['id'];
delete_widget($id);
header("Location: dashboard.php?m=widget&p=list");
?>
<!--<script>
    window.location.href='dashboard.php?m=product&p=list'
</script>-->
