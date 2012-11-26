<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<ul id="menu-sub">
    <li class="item-sub<?php if ($page == 'about-merriweather.php') { print '-on'; } ?>"><a href="about-merriweather.php">About Merriweather</a></li>
    <li class="item-sub<?php if ($page == 'about-clients.php') { print '-on'; } ?>"><a href="about-clients.php">Our Clients</a></li>
    <!--<li class="item-sub<?php if ($page == 'about-team.php') { print '-on'; } ?>"><a href="about-team.php">Our Leadership Team</a></li>-->
    <li class="item-sub<?php if ($page == 'about-coaches.php') { print '-on'; } ?>"><a href="about-coaches.php">Our Business Coaches</a></li>
</ul>