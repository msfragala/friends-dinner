<?php

/**
 * convert_TimberImage
 * * turn a WordPress image object into a TimberImage instance
 */
function convert_TimberImage($img) {
  return is_array($img)
    ? new TimberImage($img['ID'])
    : new TimberImage($img->ID);
}
