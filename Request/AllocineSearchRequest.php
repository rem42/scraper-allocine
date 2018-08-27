<?php

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\UrlAnnotation;

/**
 * Class AllocineSearchRequest
 * @package Scraper\ScraperAllocineApi\Request
 *
 * @UrlAnnotation(method="GET", contentType="HTML", protocol="CURL")
 */
class AllocineSearchRequest extends AllocineRequest
{
	/**
	 * @var string
	 */
	protected $query;

	public function getParameters()
	{
		$parent = parent::getParameters();

		$array = [
			'q' => $this->query,
		];

		return array_merge($parent, $array);
	}

	/**
	 * @return string
	 */
	public function getQuery()
	{
		return $this->query;
	}

	/**
	 * @param string $query
	 *
	 * @return $this
	 */
	public function setQuery($query)
	{
		$this->query = $query;

		return $this;
	}
}
