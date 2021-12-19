<?php

namespace Scraper\ScraperAllocine\Tests\Request;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Client;
use Scraper\ScraperAllocine\Model\Movie;
use Scraper\ScraperAllocine\Model\SearchMovie;
use Scraper\ScraperAllocine\Request\AllocineSearchMovieRequest;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @internal
 */
final class AllocineSearchMovieRequestTest extends TestCase
{
    public function testAllocineSearchMovieRequest(): void
    {
        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(200);
        $responseInterface
            ->method('getContent')->willReturn(file_get_contents(__DIR__ . '/../Fixtures/search_movie.json'))
        ;
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient
            ->method('request')->willReturn($responseInterface)
        ;
        $client = new Client($httpClient);

        $request = new AllocineSearchMovieRequest('partner', 'hash');
        $request->setQuery('marvel');

        $result = $client->send($request);

        $this->assertInstanceOf(SearchMovie::class, $result);
        $this->assertIsArray($result->movie);
        $this->assertInstanceOf(Movie::class, $result->movie[0]);
    }
}
