<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/style.php"; ?>
    <title>Document</title>
</head>

<body class="container">
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/header.php"; ?>
    <main>
        <!-- 매인 베너 -->
        <section class="container section">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/assets/banners/banner_01.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/banners/banner_02.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/assets/banners/banner_03.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- 최근 진행한 프로젝트 -->
        <section class="container section">
            <div class="row">
                <h2>최근 진행한 프로젝트</h2>
            </div>
            <div class="row">
                <?php for ($i=0; $i < 4 ; $i++) { ?>
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="/assets/images.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="fw-bold mb-1">제목이 들어갈 자리</p>
                            <p class="fw-normal mb-1">한줄 소개가 들어갈 자리</p>
                            <p class="fw-normal mb-1">스택이 들어갈 자리</p>
                            <p class="fw-lighter mb-1">날짜가 들어갈 자리</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
        <!-- 최근 달린 리뷰(댓글 등) -->
        <section class="container section">
            <div class="row">
                <h2>최근 달린 리뷰</h2>
            </div>
            <div class="row">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">제목이 들어갈 자리</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">댓글이 뭐라 달렸을까용</p>
                    </a>
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">제목이 들어갈 자리</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">댓글이 뭐라 달렸을까용</p>
                    </a>
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">제목이 들어갈 자리</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">댓글이 뭐라 달렸을까용</p>
                    </a>
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">제목이 들어갈 자리</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">댓글이 뭐라 달렸을까용</p>
                    </a>
                    <a class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">제목이 들어갈 자리</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">댓글이 뭐라 달렸을까용</p>
                    </a>
                </div>
            </div>
        </section>
        <!-- 프로필 정보 -->
        <section class="container section">
            <div class="row">
                <h2>프로필 정보</h2>
            </div>
            <div class="row">
                <div class="col-4">
                    <img src="/assets/profile.jpg" class="flex-shrink-0 me-3 img-thumbnail rounded" alt="프로필" />
                </div>
                <div class="col-8">
                    <h5 class="mt-0">Hello. My name is Kyungseo Park</h5>
                    <script src="https://gist.github.com/Kyungseo-Park/62d1ceea21d262569a46b8e2cdbd0c18.js"></script>
                    <a href="https://github.com/kyungseo-park" target="_blank">깃허브 보러가기</a>
                </div>
            </div>
            </div>
        </section>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>