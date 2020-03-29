<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
<h4 class="text-center">学生管理</h4>
    <div class="" style="margin-bottom: 10px;">
        <button type="button" class="btn btn-sm btn-success">追加</button>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">名前</th>
            <th scope="col">年齢</th>
            <th scope="col">住所</th>
            <th scope="col">電話番号</th>
            <th scope="col">性別</th>
            <th scope="col">#</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td style="width: 12%">
                <button type="button" class="btn btn-sm btn-primary">編集</button>
                <button type="button" class="btn btn-sm btn-danger">削除</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td style="width: 12%">
                <button type="button" class="btn btn-sm btn-primary">編集</button>
                <button type="button" class="btn btn-sm btn-danger">削除</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td style="width: 12%">
                <button type="button" class="btn btn-sm btn-primary">編集</button>
                <button type="button" class="btn btn-sm btn-danger">削除</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td style="width: 12%">
                <button type="button" class="btn btn-sm btn-primary">編集</button>
                <button type="button" class="btn btn-sm btn-danger">削除</button>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>@fat</td>
            <td>@fat</td>
            <td style="width: 12%">
                <button type="button" class="btn btn-sm btn-primary">編集</button>
                <button type="button" class="btn btn-sm btn-danger">削除</button>
            </td>
        </tr>
        </tbody>
    </table>
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <span class="page-link">Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>
</body>
</html>
