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
    <main>
        <div>

        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 16 ; $i++) { ?>
                            <tr>
                                <th scope="row"><?= $i ?></th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-8">
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
            </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>