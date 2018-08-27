<?php

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Reader;
use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Request\Request;

/**
 * Class AllocineRequest
 * @package Scraper\ScraperAllocineApi\Request
 *
 * @UrlAnnotation(baseUrl="http://www.allocine.fr/")
 */
abstract class AllocineRequest extends Request
{
	public function getParameters()
	{
		return [];
	}

	public function getBody()
	{
		return [];
	}

	public function getHeaders()
	{
		return [];
	}
}
