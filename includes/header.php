<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<meta name="verify-v1" content="CFWJZthwnuJL9DLa2JIle95jA7vvX1TtKT5uSQOWrCM=" />
<meta name="ROBOTS" content="NOINDEX,NOFOLLOW">

<title>Merriweather - Transforming Leaders, Teams and Businesses</title>
<link rel="shortcut icon" href="images/logo.ico" />

	<!-- Begin Styles -->
	<link href="styles/master.css" rel="stylesheet" type="text/css" />
    <link href="styles/drop.css" rel="stylesheet" type="text/css" />
	<!-- End Styles -->
    
    <!-- Begin JavaScript -->
    <script src="scripts/drop.js" type="text/javascript"></script>
    <script src="scripts/rollovers.js" type="text/javascript"></script>
    <script type="text/javascript" src="scripts/swfobject.js"></script>
    <!-- End JavaScript -->
    
    <!--[if IE]>
	<link rel="stylesheet" type="text/css" href="styles/ie7.css" />
	<![endif]-->
    
	<!--[if IE 6]>
	<link rel="stylesheet" type="text/css" href="styles/ie6.css" />
	<![endif]-->
    
</head>

<body>

<!-- Begin Crapper -->
<div id="crapper">

<!-- Begin Header -->
<div id="header">
	<h1 id="logo"><a href="index.php"><img src="images/logo-merriweather.gif" alt="Merriweather Home" border="0" /></a></h1>
    <p id="login"><small><a href="http://mwbip.com/">LOGIN</a></small></p>
</div>
<!-- End Header -->

<!-- Begin Menu -->
<div id="menu-main">
    <?php include ('includes/mainmenu.php') ?>
</div>
<!-- End Header -->


<!-- Begin Middle -->
<div id="middle" class="<?php
               
    if ($page == 'index.php') {
    
    print 'flash';
            
    }
	
	elseif ($page == 'index-flash.php') {
    
    print 'flash';
            
    }
	
	/* ABOUT */
	
	elseif ($page == 'about-merriweather.php') {
    
    print 'about-merriweather';
            
    }
	
	elseif ($page == 'about-clients.php') {
    
    print 'about-clients';
            
    }
	
	elseif ($page == 'about-team.php') {
    
    print 'about-team';
            
    }
	
	elseif ($page == 'about-coaches.php') {
    
    print 'about-coaches';
            
    }
	
	/* IMPROVEMENT */
	
	elseif ($page == 'improvement-overview.php') {
    
    print 'improvement-overview';
            
    }
	
	
	elseif ($page == 'improvement-transformation.php') {
    
    print 'improvement-transformation';
            
    }
	
	elseif ($page == 'improvement-implementing.php') {
    
    print 'improvement-implementing';
            
    }
	
	elseif ($page == 'improvement-solution.php') {
    
    print 'improvement-solution';
            
    }
	
	elseif ($page == 'improvement-features.php') {
    
    print 'improvement-features';
            
    }
	

	
	
	/* CHALLENGE */
	
	elseif ($page == 'challenge.php') {
    
    print 'challenge';
            
    }
	
	/* SERVICES */
	
	elseif ($page == 'services-virtual.php') {
    
    print 'services-virtual';
            
    }
	
	elseif ($page == 'services-execution.php') {
    
    print 'services-execution';
            
    }
	
	elseif ($page == 'services-coaching.php') {
    
    print 'services-coaching';
            
    }
	
	elseif ($page == 'services-speaker.php') {
    
    print 'services-speaker';
            
    }
	
	elseif ($page == 'services-team.php') {
    
    print 'services-team';
            
    }
	
	elseif ($page == 'services-keynote.php') {
    
    print 'services-keynote';
            
    }
	
	elseif ($page == 'services-conferences.php') {
    
    print 'services-conferences';
            
    }
	
	elseif ($page == 'services-organization.php') {
    
    print 'services-organization';
            
    }
	
	/* EVENTS */
	
	elseif ($page == 'events.php') {
    
    print 'events';
            
    }
	
	/* CAREERS */
	
	elseif ($page == 'careers.php') {
    
    print 'careers';
            
    }
	
	/* CONTACT */
	
	elseif ($page == 'contact.php') {
    
    print 'contact';
            
    }
	
	/* PRIVACY */
	
	elseif ($page == 'privacy.php') {
    
    print 'privacy';
            
    }
	
	/* SUBSCRIBE */
	
	elseif ($page == 'subscribe.php') {
    
    print 'subscribe';
            
    }

    
    ?>">
    
    