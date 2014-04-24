<?php

/**
 * @inheritdoc
 */
namespace mcms\maskmoney;

use yii\web\AssetBundle;

\Yii::setAlias('@maskmoney', dirname(__FILE__));

/**
 * @inheritdoc
 */
class MaskMoneyAsset extends AssetBundle
{

	public $sourcePath = '@maskmoney/assets/';

	public $js = [
		'jquery-maskmoney-master/dist/jquery.maskMoney.min.js',
	];

	public $depends = [
		'yii\web\YiiAsset',
		'yii\bootstrap\BootstrapPluginAsset',
	];

}