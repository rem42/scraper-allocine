<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Review
{
    public int $code;
    public int $opinion;
    public \DateTime $creationDate;
    public Writer $writer;
    public string $body;
    public int $rating;

    public function setWriter(Writer $writer): self
    {
        $this->writer = $writer;

        return $this;
    }

    public function setCreationDate(string $creationDate): self
    {
        if ($dateTime = \DateTime::createFromFormat(\DateTimeInterface::ATOM, $creationDate)) {
            $this->creationDate = $dateTime;
        }

        return $this;
    }
}
