<?php

/**
 * Class Department
 * 部署
 */
class Department
{
	/**
	 * 部署名
	 * @var string
	 */
	private $name = "";
	/**
	 * フロア
	 * @var int
	 */
	private $floor = 1;

	/**
	 * Department constructor.
	 * @param string $name
	 * @param int $floor
	 */
	public function __construct($name, $floor)
	{
		$this->name = $name;
		$this->floor = $floor;
	}

	/**
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * @return int
	 */
	public function getFloor()
	{
		return $this->floor;
	}
}
