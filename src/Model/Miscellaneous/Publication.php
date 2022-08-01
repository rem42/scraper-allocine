<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Publication
{
    public \DateTime $dateStart;

    public function setDateStart(string $dateStart): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d\TH:i:s', $dateStart)) {
            $this->dateStart = $dateTime;
        }

        return $this;
    }
}
