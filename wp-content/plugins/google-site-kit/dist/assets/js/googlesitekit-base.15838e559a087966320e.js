!function(e){function t(t){for(var n,a,u=t[0],c=t[1],s=t[2],_=0,p=[];_<u.length;_++)a=u[_],Object.prototype.hasOwnProperty.call(o,a)&&o[a]&&p.push(o[a][0]),o[a]=0;for(n in c)Object.prototype.hasOwnProperty.call(c,n)&&(e[n]=c[n]);for(l&&l(t);p.length;)p.shift()();return i.push.apply(i,s||[]),r()}function r(){for(var e,t=0;t<i.length;t++){for(var r=i[t],n=!0,a=1;a<r.length;a++){var u=r[a];0!==o[u]&&(n=!1)}n&&(i.splice(t--,1),e=__webpack_require__(__webpack_require__.s=r[0]))}return e}var n={},o={8:0},i=[];function __webpack_require__(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,__webpack_require__),r.l=!0,r.exports}__webpack_require__.m=e,__webpack_require__.c=n,__webpack_require__.d=function(e,t,r){__webpack_require__.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},__webpack_require__.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},__webpack_require__.t=function(e,t){if(1&t&&(e=__webpack_require__(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(__webpack_require__.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)__webpack_require__.d(r,n,function(t){return e[t]}.bind(null,n));return r},__webpack_require__.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return __webpack_require__.d(t,"a",t),t},__webpack_require__.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},__webpack_require__.p="";var a=window.__googlesitekit_webpackJsonp=window.__googlesitekit_webpackJsonp||[],u=a.push.bind(a);a.push=t,a=a.slice();for(var c=0;c<a.length;c++)t(a[c]);var l=u;i.push([647,0]),r()}({56:function(e,t,r){"use strict";(function(e){r.d(t,"a",(function(){return c})),r.d(t,"b",(function(){return l})),r.d(t,"c",(function(){return _}));var n=r(35),o=r.n(n),i=r(0);function a(e,t){var r;if("undefined"==typeof Symbol||null==e[Symbol.iterator]){if(Array.isArray(e)||(r=function(e,t){if(!e)return;if("string"==typeof e)return u(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(e);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return u(e,t)}(e))||t&&e&&"number"==typeof e.length){r&&(e=r);var n=0,o=function(){};return{s:o,n:function(){return n>=e.length?{done:!0}:{done:!1,value:e[n++]}},e:function(e){throw e},f:o}}throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}var i,a=!0,c=!1;return{s:function(){r=e[Symbol.iterator]()},n:function(){var e=r.next();return a=e.done,e},e:function(e){c=!0,i=e},f:function(){try{a||null==r.return||r.return()}finally{if(c)throw i}}}}function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}var c=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0,t=null,r=null,n=document.querySelector("#toplevel_page_googlesitekit-dashboard .googlesitekit-notifications-counter"),o=document.querySelector("#wp-admin-bar-google-site-kit .googlesitekit-notifications-counter");if(n&&o)return!1;if(t=document.querySelector("#toplevel_page_googlesitekit-dashboard .wp-menu-name"),r=document.querySelector("#wp-admin-bar-google-site-kit .ab-item"),null===t&&null===r)return!1;var a=document.createElement("span");a.setAttribute("class","googlesitekit-notifications-counter update-plugins count-".concat(e));var u=document.createElement("span");u.setAttribute("class","plugin-count"),u.setAttribute("aria-hidden","true"),u.textContent=e;var c=document.createElement("span");return c.setAttribute("class","screen-reader-text"),c.textContent=Object(i.sprintf)(
/* translators: %d is the number of notifications */
Object(i._n)("%d notification","%d notifications",e,"google-site-kit"),e),a.appendChild(u),a.appendChild(c),t&&null===n&&t.appendChild(a),r&&null===o&&r.appendChild(a),a},l=function(){e.localStorage&&e.localStorage.clear(),e.sessionStorage&&e.sessionStorage.clear()},s=function(e){for(var t=location.search.substr(1).split("&"),r={},n=0;n<t.length;n++)r[t[n].split("=")[0]]=decodeURIComponent(t[n].split("=")[1]);return e?r.hasOwnProperty(e)?decodeURIComponent(r[e].replace(/\+/g," ")):"":r},_=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:location,r=new URL(t.href);if(e)return r.searchParams&&r.searchParams.get?r.searchParams.get(e):s(e);var n,i={},u=a(r.searchParams.entries());try{for(u.s();!(n=u.n()).done;){var c=o()(n.value,2),l=c[0],_=c[1];i[l]=_}}catch(e){u.e(e)}finally{u.f()}return i}}).call(this,r(15))},647:function(e,t,r){"use strict";r.r(t),function(e){var t=r(56);if("toplevel_page_googlesitekit-dashboard"!==e.pagenow&&"site-kit_page_googlesitekit-splash"!==e.pagenow&&"admin_page_googlesitekit-splash"!==e.pagenow&&e.localStorage){var n=e.localStorage.getItem("googlesitekit::total-notifications")||0;Object(t.a)(n)}var o=document.querySelector("#wp-admin-bar-logout a");o||(o=document.querySelector(".sidebar__me-signout button")),o&&o.addEventListener("click",(function(){Object(t.b)()}))}.call(this,r(15))}});