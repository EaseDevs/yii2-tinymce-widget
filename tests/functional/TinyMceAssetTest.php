<?php
/**
 * @link https://github.com/easedevs/yii2-tinymce-widget
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace tests;

use easedevs\tinymce\TinyMceAsset;
use yii\web\AssetBundle;

class TinyMceAssetTest extends TestCase
{
    public function testRegister()
    {
        $view = $this->getView();
        $this->assertEmpty($view->assetBundles);
        TinyMceAsset::register($view);
        $this->assertEquals(1, count($view->assetBundles));
        $this->assertTrue($view->assetBundles['easedevs\\tinymce\\TinyMceAsset'] instanceof AssetBundle);
        $content = $view->renderFile('@tests/views/layouts/rawlayout.php');
        $this->assertStringContainsString('tinymce.js', $content);
    }
}
