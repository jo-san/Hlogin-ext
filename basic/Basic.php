<?php 
class Basic extends CWidget
{
	//private static $included = false;

	public function run()
	{
	/*
		if (self::$included) return;
		self::$included = true;
		$assetsPath = $this->getViewPath(true) . '/assets';
		$assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, YII_DEBUG);
		Yii::app()->clientScript
			->registerCoreScript('jquery')
			->registerCssFile($assetsUrl . '/styles.css');
	*/
	$model=new LoginForm;
	
		$this->render('basicForm',array('model'=>$model));
	}
}
?>