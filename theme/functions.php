<?php

// configure template directories
Timber::$dirname = array('templates', 'views');

// contains miscellaneous utility functions
require('lib/helpers.php');

// declares FriendsDinnerSite subclass of TimberSite
require('lib/FriendsDinnerSite.php');

// declares FriendsDinnerRecipe subclass of TimberPost
require('lib/FriendsDinnerRecipe.php');

new FriendsDinnerSite();
