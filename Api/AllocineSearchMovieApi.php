<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\ScraperAllocine\Entity\Movie;
use Scraper\ScraperAllocine\Request\AllocineSearchMovieRequest;
use Symfony\Component\DomCrawler\Crawler;

class AllocineSearchMovieApi extends AllocineApi
{
	/**
	 * @var AllocineSearchMovieRequest
	 */
	protected $request;
	/**
	 * @var Movie[]
	 */
	protected $object;

	public function execute()
	{
		/** @var Crawler $crawler */
		$crawler = $this->data;

		$movies = $crawler->filter('.totalwidth.noborder.purehtml tr')->each(function (Crawler $node, $i) {
			if($node->filter('td')->count() > 1) {
				$movie = new Movie();
				$movie
					->setTitle($node->filter("b")->html())
					->setPoster($node->filter('img')->extract(['src'])[0])
				;
				$data = $node->filter('.fs11')->html();
				if (preg_match('#([0-9]+)<br>#', $data, $matches)) {
					$movie->setProductionYear($matches[1]);
				}
				if (preg_match('#de (.*)<br>#', $data, $matches)) {
					$movie->setDirector($matches[1]);
				}
				if (preg_match('#avec (.*)<br>#', $data, $matches)) {
					$movie->setCastingShort($matches[1]);
				}
				$links = $node->filter('a')->extract(['href']);
				if (preg_match('#([0-9]+)#', $links[0], $matches)) {
					$movie->setCode($matches[1]);
				}
				return $movie;
			}
		})
		;

		$this->object = array_values(array_filter($movies));

		return $this->object;
	}
}
