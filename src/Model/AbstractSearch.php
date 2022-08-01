<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model;

use Scraper\ScraperAllocine\Model\Miscellaneous\ResultType;

abstract class AbstractSearch
{
    public int $page;
    public int $count;
    public int $totalResults;
    /** @var array<ResultType> */
    public array $results = [];

    public function addResults(ResultType $type): self
    {
        $this->results[] = $type;

        return $this;
    }
}
