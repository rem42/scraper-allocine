<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="seasonlist")
 */
final class AllocineTvSerieSeasonListRequest extends AllocineRequest
{
    protected int $tvseries;
    protected string $path = 'seasonlist';

    /**
     * @return array<string, int|string>
     */
    public function getQuery(): array
    {
        $this->parameters = [
            'tvseries' => $this->tvseries,
        ];
        return parent::getQuery();
    }

    public function setTvseries(int $tvseries): self
    {
        $this->tvseries = $tvseries;

        return $this;
    }
}
