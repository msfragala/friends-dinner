<?php

/**
 * FriendsDinnerRecipe
 *
 */
class FriendsDinnerRecipe extends TimberPost {

  function __construct($pid=null) {
    parent::__construct($pid);
    $this->images = array_map("convert_TimberImage", $this->get_field("__images"));
  }

}
