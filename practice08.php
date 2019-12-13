Controllerは何をしているか
Controllerは、Laravelの中枢的な役割を担っている。





MVCフレームワーク
Routingからユーザーからのアクセスの橋渡しをされると、
Modelの連携をとってデータベースからデータを取得したり、場合によってはデータを保存したりする。
その後、Modelから取得したデータを基にViewと連携してユーザーのブラウザに表示するデータを生成し、
Viewにデータを送信するように指示をだす。
簡潔に言えば「データをやり取りしたり出力するデータを生成するところ」といったところだ。





この章と次章で扱うController
この章で扱うControllerは、図の赤く括られている部分のこと。





MVCフレームワーク
しばらくはModelを扱わずに、ControllerとViewのみを使用してコンテンツを作成していく。
なぜModelを扱わずにコンテンツが作成できるのかと言うと、データベースを扱わない部分に関してはModelを使う必要がないから。
例えば、株価を公開しているサイトなどは、秒単位で株価が更新されていく。
そのため、都度都度データベースにアクセスして株価を取得する必要がある。
しかし、ただ「私のニュースサイトへようこそ！」と表示するだけのページだったら、
データベースに取得しなくてもページを表示することができる。
しばらくは後者のようなページを作成していく。





artisan でコントローラを生成
artisan とは
前章で、Laravelを公開するのに「artisan」というファイルをphpコマンドで実行した。
artisanは「職人」という意味の単語で、Laravelに関する操作の多くはartisanを利用することで実現できる。
今回はartisanを使ってControllerを作成する。

Controllerを作成するには次のコマンドを実行。

$ cd ~/environment/mynews
# NewsControllerというControllerを作成する
$ php artisan make:controller Admin/NewsController
Controllerが作成されたか、確認する。





■コラム

コントローラーの作成を行っていく。
コントローラーが、Admin/NewsControllerになっていることに注目する。
今回作成するアプリケーションは、ブログ投稿サイトです。
ブログには、閲覧するだけのユーザーと、ブログを投稿するユーザーの２通りのパターンがある。
今回のアプリケーションでは、投稿するユーザーをAdminという名前で作成していく。
NewsControllerはブログを投稿したり、編集・削除したりするためのコントローラーとして使用していく。
ここでは難しいことは考えずに、「ブログを投稿するユーザー（Admin）の処理を作って行くんだな」くらいの認識で大丈夫。

Cloud9の左側のnynewsフォルダをクリックし、たくさんのフォルダが展開され以下のようにフォルダを辿っていき、NewsController.phpがあるかどうか確認しましょう。

mynews->app->Http->Controllers->Admin->NewsController.php

あったらクリック。

after click

Controllerの雛形が app/Http/Controllers/Admin/NewsController.php として生成された。

<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
}
ただし、作成されたばかりのControllerはなんの機能も持っていない。

ここから、自分が実装したい機能を追加していくことになる。





Actionを追加
ActionとはLaravel特有の言葉で、Controllerが持つ機能のことを指す。
具体的には、Controller内に実装した関数(厳密にはメソッドという) のことを指す。
実際に一つ、Actionを追加してみる。
app/Http/Controllers/Admin/NewsController.phpにadd関数を追記する。
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
  // 以下を追記
  public function add()
  {
      return view('admin.news.create');
  }

}
これで、NewsControllerに、addというActionを実装することができた。
しかし残念ながらまだこのActionは使用されない。
理由としては、Routingの設定をしないとこのActionを使われることが無いから。





ActionとRoutingの関係
ここで少し、ActionとRoutingの関係。
ControllerとRoutingについては前にも簡単に説明したが、次のようになる。
CR
ユーザーから来たアクセスをRoutingが受け取り、Controllerに渡している。
実のところ、この説明は少々大雑把な説明になっている。
もう少しフォーカスして見てみると、次のような受け渡しになっている。
CRmore
Routingは来たアクセスをControllerに渡しているのではなく、厳密にはControllerの中のActionに渡している。
例えばニュースサイトであれば、
ユーザーが新着記事のページにアクセスしたらNewsControllerの中の新着記事を表示するように書かれているActionに割り当てらる。
また仮にあなたのプロフィールを公開しているProfileControllerがあったとして、
ユーザーがあなたのプロフィールにアクセスが来たら、ProfileControllerの中のプロフィールを公開するActionに渡される。
つまり、コンテンツを作りたい場合はControllerにActionを作り、RoutingでそのActionに割り当ててあげればよい。
次章で、実際にRoutingでadd Actionに割り当ててみる。
