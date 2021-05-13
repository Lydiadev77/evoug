!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.Glide=e()}(this,function(){"use strict";function t(t){console.error("[Glide warn]: "+t)}function e(t){return parseInt(t)}function n(t){return parseFloat(t)}function i(t){return"string"==typeof t}function r(t){var e="undefined"==typeof t?"undefined":V(t);return"function"===e||"object"===e&&!!t}function o(t){return"number"==typeof t}function s(t){return"function"==typeof t}function u(t){return"undefined"==typeof t}function a(t){return t.constructor===Array}function c(e,n,i){var r={};for(var o in n)s(n[o])?r[o]=n[o](e,r,i):t("Extension must be a function");for(var u in r)s(r[u].mount)&&r[u].mount();return r}function l(t,e,n){Object.defineProperty(t,e,n)}function f(t){return Object.keys(t).sort().reduce(function(e,n){return e[n]=t[n],e[n],e},{})}function d(t,e){var n=X({},t,e);return e.hasOwnProperty("classes")&&(n.classes=X({},t.classes,e.classes),e.classes.hasOwnProperty("direction")&&(n.classes.direction=X({},t.classes.direction,e.classes.direction))),e.hasOwnProperty("breakpoints")&&(n.breakpoints=X({},t.breakpoints,e.breakpoints)),n}function h(t,n,i){var r={mount:function(){this._o=!1},make:function(e){var r=this;t.disabled||(t.disable(),this.move=e,i.emit("run.before",this.move),this.calculate(),i.emit("run",this.move),n.Transition.after(function(){(r.isOffset("<")||r.isOffset(">"))&&(r._o=!1,i.emit("run.offset",r.move)),i.emit("run.after",r.move),t.enable()}))},calculate:function(){var n=this.move,r=this.length,s=n.steps,u=n.direction,a=o(e(s))&&0!==e(s);switch(u){case">":">"===s?t.index=r:this.isEnd()?(t.isType("slider")&&!t.settings.rewind||(this._o=!0,t.index=0),i.emit("run.end",n)):a?t.index+=Math.min(r-t.index,-e(s)):t.index++;break;case"<":"<"===s?t.index=0:this.isStart()?(t.isType("slider")&&!t.settings.rewind||(this._o=!0,t.index=r),i.emit("run.start",n)):a?t.index-=Math.min(t.index,e(s)):t.index--;break;case"=":t.index=s}},isStart:function(){return 0===t.index},isEnd:function(){return t.index===this.length},isOffset:function(t){return this._o&&this.move.direction===t}};return l(r,"move",{get:function(){return this._m},set:function(t){this._m={direction:t.substr(0,1),steps:t.substr(1)?t.substr(1):0}}}),l(r,"length",{get:function(){var i=t.settings,r=n.Html.slides.length;return t.isType("slider")&&"center"!==i.focusAt&&i.bound?r-1-(e(i.perView)-1)+e(i.focusAt):r-1}}),l(r,"offset",{get:function(){return this._o}}),r}function p(){return(new Date).getTime()}function v(t,e,n){var i=void 0,r=void 0,o=void 0,s=void 0,u=0;n||(n={});var a=function(){u=n.leading===!1?0:p(),i=null,s=t.apply(r,o),i||(r=o=null)},c=function(){var c=p();u||n.leading!==!1||(u=c);var l=e-(c-u);return r=this,o=arguments,0>=l||l>e?(i&&(clearTimeout(i),i=null),u=c,s=t.apply(r,o),i||(r=o=null)):i||n.trailing===!1||(i=setTimeout(a,l)),s};return c.cancel=function(){clearTimeout(i),u=0,i=r=o=null},c}function m(t,n,i){var r={apply:function(t){for(var e=0,i=t.length;i>e;e++){var r=t[e].style,o=n.Direction.value;0!==e?r[$[o][0]]=this.value/2+"px":r[$[o][0]]="",e!==t.length-1?r[$[o][1]]=this.value/2+"px":r[$[o][1]]=""}},remove:function(t){for(var e=0,n=t.length;n>e;e++){var i=t[e].style;i.marginLeft="",i.marginRight=""}}};return l(r,"value",{get:function(){return e(t.settings.gap)}}),l(r,"grow",{get:function(){return r.value*(n.Sizes.length-1)}}),l(r,"reductor",{get:function(){var e=t.settings.perView;return r.value*(e-1)/e}}),i.on(["build.after","update"],v(function(){r.apply(n.Html.wrapper.children)},30)),i.on("destroy",function(){r.remove(n.Html.wrapper.children)}),r}function g(t){if(t&&t.parentNode){for(var e=t.parentNode.firstChild,n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n}return[]}function y(t){return!!(t&&t instanceof window.HTMLElement)}function b(e){var n={mount:function(){this.root=e.selector,this.track=this.root.querySelector(tt),this.slides=Array.prototype.slice.call(this.wrapper.children).filter(function(t){return!t.classList.contains(e.settings.classes.cloneSlide)})}};return l(n,"root",{get:function(){return n._r},set:function(e){i(e)&&(e=document.querySelector(e)),y(e)?n._r=e:t("Root element must be a existing Html node")}}),l(n,"track",{get:function(){return n._t},set:function(e){y(e)?n._t=e:t("Could not find track element. Please use "+tt+" attribute.")}}),l(n,"wrapper",{get:function(){return n.track.children[0]}}),n}function w(t,n,i){var o={mount:function(){this.value=t.settings.peek}};return l(o,"value",{get:function(){return o._v},set:function(t){r(t)?(t.before=e(t.before),t.after=e(t.after)):t=e(t),o._v=t}}),l(o,"reductor",{get:function(){var e=o.value,n=t.settings.perView;return r(e)?e.before/n+e.after/n:2*e/n}}),i.on(["resize","update"],function(){o.mount()}),o}function _(t,n,i){var r={mount:function(){this._o=0},make:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:0;this.offset=e,i.emit("move",{movement:this.value}),n.Transition.after(function(){i.emit("move.after",{movement:t.value})})}};return l(r,"offset",{get:function(){return r._o},set:function(t){r._o=u(t)?0:e(t)}}),l(r,"translate",{get:function(){return n.Sizes.slideWidth*t.index}}),l(r,"value",{get:function(){var t=this.offset,e=this.translate;return n.Direction.is("rtl")?e+t:e-t}}),i.on(["build.before","run"],function(){r.make()}),r}function k(t,e,n){var i={setupSlides:function(){for(var t=e.Html.slides,n=0;n<t.length;n++)t[n].style.width=this.slideWidth+"px"},setupWrapper:function(){e.Html.wrapper.style.width=this.wrapperSize+"px"},remove:function(){for(var t=e.Html.slides,n=0;n<t.length;n++)t[n].style.width="";e.Html.wrapper.style.width=""}};return l(i,"length",{get:function(){return e.Html.slides.length}}),l(i,"width",{get:function(){return e.Html.root.offsetWidth}}),l(i,"wrapperSize",{get:function(){return i.slideWidth*i.length+e.Gaps.grow+e.Clones.grow}}),l(i,"slideWidth",{get:function(){return i.width/t.settings.perView-e.Peek.reductor-e.Gaps.reductor}}),n.on(["build.before","resize","update"],function(){i.setupSlides(),i.setupWrapper()}),n.on("destroy",function(){i.remove()}),i}function S(t,e,n){var i={mount:function(){n.emit("build.before"),this.typeClass(),this.activeClass(),n.emit("build.after")},typeClass:function(){e.Html.root.classList.add(t.settings.classes[t.settings.type])},activeClass:function(){var n=t.settings.classes,i=e.Html.slides[t.index];i&&(i.classList.add(n.activeSlide),g(i).forEach(function(t){t.classList.remove(n.activeSlide)}))},removeClasses:function(){var n=t.settings.classes;e.Html.root.classList.remove(n[t.settings.type]),e.Html.slides.forEach(function(t){t.classList.remove(n.activeSlide)})}};return n.on(["destroy","update"],function(){i.removeClasses()}),n.on(["resize","update"],function(){i.mount()}),n.on("move.after",function(){i.activeClass()}),i}function H(t,e,n){var i={mount:function(){this.items=[],t.isType("carousel")&&(this.items=this.collect())},collect:function(){for(var n=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],i=e.Html.slides,r=t.settings,o=r.perView,s=r.classes,u=+!!t.settings.peek,a=o+u,c=i.slice(0,a),l=i.slice(-a),f=0;f<Math.max(1,Math.floor(o/i.length));f++){for(var d=0;d<c.length;d++){var h=c[d].cloneNode(!0);h.classList.add(s.cloneSlide),n.push(h)}for(var p=0;p<l.length;p++){var v=l[p].cloneNode(!0);v.classList.add(s.cloneSlide),n.unshift(v)}}return n},append:function r(){for(var t=this.items,n=e.Html,i=n.wrapper,o=n.slides,s=Math.floor(t.length/2),u=t.slice(0,s).reverse(),r=t.slice(s,t.length),a=0;a<r.length;a++)i.appendChild(r[a]);for(var c=0;c<u.length;c++)i.insertBefore(u[c],o[0]);for(var l=0;l<t.length;l++)t[l].style.width=e.Sizes.slideWidth+"px"},remove:function(){for(var t=this.items,n=0;n<t.length;n++)e.Html.wrapper.removeChild(t[n])}};return l(i,"grow",{get:function(){return(e.Sizes.slideWidth+e.Gaps.value)*i.items.length}}),n.on("update",function(){i.remove(),i.mount(),i.append()}),n.on("build.before",function(){t.isType("carousel")&&i.append()}),n.on("destroy",function(){i.remove()}),i}function T(t,e,n){var i=new et,r={mount:function(){this.bind()},bind:function(){i.on("resize",window,v(function(){n.emit("resize")},t.settings.throttle))},unbind:function(){i.off("resize",window)}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r}function x(e,n,i){var r={mount:function(){this.value=e.settings.direction},resolve:function(t){var e=t.slice(0,1);return this.is("rtl")?t.split(e).join(it[e]):t},is:function(t){return this.value===t},addClass:function(){n.Html.root.classList.add(e.settings.classes.direction[this.value])},removeClass:function(){n.Html.root.classList.remove(e.settings.classes.direction[this.value])}};return l(r,"value",{get:function(){return r._v},set:function(e){nt.indexOf(e)>-1?r._v=e:t("Direction value must be `ltr` or `rtl`")}}),i.on(["destroy","update"],function(){r.removeClass()}),i.on("update",function(){r.mount()}),i.on(["build.before","update"],function(){r.addClass()}),r}function O(t,e){return{modify:function(t){return e.Direction.is("rtl")?-t:t}}}function A(t,e){return{modify:function(n){return n+e.Gaps.value*t.index}}}function M(t,e){return{modify:function(t){return t+e.Clones.grow/2}}}function C(t,e){return{modify:function(n){if(t.settings.focusAt>=0){var i=e.Peek.value;return r(i)?n-i.before:n-i}return n}}}function P(t,e){return{modify:function(n){var i=e.Gaps.value,r=e.Sizes.width,o=t.settings.focusAt,s=e.Sizes.slideWidth;return"center"===o?n-(r/2-s/2):n-s*o-i*o}}}function j(e,n,i){var r=[A,M,C,P].concat(e._t,[O]);return{mutate:function(o){for(var u=0;u<r.length;u++){var a=r[u];s(a)&&s(a().modify)?o=a(e,n,i).modify(o):t("Transformer should be a function that returns an object with `modify()` method")}return o}}}function L(t,e,n){var i={set:function(n){var i=j(t,e).mutate(n);e.Html.wrapper.style.transform="translate3d("+-1*i+"px, 0px, 0px)"},remove:function(){e.Html.wrapper.style.transform=""}};return n.on("move",function(r){var o=e.Gaps.value,s=e.Sizes.length,u=e.Sizes.slideWidth;return t.isType("carousel")&&e.Run.isOffset("<")?(e.Transition.after(function(){n.emit("translate.jump"),i.set(u*(s-1))}),i.set(-u-o*s)):t.isType("carousel")&&e.Run.isOffset(">")?(e.Transition.after(function(){n.emit("translate.jump"),i.set(0)}),i.set(u*s+o*s)):i.set(r.movement)}),n.on("destroy",function(){i.remove()}),i}function z(t,e,n){var i=!1,r={compose:function(e){var n=t.settings;return i?e+" 0ms "+n.animationTimingFunc:e+" "+this.duration+"ms "+n.animationTimingFunc},set:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"transform";e.Html.wrapper.style.transition=this.compose(t)},remove:function(){e.Html.wrapper.style.transition=""},after:function(t){setTimeout(function(){t()},this.duration)},enable:function(){i=!1,this.set()},disable:function(){i=!0,this.set()}};return l(r,"duration",{get:function(){var n=t.settings;return t.isType("slider")&&e.Run.offset?n.rewindDuration:n.animationDuration}}),n.on("move",function(){r.set()}),n.on(["build.before","resize","translate.jump"],function(){r.disable()}),n.on("run",function(){r.enable()}),n.on("destroy",function(){r.remove()}),r}function D(t,i,r){var o=new et,s=0,u=0,a=0,c=!1,l=!0,f=ut?{passive:!0}:!1,d={mount:function(){this.bindSwipeStart()},start:function(n){if(!c&&!t.disabled){this.disable();var i=this.touches(n);l=!0,s=null,u=e(i.pageX),a=e(i.pageY),this.bindSwipeMove(),this.bindSwipeEnd(),r.emit("swipe.start")}},move:function(o){if(!t.disabled){var c=t.settings,f=c.touchAngle,d=c.touchRatio,h=c.classes,p=this.touches(o),v=e(p.pageX)-u,m=e(p.pageY)-a,g=Math.abs(v<<2),y=Math.abs(m<<2),b=Math.sqrt(g+y),w=Math.sqrt(y);if(s=Math.asin(w/b),!(l&&180*s/Math.PI<f))return l=!1,!1;o.stopPropagation(),i.Move.make(v*n(d)),i.Html.root.classList.add(h.dragging),r.emit("swipe.move")}},end:function(n){if(!t.disabled){var o=t.settings,a=this.touches(n),c=this.threshold(n),f=a.pageX-u,d=180*s/Math.PI,h=Math.round(f/i.Sizes.slideWidth);this.enable(),l&&(f>c&&d<o.touchAngle?(o.perTouch&&(h=Math.min(h,e(o.perTouch))),i.Direction.is("rtl")&&(h=-h),i.Run.make(i.Direction.resolve("<"+h))):-c>f&&d<o.touchAngle?(o.perTouch&&(h=Math.max(h,-e(o.perTouch))),i.Direction.is("rtl")&&(h=-h),i.Run.make(i.Direction.resolve(">"+h))):i.Move.make()),i.Html.root.classList.remove(o.classes.dragging),this.unbindSwipeMove(),this.unbindSwipeEnd(),r.emit("swipe.end")}},bindSwipeStart:function(){var e=this,n=t.settings;n.swipeThreshold&&o.on(at[0],i.Html.wrapper,function(t){e.start(t)},f),n.dragThreshold&&o.on(at[1],i.Html.wrapper,function(t){e.start(t)},f)},unbindSwipeStart:function(){o.off(at[0],i.Html.wrapper),o.off(at[1],i.Html.wrapper)},bindSwipeMove:function(){var e=this;o.on(ct,i.Html.wrapper,v(function(t){e.move(t)},t.settings.throttle),f)},unbindSwipeMove:function(){o.off(ct,i.Html.wrapper)},bindSwipeEnd:function(){var t=this;o.on(lt,i.Html.wrapper,function(e){t.end(e)})},unbindSwipeEnd:function(){o.off(lt,i.Html.wrapper)},touches:function(t){return ft.indexOf(t.type)>-1?t:t.touches[0]||t.changedTouches[0]},threshold:function(e){var n=t.settings;return ft.indexOf(e.type)>-1?n.dragThreshold:n.swipeThreshold},enable:function(){return c=!1,i.Transition.enable(),this},disable:function(){return c=!0,i.Transition.disable(),this}};return r.on("build.after",function(){i.Html.root.classList.add(t.settings.classes.swipeable)}),r.on("destroy",function(){d.unbindSwipeStart(),d.unbindSwipeMove(),d.unbindSwipeEnd(),o.destroy()}),d}function E(t,e,n){var i=new et,r={mount:function(){this.bind()},bind:function(){i.on("dragstart",e.Html.wrapper,this.dragstart)},unbind:function(){i.off("dragstart",e.Html.wrapper)},dragstart:function(t){t.preventDefault()}};return n.on("destroy",function(){r.unbind(),i.destroy()}),r}function R(t,e,n){var i=new et,r=!1,o=!1,s={mount:function(){this._a=e.Html.wrapper.querySelectorAll("a"),this.bind()},bind:function(){i.on("click",e.Html.wrapper,this.click)},unbind:function(){i.off("click",e.Html.wrapper)},click:function(t){t.stopPropagation(),o&&t.preventDefault()},detach:function(){if(o=!0,!r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!1,this.items[t].setAttribute("data-href",this.items[t].getAttribute("href")),this.items[t].removeAttribute("href");r=!0}return this},attach:function(){if(o=!1,r){for(var t=0;t<this.items.length;t++)this.items[t].draggable=!0,this.items[t].setAttribute("href",this.items[t].getAttribute("data-href"));r=!1}return this}};return l(s,"items",{get:function(){return s._a}}),n.on("swipe.move",function(){s.detach()}),n.on("swipe.end",function(){e.Transition.after(function(){s.attach()})}),n.on("destroy",function(){s.attach(),s.unbind(),i.destroy()}),s}function W(t,e,n){var i=new et,r={mount:function(){this._n=e.Html.root.querySelectorAll(dt),this._c=e.Html.root.querySelectorAll(ht),this.addBindings()},setActive:function(){for(var t=0;t<this._n.length;t++)this.addClass(this._n[t].children)},removeActive:function(){for(var t=0;t<this._n.length;t++)this.removeClass(this._n[t].children)},addClass:function(e){var n=t.settings,i=e[t.index];i.classList.add(n.classes.activeNav),g(i).forEach(function(t){t.classList.remove(n.classes.activeNav)})},removeClass:function(e){e[t.index].classList.remove(t.settings.classes.activeNav)},addBindings:function(){for(var t=0;t<this._c.length;t++)this.bind(this._c[t].children)},removeBindings:function(){for(var t=0;t<this._c.length;t++)this.unbind(this._c[t].children)},bind:function(t){for(var e=0;e<t.length;e++)i.on(["click","touchstart"],t[e],this.click)},unbind:function(t){for(var e=0;e<t.length;e++)i.off(["click","touchstart"],t[e])},click:function(t){t.preventDefault(),e.Run.make(e.Direction.resolve(t.currentTarget.getAttribute("data-glide-dir")))}};return l(r,"items",{get:function(){return r._c}}),n.on(["mount.after","move.after"],function(){r.setActive()}),n.on("destroy",function(){r.removeBindings(),r.removeActive(),i.destroy()}),r}function G(t,e,n){var i=new et,r={mount:function(){t.settings.keyboard&&this.bind()},bind:function(){i.on("keyup",document,this.press)},unbind:function(){i.off("keyup",document)},press:function(t){39===t.keyCode&&e.Run.make(e.Direction.resolve(">")),37===t.keyCode&&e.Run.make(e.Direction.resolve("<"))}};return n.on(["destroy","update"],function(){r.unbind()}),n.on("update",function(){r.mount()}),n.on("destroy",function(){i.destroy()}),r}function B(t,n,i){var r=new et,o={mount:function(){this.start(),t.settings.hoverpause&&this.bind()},start:function(){var e=this;t.settings.autoplay&&u(this._i)&&(this._i=setInterval(function(){e.stop(),n.Run.make(">"),e.start()},this.time))},stop:function(){this._i=clearInterval(this._i)},bind:function(){var t=this;r.on("mouseover",n.Html.root,function(){t.stop()}),r.on("mouseout",n.Html.root,function(){t.start()})},unbind:function(){r.off(["mouseover","mouseout"],n.Html.root)}};return l(o,"time",{get:function(){var i=n.Html.slides[t.index].getAttribute("data-glide-autoplay");return e(i?i:t.settings.autoplay)}}),i.on(["destroy","update"],function(){o.unbind()}),i.on(["run.before","pause","destroy","swipe.start","update"],function(){o.stop()}),i.on(["run.after","play","swipe.end"],function(){o.start()}),i.on("update",function(){o.mount()}),i.on("destroy",function(){r.destroy()}),o}function N(e){return r(e)?f(e):(t("Breakpoints option must be an object"),{})}function q(t,e,n){var i=new et,r=t.settings,o=N(r.breakpoints),s=X({},r),u={match:function(t){if("undefined"!=typeof window.matchMedia)for(var e in t)if(t.hasOwnProperty(e)&&window.matchMedia("(max-width: "+e+"px)").matches)return t[e];return s}};return X(r,u.match(o)),i.on("resize",window,v(function(){t.settings=d(r,u.match(o))},t.settings.throttle)),n.on("update",function(){o=N(o),s=X({},r)}),n.on("destroy",function(){i.off("resize",window)}),u}var I={type:"slider",startAt:0,perView:1,focusAt:0,gap:10,autoplay:!1,hoverpause:!0,keyboard:!0,bound:!1,swipeThreshold:80,dragThreshold:120,perTouch:!1,touchRatio:.5,touchAngle:45,animationDuration:400,rewind:!0,rewindDuration:800,animationTimingFunc:"cubic-bezier(.165, .840, .440, 1)",throttle:10,direction:"ltr",peek:0,breakpoints:{},classes:{direction:{ltr:"glide--ltr",rtl:"glide--rtl"},slider:"glide--slider",carousel:"glide--carousel",swipeable:"glide--swipeable",dragging:"glide--dragging",cloneSlide:"glide__slide--clone",activeNav:"glide__bullet--active",activeSlide:"glide__slide--active",disabledArrow:"glide__arrow--disabled"}},V="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},F=function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")},Y=function(){function t(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}return function(e,n,i){return n&&t(e.prototype,n),i&&t(e,i),e}}(),X=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var n=arguments[e];for(var i in n)Object.prototype.hasOwnProperty.call(n,i)&&(t[i]=n[i])}return t},K=function mt(t,e,n){null===t&&(t=Function.prototype);var i=Object.getOwnPropertyDescriptor(t,e);if(void 0===i){var r=Object.getPrototypeOf(t);return null===r?void 0:mt(r,e,n)}if("value"in i)return i.value;var o=i.get;if(void 0!==o)return o.call(n)},J=function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)},Q=function(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!=typeof e&&"function"!=typeof e?t:e},U=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};F(this,t),this.events=e,this.hop=e.hasOwnProperty}return Y(t,[{key:"on",value:function(t,e){if(a(t))for(var n=0;n<t.length;n++)this.on(t[n],e);this.hop.call(this.events,t)||(this.events[t]=[]);var i=this.events[t].push(e)-1;return{remove:function(){delete this.events[t][i]}}}},{key:"emit",value:function(t,e){if(a(t))for(var n=0;n<t.length;n++)this.emit(t[n],e);this.hop.call(this.events,t)&&this.events[t].forEach(function(t){t(e||{})})}}]),t}(),Z=function(){function n(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};F(this,n),this._c={},this._t=[],this._e=new U,this.disabled=!1,this.selector=t,this.settings=d(I,e),this.index=this.settings.startAt}return Y(n,[{key:"mount",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this._e.emit("mount.before"),r(e)?this._c=c(this,e,this._e):t("You need to provide a object on `mount()`"),this._e.emit("mount.after"),this}},{key:"mutate",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];return a(e)?this._t=e:t("You need to provide a array on `mutate()`"),this}},{key:"update",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this.settings=d(this.settings,t),t.hasOwnProperty("startAt")&&(this.index=t.startAt),this._e.emit("update"),this}},{key:"go",value:function(t){return this._c.Run.make(t),this}},{key:"move",value:function(t){return this._c.Transition.disable(),this._c.Move.make(t),this}},{key:"destroy",value:function(){return this._e.emit("destroy"),this}},{key:"play",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:!1;return t&&(this.settings.autoplay=t),this._e.emit("play"),this}},{key:"pause",value:function(){return this._e.emit("pause"),this}},{key:"disable",value:function(){return this.disabled=!0,this}},{key:"enable",value:function(){return this.disabled=!1,this}},{key:"on",value:function(t,e){return this._e.on(t,e),this}},{key:"isType",value:function(t){return this.settings.type===t}},{key:"settings",get:function(){return this._o},set:function(e){r(e)?this._o=e:t("Options must be an `object` instance.")}},{key:"index",get:function(){return this._i},set:function(t){this._i=e(t)}},{key:"type",get:function(){return this.settings.type}},{key:"disabled",get:function(){return this._d},set:function(t){this._d=!!t}}]),n}(),$={ltr:["marginLeft","marginRight"],rtl:["marginRight","marginLeft"]},tt='[data-glide-el="track"]',et=function(){function t(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};F(this,t),this.listeners=e}return Y(t,[{key:"on",value:function(t,e,n){var r=arguments.length>3&&void 0!==arguments[3]?arguments[3]:!1;i(t)&&(t=[t]);for(var o=0;o<t.length;o++)this.listeners[t[o]]=n,e.addEventListener(t[o],this.listeners[t[o]],r)}},{key:"off",value:function(t,e){i(t)&&(t=[t]);for(var n=0;n<t.length;n++)e.removeEventListener(t[n],this.listeners[t[n]],!1)}},{key:"destroy",value:function(){delete this.listeners}}]),t}(),nt=["ltr","rtl"],it={">":"<","<":">","=":"="},rt=!1;try{var ot=Object.defineProperty({},"passive",{get:function(){rt=!0}});window.addEventListener("testPassive",null,ot),window.removeEventListener("testPassive",null,ot)}catch(st){}var ut=rt,at=["touchstart","mousedown"],ct=["touchmove","mousemove"],lt=["touchend","touchcancel","mouseup","mouseleave"],ft=["mousedown","mousemove","mouseup","mouseleave"],dt='[data-glide-el="controls[nav]"]',ht='[data-glide-el^="controls"]',pt={Html:b,Translate:L,Transition:z,Direction:x,Peek:w,Sizes:k,Gaps:m,Move:_,Clones:H,Resize:T,Build:S,Run:h,Swipe:D,Images:E,Anchors:R,Controls:W,Keyboard:G,Autoplay:B,Breakpoints:q},vt=function(t){function e(){return F(this,e),Q(this,(e.__proto__||Object.getPrototypeOf(e)).apply(this,arguments))}return J(e,t),Y(e,[{key:"mount",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return K(e.prototype.__proto__||Object.getPrototypeOf(e.prototype),"mount",this).call(this,X({},pt,t))}}]),e}(Z);return vt});
//# sourceMappingURL=/javascripts/user/glide_js.js.map