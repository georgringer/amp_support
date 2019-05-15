<?php

namespace GeorgRinger\AmpSupport\ViewHelpers;

use GeorgRinger\AmpSupport\Domain\Model\Dto\ExtensionConfiguration;
use TYPO3\CMS\Fluid\Core\ViewHelper\AbstractConditionViewHelper;

class IsAmpViewHelper extends AbstractConditionViewHelper
{

    /**
     * @param array $arguments
     * @return bool
     */
    protected static function evaluateCondition($arguments = null)
    {
        return ExtensionConfiguration::getInstance()->isAmpEnabledForCurrentType();
    }

}
