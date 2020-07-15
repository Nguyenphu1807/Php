<!DOCTYPE html>
<html>
<head>
    <title>
        Be Right back
    </title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet" type="text/css">

    <style>
        html,body{
            height: 100%;
        }

        body{
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content{
            text-align: center;
            display: inline-block;
        }

        .title{
            font-size: 72px;
            margin-bottom: 40px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="title">
            Be right back .
        </div>
        @if(count($errors)>0)

            <div class="alert alert-danger">
                <strong>Lỗi</strong>
                <br><br>
                <ul>
                    @foreach($erorrs->all() as $error)
                        <li>({$error})</li>
                    @endforeach
                </ul>
            </div>
            @endif
    </div>
</div>
</body>
</html>
