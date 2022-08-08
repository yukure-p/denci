"use strict";

// スマホメニュー開閉
const menuVisivble = () => {
  const body = document.body;
  const spbtn = document.querySelectorAll(".gnav-btn");
    console.log(spbtn);
  spbtn.forEach(function(btn){
    btn.addEventListener("click",() =>{
      body.classList.toggle("is-view")
    });
  });
};
menuVisivble();


// 目次

const tableOfContents = () => {
const boxes = document.querySelectorAll(".box");

const options = {
  root: null, // 今回はビューポートをルート要素とする
  rootMargin: "-50% 0px", // ビューポートの中心を判定基準にする
  threshold: 0 // 閾値は0
};
const observer = new IntersectionObserver(doWhenIntersect, options);
// それぞれのboxを監視する
boxes.forEach(box => {
  observer.observe(box);
});

/**
 * 交差したときに呼び出す関数
 * @param entries
 */
function doWhenIntersect(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(entry => {
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
  const currentActiveIndex = document.querySelector("#indexList .active");
  // すでにアクティブになっているものが0個の時（=null）以外は、activeクラスを除去
  if (currentActiveIndex !== null) {
    currentActiveIndex.classList.remove("active");
  }
  // 引数で渡されたDOMが飛び先のaタグを選択し、activeクラスを付与
  const newActiveIndex = document.querySelector(`a[href='#${element.id}']`);
  newActiveIndex.classList.add("active");
}
};
tableOfContents();


const scrooll = () => {
window.addEventListener('DOMContentLoaded', () => {
  const anchorLinks = document.querySelectorAll('a[href^="#"]')
  const anchorLinksArr = Array.prototype.slice.call(anchorLinks);

  anchorLinksArr.forEach(link => {
    link.addEventListener('click', e => {
      e.preventDefault();
      const targetId = link.hash;
      const targetElement = document.querySelector(targetId);
      const targetOffsetTop = window.pageYOffset + targetElement.getBoundingClientRect().top - 200;
      
      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth"
      });
    });
  });
});
};
scrooll();


const tab = () => {
document.addEventListener('DOMContentLoaded', function(){
  // タブに対してクリックイベントを適用
  const tabs = document.getElementsByClassName('tab');
  for(let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener('click', tabSwitch, false);
  }

  // タブをクリックすると実行する関数
  function tabSwitch(){
    // タブのclassの値を変更
    document.getElementsByClassName('is-active')[0].classList.remove('is-active');
    this.classList.add('is-active');
    // コンテンツのclassの値を変更
    document.getElementsByClassName('is-show')[0].classList.remove('is-show');
    const arrayTabs = Array.prototype.slice.call(tabs);
    const index = arrayTabs.indexOf(this);
    document.getElementsByClassName('panel')[index].classList.add('is-show');
  };
}, false);

};
tab();