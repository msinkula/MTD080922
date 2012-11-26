<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<ul id="menu-sub">
    <li class="item-sub<?php if ($page == 'services-coaching.php') { print '-on'; } ?>"><a href="services-coaching.php">Coaching</a></li>
    <li class="item-sub<?php if ($page == 'services-conferences.php') { print '-on'; } ?>"><a href="services-conferences.php">Conferences &amp; Events</a></li>
    <li class="item-sub<?php if ($page == 'services-execution.php') { print '-on'; } ?>"><a href="services-execution.php">Execution Excellence</a></li>
    <li class="item-sub<?php if ($page == 'services-keynote.php') { print '-on'; } ?>"><a href="services-keynote.php">Inspirational Keynote Speakers</a></li>
    <li class="item-sub<?php if ($page == 'services-organization.php') { print '-on'; } ?>"><a href="services-organization.php">Organizational Change<br />&nbsp;&nbsp;&nbsp;Management</a></li>
    <li class="item-sub<?php if ($page == 'services-speaker.php') { print '-on'; } ?>"><a href="services-speaker.php">Inspirational Speaker Training</a></li>
    <li class="item-sub<?php if ($page == 'services-team.php') { print '-on'; } ?>"><a href="services-team.php">Leadership &amp; Team Development</a></li>
    <li class="item-sub<?php if ($page == 'services-virtual.php') { print '-on'; } ?>"><a href="services-virtual.php">Virtual Business Improvement</a></li>
</ul>