<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         
        <title>The Hogwarts Quiz</title>
        
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    
<SCRIPT LANGUAGE="javascript">

function KeepCount() {

var NewCount = 0

if (document.house.trait1.checked)
{NewCount = NewCount + 1}

if (document.house.trait2.checked)
{NewCount = NewCount + 1}

if (document.house.trait3.checked)
{NewCount = NewCount + 1}

if (document.house.trait4.checked)
{NewCount = NewCount + 1}



if (NewCount == 4)
{
alert('Please choose no more than 3. Thanks!')
document.house; return false;
}
} 
</SCRIPT>

    </head>
    
    <body>
        
        <div class="container">
            <h1>What's your Hogwarts house?</h1>
            
            <img src="images/form_image.png" alt="Hogwarts shield">

            <h4>Which Hogwarts house will you be sorted into? Gryffindor, Hufflepuff, Ravenclaw or Slytherin? Answer these 
               questions and let us be your Sorting Hat!</h4> 
            
        <form action="index_get.php" method="post" name="house">
            <p>First 3 letters of your name:</p> <input type="text" name="name" maxlength="3"><br/>
            
            <p>What's your favorite color? (Choose one.)</p>
                <input type="radio" name="favcolor" value="blue">Blue<br/>
                <input type="radio" name="favcolor" value="green">Green<br/>
                <input type="radio" name="favcolor" value="red">Red<br/>
                <input type="radio" name="favcolor" value="yellow">Yellow<br/>
            
            <p>Choose up to three from the following characteristics that may describe you:</p>
                <input type="checkbox" name="trait1" id="blue" value="social" onClick="return KeepCount()" />I love surrounding myself with people – the more friends I have, the better!<br/>
                <input type="checkbox" name="trait2" id="red" value="trust" onClick="return KeepCount()" />I have a few very close friends that I would trust with my life.<br/>
                <input type="checkbox" name="trait3" id="green" value="new" onClick="return KeepCount()" />I tend to be wary around new people, so don't make new friends often.<br/>
                <input type="checkbox" name="trait4" id="yellow" value="friends" onClick="return KeepCount()" />I find myself becoming friends with people who can help me to succeed.<br/>
            

            <span><input type="submit" name="formSubmit" value="Show me my house!" /></span>

            
        </form>
        </div>
    </body>
</html>
            
        