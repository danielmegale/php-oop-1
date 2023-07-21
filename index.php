<?php
class Movie
{
    public $title;
    public $rating;
    public $genre;


    public function __construct($title, $rating, $genre)
    {
        $this->title = $title;
        $this->rating = $rating;
        $this->genre = $genre;
    }
    public function movies()
    {
        return $this->title;
    }
}

$movie1 = new Movie('Matrix', '9/10', 'Sci-Fi');
$movie2 = new Movie('Scarface', '7/10', 'Noir,Dramatic');
$movie3 = new Movie('Avatar', '8/10', 'Sci-Fi');


$movie1->title = 'Matrix';
$movie1->rating = '9/10';
$movie1->genre = 'Sci-Fi';

$movie2->title = 'Scarface';
$movie2->rating = '7/10';
$movie2->genre = 'Noir,Dramatic';

$movie3->title = 'Avatar';
$movie3->rating = '8/10';
$movie3->genre = 'Sci-Fi';

var_dump($movie1);
var_dump($movie2);
var_dump($movie3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>Film al cinema
        <li><?= $movie1->movies() ?></li>
        <li><?= $movie2->movies() ?></li>
        <li><?= $movie3->movies() ?></li>
    </ul>
</body>

</html>