<?php

// configure template directories
Timber::$dirname = array('templates', 'views');

/**
 * FriendsDinnerSite
 * * extends Timber context
 * * extends Twig
 * * enqueues scripts
 * * registers post types
 * * registers taxonomies
 */
require('lib/FriendsDinnerSite.php');

new FriendsDinnerSite();
