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

            <p>Which Hogwarts house will you be sorted into? Gryffindor, Hufflepuff, Ravenclaw or Slytherin? Answer these 
               questions and let us be your Sorting Hat!</p> 
            
        <form action="index_get.php" method="post">
            <p>First 3 letters of your name:</p> <input type="text" name="name"><br/>
            
            <p>What's your favorite color? (Choose one.)</p>
                <input type="radio" name="blue" value="blue">Blue<br/>
                <input type="radio" name="green" value="green">Green<br/>
                <input type="radio" name="red" value="red">Red<br/>
                <input type="radio" name="yellow" value="yellow">Yellow<br/>
            
            <p>Choose up to three from the following characteristics that may describe you:</p>
                <input type="checkbox" name="trait[]" id="blue" value="social" />I love surrounding myself with people – the more friends I have, the better!<br/>
                <input type="checkbox" name="trait[]" id="red" value="trust"/>I have a few very close friends that I would trust with my life.<br/>
                <input type="checkbox" name="trait[]" id="green" value="new" />I tend to be wary around new people, so don't make new friends often.<br/>
                <input type="checkbox" name="trait[]" id="yellow" value="friends" />I find myself becoming friends with people who can help me to succeed.<br/>
            

            <span><input type="submit" name="formSubmit" value="Submit" /></span>

            
            
        </form>
        </div>
    </body>
</html>
            
        