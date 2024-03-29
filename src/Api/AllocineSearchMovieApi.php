<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Model\SearchMovie;

final class AllocineSearchMovieApi extends AllocineSearchApi
{
    protected function getType(): string
    {
        return SearchMovie::class;
    }
}
