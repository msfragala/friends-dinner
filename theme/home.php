<?php

$context = Timber::get_context();

$context['recipes'] = Timber::get_posts(array(
  post_type => 'recipe'
));

Timber::render('home.twig', $context);
