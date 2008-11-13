<?php
/*
Plugin Name: Disemvowel
Plugin URI: http://ishouldberich.com
Description: Takes the vowels out of comments: http://wordpress.org/extend/ideas/topic.php?id=1976
Version: 1.0
Author: Anne Dorko
Author URI: http://ishouldberich.com

// Copyright 2008  Anne Dorko  (email : design@annedorko.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
function disemvowel($comment) {
  $vowels = array('a', 'e', 'i', 'o', 'u');
  $new = str_replace($vowels, '', $comment);
  return $new;
}
add_filter('comment_text', 'disemvowel');


?>