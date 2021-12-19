<?php

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\Link;
use Scraper\ScraperAllocine\Model\Miscellaneous\Statistics;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trailer;

final class Episode
{
    public int $code;
    /** @var array<Season> */
    public array $parentSeason = [];
    public string $originalTitle;
    public \DateTime $originalBroadcastDate;
    public string $title;
    public int $episodeNumberSeries;
    public int $episodeNumberSeason;
    public string $synopsis;
    public Trailer $trailer;
    public string $trailerEmbed;
    public string $defaultMedia;
    /** @var array<Link> */
    public array $link = [];
    public Statistics $statistics;

    public function addParentSeason(Season $season): self
    {
        $this->parentSeason[] = $season;

        return $this;
    }

    public function setOriginalBroadcastDate(string $originalBroadcastDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $originalBroadcastDate)) {
            $this->originalBroadcastDate = $dateTime;
        }

        return $this;
    }

    public function setTrailer(Trailer $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->link[] = $link;

        return $this;
    }

    public function setStatistics(Statistics $statistics): self
    {
        $this->statistics = $statistics;

        return $this;
    }
}
