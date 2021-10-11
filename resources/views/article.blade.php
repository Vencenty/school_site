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
        <p>项目概况</p>
        <div>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
            <p>展巾烟教师风采 创一流双高品牌</p>
        </div>
    </div>
    <div class="detail">
        <p>展巾烟教师风采 创一流双高品牌</p>

        <div>
            <p>金融服务与管理专业简介</p>
            <p>
                金融服务与管理专业是浙江金融职业学院开设时间最早，举办历史最长，行业、社会影响最大的专业。一直以来，金融服务与管理专业教研室以“建一流高水平专业教师团队，育一流高水平金融工匠人才”为目标，全体教师坚持修身立德、潜心育人，成为助力学校、学院发展和专业建设的中坚力量，专业内涵建设迈上新台阶，专业教师团队结出新硕果，专业人才培养取得新成效。
                金融服务与管理专业先后建设成为首批国家示范院校重点支持建设专业，首批中国特色高水平学校金融管理高水平专业群核心专业，高等职业教育国家级优质校骨干专业，教育部金融专业国家级教学资源库项目建设主持单位，教育部金融专业国家教学标准组长单位，浙江省“十二五”
                、“十三五”省级优势专业。
                教研室教师主持建设3门国家精品资源共享课程，获国家级教学成果奖3项、国家社科基金项目3项、省级示范实训基地项目2项，出版系列国家规划教材、省级新形态教材，入选浙江省“
            </p>
            <p>
                金融服务与管理专业是浙江金融职业学院开设时间最早，举办历史最长，行业、社会影响最大的专业。一直以来，金融服务与管理专业教研室以“建一流高水平专业教师团队，育一流高水平金融工匠人才”为目标，全体教师坚持修身立德、潜心育人，成为助力学校、学院发展和专业建设的中坚力量，专业内涵建设迈上新台阶，专业教师团队结出新硕果，专业人才培养取得新成效。
                金融服务与管理专业先后建设成为首批国家示范院校重点支持建设专业，首批中国特色高水平学校金融管理高水平专业群核心专业，高等职业教育国家级优质校骨干专业，教育部金融专业国家级教学资源库项目建设主持单位，教育部金融专业国家教学标准组长单位，浙江省“十二五”
                、“十三五”省级优势专业。
                教研室教师主持建设3门国家精品资源共享课程，获国家级教学成果奖3项、国家社科基金项目3项、省级示范实训基地项目2项，出版系列国家规划教材、省级新形态教材，入选浙江省“
            </p>
            <p>
                金融服务与管理专业是浙江金融职业学院开设时间最早，举办历史最长，行业、社会影响最大的专业。一直以来，金融服务与管理专业教研室以“建一流高水平专业教师团队，育一流高水平金融工匠人才”为目标，全体教师坚持修身立德、潜心育人，成为助力学校、学院发展和专业建设的中坚力量，专业内涵建设迈上新台阶，专业教师团队结出新硕果，专业人才培养取得新成效。
                金融服务与管理专业先后建设成为首批国家示范院校重点支持建设专业，首批中国特色高水平学校金融管理高水平专业群核心专业，高等职业教育国家级优质校骨干专业，教育部金融专业国家级教学资源库项目建设主持单位，教育部金融专业国家教学标准组长单位，浙江省“十二五”
                、“十三五”省级优势专业。
                教研室教师主持建设3门国家精品资源共享课程，获国家级教学成果奖3项、国家社科基金项目3项、省级示范实训基地项目2项，出版系列国家规划教材、省级新形态教材，入选浙江省“
            </p>
        </div>
    </div>
@endsection
