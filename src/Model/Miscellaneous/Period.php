<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Period
{
    public \DateTime $dateStart;
    public \DateTime $dateEnd;

    public function setDateStart(string $dateStart): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $dateStart)) {
            $this->dateStart = $dateTime;
        }

        return $this;
    }

    public function setDateEnd(string $dateEnd): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $dateEnd)) {
            $this->dateEnd = $dateTime;
        }

        return $this;
    }
}
