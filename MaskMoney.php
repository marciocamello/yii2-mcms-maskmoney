<?php

namespace mcms\maskmoney;

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

class MaskMoney extends InputWidget
{

	public $callbacks = [];
	public $hasModel = [];
	public $htmlOptions = [];
	public $pluginOptions = [];
	public $options = ['class' => 'form-control'];

	/**
	 * @see MaskMoney
	 * @see Init extension default
	 */
	public function init()
	{
		parent::init();
		$this->registerAssets();
	}

	/**
	 * @see MaskMoney
	 * @see Load extension with all settings
	 */
	public function run()
	{
		if ($this->hasModel()) {
			$htmlOptions = ArrayHelper::merge(['class' => 'form-control'],$this->htmlOptions);
			echo Html::activeTextInput($this->model, $this->attribute, $htmlOptions);
		} else {
			echo Html::textInput($this->name, $this->value, $this->options);
		}
		$this->registerScript();
	}

	public function registerScript()
	{
		$options = false;
		$id = $this->options['id'];

		$view = $this->getView();

		foreach($this->callbacks as $name => $value)
		{
			$options .= $name.":".$value.",";
		}

		$options = $this->pluginOptions;
		$options = empty($options) ? '' : Json::encode($options);

		$view->registerJs("jQuery('#$id').maskMoney({$options});",$view::POS_READY);
	}

	/**
	 * @see MaskMoney
	 * @see Register assets from this extension and yours types
	 */
	public function registerAssets()
	{
		$this->view = \Yii::$app->getView();
		MaskMoneyAsset::register($this->view);
	}
}
