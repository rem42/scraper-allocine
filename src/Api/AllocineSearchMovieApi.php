<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperAllocine\Entity\Movie;
use Symfony\Component\DomCrawler\Crawler;

final class AllocineSearchMovieApi extends AbstractApi
{
    /**
     * @return Movie[]
     */
    public function execute(): array
    {
        $content = $this->response->getContent();
        $crawler = new Crawler($content);

        $movies = $crawler
            ->filter('.movies-results li')
            ->each(function (Crawler $node, $i): Movie {
                $movie = new Movie();
                $movie->id = $this->getLinkFromClass($node->filter('h2 > span')->extract(['class'])[0]);
                $movie->title = $node->filter('h2')->text(null, true);
                $movie->poster = $node->filter('img')->extract(['data-src'])[0];

                if ('' !== ($releaseDate = $node->filter('.date')->text('', true))) {
                    $movie->releaseDate = $releaseDate;
                }

                $movie->director = $node->filter('.meta-body-direction')->text('', true);
                $movie->castingShort = $node->filter('.meta-body-actor')->text('', true);
                return $movie;
            });

        return array_values(array_filter($movies));
    }

    private function getLinkFromClass(string $class): int
    {
        $obfuscatedClass = explode(' ', $class)[0];
        $urlEncoded      = str_replace('ACrL2ZACrpbG0v', '', $obfuscatedClass);
        $urlDecode       = base64_decode($urlEncoded);
        preg_match('#\d+#', $urlDecode, $id);

        return $id[0];
    }
}
