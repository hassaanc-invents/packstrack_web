(()=>{var e,t={349:()=>{var e;(e=jQuery)(document).on("ready",(function(){var t="completed",s=e(".hostinger.hsr-onboarding"),r=e(".hsr-learn-more");r.hide();var i="Home",o=e(".hsr-onboarding-step--title"),a=e(".hsr-got-it-btn"),n=e(".hsr-publish-btn"),l=e(".hsr-close-btn"),d=e(".hsr-list__item"),c=e("#card-knowledge"),h=e("#card-help"),p=e(".hsr-video-frame");p[0].src="https://www.youtube.com/embed/WkbQr5dSGLs",a.on("click",(function(s){s.preventDefault();var r=e(this),i=e(this).data("step"),o=e(".hsr-onboarding-steps").data("remaining-tasks");e.ajax({type:"post",dataType:"json",url:ajaxurl,data:{action:"hostinger_complete_onboarding_step",step:i},success:function(){r.closest(".hsr-onboarding-step--content").slideUp(),r.parents(".hsr-onboarding-step").find(".hsr-onboarding-step--status").addClass(t),o>0&&(o-=1,e(".hsr-onboarding-steps").data("remaining-tasks",o),0===o&&e(".hsr-publish-btn").addClass(t))}})})),o.on("click",(function(){e(this).find(".hsr-onboarding-step--expand").toggleClass("open"),e(this).parent().find(".hsr-onboarding-step--content").slideToggle(200)})),n.on("click",(function(t){t.preventDefault(),e(".hsr-modal").addClass("open"),e("body").addClass("modal-open"),e.ajax({type:"post",dataType:"json",url:ajaxUrl,data:{action:"hostinger_publish_website",maintenance:0},success:function(t){var s=e(".hsr-preview-btn");e(".hsr-circular").addClass("hsr-hide"),e(".hsr-success-circular").addClass("hsr-show"),e(".hsr-publish-modal--footer").addClass("show"),e(".hsr-publish-modal--body h3").text(t.data.title),e(".hsr-publish-modal--body__description").text(t.data.description),e(".hsr-publish-btn").addClass("hsr-preview"),s.addClass("hsr-preview"),s.text(t.data.content.btn.text),e(".hsr-onboarding__title").text(t.data.content.title),e(".hsr-onboarding__description").text(t.data.content.description)}})})),l.on("click",(function(){e(".hsr-modal").removeClass("open"),e("body").removeClass("modal-open")})),d.click((function(){var t=e(this);e(".hsr-list__item").removeClass("hsr-active"),t.addClass("hsr-active"),"home"===(i=t.data("name"))?(s.show(),r.hide()):"learn"===i&&(s.hide(),r.show())})),h.click((function(){window.open("https://hostinger.com/cpanel-login?r=jump-to/new-panel/section/help","_blank")})),c.click((function(){window.open("https://support.hostinger.com/en/?q=WordPress","_blank")})),document.querySelectorAll(".hsr-playlist-item").forEach((function(t){var s=document.querySelector(".hsr-playlist-item:first-child");s.classList.add("hsr-active-video"),s.querySelector(".hsr-playlist-item-arrow").style.visibility="visible",t.addEventListener("click",(function(){!function(e,t){document.querySelector(".hsr-main-video-title").innerHTML=t,p[0].src="https://www.youtube.com/embed/"+e}(e(this).data("id"),e(this).data("title")),document.querySelectorAll(".hsr-playlist-item.hsr-active-video").forEach((function(e){e.classList.remove("hsr-active-video"),e.querySelector(".hsr-playlist-item-arrow").style.visibility="hidden"})),this.classList.add("hsr-active-video"),this.querySelector(".hsr-playlist-item-arrow").style.visibility="visible"}))}))}))},821:()=>{}},s={};function r(e){var i=s[e];if(void 0!==i)return i.exports;var o=s[e]={exports:{}};return t[e](o,o.exports,r),o.exports}r.m=t,e=[],r.O=(t,s,i,o)=>{if(!s){var a=1/0;for(c=0;c<e.length;c++){for(var[s,i,o]=e[c],n=!0,l=0;l<s.length;l++)(!1&o||a>=o)&&Object.keys(r.O).every((e=>r.O[e](s[l])))?s.splice(l--,1):(n=!1,o<a&&(a=o));if(n){e.splice(c--,1);var d=i();void 0!==d&&(t=d)}}return t}o=o||0;for(var c=e.length;c>0&&e[c-1][2]>o;c--)e[c]=e[c-1];e[c]=[s,i,o]},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={522:0,870:0};r.O.j=t=>0===e[t];var t=(t,s)=>{var i,o,[a,n,l]=s,d=0;if(a.some((t=>0!==e[t]))){for(i in n)r.o(n,i)&&(r.m[i]=n[i]);if(l)var c=l(r)}for(t&&t(s);d<a.length;d++)o=a[d],r.o(e,o)&&e[o]&&e[o][0](),e[o]=0;return r.O(c)},s=self.webpackChunk=self.webpackChunk||[];s.forEach(t.bind(null,0)),s.push=t.bind(null,s.push.bind(s))})(),r.O(void 0,[870],(()=>r(349)));var i=r.O(void 0,[870],(()=>r(821)));i=r.O(i)})();