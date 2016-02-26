<?php

function training_preprocess_html(&$variables) {
  drupal_add_css('http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
  drupal_add_css('http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
  
  // Add conditional scripts for IE
  drupal_add_js('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', array('group' => JS_LIBRARY, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE)));
  drupal_add_js('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', array('group' => JS_LIBRARY, 'browsers' => array('IE' => 'lt IE 9', '!IE' => FALSE)));
}