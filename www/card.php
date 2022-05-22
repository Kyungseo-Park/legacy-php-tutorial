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
    <?php 
        $app_url = '/card.php';
        $total = 108;
        $per_page = 15;
        $first_page = 1;
        $last_page = ceil($total / $per_page);
        $start_post = $_GET['page'] ? $_GET['page'] * $per_page - 14 : 1;
        $end_post = $start_post + $per_page - 1;
        if ($end_post >= $total) {
            $end_post = $total;
        }
        $current_page = $_GET['page'] ? $_GET['page'] : $first_page;
        $first_page_url = "$app_url?page=$first_page";
        $last_page_url = "$app_url?page=$last_page";
    ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <img src="/assets/bn.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-start">
                <?php for ($i = $start_post; $i <= $end_post  ; $i++) { ?>
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
                    <?php if ($first_page == $current_page) { ?>
                        <!-- 첫 페이지인 경우 disabled -->
                        <li class="page-item disabled">
                            <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                    <?php } else { ?>
                        <li class="page-item">
                            <a class="page-link" href="<?= $first_page_url ?>" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                    <?php } ?>
                    <?php for ($i = 1; $i <= $last_page ; $i++) {  ?>
                        <?php
                            // 앞에 3개이상, 뒤에 5개 이상 있어야 함
                        ?> 
                        <?php if ($i == $current_page ) { ?>
                            <li class="page-item active">
                                <a href=<?= "$app_url?page=$i" ?> class="page-link"><?= $i ?></a>
                            </li>
                        <?php
                            // 앞에 5개 이상, 뒤에 3개 이하
                        ?> 
                        <?php } else { ?>
                            <li class="page-item">
                                <a href=<?= "$app_url?page=$i" ?> class="page-link"><?= $i ?></a>
                            </li>
                        <?php } ?>
                    <?php } ?> 
                    <?php  if ($last_page == $current_page) { ?> 
                        <!-- 마지막 페이지인 경우 disabled -->
                        <li class="page-item disabled">
                            <a class="page-link">Next</a>
                        </li>
                    <?php } else { ?>
                        <li class="page-item">
                            <a class="page-link" href="<?= $last_page_url ?>" tabindex="-1" aria-disabled="true">Next</a>
                        </li>
                    <?php } ?>
                    </ul>
                </nav>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>