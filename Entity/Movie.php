<?php

namespace Scraper\ScraperAllocine\Entity;

class Movie
{
	/**
	 * @var integer
	 */
	protected $code;
	/**
	 * @var string
	 */
	protected $title;
	/**
	 * @var integer
	 */
	protected $productionYear;
	/**
	 * @var string
	 */
	protected $director;
	/**
	 * @var string
	 */
	protected $castingShort;
	/**
	 * @var string
	 */
	protected $poster;

	/**
	 * @return int
	 */
	public function getCode(): ?int
	{
		return $this->code;
	}

	/**
	 * @param int $code
	 *
	 * @return $this
	 */
	public function setCode(?int $code)
	{
		$this->code = $code;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle(): ?string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle(?string $title)
	{
		$this->title = $title;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getProductionYear(): ?int
	{
		return $this->productionYear;
	}

	/**
	 * @param int $productionYear
	 *
	 * @return $this
	 */
	public function setProductionYear(?int $productionYear)
	{
		$this->productionYear = $productionYear;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDirector(): ?string
	{
		return $this->director;
	}

	/**
	 * @param string $director
	 *
	 * @return $this
	 */
	public function setDirector(?string $director)
	{
		$this->director = $director;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCastingShort(): ?string
	{
		return $this->castingShort;
	}

	/**
	 * @param string $castingShort
	 *
	 * @return $this
	 */
	public function setCastingShort(?string $castingShort)
	{
		$this->castingShort = $castingShort;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPoster(): ?string
	{
		return $this->poster;
	}

	/**
	 * @param string $poster
	 *
	 * @return $this
	 */
	public function setPoster(?string $poster)
	{
		$this->poster = $poster;
		return $this;
	}
}
