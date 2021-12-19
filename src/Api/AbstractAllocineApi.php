<?php

namespace Scraper\ScraperAllocine\Api;

use Scraper\Scraper\Api\AbstractApi;
use Scraper\ScraperAllocine\Exception\AllocineException;

abstract class AbstractAllocineApi extends AbstractApi
{
    /**
     * @return array|bool|mixed|object|object[]|string
     */
    public function execute()
    {
        $content = $this->response->getContent();

        $content = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        if (!\is_array($content)) {
            throw new AllocineException('no result');
        }

        $jsonContent = json_encode($this->getContent($content), \JSON_THROW_ON_ERROR);

        return $this->serializer->deserialize($jsonContent, $this->getType(), 'json');
    }

    /**
     * @param array<string, array<string, array<string, mixed>>> $content
     *
     * @return array<string, mixed>
     */
    abstract protected function getContent(array $content): array;

    /**
     * @return class-string|string
     */
    abstract protected function getType(): string;
}
