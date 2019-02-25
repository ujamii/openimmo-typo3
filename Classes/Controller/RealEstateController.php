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
        $filterDemand = $this->checkForSessionValue('immoFilter', $filterDemand);
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

    /**
     * Search action
     */
    public function searchAction()
    {
        $filterDemand = $this->checkForSessionValue('immoFilter');
        if (is_null($filterDemand)) {
            $filterDemand = $this->objectManager->get(RealEstateSearchDemand::class);
        }
        $this->view->assign('filterDemand', $filterDemand);
    }

    /**
     * Checks whether there is a session value with a given key and returns it if the given
     * parameter value is null. If it is not null, the given value is saved in the session.
     *
     * @param string $keyInSession The identifier in the user session für the given value.
     * @param mixed $value
     * @return mixed
     */
    protected function checkForSessionValue($keyInSession, $value = null)
    {
        try {
            if (is_null($value)) {
                $sessionData = $GLOBALS["TSFE"]->fe_user->getSessionData($keyInSession);
                if (!is_null($sessionData)) {
                    $value = $sessionData;
                }
            } else {
                $GLOBALS["TSFE"]->fe_user->setAndSaveSessionData($keyInSession, $value);
            }
        } catch (\Exception $exception) {
            // do nothing
        }

        return $value;
    }

}