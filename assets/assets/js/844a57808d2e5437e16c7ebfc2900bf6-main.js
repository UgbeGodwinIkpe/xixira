$(document).ready(function(){var win=$(window);var nav=$(".desk-nav");var mnav=$(".nex-container .nex-nav");var lead=$(".property-banner-text a");lead.on('click',function(e){e.preventDefault();var $anchor=$(this);$('html,body').stop().animate({scrollTop:$($anchor.attr('href')).offset().top-0},1000);})});$(document).ready(function(){'use strict';$('body').prepend('<div class="go-top"><span id="top"><img src="https://xixira.com/sites/pro/assets/assets/img/common/scroll-to-top.svg" alt="topdd" /></span></div>');$(window).scroll(function(){if($(window).scrollTop()>500){$('.go-top').fadeIn(600);}else{$('.go-top').fadeOut(600);}});$(window).scroll(function(){if($(window).scrollTop()>190){$('.mobile-refine-search').addClass('fixed');}else{$('.mobile-refine-search').removeClass('fixed');}});$('#top').click(function(){$('html, body').animate({scrollTop:0},800,'easeInQuad');return false;});$('.customer-logos').slick({slidesToShow:5,slidesToScroll:1,autoplaySpeed:1500,arrows:true,dots:false,margin:10,pauseOnHover:false,nextArrow:'<div class="slick-right"><img src="/assets/assets/img/service/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/service/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:1034,settings:{slidesToShow:3}},{breakpoint:768,settings:{slidesToShow:2}},{breakpoint:576,settings:{slidesToShow:1}}]});$('.agent-slider').slick({slidesToShow:1,slidesToScroll:1,autoplaySpeed:1500,arrows:true,dots:false,margin:10,pauseOnHover:false,nextArrow:'<div class="slick-right"><img src="/assets/assets/img/signup/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/signup/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:768,settings:{slidesToShow:1}},{breakpoint:520,settings:{slidesToShow:1}}]});$('.slider-for').slick({lazyLoad:'ondemand',slidesToShow:1,slidesToScroll:1,adaptiveHeight:true,fade:true,asNavFor:'.slider-nav',nextArrow:'<div class="slick-right"><img src="/assets/assets/img/property/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/property/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:767,settings:{}}],});$('.slider-nav').slick({lazyLoad:'ondemand',slidesToShow:6,slidesToScroll:1,asNavFor:'.slider-for',nextArrow:'<div class="slick-right"><img src="/assets/assets/img/property/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/property/slider-left-arrow.png" alt="" /></div>',focusOnSelect:true,infinite:true,});$('.property-banner-left a').click(function(){$('#lead').animate({scrollTop:0},800,'easeInQuad');return false;});$('.mobile-refine-search').click(function(){$('.refine-form.get-refine-form').toggleClass('active');$(this).toggleClass('active');});$('.signup-content-text a').click(function(){$('.sign-up-sticky-area').addClass('active');$('.sign-up-banner, .sign-up-content').hide();});$('a[ href="#agent"]').click(function(){$('a[ href="#agent"]').addClass('active');$('#user, #landlord, #developer ').removeClass('active');$('#agent').addClass('active');});$('a[ href="#user"]').click(function(){$('a[ href="#user"]').addClass('active');$('#agent, #landlord, #developer ').removeClass('active');$('#user').addClass('active');});$('a[ href="#landlord"]').click(function(){$('a[ href="#landlord"]').addClass('active');$('#agent, #user, #developer ').removeClass('active');$('#landlord').addClass('active');});$('a[ href="#developer"]').click(function(){$('a[ href="#developer"]').addClass('active');$('#agent, #user, #landlord ').removeClass('active');$('#developer').addClass('active');});$('.view-more-service').click(function(){$('.others-service-area .others-slide-area .others-slide').toggleClass('active');});$('.view-services').click(function(){$('.single-service').toggleClass('active');});$('.surrounding-btn span').click(function(){$('.surrounding-btn span').removeClass('active');$(this).addClass('active');$('.surrounding-areas li').toggleClass('active');});$('.property-items-name .mobile-vew a').click(function(){$('.property-items-name .desktop-show').show();$(this).hide();});$('.panel').click(function(){$('.panel').removeClass('active');$(this).toggleClass('active');});$('.footer-text').click(function(){$(this).find('ul').slideDown();});$('.view-more-three-btn').click(function(){$('.single-feature-area').addClass('active');$(this).addClass('active');});$('.content-area').each(function(){$(this).find('.content-img').matchHeight();});$('.feature-area').each(function(){$(this).find('.single-feature-area').matchHeight();});$('.sign-up-content').each(function(){$(this).find('.signup-content-text h3').matchHeight();});$('.join-area').each(function(){$(this).find('.single-join-text').matchHeight();});$('.service-area').each(function(){$(this).find('.service-icon').matchHeight();});$('.sign-up-content').each(function(){$(this).find('.signup-content-icon').matchHeight();});$('.servicepage-area').each(function(){$(this).find('.single-service-icon').matchHeight();});$('.categories-area').each(function(){$(this).find('.slider-icon').matchHeight();});$(".call-hide").click(function(){$(this).parent().addClass('active');});$(".sign-up-sticky-single").click(function(){$(".sign-up-sticky-single a").removeClass('active');$(this).find('a').addClass('active');});var scrollagent=new SmoothScroll('.agent-btn a[href="#contact"]',{offset:0});});$(document).ready(function(){$(".email-title-text").click(function(){$(".contact-email").slideToggle();});});$(document).ready(function(){$(".nigeria-select").click(function(){$(".select-nigeria-area").slideToggle();});});$(function(){$('.morton-slider').slick({slidesToShow:1,slidesToScroll:1,mobileFirst:true,arrows:true,dots:false,nextArrow:'<div class="slick-right"><img src="/assets/assets/img/service/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/service/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:991,settings:'unslick'}]});$(window).on('resize',function(){$('.morton-slider').slick('resize');});});$(function(){$('.single-logo-slider').slick({slidesToShow:1,slidesToScroll:1,mobileFirst:true,arrows:true,dots:false,adaptiveHeight:false,nextArrow:'<div class="slick-right"><img src="/assets/assets/img/service/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/service/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:768,settings:'unslick'}]});$(window).on('resize',function(){$('.single-logo-slider').slick('resize');});});$(function(){$('.blog-slider').slick({slidesToShow:1,slidesToScroll:1,mobileFirst:true,arrows:true,dots:false,nextArrow:'<div class="slick-right"><img src="/assets/assets/img/service/slider-right-arrow.png" alt="" /></div>',prevArrow:'<div class="slick-left"><img src="/assets/assets/img/service/slider-left-arrow.png" alt="" /></div>',responsive:[{breakpoint:575,settings:'unslick'}]});$(window).on('resize',function(){$('.blog-slider').slick('resize');});});$(document).ready(function(){'use strict';var c,currentScrollTop=0,navbar=$('nav');$(window).scroll(function(){var a=$(window).scrollTop();var b=navbar.height();currentScrollTop=a;if(c<currentScrollTop&&a>b+b){navbar.addClass("scrollUp");}else if(c>currentScrollTop&&!(a<=b)){navbar.removeClass("scrollUp");}
c=currentScrollTop;});});window.onload=function(){var paginationPage=parseInt($('.cdp').attr('actpage'),10);$('.cdp_i').on('click',function(){var go=$(this).attr('href').replace('#!','');if(go==='+1'){paginationPage++;}else if(go==='-1'){paginationPage--;}else{paginationPage=parseInt(go,10);}
$('.cdp').attr('actpage',paginationPage);});};$(document).ready(function(){$('.nex-menu').nexmenu({nexBarPosition:"right",nexMenuBg:"black",brandLogo:'<a href="/"><img src="/assets/assets/img/common/logo.svg" alt="logo" /></a>',nexBarColor:"white",nexMenuPosition:"fixed",brandPosition:"left",nexScreenWidth:"991",nexShowChildren:true,nexExpandableChildren:true,nexExpand:"+",nexContract:"-",nexRemoveAttrs:true,onePage:true,removeElements:".desk-nav"});});console.clear();const extractYoutubeId=function(url){const regExp=/^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;const match=url.match(regExp);return(match&&match[7].length==11)?match[7]:false;};const injectScript=function({id,src,}){const existingScript=document.querySelector(`#${id}`);if(existingScript)return;const tag=document.createElement('script');tag.src=src;tag.id=id;const firstScriptTag=document.getElementsByTagName('script')[0];firstScriptTag.parentNode.insertBefore(tag,firstScriptTag);};class VideoPlayerYoutube{constructor(config){this.isScriptInjected=false;this.isScriptLoaded=false;this.config=config;this.events={onEnd:[],};return{addEventListener:this.addEventListener.bind(this),init:this.init.bind(this),play:this.play.bind(this),};}
addEventListener(eventName,callback){if(this.events[eventName]){this.events[eventName].push(callback);}else{this.events[eventName]=[callback];}}
injectIframe(){this.player=new YT.Player(this.config.root,{height:'390',width:'640',videoId:extractYoutubeId(this.config.url),playerVars:{showinfo:0,modestbranding:1,playsinline:1,rel:0,},enablejsapi:1,events:{'onStateChange':this.onPlayerStateChange.bind(this),},});}
onPlayerStateChange(event){const hasEnded=event.data===0;if(hasEnded){this.events.onEnd.forEach((callback)=>{callback();});}}
init(){if(this.isScriptInjected)return;injectScript({id:'video-player-iframe-youtube',src:'https://www.youtube.com/iframe_api',});this.isScriptInjected=true;const intervalFunc=()=>{if(window.YT&&window.YT.Player){this.isScriptLoaded=false;clearInterval(interval);this.injectIframe();}};const interval=window.setInterval(intervalFunc,100);}
play(){if(!this.player.playVideo){return false;}
this.player.playVideo();return true;}}
class VideoPlayerVimeo{constructor(config){this.isScriptInjected=false;this.isScriptLoaded=false;this.config=config;this.events={onEnd:[],};return{addEventListener:this.addEventListener.bind(this),init:this.init.bind(this),play:this.play.bind(this),};}
addEventListener(eventName,callback){if(this.events[eventName]){this.events[eventName].push(callback);}else{this.events[eventName]=[callback];}}
injectIframe(){this.player=new Vimeo.Player(this.config.root,{url:this.config.url,width:640});this.player.on('ended',this.onPlayerEvent.bind(this,'ended'));}
onPlayerEvent(eventName){if(eventName==='ended'){this.events.onEnd.forEach((callback)=>{callback();});this.player.destroy();this.injectIframe();}}
init(){if(this.isScriptInjected)return;injectScript({id:'video-player-iframe-vimeo',src:'https://player.vimeo.com/api/player.js',});this.isScriptInjected=true;const intervalFunc=()=>{if(window.Vimeo&&window.Vimeo.Player){this.isScriptLoaded=false;clearInterval(interval);this.injectIframe();}};const interval=window.setInterval(intervalFunc,100);}
play(){this.player.play();return true;}}
class VideoPlayer{constructor(element,config){this.element=element;this.previewContainer=element.querySelector('[data-js="preview"]');this.videoContainer=element.querySelector('[data-js="video"]');const videoRoot=element.querySelector('[data-js="video-root"]');const type=element.getAttribute('data-player-type');const url=element.getAttribute('data-player-url');if(type==='youtube'){this.Player=new VideoPlayerYoutube({root:videoRoot,url,});}else if(type==='vimeo'){this.Player=new VideoPlayerVimeo({root:videoRoot,url,});}else{console.error('Invalid video type. Things aren\'t going to work.');return;}
this.Player.init();this.Player.addEventListener('onEnd',this.reset.bind(this));this.addEventlisteners();}
show(element){element.setAttribute('data-hidden','false');}
hide(element){element.setAttribute('data-hidden','true');}
play(){const success=this.Player.play();if(success){this.hide(this.previewContainer);this.show(this.videoContainer);}else{this.handleNotReady();}}
reset(){this.show(this.previewContainer);this.hide(this.videoContainer);}
handleNotReady(){console.log('Video isn\'t ready yet to be viewed. Try again in a few seconds.');}
addEventlisteners(){this.previewContainer.addEventListener('click',this.play.bind(this));}}
const players=document.querySelectorAll('.video-player');for(let{length:i}=players;i>0;i-=1){const player=players[i-1];new VideoPlayer(player);}
function intFormat(n){var regex=/(\d)((\d{3},?)+)$/;n=n.split(',').join('');while(regex.test(n)){n=n.replace(regex,'$1,$2');}
return n;}
function numFormat(n){var pointReg=/([\d,\.]*)\.(\d*)$/,f;if(pointReg.test(n)){f=RegExp.$2;return intFormat(RegExp.$1)+'.'+f;}
return intFormat(n);}
function insertOptions(index,field){var options='<option value=""> -Select- </option>';insertOptionsBase(options,index,field);}
function insertOptionsBase(opts,index,field){var options=opts;$("#"+field+"_options option.option_"+index).each(function(idx){var selected='';if($(this).attr("selected")==="selected"){selected='selected="selected"';}
options+='<option value="'+$(this).val()+'" '+selected+'>'+$(this).html()+'</option>';});$("#"+field+"_select").html(options);}
function insertAxises(){var stateIndex=$("#state_select").val();if(stateIndex!==""){insertOptions(stateIndex,"axis");insertAreas();}
$("#state_select").change(function(){var index=$(this).val();insertOptions(index,"axis");insertAreas();});}
function insertSType(){var typeIndex=$("#type_select").val();if(typeIndex!==""){insertOptions(typeIndex,"stype");}
$("#type_select").change(function(){var index=$(this).val();insertOptions(index,"stype");});}
function insertAreas(){var axisIndex=$("#axis_select").val();if(axisIndex!==""){insertOptions(axisIndex,"area");}
$("#axis_select").change(function(){var index=$(this).val();insertOptions(index,"area");});}
function Confirm(title,msg,$true,$false,callback){var $content="<div class='dialog-ovelay'>"+
"<div class='dialog'><header>"+
" <h3> "+title+" </h3> "+
"<i class='fa fa-close'></i>"+
"</header>"+
"<div class='dialog-msg'>"+
" <p> "+msg+" </p> "+
"</div>"+
"<footer>"+
"<div class='controls'>"+
" <button class='button button-danger doAction'>"+$true+"</button> "+
" <button class='button button-default cancelAction'>"+$false+"</button> "+
"</div>"+
"</footer>"+
"</div>"+
"</div>";$('body').prepend($content);$('.doAction').click(function(){$(this).parents('.dialog-ovelay').fadeOut(500,function(){$(this).remove();});callback();});$('.cancelAction, .fa-close').click(function(){$(this).parents('.dialog-ovelay').fadeOut(500,function(){$(this).remove();});});}
function Show(title,msg){var $content="<div class='dialog-ovelay'>"+
"<div class='dialog'><header>"+
" <h3> "+title+" </h3> "+
"<i class='fa fa-close'></i>"+
"</header>"+
"<div class='dialog-msg'>"+
" <p> "+msg+" </p> "+
"</div>"+
"<footer>"+
"<div class='controls'>"+
" <button class='button button-default cancelAction'>Close</button> "+
"</div>"+
"</footer>"+
"</div>"+
"</div>";$('body').prepend($content);$('.cancelAction, .fa-close').click(function(){$(this).parents('.dialog-ovelay').fadeOut(500,function(){$(this).remove();});});}