<html>
<body>

Welcome to Hogwarts, <?php echo $_GET["name"]; ?>ius!<br>
 
<?php ini_set('display_errors',1);
   $quotes=[
        [
            'title' => 'Gryfindor',
             'image' => img src='/images/to/Gryfindor.jpg'.
       [
            'title' => 'Ravenclaw',
            'image' => img src='/images/to/Ravenclaw.jpg'
        ],  
        [
            'title' => 'Hufflepuff',
            image' => img src='/images/to/Hufflepuff.jpg'
        ],
     [
            'title' => 'Slytherin',
            image' => img src='/images/Ravenclaw.jpg'
        ],
         [
            'title' => 'Jackie Joyn, track and field athlete',
            'image' => 'If I stop to kick every barking dog I am not going to get where I’m going.'
        ]
    ]; 

$quoteno = rand (1,3);

 $quotesnow = $quotes[$quoteno-1];

$quoteTitle = $quotesnow['title'];

$quoteImage= $quotesnow['image'];

?>  
    
    
</body>
</html>