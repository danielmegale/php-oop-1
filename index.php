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
$cinema = [
    $movie1 = new Movie('Matrix', '9/10', 'Sci-Fi'),
    $movie2 = new Movie('Scarface', '7/10', 'Noir,Dramatic'),
    $movie3 = new Movie('Avatar', '8/10', 'Sci-Fi'),
];

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
        <?php foreach ($cinema as $movie) : ?>
            <li>
                <?= $movie->title ?>
            </li>
        <?php endforeach ?>
        <!-- <li><?= $movie1->movies() ?></li> -->
        <!-- <li><?= $movie2->movies() ?></li> -->
        <!-- <li><?= $movie3->movies() ?></li> -->
    </ul>
</body>

</html>