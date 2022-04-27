/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/score_create.js":
/*!**************************************!*\
  !*** ./resources/js/score_create.js ***!
  \**************************************/
/***/ (() => {

var selects = document.querySelectorAll('select');
var inputs = document.querySelectorAll('.input');
var date = document.querySelector('.date');
var openBtn = document.getElementById('openBtn');
var closeBtn = document.getElementById('closeBtn');
var modal_content = document.querySelector('.modal_content');
var p = document.createElement("p"); //モーダル表示

var modal_open = function modal_open($input, $k) {
  modal.style.display = 'block'; // モーダル表示して、過去に登録したプレイヤー登録可能
  //Scoreデータの多次元配列を１つずつ取り出す

  Laravel.player.forEach(function (element) {
    //Scoreデータから試合名を作成する処理
    var game_title = document.createTextNode(element.game_name);
    p.appendChild(game_title);
    modal_content.appendChild(p); //PlayerデータをScoreデータからリレーションで取り出す
    //そしてPlayer表示

    element.players.forEach(function (element) {
      var btn = document.createElement('button');
      btn.type = 'button';
      btn.innerHTML = element.name;
      btn.value = element.id;

      btn.onclick = function form_in() {
        document.querySelector('.' + $input).value = element.name;
        var in_hidden = document.createElement("input");
        in_hidden.setAttribute("type", "hidden");
        in_hidden.value = element.id;
        in_hidden.name = 'score[player_id][' + $k + ']';
        date.appendChild(in_hidden);
        console.log(in_hidden);
      };

      p.appendChild(btn);
    });
  });
};

window.modal_open = modal_open; // 非表示（closeBtnというidのボタンがクリックされたら、display:noneになる）

window.closeBtn.addEventListener('click', function () {
  modal.style.display = 'none';

  while (p.firstChild) {
    p.removeChild(p.firstChild);
  }
}); //select両者１本とることがないようにする

var del_select = function del_select($i) {
  var obj = selects[$i];
  obj.selectedIndex = 0;
};

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

/***/ }),

/***/ "./resources/css/index.css":
/*!*********************************!*\
  !*** ./resources/css/index.css ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/history_detail.css":
/*!******************************************!*\
  !*** ./resources/css/history_detail.css ***!
  \******************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/score_create.css":
/*!****************************************!*\
  !*** ./resources/css/score_create.css ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/score_create": 0,
/******/ 			"css/score_create": 0,
/******/ 			"css/history_detail": 0,
/******/ 			"css/index": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/score_create","css/history_detail","css/index"], () => (__webpack_require__("./resources/js/score_create.js")))
/******/ 	__webpack_require__.O(undefined, ["css/score_create","css/history_detail","css/index"], () => (__webpack_require__("./resources/css/index.css")))
/******/ 	__webpack_require__.O(undefined, ["css/score_create","css/history_detail","css/index"], () => (__webpack_require__("./resources/css/history_detail.css")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/score_create","css/history_detail","css/index"], () => (__webpack_require__("./resources/css/score_create.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;