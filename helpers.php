<?php 

function sanitize_input($data) {

		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  	
  return $data;
}

function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }