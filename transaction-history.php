<?php include_once("./components/header.php"); ?>
<div class="home-page page">
   <h1>This is <strong>Transaction History</strong>  Page</h1>
</div>
<script>
   $(document).ready(function() {

   });
</script>
<?php if ( $_GET["rel"]!="page") { echo "</div>"; } ?>
<?php include_once("./components/footer.php"); ?>