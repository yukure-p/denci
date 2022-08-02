"use strict"; // スマホメニュー開閉

var menuVisivble = function menuVisivble() {
  // セレクタを取得
  // const menubtn = document.querySelector(".nav-btn");
  var body = document.body; // // navfunc動作
  // const navfunc = function(){
  //   const state = menubtn.dataset.isActive;
  //   if(state == "false"){
  //     menubtn.dataset.isActive = "true";
  //     body.classList.add("is-visible")
  //   }else{
  //     menubtn.dataset.isActive = "false";
  //     body.classList.remove("is-visible")
  //   }
  // };
  // // ボタンクリックでnavfunc動作
  // menubtn.addEventListener("click",navfunc);

  var spbtn = document.querySelectorAll(".gnav-btn");
  spbtn.forEach(function (btn) {
    btn.addEventListener("click", function () {
      body.classList.toggle("is-view");
    });
  });
};

menuVisivble(); // Language

var lang = function lang() {
  var check = document.getElementById("jp");
  var lang = document.querySelector(".lang-tit a");

  if (check !== null) {
    lang.innerText = "EN";
  } else {
    lang.innerText = "JP";
  }
};

lang(); // custom relation postsのタイトル変更

var chenge = function chenge() {
  var checks = document.getElementById("jp");
  var tit = document.querySelector(".sim-tit");

  if (checks !== null) {
    if (tit !== null) {
      tit.innerText = "似ている曲";
    }
  }
};

chenge(); // 遅延読み込み

var $lazy = document.querySelectorAll(".l-box,.lazyload");
var options = {
  root: null,
  // 今回はビューポートをルート要素とする
  rootMargin: "0px 0px -200px 0px",
  // ビューポートの中心を判定基準にする
  threshold: 0 // 閾値は0

}; // inViewportは関数　optionsはオプション

var io = new IntersectionObserver(inViewport, options);
Array.from($lazy).forEach(function (element) {
  io.observe(element);
});

function inViewport(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      var img = entry.target;
      img.addEventListener("load", function () {
        img.classList.add("is-lazyload");
      });
      var lb = entry.target;
      lb.classList.add("is-l-box");
      var imgEl = entry.target;
      imgEl.src = imgEl.dataset.src;
    }
  });
}

function doWhenIntersect(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      activateIndex(entry.target);
    }
  });
}