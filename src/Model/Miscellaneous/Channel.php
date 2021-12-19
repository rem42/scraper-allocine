<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Channel
{
    public int $code;
    public string $name;
    public Image $logo;
    public CountryType $country;

    public function setLogo(Image $logo): self
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
