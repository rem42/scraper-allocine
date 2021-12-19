<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Statistics
{
    public float $pressRating;
    public int $pressReviewCount;
    public float $userRating;
    public int $userReviewCount;
    public int $userRatingCount;
    public int $averageViewerCount;
    public int $maxViewerCount;
    public int $totalViewerCount;
    public int $editorialRatingCount;
    public int $commentCount;
    public int $photoCount;
    public int $videoCount;
    public int $triviaCount;
    public int $newsCount;
    public int $rankTopMovie;
    public int $variationTopMovie;
    public int $awardCount;
    public int $nominationCount;
    /** @var array<Rating> */
    public array $rating = [];
    public int $fanCount;
    public int $wantToSeeCount;
    public int $releaseWeekPosition;
    public int $admissionCount;
    public int $viewCount;

    public function addRating(Rating $rating): self
    {
        $this->rating[] = $rating;

        return $this;
    }
}
