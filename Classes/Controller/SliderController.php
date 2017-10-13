<?php
declare(strict_types=1);
namespace JWeiland\CeHeaderimage\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use JWeiland\CeHeaderimage\Domain\Model\Slider;
use JWeiland\CeHeaderimage\Domain\Repository\SliderRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Class SliderController
 *
 * @package JWeiland\CeHeaderimage\Controller
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
     * @return void
     */
    public function injectSliderRepository(SliderRepository $sliderRepository)
    {
        $this->sliderRepository = $sliderRepository;
    }

    /**
     * action show
     *
     * @return void
     */
    public function showAction()
    {
        $uids = GeneralUtility::trimExplode(',', $this->settings['sliders'], true);
        if (is_array($uids) && count($uids)) {
            /** @var ObjectStorage $sliders */
            $sliders = $this->objectManager->get(ObjectStorage::class);
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
