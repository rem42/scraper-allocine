<?php

namespace Scraper\ScraperAllocine\Entity;

final class Movie
{
    public int $id;
    public string $title;
    public ?string $releaseDate;
    public int $productionYear;
    public string $director;
    public string $castingShort;
    public string $poster;
}
