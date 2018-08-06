<?php
require_once 'employee.php';
require_once 'idesignable.php';
require_once 'tcsscodable.php';

/**
 * Class Designer
 * デザイナ
 */
class Designer extends Employee implements IDesignable
{
	/**
	 * トレイト：CSSが書ける
	 */
	use tCssCodable;
	/**
	 * 芸術に関するスキル
	 * デザイナと一口に言っても、芸大出ている人と情報系とでは持っているスキルが違うよね…
	 * @var array
	 */
	public $artisticSkills = array();

	/**
	 * デザインする
	 */
	public function design()
	{
		echo "We hates IE!\n";
	}
}