<main class="page">
  <!-- =========================================================
         게시글 자세히 보기
         텍스트 출처: 선수제공파일/B_Module/텍스트/detail.txt
         프로필 출처: 선수제공파일/B_Module/프로필/profile.jpg
         ========================================================= -->
  <section class="detail">
    <div class="container detail__wrap">

      <!-- 게시글 영역 (드래그 선택 방지: .article 에 user-select:none) -->
      <article class="article">
        <!-- 작성자: 프로필 사진 + 아이디 + 등록일 -->
        <div class="article__head">
          <img class="article__avatar" src="/asset/프로필/profile.jpg"
            alt="작성자 프로필 사진" title="incheon_flyer">
          <div class="article__meta">
            <div class="id">incheon_flyer</div>
            <div class="date">2026-01-01</div>
          </div>
        </div>

        <!-- 제목 -->
        <h1 class="article__title">[속보] 인천대교 새해 첫 일출 실시간 현장 (드론 촬영)</h1>

        <!-- 내용 -->
        <div class="article__body">
          <p>2026년 희망찬 새해가 밝았습니다!</p>
          <p>오늘 새벽, 인천대교의 장엄한 일출을 담기 위해 영종도 인근에서 드론을 띄웠습니다. 영하의 추운 날씨였지만, 수평선 너머로 붉은 태양이 솟아오르는 순간의 전율은 잊을 수가 없네요.</p>
          <p>세계적인 규모를 자랑하는 인천대교의 유려한 곡선과 그 위로 번지는 황금빛 햇살이 어우러져 역대급 장관을 연출했습니다. 현장에 계셨던 분들의 환호성까지 오디오에 담겨 정말 감동적이었습니다.</p>
          <p>이번에 촬영한 영상 중 가장 잘 나온 스틸컷 3장을 먼저 공유합니다. 300만 인천 시민 여러분 모두 이 기운을 받아 2026년 한 해 계획하신 모든 일들이 시원하게 뻗은 인천대교처럼 탄탄대로로 풀리시길 기원합니다.</p>
          <p>새해 복 많이 받으세요!</p>
        </div>

        <!-- 좋아요 수 + 좋아요 버튼 -->
        <div class="article__like">
          <button class="like-btn" type="button">
            <svg viewBox="0 0 24 24">
              <path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z" />
            </svg>
            좋아요 <strong>2,451</strong>
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
        <h2 class="comments__title">댓글 <b>2</b></h2>

        <!-- 댓글 입력 폼 + 등록 버튼 -->
        <div class="comment-form">
          <input type="text" placeholder="따뜻한 댓글을 남겨주세요 :)" aria-label="댓글 입력">
          <button type="button">등록</button>
        </div>

        <!-- 댓글 목록 (등록일 내림차순) -->
        <div class="comment">
          <img class="comment__avatar" src="/asset/프로필/profile.jpg"
            alt="송도주민 프로필 사진" title="송도주민">
          <div>
            <div class="comment__head">
              <span class="comment__id">송도주민</span>
              <span class="comment__date">2026-01-01 09:24</span>
            </div>
            <p class="comment__text">오늘 집에서 창밖 보는데 진짜 예쁘더라고요. 영상도 기대할게요.</p>
          </div>
        </div>

        <div class="comment">
          <img class="comment__avatar" src="/asset/프로필/profile.jpg"
            alt="바다사랑 프로필 사진" title="바다사랑">
          <div>
            <div class="comment__head">
              <span class="comment__id">바다사랑</span>
              <span class="comment__date">2026-01-01 08:10</span>
            </div>
            <p class="comment__text">인천대교 일출은 언제 봐도 자부심 느껴지는 풍경입니다. 최고예요!</p>
          </div>
        </div>
      </section>

      <!-- 목록으로 -->
      <div style="text-align:center; margin-top:44px;">
        <a href="sub1.html" class="btn btn--ghost">목록으로 돌아가기</a>
      </div>

    </div>
  </section>
</main>
