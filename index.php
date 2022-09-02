<?php

use algo\questionList;
include 'vendor/autoload.php';

$pathQuestion = "questions.md";

$questionList = new questionList();

$parse = $questionList->parse($pathQuestion);
//get all
$getALl = $parse ->getList();
print_r($getALl);

// Get Question by number
 $numQuestions = 0;
 $getQuestion = $parse->getQuestion($numQuestions);
 print_r($getQuestion);