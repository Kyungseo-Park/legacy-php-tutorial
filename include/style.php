<link rel="stylesheet" href="/css/index.css?v=<?php time() ?>" />
<link rel="stylesheet" href="/css/bootstrap.min.css" />
<link rel="stylesheet" href="/css/font-awesome.css" />

<style>
    .pagination {
        padding-top: 30px;
    }

    .card-item {
        padding: 10px;
    }

    .content-header {
        display: flex;

    }

    .content-header>img {
        width: 500px;
        padding: 1rem 1rem;
    }

    .content-body {
        text-align: center;
    }

    .content-body>img {
        width: 800px;
        padding: 10px;
    }

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