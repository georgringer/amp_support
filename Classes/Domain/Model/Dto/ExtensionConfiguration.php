<?php

namespace GeorgRinger\AmpSupport\Domain\Model\Dto;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class ExtensionConfiguration
{

    /** @var int */
    protected $type = null;

    public function __construct()
    {
        $settings = (array)unserialize((string)$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['amp_support'], ['allowed_classes' => false]);
        if (!empty($settings)) {
            $type = (string)trim($settings['type']);
            if ($type !== 'null') {
                $this->type = (int)$type;
            }
        }
    }

    public function isAmpEnabledForCurrentType(): bool
    {
        if (TYPO3_MODE !== 'FE') {
            return false;
        }

        return $this->getTsfe()->type === $this->type;
    }

    public static function getInstance(): ExtensionConfiguration
    {
        return GeneralUtility::makeInstance(self::class);
    }

    protected static function getTsfe(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }


}