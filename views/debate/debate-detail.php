<?php
$debate = db::fetch("select d.*, u.id user_id, u.profile from debates d inner join users u on d.user_idx = u.idx where d.idx = '$idx'");
?>

<main class="page">
  <section class="detail">
    <div class="container detail__wrap">

      <!-- 토론 영역 (드래그 선택 방지) -->
      <article class="article">
        <div class="article__head">
          <img class="article__avatar" src="<?= $debate->profile ?>"
            alt="토론 개설자 프로필 사진" title="incheon_voice">
          <div class="article__meta">
            <div class="id"><?= $debate->user_id ?></div>
            <div class="date"><?= $debate->date ?></div>
          </div>
        </div>

        <h1 class="article__title"><?= $debate->title ?></h1>

        <div class="article__body"></div>

        <!-- <div class="article__like">
          <button class="like-btn" type="button">
            <svg viewBox="0 0 24 24">
              <path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z" />
            </svg>
            공감 <strong>318</strong>
          </button>
        </div> -->
      </article>

      <!-- 토론 의견 영역 (댓글 = 등록일 내림차순 + 입력폼/등록버튼) -->
      <section class="comments">
        <h2 class="comments__title">의견 <b>3</b></h2>

        <div class="comment-form">
          <input type="text" placeholder="토론에 대한 의견을 남겨주세요" aria-label="의견 입력">
          <button type="button">등록</button>
        </div>

        <div class="comment">
          <img class="comment__avatar" src="../선수제공파일/B_Module/프로필/profile.jpg" alt="원도심러버 프로필 사진" title="원도심러버">
          <div>
            <div class="comment__head">
              <span class="comment__id">원도심러버</span>
              <span class="comment__date">2026-01-03 14:02</span>
            </div>
            <p class="comment__text">개항장 골목은 인천만의 자산이라고 생각해요. 보존하면서도 상권을 살리는 도시재생 방식이 답인 것 같습니다.</p>
          </div>
        </div>

        <div class="comment">
          <img class="comment__avatar" src="../선수제공파일/B_Module/프로필/profile.jpg" alt="송도시민 프로필 사진" title="송도시민">
          <div>
            <div class="comment__head">
              <span class="comment__id">송도시민</span>
              <span class="comment__date">2026-01-02 19:48</span>
            </div>
            <p class="comment__text">안전 문제가 심각한 곳은 재개발이 불가피하다고 봅니다. 무조건 보존만이 답은 아니에요.</p>
          </div>
        </div>

        <div class="comment">
          <img class="comment__avatar" src="../선수제공파일/B_Module/프로필/profile.jpg" alt="균형잡기 프로필 사진" title="균형잡기">
          <div>
            <div class="comment__head">
              <span class="comment__id">균형잡기</span>
              <span class="comment__date">2026-01-02 11:15</span>
            </div>
            <p class="comment__text">핵심 근대 건축물은 보존하고 주변부는 정비하는 절충안이 가장 현실적이지 않을까요?</p>
          </div>
        </div>
      </section>

      <div style="text-align:center; margin-top:44px;">
        <a href="sub2.html" class="btn btn--ghost">토론 목록으로 돌아가기</a>
      </div>

    </div>
  </section>
</main>