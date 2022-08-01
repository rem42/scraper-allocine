<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\BoxOffice;
use Scraper\ScraperAllocine\Model\Miscellaneous\CastingShort;
use Scraper\ScraperAllocine\Model\Miscellaneous\CastMember;
use Scraper\ScraperAllocine\Model\Miscellaneous\Color;
use Scraper\ScraperAllocine\Model\Miscellaneous\Feature;
use Scraper\ScraperAllocine\Model\Miscellaneous\Genre;
use Scraper\ScraperAllocine\Model\Miscellaneous\Language;
use Scraper\ScraperAllocine\Model\Miscellaneous\Link;
use Scraper\ScraperAllocine\Model\Miscellaneous\Media;
use Scraper\ScraperAllocine\Model\Miscellaneous\MovieCertificate;
use Scraper\ScraperAllocine\Model\Miscellaneous\MovieType;
use Scraper\ScraperAllocine\Model\Miscellaneous\Nationality;
use Scraper\ScraperAllocine\Model\Miscellaneous\News;
use Scraper\ScraperAllocine\Model\Miscellaneous\Poster;
use Scraper\ScraperAllocine\Model\Miscellaneous\Product;
use Scraper\ScraperAllocine\Model\Miscellaneous\Release;
use Scraper\ScraperAllocine\Model\Miscellaneous\Review;
use Scraper\ScraperAllocine\Model\Miscellaneous\Statistics;
use Scraper\ScraperAllocine\Model\Miscellaneous\Tag;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trailer;
use Scraper\ScraperAllocine\Model\Miscellaneous\Trivia;

final class Movie
{
    public int $code;
    public MovieType $movieType;
    public string $originalTitle;
    public string $title;
    public string $universe;
    public string $keywords;
    public int $productionYear;
    /** @var array<Nationality> */
    public array $nationality = [];
    /** @var array<Genre> */
    public array $genre = [];
    public Release $release;
    public int $runtime;
    public Color $color;
    /** @var array<Language> */
    public array $language = [];
    public string $budget;
    public string $synopsis;
    public string $synopsisShort;
    public CastingShort $castingShort;
    /** @var array<CastMember> */
    public array $castMember = [];
    public MovieCertificate $movieCertificate;
    public Poster $poster;
    public Trailer $trailer;
    public string $trailerEmbed;
    public int $hasVOD       = 0;
    public int $hasBluRay    = 0;
    public int $hasDVD       = 0;
    public int $hasBroadcast = 0;
    public int $hasShowtime  = 0;
    public \DateTime $dvdReleaseDate;
    public \DateTime $bluRayReleaseDate;
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
    /** @var array<BoxOffice> */
    public array $boxOffice = [];
    /** @var array<Product> */
    public array $product = [];
    /** @var array<Review> */
    public array $helpfulNegativeReview = [];
    /** @var array<Review> */
    public array $bestPressReview = [];
    /** @var array<Review> */
    public array $worstPressReview = [];

    public function setMovieType(MovieType $movieType): self
    {
        $this->movieType = $movieType;

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

    public function setRelease(Release $release): self
    {
        $this->release = $release;

        return $this;
    }

    public function setColor(Color $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function addLanguage(Language $language): self
    {
        $this->language[] = $language;

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

    public function setMovieCertificate(MovieCertificate $movieCertificate): self
    {
        $this->movieCertificate = $movieCertificate;

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

    public function setDvdReleaseDate(string $dvdReleaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $dvdReleaseDate)) {
            $this->dvdReleaseDate = $dateTime;
        }

        return $this;
    }

    public function setBluRayReleaseDate(string $bluRayReleaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $bluRayReleaseDate)) {
            $this->bluRayReleaseDate = $dateTime;
        }

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

    public function addBoxOffice(BoxOffice $boxOffice): self
    {
        $this->boxOffice[] = $boxOffice;

        return $this;
    }

    public function addProduct(Product $product): self
    {
        $this->product[] = $product;

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
