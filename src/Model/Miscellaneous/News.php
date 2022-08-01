<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class News
{
    public int $code;

    public Publication $publication;

    public string $title;

    public Picture $picture;

    public DisplayMode $displayMode;

    public int $pageCount;

    /** @var array<Category> */
    public array $category = [];

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

    public function setDisplayMode(DisplayMode $displayMode): self
    {
        $this->displayMode = $displayMode;

        return $this;
    }

    public function addCategory(Category $category): self
    {
        $this->category[] = $category;

        return $this;
    }
}
