<?php
namespace Ujamii\OpenImmoTypo3\Domain\Repository;

use TYPO3\CMS\Extbase\Persistence\QueryInterface;
use Ujamii\OpenImmoTypo3\Domain\Dto\RealEstateSearchDemand;

/**
 */
trait ImmobilieRepositoryTrait {

    /**
     * @param RealEstateSearchDemand $filter
     *
     * @return array
     * @throws \TYPO3\CMS\Extbase\Persistence\Exception\InvalidQueryException
     */
    public function findAllByFilter(RealEstateSearchDemand $filter)
    {
        $query = $this->createQuery();

        $constraints = [];

        if ($filter->getNumberOfRoomsMin() != 0) {
            $constraints[] = $query->greaterThanOrEqual('flaechen.anzahl_zimmer', $filter->getNumberOfRoomsMin());
        }
        if ($filter->getNumberOfRoomsMax() != 0) {
            $constraints[] = $query->lessThanOrEqual('flaechen.anzahl_zimmer', $filter->getNumberOfRoomsMax());
        }
        if ($filter->getLivingAreaMin() != 0) {
            $constraints[] = $query->greaterThanOrEqual('flaechen.wohnflaeche', $filter->getLivingAreaMin());
        }
        if ($filter->getLivingAreaMax() != 0) {
            $constraints[] = $query->lessThanOrEqual('flaechen.wohnflaeche', $filter->getLivingAreaMax());
        }
        if ($filter->getPriceMin() != 0) {
            $constraints[] = $query->greaterThanOrEqual('preise.warmmiete', $filter->getPriceMin());
        }
        if ($filter->getPriceMax() != 0) {
            $constraints[] = $query->lessThanOrEqual('preise.warmmiete', $filter->getPriceMax());
        }

        $query->matching($query->logicalAnd($constraints));
        $query->setOrderings([$filter->getSortBy() => QueryInterface::ORDER_ASCENDING]);

        return $query->execute();
    }

}
