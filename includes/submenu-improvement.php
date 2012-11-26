<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>

<ul id="menu-sub">
    <li class="item-sub<?php if ($page == 'improvement-overview.php') { print '-on'; } ?>"><a href="improvement-overview.php">Overview</a></li>
    <li class="item-sub<?php if ($page == 'improvement-transformation.php') { print '-on'; } ?>"><a href="improvement-transformation.php">The Transformation</a></li>
    <li class="item-sub<?php if ($page == 'improvement-solution.php') { print '-on'; } ?>"><a href="improvement-solution.php">The Solution</a></li>
    <li class="item-sub<?php if ($page == 'improvement-implementing.php') { print '-on'; } ?>"><a href="improvement-implementing.php">Implementation</a></li>
    <li class="item-sub<?php if ($page == 'improvement-features.php') { print '-on'; } ?>"><a href="improvement-features.php">Features &amp; Benefits</a></li>
</ul>