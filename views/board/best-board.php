  <main class="page">

    <!-- 페이지 배너 -->
    <section class="page-banner">
      <div class="container">
        <h1>베스트 게시판</h1>
        <p>인천 시민들에게 가장 많은 사랑을 받은 인기 게시글</p>
      </div>
    </section>

    <!-- =========================================================
         베스트 게시판 영역
         텍스트 출처: 선수제공파일/B_Module/텍스트/post.txt (전체 50개)
         - 정렬: 좋아요 내림차순(기본) / 오름차순  (라디오)
         - 페이징: 5페이지 × 10개  (라디오 + :checked)
         ========================================================= -->
    <section class="board">
      <div class="container">

        <!-- ===== 정렬 라디오 (리스트보다 앞에 위치해야 :checked ~ 동작) ===== -->
        <input type="radio" name="sort" id="sort-desc" class="pager-radio" checked>
        <input type="radio" name="sort" id="sort-asc"  class="pager-radio">

        <!-- ===== 페이징 라디오 (리스트보다 앞에 위치) ===== -->
        <input type="radio" name="page" id="page1" class="pager-radio" checked>
        <input type="radio" name="page" id="page2" class="pager-radio">
        <input type="radio" name="page" id="page3" class="pager-radio">
        <input type="radio" name="page" id="page4" class="pager-radio">
        <input type="radio" name="page" id="page5" class="pager-radio">

        <div class="board__data">

          <!-- 툴바: 결과 수 + 정렬 셀렉트 -->
          <div class="board__toolbar">
            <p class="board__count">총 <b>50</b>개의 베스트 게시글</p>
            <div class="sortbox">
              <div class="sortbox__group">
                <label class="sortbox__label" for="sort-desc">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5h10M11 9h7M11 13h4M3 17l3 3 3-3M6 18V4"/></svg>
                  좋아요 많은순
                </label>
                <label class="sortbox__label" for="sort-asc">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 5h4M11 9h7M11 13h10M3 7l3-3 3 3M6 6v14"/></svg>
                  좋아요 적은순
                </label>
              </div>
            </div>
          </div>

          <!-- 리스트 헤더 -->
          <div class="board__head">
            <span style="text-align:center;">순위</span>
            <span>제목</span>
            <span>등록일</span>
            <span style="text-align:right;">좋아요</span>
          </div>

          <!-- 게시글 목록 (10개씩 p1~p5) -->
          <div class="board__list">
            <!-- ===== 1페이지 (1~10위) ===== -->
            <div class="post p1"><span class="post__rank">1</span><a href="sub3.html" class="post__title">[속보] 인천대교 새해 첫 일출 실시간 현장 (드론 촬영)</a><span class="post__date">2026-01-01</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>2,451</span></div>
            <div class="post p1"><span class="post__rank">2</span><a href="sub3.html" class="post__title">오늘자 송도 센트럴파크 튤립 축제 개화 상태 (스냅샷 20장)</a><span class="post__date">2026-05-02</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,892</span></div>
            <div class="post p1"><span class="post__rank">3</span><a href="sub3.html" class="post__title">인천러라면 무조건 공감하는 '인천 사람 특' 10가지</a><span class="post__date">2026-03-15</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,720</span></div>
            <div class="post p1"><span class="post__rank">4</span><a href="sub3.html" class="post__title">송도 현대아울렛 근처 분위기 끝판왕 데이트 코스 추천</a><span class="post__date">2026-02-14</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,533</span></div>
            <div class="post p1"><span class="post__rank">5</span><a href="sub3.html" class="post__title">[정리] 2026년 인천 지하철 연장 노선 확정안 총정리</a><span class="post__date">2026-04-10</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,480</span></div>
            <div class="post p1"><span class="post__rank">6</span><a href="sub3.html" class="post__title">영종도 사시는 분들만 아는 숨겨진 노을 명소 공개합니다</a><span class="post__date">2026-01-20</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,322</span></div>
            <div class="post p1"><span class="post__rank">7</span><a href="sub3.html" class="post__title">신포시장 닭강정 대기 없이 먹는 꿀팁 (현지인 피셜)</a><span class="post__date">2026-03-22</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,290</span></div>
            <div class="post p1"><span class="post__rank">8</span><a href="sub3.html" class="post__title">인천 어린이날 가볼만한 곳 TOP 5 (부모님 필독)</a><span class="post__date">2026-05-05</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,180</span></div>
            <div class="post p1"><span class="post__rank">9</span><a href="sub3.html" class="post__title">동인천 개항로 감성 카페 투어 후기 (ft. 인생샷 명소)</a><span class="post__date">2026-04-18</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,105</span></div>
            <div class="post p1"><span class="post__rank">10</span><a href="sub3.html" class="post__title">청라 커낼웨이 야경 보면서 산책하기 좋은 코스</a><span class="post__date">2026-02-28</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>1,050</span></div>
            <!-- ===== 2페이지 (11~20위) ===== -->
            <div class="post p2"><span class="post__rank">11</span><a href="sub3.html" class="post__title">구월동 로데오거리 새로 생긴 대형 서점 방문기</a><span class="post__date">2026-03-05</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>988</span></div>
            <div class="post p2"><span class="post__rank">12</span><a href="sub3.html" class="post__title">역대급 폭설 내린 오늘자 부평역 광장 풍경</a><span class="post__date">2026-01-15</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>942</span></div>
            <div class="post p2"><span class="post__rank">13</span><a href="sub3.html" class="post__title">계양산 등산로 코스별 난이도 완벽 가이드</a><span class="post__date">2026-04-25</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>877</span></div>
            <div class="post p2"><span class="post__rank">14</span><a href="sub3.html" class="post__title">월미도 바다열차 타고 한 바퀴 돌고 온 후기</a><span class="post__date">2026-02-05</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>830</span></div>
            <div class="post p2"><span class="post__rank">15</span><a href="sub3.html" class="post__title">인천 지역 화폐 '인천e음' 혜택 변경사항 확인하세요</a><span class="post__date">2026-03-12</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>795</span></div>
            <div class="post p2"><span class="post__rank">16</span><a href="sub3.html" class="post__title">소래포구 대하 축제 갈 때 바가지 안 쓰는 법</a><span class="post__date">2026-05-01</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>760</span></div>
            <div class="post p2"><span class="post__rank">17</span><a href="sub3.html" class="post__title">주안역 근처 가성비 미친 고기집 발견했습니다</a><span class="post__date">2026-01-10</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>722</span></div>
            <div class="post p2"><span class="post__rank">18</span><a href="sub3.html" class="post__title">인천 공항 스마트 패스 사용 후기 (출국 시간 단축)</a><span class="post__date">2026-04-02</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>690</span></div>
            <div class="post p2"><span class="post__rank">19</span><a href="sub3.html" class="post__title">부평 지하상가에서 길 안 잃고 쇼핑하는 법</a><span class="post__date">2026-02-18</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>655</span></div>
            <div class="post p2"><span class="post__rank">20</span><a href="sub3.html" class="post__title">송도 테크노파크 근처 직장인 점심 맛집 리스트</a><span class="post__date">2026-03-28</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>610</span></div>
            <!-- ===== 3페이지 (21~30위) ===== -->
            <div class="post p3"><span class="post__rank">21</span><a href="sub3.html" class="post__title">강화도 루지 타러 갔다가 들린 오션뷰 빵집 추천</a><span class="post__date">2026-01-25</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>588</span></div>
            <div class="post p3"><span class="post__rank">22</span><a href="sub3.html" class="post__title">연수구 벚꽃길 드라이브 코스 실시간 상황</a><span class="post__date">2026-04-15</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>542</span></div>
            <div class="post p3"><span class="post__rank">23</span><a href="sub3.html" class="post__title">오늘 SSG 랜더스필드 직관 후기 (응원 열기 대박)</a><span class="post__date">2026-05-04</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>520</span></div>
            <div class="post p3"><span class="post__rank">24</span><a href="sub3.html" class="post__title">인천시 청년 월세 지원 사업 신청 방법 공유</a><span class="post__date">2026-02-10</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>495</span></div>
            <div class="post p3"><span class="post__rank">25</span><a href="sub3.html" class="post__title">검단신도시 입주 예정자분들 여기서 소통해요</a><span class="post__date">2026-03-18</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>480</span></div>
            <div class="post p3"><span class="post__rank">26</span><a href="sub3.html" class="post__title">겨울철 문학산 설경 보러 가실 분? (아이젠 필수)</a><span class="post__date">2026-01-08</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>455</span></div>
            <div class="post p3"><span class="post__rank">27</span><a href="sub3.html" class="post__title">인천 시티투어 버스 야간 노선 타봤는데 예쁘네요</a><span class="post__date">2026-04-30</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>430</span></div>
            <div class="post p3"><span class="post__rank">28</span><a href="sub3.html" class="post__title">석남동 거북시장 맛집 아시는 분 계신가요?</a><span class="post__date">2026-02-22</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>415</span></div>
            <div class="post p3"><span class="post__rank">29</span><a href="sub3.html" class="post__title">작전동 새로 오픈한 수영장 시설 대박입니다</a><span class="post__date">2026-03-08</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>398</span></div>
            <div class="post p3"><span class="post__rank">30</span><a href="sub3.html" class="post__title">인천항 크루즈 터미널 구경 갔다 온 사진들</a><span class="post__date">2026-01-30</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>370</span></div>
            <!-- ===== 4페이지 (31~40위) ===== -->
            <div class="post p4"><span class="post__rank">31</span><a href="sub3.html" class="post__title">소래산 야간 산책 가시는 분들 조심하세요</a><span class="post__date">2026-04-22</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>355</span></div>
            <div class="post p4"><span class="post__rank">32</span><a href="sub3.html" class="post__title">부천과 인천 경계에 사는 사람들의 고충 모음</a><span class="post__date">2026-05-03</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>342</span></div>
            <div class="post p4"><span class="post__rank">33</span><a href="sub3.html" class="post__title">간석동 근처 24시간 공부하기 좋은 카페 추천</a><span class="post__date">2026-02-02</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>320</span></div>
            <div class="post p4"><span class="post__rank">34</span><a href="sub3.html" class="post__title">청라 호수공원 음악분수 시간표 공유합니다</a><span class="post__date">2026-03-25</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>310</span></div>
            <div class="post p4"><span class="post__rank">35</span><a href="sub3.html" class="post__title">미추홀구 주민센터 문화 강좌 신청 성공기</a><span class="post__date">2026-01-12</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>295</span></div>
            <div class="post p4"><span class="post__rank">36</span><a href="sub3.html" class="post__title">옥련동 할머니 떡볶이 아직도 줄 많이 서나요?</a><span class="post__date">2026-04-08</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>280</span></div>
            <div class="post p4"><span class="post__rank">37</span><a href="sub3.html" class="post__title">남동공단 근처 가성비 한식 뷔페 추천받아요</a><span class="post__date">2026-05-02</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>265</span></div>
            <div class="post p4"><span class="post__rank">38</span><a href="sub3.html" class="post__title">송도에서 공항 갈 때 6707B 버스가 제일 빨라요</a><span class="post__date">2026-02-25</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>250</span></div>
            <div class="post p4"><span class="post__rank">39</span><a href="sub3.html" class="post__title">인천 꿈나무 카드 가맹점 리스트 업데이트 정보</a><span class="post__date">2026-03-30</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>242</span></div>
            <div class="post p4"><span class="post__rank">40</span><a href="sub3.html" class="post__title">인천의 자부심! 인천 유나이티드 경기 일정 공유</a><span class="post__date">2026-01-05</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>230</span></div>
            <!-- ===== 5페이지 (41~50위) ===== -->
            <div class="post p5"><span class="post__rank">41</span><a href="sub3.html" class="post__title">계양체육관 배구 경기 보러 오시는 분들 주차 팁</a><span class="post__date">2026-04-12</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>215</span></div>
            <div class="post p5"><span class="post__rank">42</span><a href="sub3.html" class="post__title">부평구 보건소 임산부 혜택 정리해봤어요</a><span class="post__date">2026-05-04</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>208</span></div>
            <div class="post p5"><span class="post__rank">43</span><a href="sub3.html" class="post__title">차이나타운 공화춘 짜장면 먹어본 솔직 후기</a><span class="post__date">2026-02-15</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>195</span></div>
            <div class="post p5"><span class="post__rank">44</span><a href="sub3.html" class="post__title">화수부두 수산시장 횟감 시세 아시는 분?</a><span class="post__date">2026-03-14</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>188</span></div>
            <div class="post p5"><span class="post__rank">45</span><a href="sub3.html" class="post__title">인천 도호부 관아 전통 놀이 체험 가족 여행 추천</a><span class="post__date">2026-01-22</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>175</span></div>
            <div class="post p5"><span class="post__rank">46</span><a href="sub3.html" class="post__title">만석동 쭈꾸미 거리 제철이라 진짜 맛있네요</a><span class="post__date">2026-04-19</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>160</span></div>
            <div class="post p5"><span class="post__rank">47</span><a href="sub3.html" class="post__title">송도 코스트코 주말 주차 지옥 피하는 시간대</a><span class="post__date">2026-05-01</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>145</span></div>
            <div class="post p5"><span class="post__rank">48</span><a href="sub3.html" class="post__title">인천 서구 어린이 도서관 프로그램 알차네요</a><span class="post__date">2026-02-08</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>132</span></div>
            <div class="post p5"><span class="post__rank">49</span><a href="sub3.html" class="post__title">논현동 양떼 목장 아이들이랑 가기 딱 좋아요</a><span class="post__date">2026-03-01</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>120</span></div>
            <div class="post p5"><span class="post__rank">50</span><a href="sub3.html" class="post__title">인천 커뮤니티 첫 정기 정모 건의해봅니다!</a><span class="post__date">2026-04-28</span><span class="post__like"><svg viewBox="0 0 24 24"><path d="M12 21s-7.5-4.6-10-9.2C.3 8.5 1.9 5 5.2 5c2 0 3.3 1.1 4 2.2C9.8 6.1 11.2 5 13.1 5c3.3 0 4.9 3.5 3.2 6.8C19.5 16.4 12 21 12 21z"/></svg>115</span></div>
          </div>

          <!-- 페이지 번호 버튼 (이전/다음 없음, 번호 클릭만) -->
          <div class="pager">
            <label for="page1">1</label>
            <label for="page2">2</label>
            <label for="page3">3</label>
            <label for="page4">4</label>
            <label for="page5">5</label>
          </div>

        </div>
      </div>
    </section>

  </main>

  