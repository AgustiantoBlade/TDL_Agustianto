<?php
session_start();

if(!isset ($_SESSION ['uname'])){
?>
<script>
    alert("silahkan login dulu");
    location.href = "login.php";
</script>
<?php
}
?>