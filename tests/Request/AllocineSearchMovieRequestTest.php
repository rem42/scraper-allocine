<?php

namespace Scraper\ScraperAllocine\Tests\Request;

use PHPUnit\Framework\TestCase;
use Scraper\Scraper\Client;
use Scraper\ScraperAllocine\Entity\Movie;
use Scraper\ScraperAllocine\Request\AllocineSearchMovieRequest;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

final class AllocineSearchMovieRequestTest extends TestCase
{
    public function testAllocineSearchMovieRequest(): void
    {
        $responseInterface = $this->createMock(ResponseInterface::class);
        $responseInterface
            ->method('getStatusCode')->willReturn(200);
        $responseInterface
            ->method('getContent')->willReturn(file_get_contents(dirname(__FILE__) . '/../Fixtures/search_movie.html'))
        ;
        $httpClient = $this->createMock(HttpClientInterface::class);
        $httpClient
            ->method('request')->willReturn($responseInterface)
        ;
        $client = new Client($httpClient);

        $request = new AllocineSearchMovieRequest();
        $request->setQuery('marvel');

        /** @var Movie[] $result */
        $result = $client->send($request);

        $this->assertIsArray($result);
        $this->assertInstanceOf(Movie::class, $result[0]);
    }
}
