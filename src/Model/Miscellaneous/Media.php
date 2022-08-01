<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Media
{
    public string $class;
    public int $code;
    public int $rcode;
    public Type $type;
    public AcShow $acShow;
    public string $title;
    public string $titleShort;
    public Version $version;
    public int $runtime;
    public Statistics $statistics;
    public Thumbnail $thumbnail;
    public string $description;
    public int $width;
    public int $height;
    public string $copyrightHolder;
    /** @var array<Link> */
    public array $link = [];
    /** @var array<Person> */
    public array $subject = [];

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setAcShow(AcShow $acShow): self
    {
        $this->acShow = $acShow;

        return $this;
    }

    public function setVersion(Version $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function setStatistics(Statistics $statistics): self
    {
        $this->statistics = $statistics;

        return $this;
    }

    public function setThumbnail(Thumbnail $thumbnail): self
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    public function addLink(Link $link): self
    {
        $this->link[] = $link;

        return $this;
    }

    public function addSubject(Person $subject): self
    {
        $this->subject[] = $subject;

        return $this;
    }
}
