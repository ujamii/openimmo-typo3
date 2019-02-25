<?php
namespace Ujamii\OpenImmoTypo3\Domain\Repository;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;
use Ujamii\OpenImmoTypo3\Domain\Dto\RealEstateSearchDemand;
use Ujamii\OpenImmoTypo3\Domain\Model\Flaechen;
use Ujamii\OpenImmoTypo3\Domain\Model\Immobilie;
use Ujamii\OpenImmoTypo3\Domain\Model\Preise;

/**
 */
trait ImmobilieRepositoryTrait {

    public function findAllByFilter(RealEstateSearchDemand $filter)
    {
        /* @var $pool ConnectionPool */
        $pool = $this->objectManager->get(ConnectionPool::class);
        $qb = $pool->getQueryBuilderForTable(Immobilie::TABLE_NAME);
        $qb
            ->select('imo.*')
            ->from(Immobilie::TABLE_NAME, 'imo')
            ->join('imo', Flaechen::TABLE_NAME, 'flaechen', 'flaechen.immobilie = imo.uid')
            ->join('imo', Preise::TABLE_NAME, 'preise', 'preise.immobilie = imo.uid')
        ;

        if ($filter->getNumberOfRoomsMin() != 0) {
            $qb->andWhere($qb->expr()->gte('flaechen.anzahl_zimmer', $filter->getNumberOfRoomsMin()));
        }
        if ($filter->getNumberOfRoomsMax() != 0) {
            $qb->andWhere($qb->expr()->lte('flaechen.anzahl_zimmer', $filter->getNumberOfRoomsMax()));
        }
        if ($filter->getLivingAreaMin() != 0) {
            $qb->andWhere($qb->expr()->gte('flaechen.wohnflaeche', $filter->getLivingAreaMin()));
        }
        if ($filter->getLivingAreaMax() != 0) {
            $qb->andWhere($qb->expr()->lte('flaechen.wohnflaeche', $filter->getLivingAreaMax()));
        }
        if ($filter->getPriceMin() != 0) {
            $qb->andWhere($qb->expr()->gte('preise.warmmiete', $filter->getPriceMin()));
        }
        if ($filter->getPriceMax() != 0) {
            $qb->andWhere($qb->expr()->lte('preise.warmmiete', $filter->getPriceMax()));
        }

        $qb->orderBy($filter->getSortBy());

        /* @var $dataMapper DataMapper */
        $dataMapper = $this->objectManager->get(DataMapper::class);
        return $dataMapper->map(Immobilie::class, $qb->execute()->fetchAll());
    }

}
