<?php

global $wp;

$context = Timber::get_context();

$page_prefs = array(
  base => '/recipes/%_%',
  format => '%#%'
);

$context['post'] = array(
  slug => 'recipes',
  post_type => 'archive'
);

$context['recipes'] = Timber::get_posts($wp->query_vars, "FriendsDinnerRecipe");
$context['pagination'] = Timber::get_pagination($page_prefs, $wp->query_vars);

Timber::render('page-recipes.twig', $context);
