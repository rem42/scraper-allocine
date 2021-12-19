<?php

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="episode")
 */
final class AllocineTvSerieEpisodeRequest extends AllocineRequest
{
    protected int $code;
    protected string $path = 'episode';

    /**
     * @return array<string, int|string>
     */
    public function getQuery(): array
    {
        $this->parameters = [
            'code' => $this->code,
        ];
        return parent::getQuery();
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }
}
