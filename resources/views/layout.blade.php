<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./dist/css/swiper.min.css" />
    @yield('style')
</head>

<body>
<h1 class="head">
    <img src="./img/logo.jpg" class="pic" />金融服务与管理教研室争创巾帼文明岗
</h1>
<ul class="list">
    <li>首页</li>
    @foreach($categories as $category)
        <li><a href="{{url('/article', ['id' => $category->id])}}">{{$category->title}}</a></li>
    @endforeach
</ul>

<div class="content">
    @yield('content')
</div>

<ul class="list">
    <li>友情链接：</li>
    <li><a href='http://www.women.org.cn' target="_self"><img src="./img/country.jpg" />中华全国妇女联合会</a></li>
    <li><a href='http://www.zjswomen.org.cn' target="_self"><img src="./img/province.jpg" />浙江省妇女联合会</a></li>
    <li><a href='https://www.hzwomen.org.cn' target="_self"><img src="./img/city.jpg" />杭州市妇女联合会</a></li>
    <li><a href='http://www.zjedu.gov.cn' target="_self"><img src="./img/teach.png" style="
      border-radius: 0%;" />浙江省教育厅</a></li>
</ul>

<div class="link">
    <div>
        <p>
            联系我们： <span>电话：0571-86739107</span>&nbsp;&nbsp;&nbsp;
            <span>邮编：310018</span>
        </p>
        <p>&emsp;&emsp;&emsp;&emsp;&emsp;地址：浙江省杭州市钱塘区学源街118号</p>
    </div>
    <div style="justify-content: center; display: flex">
        <div>
            <p>金融服务与管理教研室</p>
            <p>“争创巾帼文明岗“微信公众号</p>
        </div>
        <img src="./img/code.jpg" class="pic" />
        <div>
            <p>扫一扫</p>
            <p>关注我们</p>
        </div>
    </div>
</div>
<script src="./dist/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
        slidesPerView: 3,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1500,
            pauseOnMounseEnter: true,
        },
    });
</script>
</body>

</html>
