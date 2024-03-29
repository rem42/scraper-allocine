<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

use Symfony\Component\Serializer\Annotation\SerializedName;

class ResultType
{
    public int $code;

    /** @SerializedName("$") */
    public int $value;
}
