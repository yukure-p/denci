"use strict";

// スマホメニュー開閉
const menuVisivble = () => {
  // セレクタを取得
  // const menubtn = document.querySelector(".nav-btn");
  const body = document.body;
  // // navfunc動作
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


  const spbtn = document.querySelectorAll(".gnav-btn");
  spbtn.forEach(function(btn){
    btn.addEventListener("click",() =>{
      body.classList.toggle("is-view")
    });
  });


};
// menuVisivble();

// // Language
// const lang = () => {
//   const check = document.getElementById("jp");
//   const lang = document.querySelector(".lang-tit a");
//   if(check !== null){
//     lang.innerText = "EN";
//   }else{
//     lang.innerText = "JP";
//   }
  
// };
// lang();



// // custom relation postsのタイトル変更
// const chenge = () => {
//   const checks = document.getElementById("jp");
//   const tit = document.querySelector(".sim-tit");
//   if(checks !== null){
//     if(tit !== null){
//       tit.innerText = "似ている曲";
//     }
//   }
// };
// chenge();




// 遅延読み込み
const $lazy = document.querySelectorAll(".l-box,.lazyload");

const options = {
  root: null, // 今回はビューポートをルート要素とする
  rootMargin: "0px 0px -200px 0px", // ビューポートの中心を判定基準にする
  threshold: 0 // 閾値は0
};

// inViewportは関数　optionsはオプション
const io = new IntersectionObserver(inViewport, options);

Array.from($lazy).forEach( element => {
  io.observe(element);
});

function inViewport(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const img = entry.target;
      img.addEventListener("load", ()=>{
        img.classList.add("is-lazyload");
      });
      const lb = entry.target;
      lb.classList.add("is-l-box");

      const imgEl = entry.target;
      imgEl.src = imgEl.dataset.src;
    }
  });
}
function doWhenIntersect(entries) {
  // 交差検知をしたもののなかで、isIntersectingがtrueのDOMを色を変える関数に渡す
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      activateIndex(entry.target);
    }
  });
}



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


