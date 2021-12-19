<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

use Scraper\ScraperAllocine\Model\Episode;

final class Broadcast
{
    /** @var array<Episode> */
    public array $onShow = [];
    /** @var array<Channel> */
    public array $parentChannel = [];
    public bool $new;
    public bool $datetime;
    public bool $multiVersion;

    public function addOnShow(Episode $episode): self
    {
        $this->onShow[] = $episode;

        return $this;
    }

    public function addParentChannel(Channel $channel): self
    {
        $this->parentChannel[] = $channel;

        return $this;
    }
}
