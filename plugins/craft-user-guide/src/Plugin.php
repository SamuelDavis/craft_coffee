<?php

namespace CraftyCoffee\CraftUserGuide;

use Craft;
use CraftyCoffee\CraftUserGuide\Models\SettingsModel;

/**
 * @method SettingsModel getSettings()
 */
class Plugin extends \craft\base\Plugin
{
    public $hasCpSection = true;
    public $hasCpSettings = true;

    public function init()
    {
        parent::init();
        $this->hasCpSection = $this->getSettings()->userGuideEnabled;
    }

    protected function createSettingsModel()
    {
        return new SettingsModel;
    }

    protected function settingsHtml()
    {
        return Craft::$app
            ->getView()
            ->renderTemplate('user-guide/_settings', [
                'settings' => $this->getSettings()
            ]);
    }
}