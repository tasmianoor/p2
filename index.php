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
            First 3 letters of your name: <input type="text" name="name"><br>
            
            <p>What's your favorite color? (Choose one.)</p>
                <input type="radio" name="blue" value="blue">Blue
                <input type="radio" name="green" value="green">Green
                <input type="radio" name="red" value="red">Red
                <input type="radio" name="yellow" value="yellow">Yellow
            
            <p>Choose up to three from the following characteristics that may describe you:</p>
                <input type="checkbox" name="friendly" value="Blue" />I love surrounding myself with people – the more friends I have, the better!<br/>
                <input type="checkbox" name="skeptic" value="Red"/>I have a few very close friends that I would trust with my life.<br/>
                <input type="checkbox" name="NoNewFriends" value="Green" />I tend to be wary around new people, so don't make new friends often.<br/>
                <input type="checkbox" name="some friends" value="Yellow" />I find myself becoming friends with people who can help me to succeed.<br/>
            
            <input type="submit" name="formSubmit" value="Submit" />

            
            
            <input type="submit">
            
        </form>
        </div>
    </body>
</html>
            
        