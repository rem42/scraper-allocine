<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

use Symfony\Component\Serializer\Annotation\SerializedName;

final class BasePrice
{
    public string $currency;

    /** @SerializedName("$") */
    public float $value;
}
