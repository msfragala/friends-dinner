<?php

$context = Timber::get_context();

$context['current_page'] = 'home';

$context['recipes'] = Timber::get_posts(array(
  post_type => 'recipe'
), "FriendsDinnerRecipe");

Timber::render('home.twig', $context);
