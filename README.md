MCMS Mask Money
===============
Mask Money base in Jquery maskMoney
http://plentz.github.io/jquery-maskmoney/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist marciocamello/yii2-mcms-maskmoney "*"
```

or add

```
"marciocamello/yii2-mcms-maskmoney": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?
	echo $form->field($model, 'price')->widget(\mcms\maskmoney\MaskMoney::className(),[
		 'htmlOptions' => [
			 'placeholder' => '0.00',
		 ]
	]);

	echo \mcms\maskmoney\MaskMoney::widget([
		'name' => 'price',
		'htmlOptions' => [
			'placeholder' => '0.00',
		]
	]);

?>

```