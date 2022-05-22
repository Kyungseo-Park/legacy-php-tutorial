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
    <?php 
        $result = range(1, 208);
        $page = $_GET['page'] ? $_GET['page'] : 1;
        $countList = 12;
        $countPage = 10;
        $totalCount = count($result); 
        $totalPage = $totalCount / $countList;

        if ($totalCount % $countList > 0) {
            $totalPage ++;
        }
        if ($totalPage < $page) {
            $page = $totalPage;
        }
        
        $appUrl = '/table.php';
        
        $startPage = ceil($page / $countPage) * 10 + 1 - $countPage;
        $endPage = ($startPage + $countPage - 1);
        if($endPage > $totalPage) {
            $endPage = $totalPage;
        }

        $prevPage = $page - 1;
        $nextPage = $page + 1;

        $startPost = $_GET['page'] ? $_GET['page'] * $countList - $countList + 1 : 1;
        $endPost = $startPost + $countList - 1;

        if ($endPost >= $totalCount) {
            $endPost = $totalCount;
        }
    ?>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <img src="/assets/bn.jpg" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">작성자</th>
                                <th scope="col">제목</th>
                                <th scope="col">스택</th>
                                <th scope="col">작성일</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = $startPost; $i <= $endPost  ; $i++) { ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>
                                    작성자작성자
                                </td>
                                <td>
                                    <a href="/articles/index.php?id=<?= $i ?>">제목제목제목제목제목제목제목제목제목제목제목</a>
                                </td>
                                <td>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Python</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Java</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Amazon
                                        S3</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Kafka</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Amazon
                                        DynamoDB</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Apache
                                        Spark</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Pandas</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Airflow</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">Amazon
                                        EMR</span>
                                    <span
                                        style="line-height: 2.0; text-overflow: ellipsis; white-space: nowrap; padding: 5px; border-radius: 15px; margin: 5px; background-color: antiquewhite;">DataGrip</span>
                                </td>
                                <td>2022. 05. 14</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
                            <?php if ($page == 1) { ?>
                                <!-- 첫 페이지인 경우 disabled -->
                                <li class="page-item disabled">
                                    <a class="page-link" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                            <?php } else { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $appUrl.'?page='.$prevPage ?>" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                            <?php } ?>
                            <!-- 1 ~ 10, 11 ~ 20 형식으로 보여준다. -->
                            <?php for ($i = $startPage; $i <= $endPage ; $i++) {  ?>
                                <?php if ($i == $page ) { ?>
                                    <li class="page-item active">
                                        <a href=<?= "$app_url?page=$i" ?> class="page-link"><?= $i ?></a>
                                    </li>
                                <?php } else { ?>
                                    <li class="page-item">
                                        <a href=<?= "$app_url?page=$i" ?> class="page-link"><?= $i ?></a>
                                    </li>
                                <?php } ?>
                            <?php } ?> 
                            <?php  if ($page == floor($totalPage)) { ?> 
                                <!-- 마지막 페이지인 경우 disabled -->
                                <li class="page-item disabled">
                                    <a class="page-link">Next</a>
                                </li>
                            <?php } else { ?>
                                <li class="page-item">
                                    <a class="page-link" href="<?= $appUrl.'?page='.$nextPage ?>" tabindex="-1" aria-disabled="true">Next</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>