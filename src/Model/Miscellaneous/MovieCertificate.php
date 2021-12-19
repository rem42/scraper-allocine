<?php

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class MovieCertificate
{
    public Certificate $certificate;

    public function setCertificate(Certificate $certificate): self
    {
        $this->certificate = $certificate;

        return $this;
    }
}
