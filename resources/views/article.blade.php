@extends('layout')


@section('style')
    <style>
        * {
            margin: 0;
            padding: 0;
            color: white;
        }

        body {
            margin: 10px 20px;
            font-size: large;
        }

        .pic {
            width: 80px;
            height: 80px;
            padding: 10px 20px;
        }

        p {
            margin: 18px auto;
        }

        .list {
            list-style: none;
            display: flex;
            background-color: rgb(223, 213, 174);
            margin: 10px 0px;
            padding: 0px 20px;
            height: 60px;
            align-items: center;
        }

        .list li {
            color: #000;
            width: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 16px;
        }

        .head {
            background-color: rgb(148, 12, 16);
            align-items: center;
            display: flex;
            height: 100px;
        }

        /* .head img {
          border-radius: 50%;
        } */

        .content {
            width: 100%;
            margin: 10px 0;
            height: calc(100vh - 340px);
            display: flex;
            color: #000;
        }

        .project {
            width: 30%;
            padding: 20px;
            border-right: solid 2px rgb(223, 213, 174);
        }

        .project div {
            display: flex;
            flex-direction: column;
            height: calc(100% - 30px);
            overflow: auto;
        }

        .content p,
        a {
            color: #000;
        }

        .detail {
            width: 70%;
            padding: 20px;
        }

        .detail>p {
            border-bottom: solid 2px rgb(148, 12, 16);
            padding-bottom: 10px;
        }

        .detail>div {
            height: calc(100% - 60px);
            overflow: auto;
        }

        .link {
            background-color: rgb(74, 74, 74);
            display: flex;
            height: 120px;
            text-align: center;
        }

        .link>div {
            align-items: center;
            width: 50%;
        }
    </style>

@endsection


@section('content')
    <div class="project">
        <p>新闻列表</p>
        @if($list->isNotEmpty())
            <div>
                @foreach($list as $item)
                    <p><a href="{{url('/p', ['id' => $item->id])}}">{{$item->title}}</p>
                @endforeach
            </div>
        @else
            <div>
                <p style="color: black">暂无内容~</p>
            </div>
        @endif
    </div>
    <div class="detail">
        @if($article)
            <p>{{$article->title}}</p>
            <div>
                {!! $article->content !!}
            </div>
        @else
            <div style="color: black">
                暂无内容~
            </div>
        @endif
    </div>
@endsection
