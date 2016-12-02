<?php

$context = Timber::get_context();

$context['post'] = new TimberPost();

$context['recipes'] = Timber::get_posts(array(
  post_type => 'recipe',
  meta_key => 'night_made',
  orderby => 'meta_value',
  order => 'DESC'
), "FriendsDinnerRecipe");

Timber::render('page-recipes.twig', $context);
