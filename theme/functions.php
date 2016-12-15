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
Routes::map('recipes/[i:pg]?', function($params) {
  $query = array(
    posts_per_page => 10,
    post_type => 'recipe',
    meta_key => 'night_made',
    orderby => 'meta_value',
    order => 'DESC',
    paged => $params['pg']
  );
  Routes::load('page-recipes.php', null, $query, 200);
});
