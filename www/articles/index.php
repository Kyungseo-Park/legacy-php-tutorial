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
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="content-header">
                        <img class="card-img-top" src="/assets/images.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <p class="fw-bold mb-1">제목이 들어갈 자리</p>
                            <p class="fw-normal mb-1">한줄 소개가 들어갈 자리</p>
                            <p class="fw-normal mb-1">스택이 들어갈 자리</p>
                            <p class="fw-lighter mb-1">날짜가 들어갈 자리</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="content-body">
                        <?php 
                        for ($i=0; $i < 3; $i++) {  ?>
                        <img src="/assets/images.jpeg" alt="">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="comment-header">
                        <!-- 로그인한 사용자만 댓글 작성이 가능 -->
                        <form id="form_comment">
                            <div class="form-group">
                                <label for="comment">댓글</label>
                                <textarea class="form-control my-3" id="comment" rows="3"></textarea>
                                <div class="text-end">
                                    <input class="btn btn-primary" type="button"
                                        onclick="alert('로그인 해야함'); return false;" value="로그인">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="comment-footer">
                        <?php  for ($i=0; $i < 10; $i++) {  ?>
                        <div class="d-flex text-muted pt-3">
                            <img class="bd-placeholder-img flex-shrink-0 me-2 rounded"
                                src="https://avatars.githubusercontent.com/u/45850400?v=4" alt="" width="100">
                            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                <div class="d-flex justify-content-between">
                                    <strong class="text-gray-dark">이름</strong>
                                    <!-- 댓글달기 Start -->
                                    <a data-bs-toggle="modal" data-bs-target="#exampleModal_<?= $i ?>">답글</a>
                                    <div class="modal fade" id="exampleModal_<?= $i ?>" tabindex="-1"
                                        aria-labelledby="exampleModal_<?= $i ?>Label" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <form id="form_reply">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModal_<?= $i ?>Label">댓글 달기
                                                        </h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <textarea name="" id="" rows="3"
                                                            class="form-control my-3"></textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">저장</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 댓글달기 End -->
                                </div>
                                <span class="d-block">@kkyungvelyy</span>
                                <p class="pt-2">kkyungvelyy</p>
                            </div>
                        </div>
                        <!-- Reply 달기 -->
                        <div class="d-flex text-muted pt-3" style="padding-left: 100px;">
                            <img class="bd-placeholder-img flex-shrink-0 me-2 rounded"
                                src="https://avatars.githubusercontent.com/u/45850400?v=4" width="100">
                            <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                                <div class="d-flex justify-content-between">
                                    <strong class="text-gray-dark">이름</strong>
                                </div>
                                <span class="d-block">@kkyungvelyy</span>
                                <p class="pt-2">kkyungvelyy</p>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include "$_SERVER[DOCUMENT_ROOT]/include/footer.php"; ?>
</body>

</html>