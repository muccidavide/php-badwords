<?php 
$text_example = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum beatae nisi fugiat reprehenderit voluptate voluptates soluta laborum adipisci nemo eligendi?';
// query = '?word=dolor'
$censured_text = str_replace($_GET['delete_word'],'***',$text_example);
var_dump($censured_text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>Original Text</h1>
    <p><?= $text_example; ?></p>
    <h1>Which word do you wanna censured?</h1>
    <form action="index.php" method="get">
    <input type="text" name="delete_word">
    <button type="submit">Submit</button>
    <h2>Censured Text</h2>
    <p><?= $censured_text; ?></p>


    </form>

</body>
</html>