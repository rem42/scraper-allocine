<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

use Symfony\Component\Serializer\Annotation\SerializedName;

class Type
{
    public int $code;

    /** @SerializedName("$") */
    public string $value;
}
