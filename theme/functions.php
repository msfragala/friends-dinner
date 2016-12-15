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

// defines routes for recipes archive pagination
Routes::map('recipes/page?/[i:pg]', function($params) {
  // set default page number
  if (!isset($params['pg'])) $params['pg'] = 1;
  // load recipes archive template
  Routes::load('page-recipes.php', $params);
});
