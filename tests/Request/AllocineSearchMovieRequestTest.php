<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Tests\Request;

use Scraper\ScraperAllocine\Model\Movie;
use Scraper\ScraperAllocine\Model\SearchMovie;
use Scraper\ScraperAllocine\Request\AllocineSearchMovieRequest;

/**
 * @internal
 */
final class AllocineSearchMovieRequestTest extends AbtractRequestTest
{
    public function testAllocineSearchMovieRequest(): void
    {
        $client = $this->getClient('search_movie.json');

        $request = new AllocineSearchMovieRequest('partner', 'hash');
        $request->setQuery('marvel');

        $result = $client->send($request);

        $this->assertInstanceOf(SearchMovie::class, $result);
        $this->assertIsArray($result->movie);
        $this->assertInstanceOf(Movie::class, $result->movie[0]);
    }
}
