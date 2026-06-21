<?php

get("/", function () {
    views('main');
});
get("/board", function () {
    views('board/board');
});
get("/bestBoard", function () {
    views('board/best-board');
});
get("/boardDetail/{idx}", function($idx) {
    views('board/board-detail', ["idx"=>$idx]);
});
get("/debate", function () {
    views('debate/debate');
});
get("/bestDebate", function () {
    views('debate/best-debate');
});
get("/register", function () {
    views('auth/register');
});
get("/login", function () {
    views('auth/login');
});
post("/signup", function () {
    extract($_POST);
    $file = $_FILES["file"];
    $path = "/asset/profile/" . $file["name"];
    if (move_uploaded_file($file["tmp_name"], ".$path")) {
        db::exec("insert into users(id, name, pw, profile) values ('$id','$name','$pw','$path')");
        move("/", "회원가입 성공");
    } else {
        back("회원가입 실패");
    }
});
post("/signin", function () {
    extract($_POST);
    $user = db::fetch("select * from users where id = '$id'");
    $token = bin2hex(random_bytes(32));
    if ($user) {
        if ($user->pw == $pw) {
            db::exec("update users set login_token = '$token' where id = '$id'");
            $user->login_token = $token; // = "DB에 저장한 새 토큰을 PHP 객체에도 반영해줘!"
            $_SESSION["ss"] = $user;
            move("/", "로그인 성공");
        } else {
            back("비밀번호가 일치하지 않습니다");
        }
    } else {
        back("로그인 실패");
    }
});
get("/logout", function () {
    $user = ss();
    db::exec("update users set login_token = null where idx = '$user->idx'");
    // IS NULL은 WHERE에서 쓰는 거고 SET에서는 못 씀
    session_destroy();
    move("/", "로그아웃 성공");
});
post("/addPost", function () {
    extract($_POST);
    $file = $_FILES["file"];
    $path = "/asset/posts" . $file["name"];
    if (move_uploaded_file($file["tmp_name"], ".$path") && isset($file["name"])) {
        db::exec("insert into posts (title, detail, category, photo) values ('$title', '$detail', '$category', '$path')");
        move("/board", "게시글 추가 성공");
    } else {
        db::exec("insert into posts (title, detail, category) values ('$title', '$detail', '$category')");
        move("/board", "게시글 추가 성공");
    }
});
