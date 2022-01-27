<?php

namespace Scraper\ScraperAllocine\Tests\Request;

use Scraper\ScraperAllocine\Model\TvSerie;
use Scraper\ScraperAllocine\Request\AllocineTvSerieRequest;

/**
 * @internal
 */
final class AllocineTvSerieRequestTest extends AbtractRequestTest
{
    public function testAllocineSearchTvSerieRequest(): void
    {
        $client = $this->getClient('tvserie.json');

        $request = new AllocineTvSerieRequest('partner', 'hash');
        $request->setCode(3213);

        $result = $client->send($request);

        $this->assertInstanceOf(TvSerie::class, $result);
    }
}
