<?php
if (ss()->type != 'debate') back('토론 관리자만 접근 할 수 있는 페이지입니다');
$users = db::fetchAll("select * from users where idx in (select user_idx from debates)");
?>

<main class="page" style="padding:100px 0;">

  <section class="admin">
    <div class="container">

      <!-- 페이지 헤드 -->
      <div class="admin-head">
        <span class="eyebrow">Debate Manager</span>
        <h2>토론 회원 관리</h2>
        <p>토론을 생성한 회원을 모니터링하고 토론 생성·의견 작성 권한을 관리하세요.</p>
      </div>

      <!-- 툴바 -->
      <div class="admin__toolbar">
        <div class="admin__count">
          토론 생성 회원 <b id="userCount"><?= count($users) ?></b>명
        </div>
      </div>

      <!-- 회원 리스트 -->
      <ul class="user-list">

        <?php foreach ($users as $user) { 
          $is_banned = db::fetch("select * from bans where user_idx = '$user->idx' and type = 'debate'");
          ?>
          <li class="user-item" data-banned="<?= $is_banned ? "true" : 'false' ?>" data-idx="<?= $user->idx ?>">
            <a class="user-item__avatar-link">
              <img src="<?= $user->profile ?>" alt="프로필" class="user-item__avatar">
            </a>
            <div class="user-item__meta">
              <div class="user-item__name-row">
                <span class="user-item__name"><?= $user->name ?></span>
                <span class="ban-badge">이용금지</span>
              </div>
              <a class="user-item__id">@<?= $user->id ?></a>
              <span class="user-item__ban-until">~ <?= $is_banned->date ?> 까지 제한</span>
            </div>
            <form method="POST" class="user-item__actions">
              <input type="hidden" name="user_idx" value="<?= $user->idx ?>">
              <button type="button" class="btn-ban" onclick="document.querySelector('#banModal<?= $user->idx ?>').classList.add('ban-modal--show')" class="btn-ban" data-open-ban>이용금지</button>
              <button name="type" value="debate" formaction="/banCancel" class="btn-unban">취소</button>
            </form>
          </li>

          <div class="ban-modal" id="banModal<?= $user->idx ?>">
            <div class="ban-modal__panel">

              <div class="ban-modal__head">
                <h3 class="ban-modal__title">토론 생성·의견 작성 권한 제한</h3>
                <button type="button" class="ban-modal__close" id="closeBanModal" onclick="document.querySelector('#banModal<?= $user->idx ?>').classList.remove('ban-modal--show')">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                  </svg>
                </button>
              </div>

              <p class="ban-modal__desc">
                선택한 기간 동안 해당 회원의 토론 생성 및 의견 작성 권한이 제한됩니다.
              </p>

              <form action="/ban" method="post">
                <div class="ban-modal__field">
                  <label for="banPeriod" class="ban-modal__label">정지 기간</label>
                  <input type="hidden" name="user_idx" value="<?= $user->idx ?>">
                  <select name="days" id="banPeriod" class="ban-modal__select">
                    <option value="1">1일</option>
                    <option value="2">2일</option>
                    <option value="3">3일</option>
                    <option value="4">4일</option>
                    <option value="5">5일</option>
                    <option value="6">6일</option>
                    <option value="7">7일</option>
                  </select>
                </div>

                <div class="ban-modal__actions">
                  <button type="button" class="btn-ghost" id="cancelBanModal" onclick="document.querySelector('#banModal<?= $user->idx ?>').classList.remove('ban-modal--show')">취소</button>
                  <button name="type" value="debate" class="btn-ban-confirm" id="submitBan">이용금지</button>
                </div>
              </form>
            </div>
          </div>
        <?php } ?>
      </ul>
    </div>
  </section>

</main>

<!-- =========================================================
       이용금지 기간 설정 모달
       ========================================================= -->