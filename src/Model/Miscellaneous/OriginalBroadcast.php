<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class OriginalBroadcast
{
    public \DateTime $dateStart;

    public function setDateStart(string $dateStart): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $dateStart)) {
            $this->dateStart = $dateTime;
        }

        return $this;
    }
}
