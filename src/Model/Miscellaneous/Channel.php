<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Channel
{
    public int $code;
    public string $name;
    public Logo $logo;
    public CountryType $country;

    public function setLogo(Logo $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function setCountry(CountryType $country): self
    {
        $this->country = $country;

        return $this;
    }
}
