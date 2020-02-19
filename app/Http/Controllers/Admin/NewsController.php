<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Controllerの役割について、説明してください。
//Controllerは、ViewからのアクションをもとにModelにアクセスしたりするなど両者を取り持っています。

//ControllerとRoutingの役割について、説明してください。

//Controllerは、ViewからのアクションをもとにModelにアクセスしたりするなど両者を取り持っています。
//RoutingはURLとコントローラーのアクションの対応ルールのことです。

//【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。
// 作成済み

//応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。
//追加済み

class NewsController extends Controller
{
  public function add()
  {
      return view('admin.news.create');
  }

  // 以下を追記
  public function create(Request $request)
  {
      // admin/news/createにリダイレクトする
      return redirect('admin/news/create');
  }  
}




namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
​
// 以下を追記することでProfile Modelが扱えるようになる
use App\Profile;
​
class NewsController extends Controller
{
  public function add()
  {
      return view('admin.news.create');
  }
​
　public function create(Request $request)
  {
      

      // 以下を追記
      // Varidationを行う
      $this->validate($request, Profile::$rules);
​
      $news = new News;
      $form = $request->all();
​
      // フォームから画像が送信されてきたら、保存して、$news->image_path に画像のパスを保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
      } else {
          $news->image_path = null;
      }
​
      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);
​
      // データベースに保存する
      $news->fill($form);
      $news->save();
​
      return redirect('admin/news/create');
  }
}
