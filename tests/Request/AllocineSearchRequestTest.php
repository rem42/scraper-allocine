<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Tests\Request;

use Scraper\ScraperAllocine\Model\Miscellaneous\Media;
use Scraper\ScraperAllocine\Model\Miscellaneous\News;
use Scraper\ScraperAllocine\Model\Movie;
use Scraper\ScraperAllocine\Model\Person;
use Scraper\ScraperAllocine\Model\Search;
use Scraper\ScraperAllocine\Model\TvSerie;
use Scraper\ScraperAllocine\Request\AllocineSearchRequest;

/**
 * @internal
 */
final class AllocineSearchRequestTest extends AbtractRequestTest
{
    public function testAllocineSearchRequest(): void
    {
        $client  = $this->getClient('search.json');
        $request = new AllocineSearchRequest('partner', 'hash');
        $request->setQuery('marvel');

        $result = $client->send($request);

        $this->assertInstanceOf(Search::class, $result);
        $this->assertIsArray($result->movie);
        $this->assertInstanceOf(Movie::class, $result->movie[0]);
        $this->assertInstanceOf(TvSerie::class, $result->tvseries[0]);
        $this->assertInstanceOf(Person::class, $result->person[0]);
        $this->assertInstanceOf(Media::class, $result->media[0]);
        $this->assertInstanceOf(News::class, $result->news[0]);
    }
}
