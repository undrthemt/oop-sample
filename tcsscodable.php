<?php

/**
 * Trait tCssCodable
 * スタイルシートが書ける
 */
trait tCssCodable
{
	/**
	 * スタイルシートをコーディングする
	 */
	public function codingCss()
	{
		echo ".grid {display: inline-block;}\n";
	}
}
