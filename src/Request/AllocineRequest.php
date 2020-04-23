<?php

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Annotation\Scraper;
use Scraper\Scraper\Request\ScraperRequest;

/**
 * @Scraper(host="www.allocine.fr", scheme="HTTP", method="GET", contentType="HTML")
 */
abstract class AllocineRequest extends ScraperRequest
{
}
