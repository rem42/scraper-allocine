<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\Activity;
use Scraper\ScraperAllocine\Model\Miscellaneous\Link;
use Scraper\ScraperAllocine\Model\Miscellaneous\Nationality;
use Scraper\ScraperAllocine\Model\Miscellaneous\Picture;

final class Person
{
    public int $code;
    public string $name;
    /** @var array<Activity> */
    public array $activity = [];
    /** @var array<Nationality> */
    public array $nationality = [];
    /** @var array<Link> */
    public array $link = [];
    public Picture $picture;
    public string $role;

    public function addActivity(Activity $activity): self
    {
        $this->activity[] = $activity;

        return $this;
    }

    public function addNationality(Nationality $nationality): self
    {
        $this->nationality[] = $nationality;

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->link[] = $link;

        return $this;
    }
}
