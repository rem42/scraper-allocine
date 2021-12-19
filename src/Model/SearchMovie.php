<?php

namespace Scraper\ScraperAllocine\Model;

final class SearchMovie extends AbstractSearch
{
    /** @var array<Movie> */
    public array $movie = [];

    public function addMovie(Movie $movie): self
    {
        $this->movie[] = $movie;

        return $this;
    }
}
