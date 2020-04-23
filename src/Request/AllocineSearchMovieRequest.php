<?php

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\RequestQuery;

/**
 * @Scraper(path="/recherche/movie/")
 */
final class AllocineSearchMovieRequest extends AllocineRequest implements RequestQuery
{
    protected string $query;

    /**
     * @return string[]
     */
    public function getQuery(): array
    {
        return [
            'q' => $this->query,
        ];
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }
}
