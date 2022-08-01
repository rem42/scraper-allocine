<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Release
{
    public \DateTime $releaseDate;

    public function setReleaseDate(string $releaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $releaseDate)) {
            $this->releaseDate = $dateTime;
        }

        return $this;
    }
}
