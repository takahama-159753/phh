<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}

//【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
   
   //3 【応用】 前々章でAdmin/ProfileControllerのadd Action, edit Action に次のように記述しました。 
      public function add()
  {
      return view('admin.profile.create');
  }
  public function edit()
  {
      return view('admin.profile.edit');
  }
  
  
 //【応用】 3. の答えを実際に作成してみましょう。また、作成したbladeファイルにhtmlで記述して装飾してみましょう。
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta http=equiv="X-UA-Compatible" "content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <title>課題</title>
    </head>
    <body>
     <h1>課題10</h1>
    </body>
</html>