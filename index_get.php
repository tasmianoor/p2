<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <title>The Hogwarts Quiz</title>
        
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    
    </head>
    
    <body>


<h1>Welcome to Hogwarts, <?php echo $_POST["name"]; ?>ius!</h1>

<p>The Sorting Hat has considered your favorite house color, <?php echo $_POST["favcolor"]; ?>, but your heart determines your house! </p>

<?php

//ini_set('display_errors',0);

$myarray = $_POST;

 foreach ($myarray as $key => $value) {
  echo '<p>'.$key.'</p>';
  
  foreach($value as $k => $v)
  {
  echo '<p>'.$k.'</p>';
  echo '<p>'.$v.'</p>';
  echo '<hr />';
  }
}

print_r($_POST["trait"]);

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][1] == 'trust') && ($_POST["trait"][2] == 'new')) {
  //echo 'You indicated that, although you like being surrounded with people, you are not quick to make friends. That is because you already have a small group of friends you trust. You belong in Ravenclaw!';

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][1] == 'trust') && ($_POST["trait"][3] == 'friends')) {
  //echo 'You indicated that you like being surrounded with people. You already have a small group of friends you trust. That is because you have been careful to keep company with those who help you succeed. You belong in Hufflepuff!';

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][2] == 'new') && ($_POST["trait"][3] == 'friends')) {
  //echo 'You indicated that, although you like being surrounded with people, you are not quick to make friends. That is because you are careful to keep company with those who help you succeed. You belong in Slytherin!'; 

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][1] == 'trust')) {
  //echo 'You indicated that, although you already have a small group of friends you trust, you like being surrounded with people. You belong in Gryffindor!';

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][3] == 'friends')) {
 //echo 'You indicated that you like being surrounded with people. That is because you want to be in company with those who help you succeed. You belong in Gryffindor!';

//if (($_POST["trait"][0] == 'social') && ($_POST["trait"][2] == 'new')) {
  //echo 'You indicated that, although you like being surrounded with people, you are not necessarily jumping to make friends hastily. You belong in Ravenclaw!'; 


//if (($_POST["trait"][1] == 'trust') && ($_POST["trait"][2] == 'new')) {
  //echo 'You indicated that you are not necessarily jumping to make friends hastily. That is because you already have a small group of friends you trust. You belong in Ravenclaw!';

//if (($_POST["trait"][1] == 'trust') && ($_POST["trait"][3] == 'friends')) {
  //echo 'You indicated that you already have a small group of friends you trust. That is because you have been careful to keep company with those who help you succeed. You belong in Hufflepuff!';

//if (($_POST["trait"][2] == 'new') && ($_POST["trait"][3] == 'friends')) {
  //echo 'You indicated that you are not necessarily jumping to make friends hastily. That has because you are careful to keep company with those who help you succeed. You belong in Slytherin!';


if (($_POST["trait"][0] == 'social') && ($_POST["trait"][1] == 'trust') && ($_POST["trait"][2] == 'new')) {
  echo 'you selected one & two';
}


//print_r($myarray);
  
?>
 
</body>
</html>