<?php

global $params;

$context = Timber::get_context();

$context['slug'] = 'recipes';
$context['type'] = 'archive';

$context['recipes'] = new Timber\PostQuery(array(
  posts_per_page => 1,
  post_type => 'recipe',
  meta_key => 'night_made',
  orderby => 'meta_value',
  order => 'DESC',
  paged => $params['pg']
), "FriendsDinnerRecipe");

Timber::render('page-recipes.twig', $context);
