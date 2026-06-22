<?php
$user = ss();
$post = db::fetch("select p.*, u.profile, u.id as user_id from posts p inner join users u on p.user_idx = u.idx where p.idx = '$idx'");
$likeCount = db::fetch("select count(*) cnt from likes where post_idx = '$idx'")->cnt;
$comments = db::fetchAll("select c.*, u.id, u.profile from comments c inner join users u on c.user_idx = u.idx where c.post_idx = '$idx' and c.user_idx = '$user->idx' order by c.date desc");
$photos = explode(",", $post->photo);
?>

<main class="page">
  <section class="detail">
    <div class="container detail__wrap">

      <!-- 게시글 영역 (드래그 선택 방지: .article 에 user-select:none) -->
      <article class="article">
        <!-- 작성자: 프로필 사진 + 아이디 + 등록일 -->
        <div class="article__head">
          <img class="article__avatar" src="<?= $post->profile ?>"
            alt="작성자 프로필 사진" title="incheon_flyer">
          <div class="article__meta">
            <div class="id"><?= $post->user_id ?></div>
            <div class="date"><?= $post->date ?></div>
          </div>
        </div>

        <!-- 제목 -->
        <h1 class="article__title"><?= $post->title ?></h1>

        <!-- 내용 -->
        <div class="article__body">
          <?php if (isset($photos)) {
            foreach ($photos as $p) { ?>
              <div class="photo">
                <img oncontextmenu="return false" alt="<?= $p ?>" src="<?= $p ?>">
                <a href="<?= $p ?>" download="<?= substr($p, 13) ?>" class="img-info"><?= substr($p, 13) ?></a>
                <!-- 다운로드: <a href="파일경로" download="파일명">파일명</a> -->
              </div>
          <?php }
          } ?>
          <?= $post->detail ?>
        </div>

        <!-- 좋아요 수 + 좋아요 버튼 -->
        <div class="article__like">
          <button data-idx="<?= $post->idx ?>" class="like-btn post-like-btn <?= db::fetch("select * from likes where post_idx = '$idx' and user_idx = '$user->idx'") ? 'active' : "" ?>" type="button">
            <svg viewBox="0 0 24 24" width="24" height="24">
              <path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z" />
            </svg>
            좋아요 <strong class="post-like-count"><?= $likeCount ?></strong>
          </button>
        </div>
      </article>

      <!-- =========================================================
             게시글 댓글 영역
             - 프로필 사진 + 아이디 + 댓글 내용 + 등록일
             - 등록일 기준 내림차순 정렬
             - 댓글 입력 폼 + 등록 버튼
             ========================================================= -->
      <section class="comments">
        <h2 class="comments__title">댓글 <b><?= count($comments) ?></b></h2>

        <!-- 댓글 입력 폼 + 등록 버튼 -->
        <form method="post" action="/comment" class="comment-form">
          <input type="hidden" name="post_idx" value="<?= $idx ?>">
          <input type="text" name="content" placeholder="따뜻한 댓글을 남겨주세요 :)" aria-label="댓글 입력">
          <button>등록</button>
        </form>

        <!-- 댓글 목록 (등록일 내림차순) -->
        <?php foreach ($comments as $comment) {
          $commentLikeCount = db::fetch("select count(*) cnt from comments_likes where comment_idx = '$comment->idx'")->cnt;
        ?>
          <div class="comment">
            <img class="comment__avatar" src="<?= $comment->profile ?>"
              alt="송도주민 프로필 사진" title="송도주민">
            <div>
              <div class="comment__head">
                <span class="comment__id"><?= $comment->id ?></span>
                <span class="comment__date"><?= $comment->date ?></span>
              </div>
              <div class="comment-content">
                <p class="comment__text"><?= $comment->content ?></p>
                <div class="like-btn comment-like-btn <?= db::fetch("select * from comments_likes where comment_idx = '$comment->idx' and user_idx = '$user->idx'") ? 'active' : "" ?>" data-idx="<?= $comment->idx ?>">
                  <svg viewBox="0 0 24 24" width="24" height="24">
                    <path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z" />
                  </svg>
                  <span class="comment-like-count"><?= $commentLikeCount ?></span>
                </div>
              </div>
            </div>
          <?php } ?>
      </section>

      <!-- 목록으로 -->
      <div style="text-align:center; margin-top:44px;">
        <a href="/board" class="btn btn--ghost">목록으로 돌아가기</a>
      </div>

    </div>
  </section>
</main>

<script src="/js/lib.js"></script>
<script>
  $(".post-like-btn").onclick = async e => {
    const idx = e.target.dataset.idx;

    const res = await fetch("/like", {
      method: "POST",
      body: new URLSearchParams({
        idx
      })
    });
    const data = await res.json();
    $(".post-like-count").textContent = data.count;
    $(".post-like-btn").classList.toggle("active", data.liked);
  }
  $('.comment-like-btn').onclick = async e => {
    const idx = e.currentTarget.dataset.idx;

    const res = await fetch("/commentLike", {
      method: "POST",
      body: new URLSearchParams({
        idx
      })
    });
    const data = await res.json();

    $(".comment-like-count").textContent = data.count;
    $(".comment-like-btn").classList.toggle('active', data.liked);
  }
</script>