<?php

declare(strict_types=1);

namespace Scraper\ScraperAllocine\Tests\Request;

use Scraper\ScraperAllocine\Model\Movie;
use Scraper\ScraperAllocine\Request\AllocineMovieRequest;

/**
 * @internal
 */
final class AllocineMovieRequestTest extends AbtractRequestTest
{
    public function testAllocineMovieRequest(): void
    {
        $client = $this->getClient('movie.json');

        $request = new AllocineMovieRequest('partner', 'hash');
        $request->setCode(114820);

        $result = $client->send($request);

        $this->assertInstanceOf(Movie::class, $result);
    }

    public function testAllocineMovie2Request(): void
    {
        $client = $this->getClient('movie_2.json');

        $request = new AllocineMovieRequest('partner', 'hash');
        $request->setCode(211012);

        $result = $client->send($request);

        $this->assertInstanceOf(Movie::class, $result);
    }
}
