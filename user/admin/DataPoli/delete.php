<?php
require_once "../../../_config/db_konek.php";

mysqli_query($con,"DELETE FROM poli WHERE id='$_GET[id]'") or die (mysqli_error($con));
echo"<script>window.location='index.php';</script>";
?>