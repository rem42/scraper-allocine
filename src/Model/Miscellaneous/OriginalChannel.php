<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class OriginalChannel
{
    public Channel $channel;

    public function setChannel(Channel $channel): self
    {
        $this->channel = $channel;

        return $this;
    }
}
