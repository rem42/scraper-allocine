<?php

namespace Scraper\ScraperAllocine\Model;

final class SearchTvSerie extends AbstractSearch
{
    /** @var array<TvSerie> */
    public array $tvseries = [];

    public function addTvserie(TvSerie $tvSerie): self
    {
        $this->tvseries[] = $tvSerie;

        return $this;
    }
}
