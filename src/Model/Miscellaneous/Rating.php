<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class Rating
{
    public float $note;

    /** @SerializedName("$") */
    public int $value;
}
