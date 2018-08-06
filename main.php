<?php
require_once 'designer.php';
require_once 'engineer.php';

/**
 * オブジェクト指向プログラミングの基本要素
 * - プロパティの可視性の変更, getter/setter/accessor
 * - メソッドの可視性の変更
 * - カプセル化
 * - インターフェースの追加
 * - 社員に所属部署を加える
 * - メソッドのオーバーライド
 * - トレイトを使う
 */

// 社員クラスのオブジェクト化/インスタンス化
$employee = new Employee();
// 社員だから働ける
$employee->work();

// カプセル化
// プロパティを getter/setter で制限できる。
$yamada = new Employee("山田");
echo $yamada->getName() . "\n";
/**
 * アクセス修飾子 可視性
 * - 性別は隠されていて見えない。
 * echo $yamada->gender ."\n";
 * - 休憩は呼び出せない。
 * $yamada->rest();
 * - 名前を言うは呼び出せない。
 * $yamada->sayMyName();
 */

/**
 * カプセル化とは？
 * - クラスを使う側に不必要なものを見せないようにする。
 * - 出来てはいけないことを出来ないようにする。
 * - 出来ていいことだけ出来るようにする。
 * - つまり、使いやすくする
 */

// 個別のオブジェクトをもっと具体的にすると...
// 社員だから佐藤さんは働ける
$satou = new Employee("佐藤");
$satou->work();

// 派生クラスのオブジェクト化/インスタンス化
// 佐藤さんはデザイナだから、働けるし、デザインできる。
$satou = new Designer("佐藤");
$satou->work();
$satou->design();

// 山田さんはエンジニアだから、働けるし、プログラムできる。
$yamada = new Engineer("山田");
$yamada->work(); // ただし休まないと働けないけどね...
$yamada->program();

// 部署を追加する。
$yamada->setDepartment("開発部", 5);
echo "部署：" . $yamada->getDepartment()->getName() . "\n";
echo "オフィス：" . $yamada->getDepartment()->getFloor() . "階\n";

// トレイトを使って共通でできることを増やす
// エンジニアだから、CSSも書ける。
$yamada->codingCss();
// デザイナだから、CSSも書ける。
$satou->codingCss();

/**
 * DRY. Don't repeat yourself.
 * 同じことを二度やるな
 * - コードをコピペしない
 * - 継承関係やトレイトを上手く使って、なるべく二回書かないようにする。
 * - オブジェクト指向で用意されている技術は、全部かんたんに書くためのもの。
 * - かんたんに書くとは、社員->働く() のように、分かりやすく書くこと。
 * - かんたんに書くとは、コピペせずに、変更箇所をできるだけ少なくすること。
 * - かんたんに書くとは、かんたんに読めるようにすること。
 */
