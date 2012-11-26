<?php include ('includes/header.php') ?>

<script type="text/javascript" src="scripts/swfobject.js"></script>
<script type="text/javascript">
	var flashvars = {};
	var params = {
	  bgcolor: "#FFFFFF",
	  quality: "high",
	  allowscriptaccess: "samedomain",
	  wmode: "none"
	};
	var attributes = {
	   width: "920",
	   height: "550",
       src: "movies/home.swf",
       bgcolor: "#FFFFFF",
       quality: "high",
       swliveconnect: "true",
       allowscriptaccess: "samedomain",
	   wmode: "none"
	};
	
	swfobject.embedSWF("movies/home.swf", "flash", "920", "550", "6.0.22,0", "scripts/expressInstall.swf", flashvars, params, attributes);
</script>

  <!-- Begin Flash -->
    <div id="flash">
		<img src="images/bg-home.gif" alt="Merriweather - Transforming Leaders, Teams and Businesses."/>
    </div>
  <!-- End Flash -->
  
<!-- Begin Internet Exploder Hack Job -->
<script language="JavaScript" type="text/javascript" src="scripts/NoIEActivate.js"></script>
<!-- End Internet Exploder Hack Job -->

<?php include ('includes/footer.php') ?>