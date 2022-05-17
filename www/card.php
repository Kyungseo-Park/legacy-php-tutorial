<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/style.php"; ?>
    <title>카드 디자인</title>
</head>

<body>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/header.php"; ?>
    <main>
        <div class="container">
            <div class="row">
                <img src="/assets/bn.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <?php for ($i=0; $i < 16 ; $i++) { ?>
                <div class="col-lg-3 col-md-6 col-12 card-item">
                    <a href="/articles/index.php?id=<?= $i ?>">
                        <div class="card">
                            <img class="card-img-top" src="/assets/images.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <p class="fw-bold mb-1">제목이 들어갈 자리</p>
                                <p class="fw-normal mb-1">한줄 소개가 들어갈 자리</p>
                                <p class="fw-normal mb-1">스택이 들어갈 자리</p>
                                <p class="fw-lighter mb-1">날짜가 들어갈 자리</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <!-- 첫 페이지인 경우 disabled -->
                        <li class="page-item disabled">
                            <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <!-- 마지막 페이지인 경우 disabled -->
                        <li class="page-item">
                            <a class="page-link">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>