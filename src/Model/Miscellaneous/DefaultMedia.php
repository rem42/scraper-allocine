<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class DefaultMedia
{
    public Media $media;

    public function setMedia(Media $media): self
    {
        $this->media = $media;

        return $this;
    }
}
