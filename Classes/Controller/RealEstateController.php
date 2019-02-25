<?php

namespace Ujamii\OpenImmoTypo3\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Ujamii\OpenImmoTypo3\Domain\Dto\RealEstateSearchDemand;
use Ujamii\OpenImmoTypo3\Domain\Repository\ImmobilieRepository;

/**
 * Class RealEstateController
 * @package Ujamii\OpenImmoTypo3\Controller
 */
class RealEstateController extends ActionController {

    /**
     * @var ImmobilieRepository
     */
    protected $immobilieRepository;

    /**
     * RealEstateController constructor.
     *
     * @param ImmobilieRepository $immobilieRepository
     */
    public function __construct(ImmobilieRepository $immobilieRepository)
    {
        parent::__construct();
        $this->immobilieRepository = $immobilieRepository;
    }

    /**
     * List view
     *
     * @param RealEstateSearchDemand|null $filterDemand
     */
    public function listAction(?RealEstateSearchDemand $filterDemand = null)
    {
        if (is_null($filterDemand)) {
            /* @var $filterDemand RealEstateSearchDemand */
            $filterDemand = $this->objectManager->get(RealEstateSearchDemand::class);
        }

        $immobilien = $this->immobilieRepository->findAllByFilter($filterDemand);
        $this->view->assign('immobilien', $immobilien);
    }

    /**
     * @param string $immobilie
     */
    public function showAction($immobilie)
    {
        // TODO: providing the correct object type somehow throws an exception (https://wiki.typo3.org/Exception/CMS/1297759968)
        $immobilie = $this->immobilieRepository->findByUid($immobilie);
        $this->view->assign('immobilie', $immobilie);
    }

}