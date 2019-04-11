<?php

namespace CraftyCoffee\CraftUserGuide\Models;

use craft\base\Model;

class SettingsModel extends Model
{
    public $userGuideEnabled = true;
    public $markdownText = '';
}