(()=>{var e,t={80:()=>{window.addEventListener("load",(function(){var e=document.querySelector("#primary-menu");document.querySelector("#primary-menu-toggle").addEventListener("click",(function(t){t.preventDefault(),e.classList.toggle("hidden")}));var t=document.getElementById("primary-menu-toggle");t.addEventListener("click",(function(){t.classList.toggle("active")}))})),document.addEventListener("DOMContentLoaded",(function(){})),document.addEventListener("DOMContentLoaded",(function(){document.querySelectorAll('a[href^="#"]').forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault();var t=this.getAttribute("href"),o=document.querySelector(t);o&&o.scrollIntoView({behavior:"smooth",block:"start"})}))}));var e=document.querySelector(".sticky-header"),t=e.offsetHeight;window.addEventListener("scroll",(function(){var o=window.scrollY||document.documentElement.scrollTop;o>t?e.classList.add("sticky"):e.classList.remove("sticky"),o}))})),jQuery(document).ready((function(e){e(".language-switcher").on("click",(function(t){t.preventDefault(),e(".sub-menu").toggle()})),e(document).on("click",(function(t){e(t.target).closest(".language-switcher").length||e(".sub-menu").hide()}))})),jQuery(document).ready((function(e){e(window).scroll((function(){e(this).scrollTop()>100?e("#scroll-to-top").fadeIn():e("#scroll-to-top").fadeOut()})),e("#scroll-to-top").click((function(t){return t.preventDefault(),e("html, body").animate({scrollTop:0},800),!1}))})),document.addEventListener("DOMContentLoaded",(function(){gsap.registerPlugin(ScrollTrigger);var e=gsap.utils.toArray(".custom-slide");if(console.log("Number of slides found:",e.length),e.length<2)console.error("At least two slides are required for this animation");else{var t=e[0],o=e[1];gsap.set(o,{autoAlpha:0});var r=gsap.timeline({scrollTrigger:{trigger:"#tech",start:"top top",end:"+=100%",scrub:1,pin:!0,anticipatePin:1}});r.to(t.querySelector(".custom-slide-text"),{yPercent:-10,ease:"power1.inOut",duration:.4}),r.to(t,{autoAlpha:0,duration:.3,ease:"power2.inOut"},">-0.1"),r.to(o,{autoAlpha:1,duration:.3,ease:"power2.inOut"},"<"),r.to(o.querySelector(".custom-slide-text"),{yPercent:-10,ease:"power1.inOut",duration:.4}),ScrollTrigger.create({animation:r,trigger:"#tech",start:"top top",end:"+=100%",scrub:1,onUpdate:function(e){var t=document.querySelector(".progress-thumb");t&&gsap.to(t,{scaleY:e.progress,duration:.1})}}),r.eventCallback("onUpdate",(function(){console.log("Animation progress:",r.progress())}))}}))},662:()=>{},797:()=>{}},o={};function r(e){var n=o[e];if(void 0!==n)return n.exports;var i=o[e]={exports:{}};return t[e](i,i.exports,r),i.exports}r.m=t,e=[],r.O=(t,o,n,i)=>{if(!o){var a=1/0;for(u=0;u<e.length;u++){for(var[o,n,i]=e[u],c=!0,l=0;l<o.length;l++)(!1&i||a>=i)&&Object.keys(r.O).every((e=>r.O[e](o[l])))?o.splice(l--,1):(c=!1,i<a&&(a=i));if(c){e.splice(u--,1);var s=n();void 0!==s&&(t=s)}}return t}i=i||0;for(var u=e.length;u>0&&e[u-1][2]>i;u--)e[u]=e[u-1];e[u]=[o,n,i]},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={773:0,842:0,170:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var n,i,[a,c,l]=o,s=0;if(a.some((t=>0!==e[t]))){for(n in c)r.o(c,n)&&(r.m[n]=c[n]);if(l)var u=l(r)}for(t&&t(o);s<a.length;s++)i=a[s],r.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return r.O(u)},o=self.webpackChunktailpress=self.webpackChunktailpress||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})(),r.O(void 0,[842,170],(()=>r(80))),r.O(void 0,[842,170],(()=>r(662)));var n=r.O(void 0,[842,170],(()=>r(797)));n=r.O(n)})();