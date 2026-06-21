  <main class="page">

    <section class="page-banner">
      <div class="container">
        <h1>베스트 토론</h1>
        <p>가장 활발하게 의견이 오간 인천의 뜨거운 토론 주제</p>
      </div>
    </section>

    <!-- =========================================================
         베스트 토론 영역
         텍스트 출처: 선수제공파일/B_Module/텍스트/debate.txt (전체 50개)
         - 정렬: 최신순(기본) / 오래된순  (라디오)
         - 페이징: 5페이지 × 10개  (라디오 + :checked)
         ========================================================= -->
    <section class="board">
      <div class="container">

        <!-- 정렬 라디오 -->
        <input type="radio" name="sort" id="sort-desc" class="pager-radio" checked>
        <input type="radio" name="sort" id="sort-asc" class="pager-radio">
        <!-- 페이징 라디오 -->
        <input type="radio" name="page" id="page1" class="pager-radio" checked>
        <input type="radio" name="page" id="page2" class="pager-radio">
        <input type="radio" name="page" id="page3" class="pager-radio">
        <input type="radio" name="page" id="page4" class="pager-radio">
        <input type="radio" name="page" id="page5" class="pager-radio">

        <div class="board__data">

          <div class="board__toolbar">
            <p class="board__count">총 <b>50</b>개의 베스트 토론</p>
            <div class="sortbox">
              <div class="sortbox__group">
                <label class="sortbox__label" for="sort-desc">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 5h10M11 9h7M11 13h4M3 17l3 3 3-3M6 18V4" />
                  </svg>
                  최신순
                </label>
                <label class="sortbox__label" for="sort-asc">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 5h4M11 9h7M11 13h10M3 7l3-3 3 3M6 6v14" />
                  </svg>
                  오래된순
                </label>
              </div>
            </div>
          </div>

          <div class="board__head">
            <span style="text-align:center;">번호</span>
            <span>토론 주제</span>
            <span>등록일</span>
            <span style="text-align:right;">상태</span>
          </div>

          <div class="board__list">
            <!-- ===== 1페이지 ===== -->
            <div class="post p1"><span class="post__rank">1</span><a href="sub4.html" class="post__title">인천 원도심 재개발 vs 역사 보존, 여러분의 생각은?</a><span class="post__date">2026-01-02</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">2</span><a href="sub4.html" class="post__title">송도 트램 도입, 교통난 해소에 진짜 도움이 될까?</a><span class="post__date">2026-01-05</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">3</span><a href="sub4.html" class="post__title">인천 지하철 2호선 배차 간격, 이대로 괜찮은가요?</a><span class="post__date">2026-01-10</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">4</span><a href="sub4.html" class="post__title">청라 영상문화복합단지 조성, 지역 경제 파급효과는?</a><span class="post__date">2026-01-15</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">5</span><a href="sub4.html" class="post__title">부평 캠프마켓 공원화 방향: 문화 시설 vs 자연 녹지</a><span class="post__date">2026-01-20</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">6</span><a href="sub4.html" class="post__title">영종도 통행료 무료화 이후 체감되는 변화들</a><span class="post__date">2026-01-25</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">7</span><a href="sub4.html" class="post__title">인천 지역 화폐 'e음카드' 캐시백 요율 적정한가</a><span class="post__date">2026-02-01</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">8</span><a href="sub4.html" class="post__title">월미도 관광 활성화를 위해 가장 시급한 개선점</a><span class="post__date">2026-02-05</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">9</span><a href="sub4.html" class="post__title">인천 유나이티드 전용 구장 주변 상권 활성화 방안</a><span class="post__date">2026-02-10</span><span class="post__like">진행중</span></div>
            <div class="post p1"><span class="post__rank">10</span><a href="sub4.html" class="post__title">바이오 클러스터 송도, 인천의 미래 먹거리 될까?</a><span class="post__date">2026-02-15</span><span class="post__like">진행중</span></div>
            <!-- ===== 2페이지 ===== -->
            <div class="post p2"><span class="post__rank">11</span><a href="sub4.html" class="post__title">인천 내 중고등학교 남녀공학 전환에 대한 찬반 토론</a><span class="post__date">2026-02-20</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">12</span><a href="sub4.html" class="post__title">미추홀구 전세사기 피해 지원 대책, 실효성 있는가</a><span class="post__date">2026-02-25</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">13</span><a href="sub4.html" class="post__title">수도권 매립지 종료 문제, 인천시의 독자 노선 지지하시나요?</a><span class="post__date">2026-03-01</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">14</span><a href="sub4.html" class="post__title">인천국제공항 4단계 건설 사업과 일자리 창출 전망</a><span class="post__date">2026-03-04</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">15</span><a href="sub4.html" class="post__title">소래포구 바가지 요금 근절을 위한 실질적인 대책</a><span class="post__date">2026-03-07</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">16</span><a href="sub4.html" class="post__title">인천항 중고차 수출 단지 이전 부지 어디가 적당할까</a><span class="post__date">2026-03-10</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">17</span><a href="sub4.html" class="post__title">강화도 관광 케이블카 설치, 환경 파괴 vs 지역 발전</a><span class="post__date">2026-03-13</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">18</span><a href="sub4.html" class="post__title">인천 시티투어 버스 노선 확대가 필요하다는 의견</a><span class="post__date">2026-03-16</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">19</span><a href="sub4.html" class="post__title">우리 동네 쓰레기 분리배출 시스템 개선 제안</a><span class="post__date">2026-03-19</span><span class="post__like">진행중</span></div>
            <div class="post p2"><span class="post__rank">20</span><a href="sub4.html" class="post__title">인천 지역 대학들의 경쟁력 강화 방안은 무엇일까</a><span class="post__date">2026-03-22</span><span class="post__like">진행중</span></div>
            <!-- ===== 3페이지 ===== -->
            <div class="post p3"><span class="post__rank">21</span><a href="sub4.html" class="post__title">인천 내 공공의대 설립 추진, 시민들의 기대감</a><span class="post__date">2026-03-25</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">22</span><a href="sub4.html" class="post__title">아라뱃길 활성화 방안: 레저 스포츠 명소화 가능할까</a><span class="post__date">2026-03-28</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">23</span><a href="sub4.html" class="post__title">인천대교 통행료 추가 인하 가능성에 대한 토론</a><span class="post__date">2026-03-31</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">24</span><a href="sub4.html" class="post__title">동인천역 북광장 개발 사업, 왜 지연되고 있을까</a><span class="post__date">2026-04-02</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">25</span><a href="sub4.html" class="post__title">인천 지역 청년 창업 지원금 제도 이용 후기 공유</a><span class="post__date">2026-04-05</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">26</span><a href="sub4.html" class="post__title">연수구 상가 밀집 지역 주차난 해결책은 없는가</a><span class="post__date">2026-04-08</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">27</span><a href="sub4.html" class="post__title">인천 야구의 성지 문학경기장 활용도 높이기 방안</a><span class="post__date">2026-04-11</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">28</span><a href="sub4.html" class="post__title">제3연륙교 개통이 영종과 청라에 미칠 영향</a><span class="post__date">2026-04-14</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">29</span><a href="sub4.html" class="post__title">인천항 크루즈 터미널 활성화 방안: 관광객 유치 전략</a><span class="post__date">2026-04-17</span><span class="post__like">진행중</span></div>
            <div class="post p3"><span class="post__rank">30</span><a href="sub4.html" class="post__title">계양 신도시 교통 대책, GTX-D 노선 연결이 필수일까</a><span class="post__date">2026-04-20</span><span class="post__like">진행중</span></div>
            <!-- ===== 4페이지 ===== -->
            <div class="post p4"><span class="post__rank">31</span><a href="sub4.html" class="post__title">인천 내 반려동물 출입 가능 공원 확대 찬반</a><span class="post__date">2026-04-22</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">32</span><a href="sub4.html" class="post__title">개항장 문화재 야행 행사 규모 축소에 대한 우려</a><span class="post__date">2026-04-24</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">33</span><a href="sub4.html" class="post__title">인천시 자원순환센터 입지 선정 갈등 해결책은?</a><span class="post__date">2026-04-26</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">34</span><a href="sub4.html" class="post__title">송도 워터프런트 사업 완료 후 수질 관리 대책</a><span class="post__date">2026-04-28</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">35</span><a href="sub4.html" class="post__title">인천 지역 도서관 야간 개방 확대에 대한 수요 조사</a><span class="post__date">2026-04-30</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">36</span><a href="sub4.html" class="post__title">부평 지하상가 공실 문제 해결을 위한 임대료 정책</a><span class="post__date">2026-05-02</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">37</span><a href="sub4.html" class="post__title">인천 어린이 과학관 콘텐츠 보강 필요성에 대해</a><span class="post__date">2026-05-04</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">38</span><a href="sub4.html" class="post__title">인천대 역세권 개발 사업과 상권 이동 전망</a><span class="post__date">2026-05-06</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">39</span><a href="sub4.html" class="post__title">구월동 로데오거리 보행자 전용도로 확대 의견</a><span class="post__date">2026-05-08</span><span class="post__like">진행중</span></div>
            <div class="post p4"><span class="post__rank">40</span><a href="sub4.html" class="post__title">인천 지역 노인 복지 시설 확충 우선순위는?</a><span class="post__date">2026-05-10</span><span class="post__like">진행중</span></div>
            <!-- ===== 5페이지 ===== -->
            <div class="post p5"><span class="post__rank">41</span><a href="sub4.html" class="post__title">영종도 대형 복합 리조트 카지노 허가 이슈 토론</a><span class="post__date">2026-05-12</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">42</span><a href="sub4.html" class="post__title">인천 고등법원 유치 필요성에 공감하시나요?</a><span class="post__date">2026-05-14</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">43</span><a href="sub4.html" class="post__title">남동공단 구조 고도화 및 첨단 산업 유치 방안</a><span class="post__date">2026-05-16</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">44</span><a href="sub4.html" class="post__title">인천 문화예술회관 리모델링 방향 제안</a><span class="post__date">2026-05-18</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">45</span><a href="sub4.html" class="post__title">만석·화수 해안산책로 연장 사업 기대 효과</a><span class="post__date">2026-05-20</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">46</span><a href="sub4.html" class="post__title">인천 지역 소상공인 배달 앱 수수료 지원 정책</a><span class="post__date">2026-05-22</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">47</span><a href="sub4.html" class="post__title">인천 평화도로(영종-강화) 건설 추진 현황 점검</a><span class="post__date">2026-05-24</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">48</span><a href="sub4.html" class="post__title">서구 루원시티 중심상업용지 개발 방향 토론</a><span class="post__date">2026-05-26</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">49</span><a href="sub4.html" class="post__title">인천형 저출산 대책 '1억 플러스 아이드림' 실효성</a><span class="post__date">2026-05-28</span><span class="post__like">진행중</span></div>
            <div class="post p5"><span class="post__rank">50</span><a href="sub4.html" class="post__title">인천 커뮤니티 활성화를 위한 기능 제안 및 자유 토론</a><span class="post__date">2026-05-30</span><span class="post__like">진행중</span></div>
          </div>

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