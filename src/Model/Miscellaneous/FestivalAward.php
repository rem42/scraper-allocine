<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class FestivalAward
{
    public int $code;
    public ParentFestival $parentFestival;
    public ParentEdition $parentEdition;
    public AwardType $awardType;
    public string $name;

    public function setParentFestival(ParentFestival $parentFestival): self
    {
        $this->parentFestival = $parentFestival;

        return $this;
    }

    public function setParentEdition(ParentEdition $parentEdition): self
    {
        $this->parentEdition = $parentEdition;

        return $this;
    }

    public function setAwardType(AwardType $awardType): self
    {
        $this->awardType = $awardType;

        return $this;
    }
}
