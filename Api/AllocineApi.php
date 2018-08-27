<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\Scraper\Annotation\UrlAnnotation;
use Scraper\Scraper\Api\ApiInterface;
use Scraper\Scraper\Request\Request;

abstract class AllocineApi implements ApiInterface
{
	/**
	 * @var Request
	 */
	protected $request;
	/**
	 * @var mixed
	 */
	protected $data;
	/**
	 * @var UrlAnnotation
	 */
	protected $urlAnnotation;
	/**
	 * @var mixed
	 */
	protected $object;

	/**
	 * AllocineApi constructor.
	 */
	public function __construct(Request $request, $data, UrlAnnotation $urlAnnotation)
	{
		$this->request = $request;
		$this->data = $data;
		$this->urlAnnotation = $urlAnnotation;
	}
}