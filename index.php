<?php 
$text_example = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum beatae nisi fugiat reprehenderit voluptate voluptates soluta laborum adipisci nemo eligendi?';
// query = '?word=dolor'
var_dump(str_replace($_GET['word'],'***',$text_example));


?>

