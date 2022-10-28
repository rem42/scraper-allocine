<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Request;

use Scraper\Scraper\Attribute\Method;
use Scraper\Scraper\Attribute\Scheme;
use Scraper\Scraper\Attribute\Scraper;
use Scraper\Scraper\Request\RequestQuery;
use Scraper\Scraper\Request\ScraperRequest;

#[Scraper(method: Method::GET, scheme: Scheme::HTTPS, host: 'api.allocine.fr', path: 'rest/v3/')]
abstract class AllocineRequest extends ScraperRequest implements RequestQuery
{
    /** @var array<string> */
    private const ORDER = ['filter', 'q', 'partner', 'mediafmt', 'profile', 'count', 'format', 'page', 'sed'];

    /** @var array<string, int|string> */
    protected array $parameters = [];

    protected string $profile = 'large';

    protected string $path = '';

    // protected string $mediaFmt = 'mp4-best';
    protected string $mediaFmt = 'mp4-lc:m';

    public function __construct(
        private readonly string $partner,
        private readonly string $hash
    ) {}

    /**
     * @return array<string, int|string>
     */
    public function getQuery(): array
    {
        $parameters = array_merge($this->parameters, [
            'format' => 'json',
            'mediafmt' => $this->mediaFmt,
            'profile' => $this->profile,
            'partner' => $this->partner,
            'sed' => date('Ymd'),
        ]);

        uksort($parameters, static function (string $key1, string $key2) {
            return array_search($key1, self::ORDER) > array_search($key2, self::ORDER) ? 1 : -1;
        });

        $paramsQuery = http_build_query($parameters);

        return array_merge(
            $parameters,
            [
                'sig' => base64_encode(sha1($this->path . $paramsQuery . $this->hash, true)),
            ]
        );
    }
}
