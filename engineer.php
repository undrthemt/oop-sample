<?php
require_once 'employee.php';
require_once 'iprogrammable.php';
require_once 'tcsscodable.php';

/**
 * Class Engineer
 * エンジニア
 */
class Engineer extends Employee implements IProgrammable
{
	/**
	 * トレイト：CSSが書ける
	 */
	use tCssCodable;
	/**
	 * 魔法使いとしてのレベル
	 * 魔法使いレベルの人はそうそういません。
	 * 0 - 10  10:ウィザード級ハッカー
	 * @var int
	 */
	private $wizardLevel = 0;

	/**
	 * プログラムする
	 */
	public function program()
	{
		/**
		 * インターフェースとは？
		 * - IProgrammableをimplementsしているので、実装しないとエラーになる。
		 * - 実装を強制できる。
		 * - そのインターフェースを持っていることを保証する。
		 */
		echo "echo 'hello world!'\n";
	}

	/**
	 * 仕事する
	 * @override 親クラスのworkメソッドをオーバーライド
	 * @see Employee::work()
	 */
	public function work()
	{
		// 休んでからでないと仕事しないように...
		// 休むのは社員の特権...(protected method)
		$this->rest();
		// 親クラスのメソッドを呼び出す。
		parent::work();
		echo "I don't like work.\n";
	}

	/**
	 * @param $level
	 */
	public function setWizardLevel($level)
	{
		$this->wizardLevel = $level;
	}
}