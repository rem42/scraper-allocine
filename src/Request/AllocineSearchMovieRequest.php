<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

final class AllocineSearchMovieRequest extends AllocineSearchRequest
{
    protected string $filter = 'movie';
}
