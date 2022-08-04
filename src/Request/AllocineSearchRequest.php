<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Attribute\Scraper;

#[Scraper(path: 'search')]
class AllocineSearchRequest extends AllocineRequest
{
    protected string $filter = 'movie,tvseries,theater,person,video,news,program';
    protected string $path   = 'search';
    protected string $query;

    protected int $count = 20;
    protected int $page  = 1;

    /**
     * @return array<string, int|string>
     */
    public function getQuery(): array
    {
        $this->parameters = [
            'filter' => $this->filter,
            'q'      => $this->query,
            'count'  => $this->count,
            'page'   => $this->page,
        ];
        return parent::getQuery();
    }

    public function setQuery(string $query): self
    {
        $this->query = $query;

        return $this;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }
}
