<?php

$context = Timber::get_context();

$context['post'] = new TimberPost();

$context['recipes'] = Timber::get_posts(array(
  post_type => 'recipe'
), "FriendsDinnerRecipe");

Timber::render('page-home.twig', $context);
