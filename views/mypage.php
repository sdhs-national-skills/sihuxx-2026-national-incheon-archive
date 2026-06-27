<?php
$user = ss();
if (!$user) back("로그인 한 회원만 접근 가능한 페이지입니다");
$posts = db::fetchAll("select p.*, count(l.idx) as like_count from posts p left join likes l on p.idx = l.post_idx where p.user_idx = '$user->idx' group by p.idx order by date desc");
$debates = db::fetchAll("select * from debates where user_idx = '$user->idx' order by date desc");
$inquires = db::fetchAll("select * from inquires where user_idx = '$user->idx' order by date desc");
?>

<main class="page" style="padding:100px 0 ;">

  <section class="admin">
    <div class="container">

      <!-- 페이지 헤드 -->
      <div class="admin-head">
        <span class="eyebrow">My Page</span>
        <h2>마이페이지</h2>
        <p>내가 등록한 게시글, 토론, 문의 사항을 관리하세요.</p>
      </div>

      <!-- 탭 -->
      <div class="my-tabs" id="myTabs">
        <button type="button" class="my-tab active" data-tab="posts">등록한 게시글</button>
        <button type="button" class="my-tab" data-tab="debates">등록한 토론</button>
        <button type="button" class="my-tab" data-tab="inquiries">등록한 문의 사항</button>
      </div>

      <!-- =====================================================
             1. 등록한 게시글 (최신순)
             ===================================================== -->
      <div class="my-panel" id="panelPosts">
        <div class="board__head my-head--post">
          <span>제목</span>
          <span>등록일</span>
          <span>좋아요</span>
          <span>관리</span>
        </div>
        <ul class="my-list">

          <?php foreach ($posts as $post) { ?>
            <li class="my-item my-item--post">
              <a href="/board/<?= $post->idx ?>" class="my-item__title"><?= $post->title ?></a>
              <span class="my-item__date"><?= $post->date ?></span>
              <span class="my-item__like">
                <svg viewBox="0 0 24 24" fill="currentColor">
                  <path d="M12 21s-6.7-4.35-9.33-8.5C.9 9.36 2.4 5.5 6 5.5c2 0 3.2 1.2 4 2.3.8-1.1 2-2.3 4-2.3 3.6 0 5.1 3.86 3.33 7C18.7 16.65 12 21 12 21z" />
                </svg>
                <?= $post->like_count ?>
              </span>
              <form method="POST" class="my-item__actions">
                <input type="hidden" name="idx" value="<?= $post->idx ?>">
                <button type="button" onclick="document.querySelector('#postEditModal<?= $post->idx ?>').classList.add('edit-modal--show')" class="btn-mini btn-mini--edit" data-edit-post>수정</button>
                <button formaction="/deletePost" class="btn-mini btn-mini--delete">삭제</button>
              </form>
            </li>

            <div class="edit-modal" id="postEditModal<?= $post->idx ?>">
              <form method="post" action="/editPost" class="edit-modal__panel" enctype="multipart/form-data">
                <div class="edit-modal__head">
                  <h3 class="edit-modal__title">게시글 수정</h3>
                  <button type="button" class="edit-modal__close" data-close-modal onclick="document.querySelector('#postEditModal<?= $post->idx ?>').classList.remove('edit-modal--show')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="6" x2="6" y2="18" />
                      <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                  </button>
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">제목 <span class="req">*</span></label>
                  <input type="text" name="title" id="postTitle" value="<?= $post->title ?>" class="edit-modal__input" placeholder="제목을 입력하세요">
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">카테고리 <span class="req">*</span></label>
                  <select name="category" class="category-select">
                    <option <?= $post->category == "전체" ? "selected" : "" ?> value="전체">전체</option>
                    <option <?= $post->category == "공지사항" ? "selected" : "" ?> value="공지사항">공지사항</option>
                    <option <?= $post->category == "여행" ? "selected" : "" ?> value="여행">여행</option>
                    <option <?= $post->category == "정보" ? "selected" : "" ?> value="정보">정보</option>
                    <option <?= $post->category == "스포츠" ? "selected" : "" ?> value="스포츠">스포츠</option>
                    <option <?= $post->category == "공부" ? "selected" : "" ?> value="공부">공부</option>
                    <option <?= $post->category == "먹거리" ? "selected" : "" ?> value="먹거리">먹거리</option>
                    <option <?= $post->category == "자유" ? "selected" : "" ?> value="자유">자유</option>
                  </select>
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">내용 <span class="req">*</span></label>
                  <textarea id="postContent" name="detail" class="edit-modal__textarea" placeholder="내용을 입력하세요"><?= $post->detail ?></textarea>
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">사진</label>
                  <img src="<?= $post->photo ?>">
                  <input type="file" name="file[]" multiple id="postImage" class="edit-modal__file" accept="image/*">
                </div>

                <div class="edit-modal__actions">
                  <button type="button" class="btn-ghost" onclick="document.querySelector('#postEditModal<?= $post->idx ?>').classList.remove('edit-modal--show')" data-close-modal>취소</button>
                  <button name="post_idx" value="<?= $post->idx ?>" class="btn-primary" id="submitPostEdit">수정</button>
                </div>
              </form>
            </div>
          <?php } ?>

        </ul>
      </div>

      <!-- =====================================================
             2. 등록한 토론 (최신순)
             ===================================================== -->
      <div class="my-panel hidden" id="panelDebates">
        <div class="board__head my-head--debate">
          <span>제목</span>
          <span>등록일</span>
          <span>찬/반 비율</span>
          <span>관리</span>
        </div>
        <ul class="my-list">

          <!-- 진행 중 토론 (의견 5명 이상, 찬성 우세 → 찬성 종료 버튼 노출) -->
          <?php foreach ($debates as $debate) {
            $opinions = db::fetch("select count(*) as total, sum(o.type = 1) as agree, sum(o.type = 0) as oppose from opinions o inner join debate_opinions d on o.debate_idx = d.debate_idx and o.user_idx = d.user_idx where o.debate_idx = '$debate->idx'");
            $agreeRate = $opinions->total > 0 ? round($opinions->agree / $opinions->total * 100) : 0;
            $opposeRate = $opinions->total > 0 ? round($opinions->oppose / $opinions->total * 100) : 0;
          ?>

            <li class="my-item my-item--debate" data-status="open">
              <a href="/debate/<?= $debate->idx ?>" class="my-item__title">
                <?php if ($debate->result != null) { ?>
                  <span class="close-tag close-tag--<?= $debate->result == 1 ? 'agree' : 'oppose' ?>">
                    (<?= $debate->result == 1 ? '찬성' : '반대' ?>)
                  </span>
                <?php } ?>
                <?= $debate->title ?>
              </a>
              <span class="my-item__date"><?= $debate->date ?></span>
              <span class="my-item__ratio">
                <span class="ratio-bar">
                  <span class="ratio-bar__agree" style="width:<?= $agreeRate ?>%"></span>
                </span>
                <span class="ratio-text">
                  <b class="ratio-text__agree">찬 <?= $agreeRate ?>%</b> / <b class="ratio-text__oppose">반 <?= $opposeRate ?>%</b>
                </span>
              </span>
              <form method="POST" class="my-item__actions">
                <input type="hidden" name="idx" value="<?= $debate->idx ?>">
                <?php if ($opinions->total >= 5) { ?>
                  <button formaction="/debateEnd" name="result" value="<?= $agreeRate > $opposeRate ? "1" : "0" ?>" class="btn-close btn-close--<?= $agreeRate > $opposeRate ? "agree" : "oppose" ?>"><?= $agreeRate > $opposeRate ? "찬성" : "반대" ?>으로 종료</button>
                <?php } else if ($debate->result != null) { ?>
                  <span class="closed-label">종료됨</span>
                <?php } ?>
                <button formaction="/deleteDebate" type="button" class="btn-mini btn-mini--delete">삭제</button>
              </form>
            </li>
          <?php } ?>
        </ul>
      </div>

      <!-- =====================================================
             3. 등록한 문의 사항 (최신순)
             ===================================================== -->
      <div class="my-panel hidden" id="panelInquiries">
        <div class="board__head my-head--inquiry">
          <span>제목</span>
          <span>등록일</span>
          <span>관리</span>
        </div>
        <ul class="my-list">

          <!-- 일반 문의 (수정/삭제 가능) -->
          <?php foreach ($inquires as $inquire) { ?>
            <li class="my-item my-item--inquiry" data-answered="<?= $inquire->answer == null ? "false" : 'true' ?>">
              <a href="/inquire/<?= $inquire->idx ?>" class="my-item__title">
                <?= $inquire->title ?>
                <?php if ($inquire->public == 0) { ?>
                  <span class="inquiry-tag inquiry-tag--private">비공개</span>
                <?php } ?>
              </a>
              <span class="my-item__date"><?= $inquire->date ?></span>
              <form method="post" class="my-item__actions">
                <button type="button" class="btn-mini btn-mini--edit" onclick="document.querySelector('#inquiryEditModal<?= $inquire->idx ?>').classList.add('edit-modal--show')" data-edit-inquiry>수정</button>
                <button name="idx" value="<?= $inquire->idx ?>" class="btn-mini btn-mini--delete">삭제</button>
              </form>
            </li>

            <div class="edit-modal" id="inquiryEditModal<?= $inquire->idx ?>">
              <form method="post" action="/editInquire" enctype="multipart/form-data"class="edit-modal__panel">
                <div class="edit-modal__head">
                  <h3 class="edit-modal__title">문의 사항 수정</h3>
                  <button type="button" class="edit-modal__close" onclick="document.querySelector('#inquiryEditModal<?= $inquire->idx ?>').classList.remove('edit-modal--show')" data-close-modal>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round">
                      <line x1="18" y1="6" x2="6" y2="18" />
                      <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                  </button>
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">제목 <span class="req">*</span></label>
                  <input type="text" name="title" value="<?= $inquire->title ?>" id="inquiryTitle" required class="edit-modal__input" placeholder="제목을 입력하세요">
                </div>

                <div class="edit-modal__field">
                  <label class="edit-modal__label">내용 <span class="req">*</span></label>
                  <textarea id="inquiryContent" name="content" class="edit-modal__textarea" placeholder="내용을 입력하세요"  required><?= $inquire->content ?></textarea>
                </div>

                <div class="edit-modal__field">
                  <img src="<?= $inquire->img ?>">
                  <label class="edit-modal__label">이미지</label>
                  <input type="file" id="inquiryImage" name="file" class="edit-modal__file" accept="image/*">
                </div>

                <div class="edit-modal__actions">
                  <button type="button" class="btn-ghost" data-close-modal onclick="document.querySelector('#inquiryEditModal<?= $inquire->idx ?>').classList.remove('edit-modal--show')">취소</button>
                  <button name="idx" value="<?= $inquire->idx ?>" class="btn-primary" id="submitInquiryEdit">수정</button>
                </div>
              </form>
            </div>
          <?php } ?>

        </ul>
      </div>

    </div>
  </section>

</main>


<script src="/js/lib.js"></script>
<script>
  $$(".my-tab").forEach(tab => tab.onclick = () => {
    $$(".my-tab").forEach(t => t.classList.remove("active"));
    tab.classList.add("active");
    $$(".my-panel").forEach(p => p.classList.add('hidden'));
    $('#panel' + tab.dataset.tab.charAt(0).toUpperCase() + tab.dataset.tab.slice(1)).classList.remove('hidden');
  })
</script>