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
            text-decoration: none
        }

        .list li a {
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none
        }

        .list li a:hover {
            color: rgb(148, 12, 16);
        }

        .list li img {
            width: 40px;
            height: 40px;
            margin: auto 8px;
            border-radius: 50%;
        }

        .head {
            background-color: rgb(148, 12, 16);
            align-items: center;
            display: flex;
            height: 100px;
        }


        .content {
            width: 100%;
            margin: 10px 0;
            height: calc(100vh - 400px);
            display: flex;
        }

        .slogan {
            width: 30%;
            background-color: rgb(194, 60, 69);
            padding: 20px;
            display: flex;
            flex-direction: column;
            margin-right: 10px;
        }

        .slogan span {
            color: yellow;
        }

        .link {
            background-color: rgb(74, 74, 74);
            display: flex;
            height: 120px;
            text-align: center;
        }

        .link > div {
            align-items: center;
            width: 50%;
        }

        .swiper-container {
            width: 68%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;

            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .swiper-slide img {
            width: 98%;
            height: 100%;
        }
    </style>

@endsection

@section('content')
    <div class="slogan">
        <div>
            <p><span>创建目标：</span>建一流高水平专业教师团队</p>
            <p>&emsp;&emsp;&emsp;&emsp;&emsp;育一流高水平金融工匠人才</p>
        </div>
        <div>
            <p><span>创建口号：</span>展巾幅教师风采</p>
            <p><span>&emsp;&emsp;&emsp;&emsp;&emsp;</span>创一流双高品牌</p>
        </div>
        <div>
            <p><span> 创建标准：</span>爱国守法 修身立德</p>
            <p><span>&emsp;&emsp;&emsp;&emsp;&emsp;</span> 敬业爱岗 潜心育人</p>
        </div>
        <div>
            <p><span> 工作承诺：</span> 做学生欢迎之师</p>
            <p><span>&emsp;&emsp;&emsp;&emsp;&emsp;</span> 育时代有用之才</p>
        </div>
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="./rotationPic1.jpg"/></div>
            <div class="swiper-slide"><img src="./rotationPic1.jpg"/></div>
            <div class="swiper-slide"><img src="./rotationPic1.jpeg"/></div>
            <div class="swiper-slide"><img src="./rotationPic1.jpeg"/></div>
            <div class="swiper-slide"><img src="./rotationPic1.jpg"/></div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
@endsection


@section('link')
    <ul class="list">
        <li>友情链接：</li>
        <li><a href='http://www.women.org.cn' target="_self"><img src="/assets/img/country.jpg"/>中华全国妇女联合会</a></li>
        <li><a href='http://www.zjswomen.org.cn' target="_self"><img src="/assets/img/province.jpg"/>浙江省妇女联合会</a></li>
        <li><a href='https://www.hzwomen.org.cn' target="_self"><img src="/assets/img/city.jpg"/>杭州市妇女联合会</a></li>
        <li><a href='http://www.zjedu.gov.cn' target="_self"><img src="/assets/img/teach.png" style="
      border-radius: 0%;"/>浙江省教育厅</a></li>
    </ul>
@endsection
