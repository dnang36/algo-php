<?php

use algo\questionList;
include 'vendor/autoload.php';

$pathQuestion = "questions.md";

$questionList = new questionList();

$parse = $questionList->parse($pathQuestion);
//get all
//$getALl = $parse ->getList();
//echo "<pre>";
//print_r($getALl);


// Get Question by number
 $numQuestions = 0;
 $getQuestion = $parse->getQuestion($numQuestions);
 echo "<pre>";
 print_r($getQuestion);