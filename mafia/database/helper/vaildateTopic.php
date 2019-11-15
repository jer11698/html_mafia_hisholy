<?php
function validateTopic($topic, $check) {
  $errors = array();

  if (empty($topic['name'])){
    array_push($errors, 'Topic\'s name is required.');
  }

  $existingTopic = selectOne('topics', ['name' => $topic['name']]);

  if (isset($existingTopic) && $check) {
    array_push($errors, 'Topic\'s name already exists');
  }
  
  return $errors;
}

?>