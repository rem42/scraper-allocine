<?php declare(strict_types=1);

namespace Scraper\ScraperAllocine\Model\Miscellaneous;

final class Product
{
    public int $code;
    public Type $type;
    public string $title;
    public string $audioFormat;
    public string $videoFormat;
    public \DateTime $releaseDate;
    public Picture $picture;
    public BasePrice $basePrice;
    public Link $sellerUrl;
    public ProductSeller $productseller;

    public function setType(Type $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setReleaseDate(string $releaseDate): self
    {
        if ($dateTime = \DateTime::createFromFormat('Y-m-d', $releaseDate)) {
            $this->releaseDate = $dateTime;
        }

        return $this;
    }

    public function setPicture(Picture $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function setBasePrice(BasePrice $basePrice): self
    {
        $this->basePrice = $basePrice;

        return $this;
    }

    public function setSellerUrl(Link $sellerUrl): self
    {
        $this->sellerUrl = $sellerUrl;

        return $this;
    }

    public function setProductseller(ProductSeller $productseller): self
    {
        $this->productseller = $productseller;

        return $this;
    }
}
