<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<ul id="MenuBar" class="MenuBarHorizontal">
    <li id="menu-main-about<?php if ($page == 'about-merriweather.php') { print '-on'; } elseif ($page == 'about-clients.php') { print '-on'; } elseif ($page == 'about-team.php') { print '-on'; } elseif ($page == 'about-coaches.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="about-merriweather.php">About Us</a>
        <ul id="drop-box-about">
          <li><a href="about-merriweather.php">About Merriweather</a></li>
          <li><a href="about-clients.php">Our Clients</a></li>
          <!--<li><a href="about-team.php">Our Leadership Team</a></li>-->
          <li><a href="about-coaches.php">Our Business Coaches</a></li>
          <li>&nbsp;</li>
          <li>&nbsp;</li>
        </ul>
    </li>
        <li id="menu-main-challenge<?php if ($page == 'challenge.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="challenge.php">The Leadership Challenge</a></li>
    <li id="menu-main-improvement<?php if ($page == 'improvement-overview.php') { print '-on'; } elseif ($page == 'improvement-solution.php') { print '-on'; } elseif ($page == 'improvement-transformation.php') { print '-on'; }  elseif ($page == 'improvement-features.php') { print '-on'; } elseif ($page == 'improvement-implementing.php') { print '-on'; }  ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="improvement-overview.php">Business Improvement</a>
        <ul id="drop-box-improvement">
          <li><a href="improvement-overview.php">Overview</a></li>
          <li><a href="improvement-transformation.php">The Transformation</a></li>
          <li><a href="improvement-solution.php">The Solution</a></li>
          <li><a href="improvement-implementing.php">Implementation</a></li>
          <li><a href="improvement-features.php">Features &amp; Benefits</a></li>
          <li>&nbsp;</li>
          <li>&nbsp;</li>
        </ul>
    </li>
    <li id="menu-main-services<?php if ($page == 'services-execution.php') { print '-on'; } elseif ($page == 'services-speaker.php') { print '-on'; }  elseif ($page == 'services-sales.php') { print '-on'; }  elseif ($page == 'services-coaching.php') { print '-on'; }  elseif ($page == 'services-virtual.php') { print '-on'; } elseif ($page == 'services-team.php') { print '-on'; } elseif ($page == 'services-keynote.php') { print '-on'; } elseif ($page == 'services-conferences.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="services-coaching.php">Other Services</a>
        <ul id="drop-box-services">
            <li><a href="services-coaching.php">Coaching</a></li>
            <li><a href="services-conferences.php">Conferences &amp; Events</a></li>
            <li><a href="services-execution.php">Execution Excellence</a></li>
            <li><a href="services-keynote.php">Inspirational Keynote Speakers</a></li>
            <li><a href="services-organization.php">Organizational Change Management</a></li>
            <li><a href="services-speaker.php">Inspirational Speaker<br />Training</a></li>
            <li><a href="services-team.php">Leadership &amp; Team Development</a></li>
            <li><a href="services-virtual.php">Virtual Business<br />Improvement</a></li> 
            <li>&nbsp;</li>
            <li>&nbsp;</li>
        </ul>
	</li>
    <li id="menu-main-events<?php if ($page == 'events.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="events.php">Inspirational Events</a></li>
    <li id="menu-main-careers<?php if ($page == 'careers.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="careers.php">Careers</a></li>
    <li id="menu-main-contact<?php if ($page == 'contact.php') { print '-on'; } elseif ($page == 'subscribe.php') { print '-on'; } ?>" class="item-main"><a class="MenuBarItemSubmenu"  href="contact.php">Contact Us</a></li>
</ul>