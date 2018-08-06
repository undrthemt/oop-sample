<?php
require_once 'department.php';

/**
 * Class Employee
 * 社員
 */
class Employee
{
	// -------------------- property 属性 ---------------------- //

	/**
	 * 名前
	 * @var string
	 */
	private $name = "";
	/**
	 * 性別
	 * @var null|int
	 */
	private $gender = null;
	/**
	 * スキルセット
	 * @var array
	 */
	private $skillSet = array();

	/**
	 * 所属部署
	 * @var null | Department
	 */
	private $department = null;

	/**
	 * Employee constructor.
	 * @param string $name
	 * @param int $gender
	 * @param array $skillSet
	 */
	public function __construct($name = "", $gender = 0, $skillSet = array())
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->skillSet = $skillSet;
	}

	// -------------------- method 振る舞い ---------------------- //

	/**
	 * 仕事する
	 */
	public function work()
	{
		$this->sayMyName();
		echo "I'm working!\n";
	}

	/**
	 * 休憩する
	 * @access protected 継承関係内でだけ使える
	 */
	protected function rest()
	{
		echo "Have a break!\n";
	}

	/*	 * 名前を言う
	 * @access private 自分自身のクラスでだけ使える
	 */
	private function sayMyName()
	{
		echo "I'm " . $this->name . "\n";
	}

	// -------------------- accessor アクセサ ---------------------- //

	// 両方合わせて　Accessor と呼ぶ。
	// getterだけを書けば、Read Onlyのプロパティになる。
	/**
	 * getter
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * setter
	 * @param $name
	 * @throws Exception
	 */
	public function setName($name)
	{
		// アクセサを使うと、後から何か処理を差し込んだりするのが簡単になる。
		if (strlen($name) <= 255)
			throw new Exception("name too long.");
		$this->name = $name;
	}

	/**
	 * getter
	 * @return Department|null
	 */
	public function getDepartment()
	{
		return $this->department;
	}

	/**
	 * setter
	 * @param $name
	 * @param int $floor
	 */
	public function setDepartment($name, $floor = 1)
	{
		$this->department = new Department($name, $floor);
	}
}
