<?php

namespace Ujamii\OpenImmoTypo3\Domain\Dto;

/**
 * Class RealEstateSearchDemand
 * @package Ujamii\OpenImmoTypo3\Domain\Dto
 */
class RealEstateSearchDemand
{

    const DEFAULT_SORT_BY = 'flaechen.wohnflaeche';

    /**
     * @var string
     */
    protected $sortBy = self::DEFAULT_SORT_BY;

    /**
     * @var int
     */
    protected $numberOfRoomsMin = 0;

    /**
     * @var int
     */
    protected $numberOfRoomsMax = 0;

    /**
     * @var int
     */
    protected $livingAreaMin = 0;

    /**
     * @var int
     */
    protected $livingAreaMax = 0;

    /**
     * @var int
     */
    protected $priceMin = 0;

    /**
     * @var int
     */
    protected $priceMax = 0;

    /**
     * @return string
     */
    public function getSortBy(): string
    {
        return $this->sortBy;
    }

    /**
     * @param string $sortBy
     */
    public function setSortBy(string $sortBy): void
    {
        if (in_array($sortBy, array_keys($this->getPossibleSortBy()))) {
            $this->sortBy = $sortBy;
        } else {
            $this->sortBy = self::DEFAULT_SORT_BY;
        }
    }

    /**
     * @return int
     */
    public function getNumberOfRoomsMin(): int
    {
        return $this->numberOfRoomsMin;
    }

    /**
     * @param int $numberOfRoomsMin
     */
    public function setNumberOfRoomsMin(?int $numberOfRoomsMin): void
    {
        $this->numberOfRoomsMin = $numberOfRoomsMin ?? 0;
    }

    /**
     * @return int
     */
    public function getNumberOfRoomsMax(): int
    {
        return $this->numberOfRoomsMax;
    }

    /**
     * @param int $numberOfRoomsMax
     */
    public function setNumberOfRoomsMax(?int $numberOfRoomsMax): void
    {
        $this->numberOfRoomsMax = $numberOfRoomsMax ?? 0;
    }

    /**
     * @return int
     */
    public function getLivingAreaMin(): int
    {
        return $this->livingAreaMin;
    }

    /**
     * @param int $livingAreaMin
     */
    public function setLivingAreaMin(?int $livingAreaMin): void
    {
        $this->livingAreaMin = $livingAreaMin ?? 0;
    }

    /**
     * @return int
     */
    public function getLivingAreaMax(): int
    {
        return $this->livingAreaMax;
    }

    /**
     * @param int $livingAreaMax
     */
    public function setLivingAreaMax(?int $livingAreaMax): void
    {
        $this->livingAreaMax = $livingAreaMax ?? 0;
    }

    /**
     * @return int
     */
    public function getPriceMin(): int
    {
        return $this->priceMin;
    }

    /**
     * @param int $priceMin
     */
    public function setPriceMin(?int $priceMin): void
    {
        $this->priceMin = $priceMin ?? 0;
    }

    /**
     * @return int
     */
    public function getPriceMax(): int
    {
        return $this->priceMax;
    }

    /**
     * @param int $priceMax
     */
    public function setPriceMax(?int $priceMax): void
    {
        $this->priceMax = $priceMax ?? 0;
    }

    /**
     * @return array
     */
    public function getPossibleSortBy() : array
    {
        return [
            'flaechen.wohnflaeche' => 'Wohnfläche',
            'flaechen.anzahl_zimmer' => 'Zimmer',
            'preise.warmmiete' => 'Warmmiete'
        ];
    }

}