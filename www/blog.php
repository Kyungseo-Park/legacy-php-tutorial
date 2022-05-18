<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/style.php"; ?>
    <title>Document</title>
</head>

<body>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/header.php"; ?>
    <style>
        .card {
            background: #fff;
            transition: .5s;
            border: 0;
            margin-bottom: 30px;
            border-radius: .55rem;
            position: relative;
            width: 100%;
            box-shadow: 0 1px 2px 0 rgb(0 0 0 / 10%);
        }

        .card .body {
            color: #444;
            padding: 20px;
            font-weight: 400;
        }

        .card .header {
            color: #444;
            padding: 20px;
            position: relative;
            box-shadow: none;
        }

        .article {
            -webkit-transition: all .4s ease;
            transition: all .4s ease
        }

        .article .body {
            padding: 30px
        }

        .article .img-post {
            position: relative;
            overflow: hidden;
            max-height: 500px;
            margin-bottom: 30px
        }

        .article .img-post>img {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            opacity: 1;
            -webkit-transition: -webkit-transform .4s ease, opacity .4s ease;
            transition: transform .4s ease, opacity .4s ease;
            max-width: 100%;
            filter: none;
            -webkit-filter: grayscale(0);
            -webkit-transform: scale(1.01)
        }

        .article .img-post:hover img {
            -webkit-transform: scale(1.02);
            -ms-transform: scale(1.02);
            transform: scale(1.02);
            opacity: .7;
            filter: gray;
            -webkit-filter: grayscale(1);
            -webkit-transition: all .8s ease-in-out
        }

        .article .img-post:hover .social_share {
            display: block
        }

        .article .footer {
            padding: 0 30px 30px 30px
        }

        .article .footer .actions {
            display: inline-block
        }

        .article .footer .stats {
            cursor: default;
            list-style: none;
            padding: 0;
            display: inline-block;
            float: right;
            margin: 0;
            line-height: 35px
        }

        .article .footer .stats li {
            border-left: solid 1px rgba(160, 160, 160, 0.3);
            display: inline-block;
            font-weight: 400;
            letter-spacing: 0.25em;
            line-height: 1;
            margin: 0 0 0 2em;
            padding: 0 0 0 2em;
            text-transform: uppercase;
            font-size: 13px
        }

        .article .footer .stats li a {
            color: #777
        }

        .article .footer .stats li:first-child {
            border-left: 0;
            margin-left: 0;
            padding-left: 0
        }

        .article h3 {
            font-size: 20px;
            text-transform: uppercase
        }

        .article h3 a {
            color: #242424;
            text-decoration: none
        }

        .article p {
            font-size: 16px;
            line-height: 26px;
            font-weight: 300;
            margin: 0
        }

        .article .blockquote p {
            margin-top: 0 !important
        }

        .article .meta {
            list-style: none;
            padding: 0;
            margin: 0
        }

        .article .meta li {
            display: inline-block;
            margin-right: 15px
        }

        .article .meta li a {
            font-style: italic;
            color: #959595;
            text-decoration: none;
            font-size: 12px
        }

        .article .meta li a i {
            margin-right: 6px;
            font-size: 12px
        }

        .article2 {
            overflow: hidden
        }

        .article2 .content {
            margin-top: 15px;
            margin-bottom: 15px;
            padding-left: 80px;
            position: relative
        }

        .article2 .content .actions_sidebar {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 60px
        }

        .article2 .content .actions_sidebar a {
            display: inline-block;
            width: 100%;
            height: 60px;
            line-height: 60px;
            margin-right: 0;
            text-align: center;
            border-right: 1px solid #e4eaec
        }

        .article2 .content .title {
            font-weight: 100
        }

        .article2 .content .text {
            font-size: 15px
        }

        .right-box .tack-stack-clouds li {
            display: inline-block;
            margin-bottom: 5px
        }

        .right-box .tack-stack-clouds li a {
            display: block;
            border: 1px solid;
            padding: 6px 10px;
            border-radius: 3px
        }

        .right-box .history-plugin {
            overflow: hidden
        }

        .right-box .history-plugin li {
            float: left;
            overflow: hidden;
            border: 1px solid #fff
        }

        .comment-reply li {
            margin-bottom: 15px
        }

        .comment-reply li:last-child {
            margin-bottom: none
        }

        .comment-reply li h5 {
            font-size: 18px
        }

        .comment-reply li p {
            margin-bottom: 0px;
            font-size: 15px;
            color: #777
        }

        .comment-reply .list-inline li {
            display: inline-block;
            margin: 0;
            padding-right: 20px
        }

        .comment-reply .list-inline li a {
            font-size: 13px
        }

        @media (max-width: 640px) {
            .blog-page .left-box .single-comment-box>ul>li {
                padding: 25px 0
            }

            .blog-page .left-box .single-comment-box ul li .icon-box {
                display: inline-block
            }

            .blog-page .left-box .single-comment-box ul li .text-box {
                display: block;
                padding-left: 0;
                margin-top: 10px
            }

            .blog-page .article .footer .stats {
                float: none;
                margin-top: 10px
            }

            .blog-page .article .body,
            .blog-page .article .footer {
                padding: 30px
            }
        }
    </style>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <img src="/assets/bn.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="container mt-3">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                    <div class="card article">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x400"
                                    alt="First slide">
                            </div>
                            <h3><a href="/articles/index.php">Title</a></h3>
                            <p>내용들</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">바로가기</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);" class="fa fa-heart">10000</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">20000</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card article">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x400" alt="">
                            </div>
                            <h3><a href="blog-details.html">Title</a></h3>
                            <p>내용들</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">바로가기</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);" class="fa fa-heart">10000</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">20000</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="card article">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x400" alt="">
                            </div>
                            <h3><a href="blog-details.html">Title</a></h3>
                            <p>내용들</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">바로가기</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);" class="fa fa-heart">10000</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">20000</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card article">
                        <div class="body">
                            <div class="img-post">
                                <img class="d-block img-fluid" src="https://via.placeholder.com/800x400" alt="">
                            </div>
                            <h3><a href="blog-details.html">Title</a></h3>
                            <p>내용들</p>
                        </div>
                        <div class="footer">
                            <div class="actions">
                                <a href="javascript:void(0);" class="btn btn-outline-secondary">바로가기</a>
                            </div>
                            <ul class="stats">
                                <li><a href="javascript:void(0);" class="fa fa-heart">10000</a></li>
                                <li><a href="javascript:void(0);" class="fa fa-comment">20000</a></li>
                            </ul>
                        </div>
                    </div>

                    <ul class="pagination pagination-primary">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="header">
                            <h2>Tack Stack</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled tack-stack-clouds m-b-0">
                                <li><a href="javascript:void(0);">Python</a></li>
                                <li><a href="javascript:void(0);">Java</a></li>
                                <li><a href="javascript:void(0);">Amazon S3</a></li>
                                <li><a href="javascript:void(0);">Kafka</a></li>
                                <li><a href="javascript:void(0);">Amazon DynamoDB</a></li>
                                <li><a href="javascript:void(0);">Apache Spark</a></li>
                                <li><a href="javascript:void(0);">Pandas</a></li>
                                <li><a href="javascript:void(0);">Airflow</a></li>
                                <li><a href="javascript:void(0);">Amazon EMR</a></li>
                                <li><a href="javascript:void(0);">DataGrip</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Popular Posts</h2>
                        </div>
                        <div class="body widget popular-post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="article">
                                        <p class="m-b-0">인기글아아아아아</p>
                                        <span>2022. 05. 19 (수)</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/400x400" alt="Awesome Image">
                                        </div>
                                    </div>
                                    <div class="article">
                                        <p class="m-b-0">인기글아아아아아</p>
                                        <span>2022. 05. 19 (수)</span>
                                        <div class="img-post">
                                            <img src="https://via.placeholder.com/400x400" alt="Awesome Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Histroy</h2>
                        </div>
                        <div class="body widget">
                            <ul class="list-unstyled history-plugin m-b-0">
                                <li>
                                    <img src="https://ghchart.rshah.org/219138/Kyungseo-Park" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>