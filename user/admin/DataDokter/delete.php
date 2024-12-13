<?php
require_once "../../../_config/db_konek.php";

mysqli_query($con,"DELETE FROM dokter WHERE id='$_GET[id]'") or die (mysqli_error($con));
echo"<script>window.location='index.php';</script>";
?>