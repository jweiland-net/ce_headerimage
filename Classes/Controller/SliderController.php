<?php

declare(strict_types=1);

/*
 * This file is part of the package jweiland/ce_headerimage.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace JWeiland\CeHeaderimage\Controller;

use JWeiland\CeHeaderimage\Domain\Model\Slider;
use JWeiland\CeHeaderimage\Domain\Repository\SliderRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class SliderController
 */
class SliderController extends ActionController
{
    /**
     * ceHeaderimage
     *
     * @var SliderRepository
     */
    protected $sliderRepository;

    /**
     * injects sliderRepository
     *
     * @param SliderRepository $sliderRepository
     */
    public function injectSliderRepository(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * action show
     */
    public function showAction(): void
    {
        $uids = GeneralUtility::trimExplode(',', $this->settings['sliders'], true);
        if (is_array($uids) && count($uids)) {
            $sliders = GeneralUtility::makeInstance(ObjectStorage::class);
            foreach ($uids as $uid) {
                /** @var Slider $slider */
                $slider = $this->sliderRepository->findByUid($uid);
                $sliders->attach($slider);
            }
            $this->view->assign('sliders', $sliders);
        } else {
            $this->view->assign('sliders', null);
        }
    }
}
