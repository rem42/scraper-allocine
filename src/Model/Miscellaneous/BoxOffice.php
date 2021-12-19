<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class BoxOffice
{
    public Type $type;
    public Country $country;
    public Period $period;
    public int $week;
    public int $admissionCount;
    public int $admissionCountTotal;
    public int $copyCount;

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setCountry(Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function setPeriod(Period $period): self
    {
        $this->period = $period;

        return $this;
    }
}
