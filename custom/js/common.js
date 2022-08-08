"use strict"; // スマホメニュー開閉

var menuVisivble = function menuVisivble() {
  var body = document.body;
  var spbtn = document.querySelectorAll(".gnav-btn");
  console.log(spbtn);
  spbtn.forEach(function (btn) {
    btn.addEventListener("click", function () {
      body.classList.toggle("is-view");
    });
  });
};

menuVisivble(); // 目次

var tableOfContents = function tableOfContents() {
  var boxes = document.querySelectorAll(".box");
  var options = {
    root: null,
    // 今回はビューポートをルート要素とする
    rootMargin: "-50% 0px",
    // ビューポートの中心を判定基準にする
    threshold: 0 // 閾値は0

  };
  var observer = new IntersectionObserver(doWhenIntersect, options); // それぞれのboxを監視する

  boxes.forEach(function (box) {
    observer.observe(box);
  });
  /**
   * 交差したときに呼び出す関数
   * @param entries
   */

  function doWhenIntersect(entries) {
    // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        activateIndex(entry.target);
      }
    });
  }
  /**
   * 目次の色を変える関数
   * @param element
   */


  function activateIndex(element) {
    // すでにアクティブになっている目次を選択
    var currentActiveIndex = document.querySelector("#indexList .active"); // すでにアクティブになっているものが0個の時（=null）以外は、activeクラスを除去

    if (currentActiveIndex !== null) {
      currentActiveIndex.classList.remove("active");
    } // 引数で渡されたDOMが飛び先のaタグを選択し、activeクラスを付与


    var newActiveIndex = document.querySelector("a[href='#".concat(element.id, "']"));
    newActiveIndex.classList.add("active");
  }
};

tableOfContents();

var scrooll = function scrooll() {
  window.addEventListener('DOMContentLoaded', function () {
    var anchorLinks = document.querySelectorAll('a[href^="#"]');
    var anchorLinksArr = Array.prototype.slice.call(anchorLinks);
    anchorLinksArr.forEach(function (link) {
      link.addEventListener('click', function (e) {
        e.preventDefault();
        var targetId = link.hash;
        var targetElement = document.querySelector(targetId);
        var targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - 200;
        window.scrollTo({
          top: targetOffsetTop,
          behavior: "smooth"
        });
      });
    });
  });
};

scrooll();