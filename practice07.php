Laravelのプロジェクトを作成する
まずは、Cloud9のターミナル上で以下のコマンドを入力して、~/environmentに移動する。

$ cd ~/environment
前章でインストールした、composer コマンドでLaravelのプロジェクトを作成sjる。
今回は自分の情報を発信するサイトを作成する、
「mynews」というプロジェクト名で作成。
$ composer create-project --prefer-dist laravel/laravel mynews "5.*"
これだけでプロジェクトが作成。
Laravelのベースとなる機能は構築される。
生成されたファイルを見る。

$ cd ~/environment/mynews
$ ls
app      bootstrap      composer.lock  database      phpunit.xml  readme.md  routes      storage  vendor
artisan  composer.json  config         package.json  public       resources  server.php  tests    webpack.mix.js
たくさんファイルが生成されている。
ですが開発で触るファイルはごく一部、ここではすべてを理解しなくても心配ない。






Laravel の実行
Laravel プロジェクトが正常に作成できたか確認するために、Laravel を起動。
次のコマンドを入力。

php artisan serve --port=8080
これでサーバーの起動は完了。
サーバー上で動いているアプリケーションを開いてみる
Cloud9上部にあるPreviewをクリックし、RunningApplicationを選択
Cloud9に開いたブラウザのURLをコピーして、chromeの別タブで開く。

※RunningApplicationで開いたCloud9のブラウザでも正常に表示されているが、
開いたURLをコピーしてchromeの別タブで開くこと推奨。これは、Cloud9のブラウザは動作が不安定で、予期せぬエラーが起こることがあるため。

!!!!!c9_open_app

new project

Larvel プロジェクトの画面が表示されれば、初期設定は完了。

※次章以降のテキストを読み進めてく上で、

本テキスト中で、「ブラウザでアプリケーションを開く、確認する」等の指示があった場合は、上記「サーバー上で動いているアプリケーションを開いてみましょう」で説明した操作を指す。
慣れるまではこのページを確認していただいて結構だが、この操作は何回も行うので、覚える。

本テキスト中では、RunningApplicationで開いたURL(例、https://hogehoge.cloud9.us-east-2.amazonaws.com/)　を、'/'、もしくは'ドキュメントルート'と表す。
「'/login'にアクセスしてみましょう」などと指示があったときには、RunningApplicationから開いたURLに/loginをつけたもの（例、https://hogehoge.cloud9.us-east-2.amazonaws.com/login）というように認識