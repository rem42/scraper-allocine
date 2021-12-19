<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Exception\AllocineException;
use Scraper\ScraperAllocine\Model\Movie;

final class AllocineMovieApi extends AbstractAllocineApi
{
    protected function getContent(array $content): array
    {
        if (!isset($content['movie'])) {
            throw new AllocineException('movie not found');
        }

        return $content['movie'];
    }

    protected function getType(): string
    {
        return Movie::class;
    }
}
