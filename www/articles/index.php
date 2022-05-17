<!DOCTYPE html>
<html lang="kr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/style.php"; ?>
    <title>게시글</title>
</head>

<body>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/header.php"; ?>
    <main>
        <div class="container">
            <div class="content-header">
                <img class="card-img-top" src="/assets/images.jpeg" alt="Card image cap">
                <div class="card-body">
                    <p class="fw-bold mb-1">제목이 들어갈 자리</p>
                    <p class="fw-normal mb-1">한줄 소개가 들어갈 자리</p>
                    <p class="fw-normal mb-1">스택이 들어갈 자리</p>
                    <p class="fw-lighter mb-1">날짜가 들어갈 자리</p>
                </div>
            </div>
            <div class="content-body">
                <?php 
                    for ($i=0; $i < 3; $i++) {  ?>
                    <img src="/assets/images.jpeg" alt="">
                <?php } ?>
            </div>
            <div class="comment">
                <div class="comment-header">
                    <!-- 로그인한 사용자만 댓글 작성이 가능 -->
                    <form action="" method="post">
                        <textarea name="" id=""></textarea>
                        <button></button>
                        <input type="button" onclick="alert('로그인 해야함'); return false;" value="로그인">
                    </form>
                </div>
                <div class="comment-footer">
                    <?php 
                    for ($i=0; $i < 10; $i++) {  ?>
                    <div class="">
                        <img src="" alt="">
                        <span>댓글내용 <?= $i ?></span>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>