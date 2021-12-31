<?php

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\Broadcast;
use Scraper\ScraperAllocine\Model\Miscellaneous\CastMember;
use Scraper\ScraperAllocine\Model\Miscellaneous\DefaultMedia;
use Scraper\ScraperAllocine\Model\Miscellaneous\Link;
use Scraper\ScraperAllocine\Model\Miscellaneous\Media;
use Scraper\ScraperAllocine\Model\Miscellaneous\OriginalChannel;
use Scraper\ScraperAllocine\Model\Miscellaneous\ParentSeries;
use Scraper\ScraperAllocine\Model\Miscellaneous\Picture;
use Scraper\ScraperAllocine\Model\Miscellaneous\ProductionStatus;
use Scraper\ScraperAllocine\Model\Miscellaneous\Statistics;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trailer;

final class Season
{
    public int $code;
    public ParentSeries $parentSeries;
    public int $seasonNumber;
    public int $episodeCount;
    public ProductionStatus $productionStatus;
    public int $yearStart;
    public int $yearEnd;
    public OriginalChannel $originalChannel;
    public bool $hasLocalBroadcast;
    public DefaultMedia $defaultMedia;
    public string $synopsisShort;
    public string $synopsis;
    public Picture $picture;
    public Trailer $trailer;
    public string $trailerEmbed;
    public int $hasSVOD;
    public int $hasBluRay;
    public int $hasDVD;
    /** @var array<CastMember> */
    public array $castMember = [];
    /** @var array<Episode> */
    public array $episode = [];
    public Link $link;
    /** @var array<Media> */
    public array $media = [];
    public Statistics $statistics;
    public Broadcast $broadcast;

    public function setParentSeries(ParentSeries $parentSeries): self
    {
        $this->parentSeries = $parentSeries;

        return $this;
    }

    public function setProductionStatus(ProductionStatus $productionStatus): self
    {
        $this->productionStatus = $productionStatus;

        return $this;
    }

    public function setOriginalChannel(OriginalChannel $originalChannel): self
    {
        $this->originalChannel = $originalChannel;

        return $this;
    }

    public function setDefaultMedia(DefaultMedia $defaultMedia): self
    {
        $this->defaultMedia = $defaultMedia;

        return $this;
    }

    public function setPicture(Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function setTrailer(Trailer $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function addCastMember(CastMember $castMember): self
    {
        $this->castMember[] = $castMember;

        return $this;
    }

    public function addEpisode(Episode $episode): self
    {
        $this->episode[] = $episode;

        return $this;
    }

    public function setLink(Link $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function addMedia(Media $media): self
    {
        $this->media[] = $media;

        return $this;
    }

    public function setStatistics(Statistics $statistics): self
    {
        $this->statistics = $statistics;

        return $this;
    }

    public function setBroadcast(Broadcast $broadcast): self
    {
        $this->broadcast = $broadcast;

        return $this;
    }
}
