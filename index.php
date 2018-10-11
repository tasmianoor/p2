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
        
        <div class="container">
            <h1>What's your Hogwarts house?</h1>
                <img src="images/photo.png" alt="Picture of Tasmia Noor">

            <p>Which Hogwarts house will you be sorted into? Gryffindor, Hufflepuff, Ravenclaw or Slytherin? Answer these 
               questions and let us be your Sorting Hat!</p> 
            
        <form action="index_get.php" method="post">
            First 3 letters of your name: <input type="text" name="name"><br>
            
            Select your favorite color:
                <input type="radio" name="blue" value="blue">Blue
                <input type="radio" name="green" value="green">Green
                <input type="radio" name="red" value="red">Red
                <input type="radio" name="red" value="red">Red

            

            
            
            
            <input type="submit">
            
        </form>