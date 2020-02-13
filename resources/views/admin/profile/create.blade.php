<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyNews</title>
    </head>
    <body>
        <h1>Myニュース作成画面</h1>
    </body>
</html>


//4. 【応用】 プロフィール作成画面用に、resources/views/admin/profile/create.blade.php ファイルを作成し、3. で作成した profile.blade.phpファイルを読み込み、
//また プロフィールのページであることがわかるように titleとcontentを編集しましょう。（ヒント: resources/views/admin/news/create.blade.php を参考にします。）


{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- profile.blade.phpの@yield('title')に'課題11'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- profile.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>課題11</h2>
            </div>
        </div>
    </div>
@endsection