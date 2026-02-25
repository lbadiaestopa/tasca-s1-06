<?php

class Cinema
{
    public string $name;
    public array $movies;

    public function __construct(string $name, array $movies)
    {
        $this->name = $name;
        $this->movies = $movies;
    }

    public function __clone(): void {
    foreach ($this->movies as $key => $movie) {
        $this->movies[$key] = clone $movie;
    }
}
}


class Movie
{
    public string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }
}

?>
