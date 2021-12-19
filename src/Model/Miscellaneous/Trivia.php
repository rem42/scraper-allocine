<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Trivia
{
    public int $code;
    public Publication $publication;
    public string $title;
    public string $body;

    public function setPublication(Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }
}
