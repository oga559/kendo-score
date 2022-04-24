/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/history_detail.js ***!
  \****************************************/
var selects = document.querySelectorAll('select');
var inputs = document.querySelectorAll('.input');
var date = document.querySelector('.date');
var openBtn = document.getElementById('openBtn');
var closeBtn = document.getElementById('closeBtn');
var modal_content = document.querySelector('.modal_content'); // モーダル表示して、過去に登録したプレイヤー登録可能
// openBtn.addEventListener('click', function(){
//     modal.style.display = 'block'
//     //Scoreデータの多次元配列を１つずつ取り出す
//     Laravel.player.forEach(element => {
//         //Scoreデータから試合名を作成する処理
//         const p = document.createElement("p");
//         const game_title = document.createTextNode(element.game_name);
//         p.appendChild(game_title);
//         modal_content.appendChild(p);
//         //PlayerデータをScoreデータからリレーションで取り出す
//         //そしてPlayerのselect作成
//         let select = document.createElement('select');
//         element.players.forEach(element =>{
//             console.log(element);
//             let option = document.createElement("option");
//             option.text = element.name;
//             option.value = element.id;
//             select.appendChild(option);
//             p.appendChild(select);
//         })
//     });
// })
// 非表示（closeBtnというidのボタンがクリックされたら、display:noneになる）
// closeBtn.addEventListener('click', function(){
//     modal.style.display = 'none';
// })
// addEventListener('click', function(close_bg){
//     if(close_bg.target === modal){
//         modal.style.display = 'none';
//     }
// })
//select両者１本とることがないようにする

var del_select = function del_select($i) {
  var obj = selects[$i];
  obj.selectedIndex = 0;
}; //グローバル


window.del_select = del_select; //リセットボタンで入力値を全削除

var reset_btn = function reset_btn() {
  //selectの選択を解除
  for ($i = 0; $i <= 29; $i++) {
    var obj = selects[$i];
    obj.selectedIndex = 0;
  } //input type=textの入力を消す


  for ($i = 0; $i <= 10; $i++) {
    var _obj = inputs[$i];
    _obj.value = "";
  } //input type=dateの入力を消す


  date.value = "";
};

window.reset_btn = reset_btn;
/******/ })()
;