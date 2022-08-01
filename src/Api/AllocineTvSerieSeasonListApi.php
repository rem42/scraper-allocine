<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Exception\AllocineException;

final class AllocineTvSerieSeasonListApi extends AbstractAllocineApi
{
    protected function getContent(array $content): array
    {
        if (!isset($content['feed']['season'])) {
            throw new AllocineException('season not found');
        }

        return $content['feed']['season'];
    }

    protected function getType(): string
    {
        return 'Scraper\ScraperAllocine\Model\Season[]';
    }
}
