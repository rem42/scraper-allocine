<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\Broadcast;
use Scraper\ScraperAllocine\Model\Miscellaneous\CastingShort;
use Scraper\ScraperAllocine\Model\Miscellaneous\CastMember;
use Scraper\ScraperAllocine\Model\Miscellaneous\Feature;
use Scraper\ScraperAllocine\Model\Miscellaneous\FestivalAward;
use Scraper\ScraperAllocine\Model\Miscellaneous\Genre;
use Scraper\ScraperAllocine\Model\Miscellaneous\Link;
use Scraper\ScraperAllocine\Model\Miscellaneous\Media;
use Scraper\ScraperAllocine\Model\Miscellaneous\Nationality;
use Scraper\ScraperAllocine\Model\Miscellaneous\News;
use Scraper\ScraperAllocine\Model\Miscellaneous\OriginalBroadcast;
use Scraper\ScraperAllocine\Model\Miscellaneous\OriginalChannel;
use Scraper\ScraperAllocine\Model\Miscellaneous\Poster;
use Scraper\ScraperAllocine\Model\Miscellaneous\ProductionStatus;
use Scraper\ScraperAllocine\Model\Miscellaneous\Review;
use Scraper\ScraperAllocine\Model\Miscellaneous\SeriesType;
use Scraper\ScraperAllocine\Model\Miscellaneous\Statistics;
use Scraper\ScraperAllocine\Model\Miscellaneous\Tag;
use Scraper\ScraperAllocine\Model\Miscellaneous\TopBanner;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trailer;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trivia;

final class TvSerie
{
    public int $code;
    public SeriesType $seriesType;
    public string $originalTitle;
    public string $title;
    public string $keywords;
    public OriginalBroadcast $originalBroadcast;
    public OriginalChannel $originalChannel;
    public int $formatTime;
    public ProductionStatus $productionStatus;
    /** @var array<Season> */
    public array $season = [];
    public Broadcast $broadcast;
    public int $seasonCount;
    public int $episodeCount;
    public int $lastSeasonNumber;
    public int $yearStart;
    public int $hasBluRay;
    public int $hasDVD;
    public int $hasBroadcast;
    /** @var array<Nationality> */
    public array $nationality = [];
    /** @var array<Genre> */
    public array $genre = [];
    public string $synopsisShort;
    public string $synopsis;
    public CastingShort $castingShort;
    /** @var array<CastMember> */
    public array $castMember = [];
    public Poster $poster;
    public Trailer $trailer;
    public string $trailerEmbed;
    public TopBanner $topBanner;
    /** @var array<Link> */
    public array $link = [];
    /** @var array<Media> */
    public array $media = [];
    public Statistics $statistics;
    /** @var array<News> */
    public array $news = [];
    /** @var array<Feature> */
    public array $feature = [];
    /** @var array<Trivia> */
    public array $trivia = [];
    /** @var array<Tag> */
    public array $tag = [];
    /** @var array<FestivalAward> */
    public array $festivalAward = [];
    /** @var array<Review> */
    public array $helpfulPositiveReview = [];
    /** @var array<Review> */
    public array $helpfulNegativeReview = [];
    /** @var array<Review> */
    public array $bestPressReview = [];
    /** @var array<Review> */
    public array $worstPressReview = [];

    public function setSeriesType(SeriesType $seriesType): self
    {
        $this->seriesType = $seriesType;

        return $this;
    }

    public function setOriginalBroadcast(OriginalBroadcast $originalBroadcast): self
    {
        $this->originalBroadcast = $originalBroadcast;

        return $this;
    }

    public function setOriginalChannel(OriginalChannel $originalChannel): self
    {
        $this->originalChannel = $originalChannel;

        return $this;
    }

    public function setProductionStatus(ProductionStatus $productionStatus): self
    {
        $this->productionStatus = $productionStatus;

        return $this;
    }

    public function addSeason(Season $season): self
    {
        $this->season[] = $season;

        return $this;
    }

    public function setBroadcast(Broadcast $broadcast): self
    {
        $this->broadcast = $broadcast;

        return $this;
    }

    public function addNationality(Nationality $nationality): self
    {
        $this->nationality[] = $nationality;

        return $this;
    }

    public function addGenre(Genre $genre): self
    {
        $this->genre[] = $genre;

        return $this;
    }

    public function setCastingShort(CastingShort $castingShort): self
    {
        $this->castingShort = $castingShort;

        return $this;
    }

    public function addCastMember(CastMember $castMember): self
    {
        $this->castMember[] = $castMember;

        return $this;
    }

    public function setPoster(Poster $poster): self
    {
        $this->poster = $poster;

        return $this;
    }

    public function setTrailer(Trailer $trailer): self
    {
        $this->trailer = $trailer;

        return $this;
    }

    public function setTopBanner(TopBanner $topBanner): self
    {
        $this->topBanner = $topBanner;

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->link[] = $link;

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

    public function addNews(News $news): self
    {
        $this->news[] = $news;

        return $this;
    }

    public function addFeature(Feature $feature): self
    {
        $this->feature[] = $feature;

        return $this;
    }

    public function addTrivia(Trivia $trivia): self
    {
        $this->trivia[] = $trivia;

        return $this;
    }

    public function addTag(Tag $tag): self
    {
        $this->tag[] = $tag;

        return $this;
    }

    public function addFestivalAward(FestivalAward $festivalAward): self
    {
        $this->festivalAward[] = $festivalAward;

        return $this;
    }

    public function addHelpfulPositiveReview(Review $review): self
    {
        $this->helpfulPositiveReview[] = $review;

        return $this;
    }

    public function addHelpfulNegativeReview(Review $review): self
    {
        $this->helpfulNegativeReview[] = $review;

        return $this;
    }

    public function addBestPressReview(Review $review): self
    {
        $this->bestPressReview[] = $review;

        return $this;
    }

    public function addWorstPressReview(Review $review): self
    {
        $this->worstPressReview[] = $review;

        return $this;
    }
}
