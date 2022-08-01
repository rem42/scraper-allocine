<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\Media;
use Scraper\ScraperAllocine\Model\Miscellaneous\News;

final class Search
{
    public int $count;
    /** @var array<string> */
    public array $results = [];
    /** @var array<Movie> */
    public array $movie = [];
    /** @var array<TheaterSearch> */
    public array $theater = [];
    /** @var array<TvSerie> */
    public array $tvseries = [];
    /** @var array<Person> */
    public array $person = [];
    /** @var array<ProgramSearch> */
    public array $program = [];
    /** @var array<Media> */
    public array $media = [];
    /** @var array<News> */
    public array $news = [];
    public int $page;
    public int $totalResults;
    public string $updated;

    public function addMovie(Movie $movie): self
    {
        $this->movie[] = $movie;

        return $this;
    }

    public function addTheater(TheaterSearch $theaterSearch): self
    {
        $this->theater[] = $theaterSearch;

        return $this;
    }

    public function addTvseries(TvSerie $tvSerie): self
    {
        $this->tvseries[] = $tvSerie;

        return $this;
    }

    public function addPerson(Person $personSearch): self
    {
        $this->person[] = $personSearch;

        return $this;
    }

    public function addProgram(ProgramSearch $programSearch): self
    {
        $this->program[] = $programSearch;

        return $this;
    }

    public function addMedia(Media $media): self
    {
        $this->media[] = $media;

        return $this;
    }

    public function addNews(News $news): self
    {
        $this->news[] = $news;

        return $this;
    }
}
