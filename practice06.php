pwdコマンド
「print working directory(作業しているディレクトリを表示しなさい)」の略。
pwdコマンドは、現在どのディレクトリにいるかを表示する。
$pwd
/Users/あなたのユーザー名



mkdirコマンド
「make directory(ディレクトリを作成しなさい)」の略。
mkdirコマンドは、ディレクトリを作成するコマンド。
mkdirの後に半角スペースを入れ、作成したいディレクトリ名を入力するとディレクトリが作成できる。
$mkdir workspace



lsコマンド
「list」の略。
lsコマンドは、指定したディレクトリの中に何があるかを表示するコマンド。
特に指定しないと、現在いるディレクトリの中身一覧を表示する。
$ls
●●●　▲▲▲　■■■
・・・・・workspace



cdコマンド
cdコマンドは、現在いるディレクトリから指定したディレクトリに移動するコマンド。
cdは「Change Directory(ディレクトリを変更しなさい)」の略
$ pwd
/Users/あなたのユーザー名
$ cd workspace
$ pwd
/Users/あなたのユーザー名/workspace # <- ディレクトリがworkspaceに移動している。
$ cd
$ pwd
/Users/あなたのユーザー名 # <- ディレクトリ名を指定しないと、ホームディレクトリに移動する



rmコマンド
rmコマンドは、指定したファイルにフォルダを削除するコマンド。
rmは「remove」の略。
ファウルを削除する場合には、rmの後に半角スペースを入れてファイル名を入力する。
ただしディレクトリを削除するときには、rmの後に半角スペースを入れて-rを入力して半角スペースを入れ、ディレクトリを入力する。
$ ls
○○○ △△△ □□□　
・・・・・・・・・・・・ workspace ☆☆☆ 
$ rm -r workspace
$ ls
○○○ △△△ □□□　
・・・・・・・・・・・・ ☆☆☆  # <- workspaceが消えている
rmコマンドの後に「-r」を入力した。
これはコマンドのオプションと呼ばれるもので、-rは「ディレクトリの削除を許可する」オプション。
各コマンドごとにたくさんのオプションがある。
よく使うものに関しては使っていくうちに覚えられるが、あまり使わないものに関しては使う前に確認した方がいい。
そんなときは、コマンドのあとに-h というヘルプオプションをつけることで、そのコマンドの使い方を見ることができまる。
コマンドやオプションはたくさんある。
また、Macで使えるコマンドの多くはLinuxでも使えるため、もしサーバーなどでWebアプリケーションを公開する場合にLinuxを使うときにも役立つ。