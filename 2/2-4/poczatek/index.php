<?php

class Article 
{

    function publish() {
        echo 'Publikujemy artykuł';
    }
}

$myArticle = new Article();
print_r($myArticle);
echo'<br>';
print_r($myArticle->publish());
echo'<br>';
$myNewArticle = new Article();
print_r($myNewArticle);
echo'<br>';
print_r($myNewArticle->publish());


?>