<?php

namespace GeorgRinger\AmpSupport\ViewHelpers;

use GeorgRinger\AmpSupport\Domain\Model\Dto\ExtensionConfiguration;

class ImageViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\ImageViewHelper
{

    /** @var bool */
    protected $isAmpEnabled = false;

    public function __construct()
    {
        $this->isAmpEnabled = ExtensionConfiguration::getInstance()->isAmpEnabledForCurrentType();
        parent::__construct();
    }

    public function initialize()
    {
        if ($this->isAmpEnabled) {
            $this->tag->setTagName('amp-img');
        }
        parent::initialize();
    }

    public function initializeArguments()
    {
        if ($this->isAmpEnabled) {
            $this->registerTagAttribute('layout', 'string', 'Layout, can be nodisplay,fixed,responsive,fixed-height,fill,container,intrinsic', false, 'fixed');
            $this->registerTagAttribute('noloading', 'bool', 'Disable loading', false);
        }
        parent::initializeArguments();
    }

}