# oop-sample

### オブジェクト指向プログラミングの基本要素
- プロパティの可視性の変更, getter/setter/accessor
- メソッドの可視性の変更
- カプセル化
- インターフェースの追加
- 社員に所属部署を加える
- メソッドのオーバーライド
- トレイトを使う

### カプセル化とは？
- クラスを使う側に不必要なものを見せないようにする。
- 出来てはいけないことを出来ないようにする。
- 出来ていいことだけ出来るようにする。
- つまり、使いやすくする

### 継承とは？
- 親クラスに書いたことを丸ごと使いまわしたい。
- 子クラスで拡張したい。
- 子クラスで親クラスの一部を上書きしたい(オーバーライド)
- 書くのを一回で済ませたい。

### インターフェースとは？
- ペットボトルの溝のようなもの。
- 溝が同じだから、ペットボトルの蓋はコカコーラからペプシに付け替えられる。
- 製造業でいうところの規格のようなもの。
- 規格(インターフェース)が合っていれば、付け替え可能。
- インターフェースをimplementsしたら、実装を強制される。
- つまり、I/Fをimplementsしていると、I/Fを持っていることが保証される。
- だから付け替えられる。

### DRY. Don't repeat yourself. 同じことを二度やるな.
- コードをコピペしない
- 継承関係やトレイトを上手く使って、なるべく二回書かないようにする。
- オブジェクト指向で用意されている技術は、全部かんたんに書くためのもの。
- かんたんに書くとは、社員->働く() のように、分かりやすく書くこと。
- かんたんに書くとは、コピペせずに、変更箇所をできるだけ少なくすること。
- かんたんに書くとは、かんたんに読めるようにすること。


