<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class CastMember
{
    public Person $person;
    public Activity $activity;
    public string $role;
    public Picture $picture;

    public function setPerson(Person $person): self
    {
        $this->person = $person;

        return $this;
    }

    public function setActivity(Activity $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function setPicture(Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }
}
