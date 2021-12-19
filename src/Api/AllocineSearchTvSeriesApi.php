<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Model\SearchTvSerie;

final class AllocineSearchTvSeriesApi extends AllocineSearchApi
{
    protected function getType(): string
    {
        return SearchTvSerie::class;
    }
}
