<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

final class AllocineSearchNewsRequest extends AllocineSearchRequest
{
    protected string $filter = 'news';
}
