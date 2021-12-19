<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Exception\AllocineException;
use Scraper\ScraperAllocine\Model\TvSerie;

final class AllocineTvSerieApi extends AbstractAllocineApi
{
    protected function getContent(array $content): array
    {
        if (!isset($content['tvseries'])) {
            throw new AllocineException('tvseries not found');
        }

        return $content['tvseries'];
    }

    protected function getType(): string
    {
        return TvSerie::class;
    }
}
