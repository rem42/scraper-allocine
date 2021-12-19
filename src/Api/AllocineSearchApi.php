<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Exception\AllocineException;
use Scraper\ScraperAllocine\Model\Search;

class AllocineSearchApi extends AbstractAllocineApi
{
    protected function getContent(array $content): array
    {
        if (!isset($content['feed'])) {
            throw new AllocineException('search not found');
        }

        return $content['feed'];
    }

    protected function getType(): string
    {
        return Search::class;
    }
}
