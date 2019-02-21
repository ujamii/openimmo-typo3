<?php

namespace Ujamii\OpenImmoTypo3\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use Ujamii\OpenImmoTypo3\Domain\Model\Immobilie;
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
     */
    public function listAction()
    {
        // TODO: filterDemand
        $immobilien = $this->immobilieRepository->findAll();
        $this->view->assign('immobilien', $immobilien);
    }

    /**
     * @param Immobilie $immobilie
     */
    public function showAction(Immobilie $immobilie)
    {
        $this->view->assign('immobilie', $immobilie);
    }

}