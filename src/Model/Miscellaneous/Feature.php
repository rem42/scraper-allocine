<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Feature
{
    public int $code;
    public Publication $publication;
    public string $title;
    public Picture $picture;

    public function setPublication(Publication $publication): self
    {
        $this->publication = $publication;

        return $this;
    }

    public function setPicture(Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
