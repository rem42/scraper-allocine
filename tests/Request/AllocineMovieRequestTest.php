<?php

namespace Scraper\ScraperAllocine\Tests\Request;

use Scraper\ScraperAllocine\Model\Movie;
use Scraper\ScraperAllocine\Request\AllocineMovieRequest;

/**
 * @internal
 */
final class AllocineMovieRequestTest extends AbtractRequestTest
{
    public function testAllocineSearchMovieRequest(): void
    {
        $client = $this->getClient('movie.json');

        $request = new AllocineMovieRequest('partner', 'hash');
        $request->setCode(114820);

        $result = $client->send($request);

        $this->assertInstanceOf(Movie::class, $result);
    }
}
