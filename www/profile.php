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
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div class="card card-style1 border-0">
                                <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                    <div class="row align-items-center text-center">
                                        <div class="col-lg-6 mb-4 mb-lg-0">
                                            <img src="https://avatars.githubusercontent.com/u/45850400?v=4" style="border-radius: 100px; ">
                                        </div>
                                        <div class="col-lg-6 px-xl-10" style="text-align: end;">
                                            <div
                                                class="d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                                <h3 class="h2 text-black mb-2">Kyungseo Park</h3>
                                            </div>
                                            <ul class="list-unstyled mb-1-9">
                                                <li class="mb-2 mb-xl-3 display-28">
                                                    <span class="display-26 text-secondary me-2 font-weight-600">Position:</span>
                                                    Backend Engineer
                                                </li>
                                                <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> <?= date('Y') - 2018 ?> Years</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                                    troublesome.dev@mail.com</li>
                                                <li class="mb-2 mb-xl-3 display-28"><span
                                                        class="display-26 text-secondary me-2 font-weight-600">Website:</span>
                                                    kkyungvelyy.com</li>
                                            </ul>
                                            <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                                <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                                <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                                <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                                <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4 mb-sm-5">
                            <div>
                                <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                                <p>
                                    자기소개 1
                                </p>
                                <p class="mb-0">
                                    자기소개 2
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12 mb-4 mb-sm-5">
                                    <div class="mb-4 mb-sm-5">
                                        <span class="section-title text-primary mb-3 mb-sm-4">Skill</span>
                                        <div class="progress-text">
                                            <div class="row">
                                                <div class="col-6">PHP</div>
                                                <div class="col-6 text-end">80%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                                style="width:80%" aria-valuemax="100" aria-valuemin="0"
                                                aria-valuenow="10" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row">
                                                <div class="col-6">React</div>
                                                <div class="col-6 text-end">90%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                                style="width:90%" aria-valuemax="100" aria-valuemin="0"
                                                aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row">
                                                <div class="col-6">Python</div>
                                                <div class="col-6 text-end">50%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium mb-3" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                                style="width:50%" aria-valuemax="100" aria-valuemin="0"
                                                aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                        <div class="progress-text">
                                            <div class="row">
                                                <div class="col-6">Node.js</div>
                                                <div class="col-6 text-end">60%</div>
                                            </div>
                                        </div>
                                        <div class="custom-progress progress progress-medium" style="height: 4px;">
                                            <div class="animated custom-bar progress-bar slideInLeft bg-secondary"
                                                style="width:60%" aria-valuemax="100" aria-valuemin="0"
                                                aria-valuenow="70" role="progressbar"></div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="section-title text-primary mb-3 mb-sm-4">Education</span>
                                        <p>
                                            하나
                                        </p>
                                        <p class="mb-1-9">
                                            둘
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>