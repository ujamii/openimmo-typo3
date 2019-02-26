<?php

namespace Ujamii\OpenImmoTypo3\ViewHelpers;

use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use Ujamii\OpenImmoTypo3\Domain\Model\Anhang;
use Ujamii\OpenImmoTypo3\Domain\Model\Immobilie;

/**
 * Class MainImageViewHelper
 * @package Ujamii\OpenImmoTypo3\ViewHelpers
 */
class MainImageViewHelper extends AbstractViewHelper {

    /**
     *
     */
    public function initializeArguments()
    {
        $this->registerArgument('immobilie', Immobilie::class, 'Object to return main image for.', true);
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     *
     * @return mixed|Anhang|null
     */
    public static function renderStatic(array $arguments, \Closure $renderChildrenClosure, RenderingContextInterface $renderingContext)
    {
        $mainImage = null;

        /* @var $immobilie Immobilie */
        $immobilie = $arguments['immobilie'];

        /* @var $anhang Anhang */
        foreach ($immobilie->getAnhaenge()->getAnhang() as $anhang) {
            if ($anhang->getGruppe() == Anhang::GRUPPE_TITELBILD) {
                $mainImage = $anhang;
                break;
            } else if (is_null($mainImage) && $anhang->getGruppe() == Anhang::GRUPPE_BILD) {
                $mainImage = $anhang;
                // no break here, we may find a GRUPPE_TITELBILD later
            }
        }

        return $mainImage;
    }

}