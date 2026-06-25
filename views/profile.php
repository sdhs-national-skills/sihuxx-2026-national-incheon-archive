<?php
$target_user = db::fetch("select * from users where idx = '$idx'");
$comments_count = db::fetch("select ((select count(*) from comments where user_idx = '$target_user->idx') + (select count(*) from inquire_comments where user_idx = '$target_user->idx')) as total")->total;
$posts_count = db::fetch("select count(*) as total from posts where user_idx = '$target_user->idx'")->total;
$debates_count = db::fetch("select count(*) as total from debates where user_idx = '$target_user->idx'")->total;
$inquires_count = db::fetch("select count(*) as total from inquires where user_idx = '$target_user->idx'")->total;
$is_following = db::fetch("select * from follows where user_idx = '$user->idx' and target_user_idx = '$target_user->idx'");
$is_blocking = db::fetch("select * from blocks where user_idx = '$user->idx' and target_user_idx = '$target_user->idx'");
$user = ss();
?>

<main class="page" style="padding-top:0;">
    <section class="section profile">
        <div class="container">
            <div class="profile__card">

                <!-- 프로필 이미지 -->
                <div class="profile__avatar-wrap">
                    <img src="<?= $target_user->profile ?>"
                        alt="회원 프로필 사진"
                        class="profile__avatar"
                        id="profileAvatar">
                </div>

                <!-- 프로필 정보 -->
                <div class="profile__info">
                    <span class="eyebrow">User Profile</span>
                    <h2 class="profile__name" id="profileName"><?= $target_user->name ?></h2>
                    <p class="profile__id" id="profileId">@<?= $target_user->id ?></p>
                </div>

                <?php if ($user->idx != $idx) { ?>
                    <!-- 액션 버튼 (타인 프로필일 때만 표시, JS에서 display 제어) -->
                    <form method="POST" class="profile__actions" id="profileActions">
                        <input type="hidden" name="target_user_idx" value="<?= $target_user->idx ?>">
                        <button formaction="<?= $is_following ? "/followCancel" : "/follow" ?>"
                            class="btn btn--follow"
                            id="btnFollow"
                            data-following="<?= $is_following ? "true" : "false" ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <line x1="19" y1="11" x2="19" y2="17" />
                                <line x1="16" y1="14" x2="22" y2="14" />
                            </svg>
                            <span class="btn__label"><?= $is_following ? "팔로우 취소" : "팔로우" ?></span>
                        </button>

                        <button formaction="<?= $is_blocking ? "/blockCancel" : "/block" ?>"
                            class="btn btn--block"
                            id="btnBlock"
                            data-blocked="<?= $is_blocking ? "false" : "true" ?>">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10" />
                                <path d="m4.9 4.9 14.2 14.2" />
                            </svg>
                            <span class="btn__label"><?= $is_blocking ? "차단 취소" : "차단" ?></span>
                        </button>
                    </form>

                <?php } ?>
            </div>
        </div>
    </section>

    <!-- =========================================================
         2. 활동 통계 영역
         - 게시글 수, 토론 수, 문의 사항 수, 댓글 수
         ========================================================= -->
    <section class="section section--soft">
        <div class="container">
            <div class="stats__grid">

                <div class="stats__card">
                    <div class="stats__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <path d="M14 2v6h6" />
                            <path d="M16 13H8M16 17H8M10 9H8" />
                        </svg>
                    </div>
                    <span class="stats__num" id="statPosts"><?= $posts_count ?></span>
                    <span class="stats__label">게시글</span>
                </div>

                <div class="stats__card">
                    <div class="stats__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        </svg>
                    </div>
                    <span class="stats__num" id="statDiscussions"><?= $debates_count ?></span>
                    <span class="stats__label">토론</span>
                </div>

                <div class="stats__card">
                    <div class="stats__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                            <path d="M12 17h.01" />
                        </svg>
                    </div>
                    <span class="stats__num" id="statInquiries"><?= $inquires_count ?></span>
                    <span class="stats__label">문의사항</span>
                </div>

                <div class="stats__card">
                    <div class="stats__icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7
                         8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8
                         8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5
                         a8.48 8.48 0 0 1 8 8v.5z" />
                        </svg>
                    </div>
                    <span class="stats__num" id="statComments"><?= $comments_count ?></span>
                    <span class="stats__label">댓글</span>
                </div>

            </div>
        </div>
    </section>

</main>