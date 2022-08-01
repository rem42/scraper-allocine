<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Scraper;

/**
 * @Scraper(path="movie")
 */
final class AllocineMovieRequest extends AllocineRequest
{
    protected int $code;
    protected string $path = 'movie';

    /**
     * @return array<string, int|string>
     */
    public function getQuery(): array
    {
        $this->parameters = [
            'code' => $this->code,
        ];
        return parent::getQuery();
    }

    public function setCode(int $code): self
    {
        $this->code = $code;

        return $this;
    }
}
