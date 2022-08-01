<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

final class NewsSearch
{
    public int $code;
    public string $title;
    public string $headline;
    public \DateTime $publication;
    public string $picture;
    public string $category;

    public function setPublication(string $publication): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $publication)) {
            $this->publication = $dateTime;
        }

        return $this;
    }
}
