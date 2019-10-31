<!DOCTYPE html>

<html  dir="ltr" lang="en-us" xml:lang="en-us">
<head>
    <title>Student Forum</title>
    <link rel="shortcut icon" href="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/theme/1570981110/favicon" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o||n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({1:[function(e,n,t){function r(){}function o(e,n,t){return function(){return i(e,[c.now()].concat(u(arguments)),n?null:this,t),n?void 0:this}}var i=e("handle"),a=e(3),u=e(4),f=e("ee").get("tracer"),c=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,n){s[n]=o(d+n,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),n.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,n){var t={},r=this,o="function"==typeof n;return i(l+"tracer",[c.now(),e,t],r),function(){if(f.emit((o?"":"no-")+"fn-start",[c.now(),r,o],t),o)try{return n.apply(this,arguments)}catch(e){throw f.emit("fn-err",[arguments,this,e],t),e}finally{f.emit("fn-end",[c.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,n){m[n]=o(l+n)}),newrelic.noticeError=function(e,n){"string"==typeof e&&(e=new Error(e)),i("err",[e,c.now(),!1,n])}},{}],2:[function(e,n,t){function r(e,n){if(!o)return!1;if(e!==o)return!1;if(!n)return!0;if(!i)return!1;for(var t=i.split("."),r=n.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var o=null,i=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var u=navigator.userAgent,f=u.match(a);f&&u.indexOf("Chrome")===-1&&u.indexOf("Chromium")===-1&&(o="Safari",i=f[1])}n.exports={agent:o,version:i,match:r}},{}],3:[function(e,n,t){function r(e,n){var t=[],r="",i=0;for(r in e)o.call(e,r)&&(t[i]=n(r,e[r]),i+=1);return t}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],4:[function(e,n,t){function r(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(o<0?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=r},{}],5:[function(e,n,t){n.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,n,t){function r(){}function o(e){function n(e){return e&&e instanceof r?e:e?f(e,u,i):i()}function t(t,r,o,i){if(!d.aborted||i){e&&e(t,r,o);for(var a=n(o),u=v(t),f=u.length,c=0;c<f;c++)u[c].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(e,n){h[e]=v(e).concat(n)}function m(e,n){var t=h[e];if(t)for(var r=0;r<t.length;r++)t[r]===n&&t.splice(r,1)}function v(e){return h[e]||[]}function g(e){return p[e]=p[e]||o(t)}function w(e,n){c(e,function(e,t){n=n||"feature",y[t]=n,n in s||(s[n]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:n,buffer:w,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",f=e("gos"),c=e(3),s={},p={},d=n.exports=o();d.backlog=s},{}],gos:[function(e,n,t){function r(e,n,t){if(o.call(e,n))return e[n];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[n]=r,r}var o=Object.prototype.hasOwnProperty;n.exports=r},{}],handle:[function(e,n,t){function r(e,n,t,r){o.buffer([e],r),o.emit(e,n,t)}var o=e("ee").get("handle");n.exports=r,r.ee=o},{}],id:[function(e,n,t){function r(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");n.exports=r},{}],loader:[function(e,n,t){function r(){if(!E++){var e=x.info=NREUM.info,n=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&n))return s.abort();c(y,function(n,t){e[n]||(e[n]=t)}),f("mark",["onload",a()+x.offset],null,"api");var t=l.createElement("script");t.src="https://"+e.agent,n.parentNode.insertBefore(t,n)}}function o(){"complete"===l.readyState&&i()}function i(){f("mark",["domContent",a()+x.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-x.offset}var u=(new Date).getTime(),f=e("handle"),c=e(3),s=e("ee"),p=e(2),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1130.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),x=n.exports={offset:u,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};e(1),l[m]?(l[m]("DOMContentLoaded",i,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",o),d[v]("onload",r)),f("mark",["firstbyte",u],null,"api");var E=0,O=e(5)},{}]},{},["loader"]);</script>
<meta name="keywords" content="moodle, Student Forum" />
<link rel="stylesheet" type="text/css" href="https://polylearn.calpoly.edu/AY_2019-2020/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.css" /><script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="https://polylearn.calpoly.edu/AY_2019-2020/theme/styles.php/cpboost/1570981110_1570981653/all" />
<script type="text/javascript">
//<![CDATA[
var M = {}; M.yui = {};
M.pageloadstarttime = new Date();
M.cfg = {"wwwroot":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020","sesskey":"ayEw8LmFZV","themerev":"1570981110","slasharguments":1,"theme":"cpboost","iconsystemmodule":"core\/icon_system_fontawesome","jsrev":"1570980943","admin":"admin","svgicons":true,"usertimezone":"America\/Los_Angeles","contextid":83011};var yui1ConfigFn = function(me) {if(/-skin|reset|fonts|grids|base/.test(me.name)){me.type='css';me.path=me.path.replace(/\.js/,'.css');me.path=me.path.replace(/\/yui2-skin/,'/assets/skins/sam/yui2-skin')}};
var yui2ConfigFn = function(me) {var parts=me.name.replace(/^moodle-/,'').split('-'),component=parts.shift(),module=parts[0],min='-min';if(/-(skin|core)$/.test(me.name)){parts.pop();me.type='css';min=''}
if(module){var filename=parts.join('-');me.path=component+'/'+module+'/'+filename+min+'.'+me.type}else{me.path=component+'/'+component+'.'+me.type}};
YUI_config = {"debug":false,"base":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/lib\/yuilib\/3.17.2\/","comboBase":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/theme\/yui_combo.php?","combine":true,"filter":null,"insertBefore":"firstthemesheet","groups":{"yui2":{"base":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/lib\/yuilib\/2in3\/2.9.0\/build\/","comboBase":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/theme\/yui_combo.php?","combine":true,"ext":false,"root":"2in3\/2.9.0\/build\/","patterns":{"yui2-":{"group":"yui2","configFn":yui1ConfigFn}}},"moodle":{"name":"moodle","base":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/theme\/yui_combo.php?m\/1570980943\/","combine":true,"comboBase":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/theme\/yui_combo.php?","ext":false,"root":"m\/1570980943\/","patterns":{"moodle-":{"group":"moodle","configFn":yui2ConfigFn}},"filter":null,"modules":{"moodle-core-actionmenu":{"requires":["base","event","node-event-simulate"]},"moodle-core-blocks":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]},"moodle-core-checknet":{"requires":["base-base","moodle-core-notification-alert","io-base"]},"moodle-core-chooserdialogue":{"requires":["base","panel","moodle-core-notification"]},"moodle-core-dock":{"requires":["base","node","event-custom","event-mouseenter","event-resize","escape","moodle-core-dock-loader","moodle-core-event"]},"moodle-core-dock-loader":{"requires":["escape"]},"moodle-core-dragdrop":{"requires":["base","node","io","dom","dd","event-key","event-focus","moodle-core-notification"]},"moodle-core-event":{"requires":["event-custom"]},"moodle-core-formchangechecker":{"requires":["base","event-focus","moodle-core-event"]},"moodle-core-handlebars":{"condition":{"trigger":"handlebars","when":"after"}},"moodle-core-languninstallconfirm":{"requires":["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]},"moodle-core-lockscroll":{"requires":["plugin","base-build"]},"moodle-core-maintenancemodetimer":{"requires":["base","node"]},"moodle-core-notification":{"requires":["moodle-core-notification-dialogue","moodle-core-notification-alert","moodle-core-notification-confirm","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-core-notification-dialogue":{"requires":["base","node","panel","escape","event-key","dd-plugin","moodle-core-widget-focusafterclose","moodle-core-lockscroll"]},"moodle-core-notification-alert":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-confirm":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-exception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-notification-ajaxexception":{"requires":["moodle-core-notification-dialogue"]},"moodle-core-popuphelp":{"requires":["moodle-core-tooltip"]},"moodle-core-tooltip":{"requires":["base","node","io-base","moodle-core-notification-dialogue","json-parse","widget-position","widget-position-align","event-outside","cache-base"]},"moodle-core_availability-form":{"requires":["base","node","event","event-delegate","panel","moodle-core-notification-dialogue","json"]},"moodle-backup-backupselectall":{"requires":["node","event","node-event-simulate","anim"]},"moodle-backup-confirmcancel":{"requires":["node","node-event-simulate","moodle-core-notification-confirm"]},"moodle-course-categoryexpander":{"requires":["node","event-key"]},"moodle-course-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-course-coursebase","moodle-course-util"]},"moodle-course-formatchooser":{"requires":["base","node","node-event-simulate"]},"moodle-course-management":{"requires":["base","node","io-base","moodle-core-notification-exception","json-parse","dd-constrain","dd-proxy","dd-drop","dd-delegate","node-event-delegate"]},"moodle-course-modchooser":{"requires":["moodle-core-chooserdialogue","moodle-course-coursebase"]},"moodle-course-util":{"requires":["node"],"use":["moodle-course-util-base"],"submodules":{"moodle-course-util-base":{},"moodle-course-util-section":{"requires":["node","moodle-course-util-base"]},"moodle-course-util-cm":{"requires":["node","moodle-course-util-base"]}}},"moodle-form-dateselector":{"requires":["base","node","overlay","calendar"]},"moodle-form-passwordunmask":{"requires":[]},"moodle-form-shortforms":{"requires":["node","base","selector-css3","moodle-core-event"]},"moodle-form-showadvanced":{"requires":["node","base","selector-css3"]},"moodle-question-chooser":{"requires":["moodle-core-chooserdialogue"]},"moodle-question-preview":{"requires":["base","dom","event-delegate","event-key","core_question_engine"]},"moodle-question-qbankmanager":{"requires":["node","selector-css3"]},"moodle-question-searchform":{"requires":["base","node"]},"moodle-availability_completion-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_date-form":{"requires":["base","node","event","io","moodle-core_availability-form"]},"moodle-availability_grade-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_group-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_grouping-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-availability_profile-form":{"requires":["base","node","event","moodle-core_availability-form"]},"moodle-qtype_ddimageortext-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-qtype_ddimageortext-form":{"requires":["moodle-qtype_ddimageortext-dd","form_filepicker"]},"moodle-qtype_ddmarker-dd":{"requires":["node","event-resize","dd","dd-drop","dd-constrain","graphics"]},"moodle-qtype_ddmarker-form":{"requires":["moodle-qtype_ddmarker-dd","form_filepicker","graphics","escape"]},"moodle-qtype_ddwtos-dd":{"requires":["node","dd","dd-drop","dd-constrain"]},"moodle-mod_assign-history":{"requires":["node","transition"]},"moodle-mod_forum-subscriptiontoggle":{"requires":["base-base","io-base"]},"moodle-mod_hsuforum-article":{"requires":["base","node","event","router","core_rating","querystring","moodle-mod_hsuforum-io","moodle-mod_hsuforum-livelog","moodle-core-formchangechecker"]},"moodle-mod_hsuforum-io":{"requires":["base","io-base","io-form","io-upload-iframe","json-parse"]},"moodle-mod_hsuforum-livelog":{"requires":["widget"]},"moodle-mod_oublog-savecheck":{"requires":["base","node","io","panel","moodle-core-notification-alert"]},"moodle-mod_oublog-tagselector":{"requires":["base","node","autocomplete","autocomplete-filters","autocomplete-highlighters"]},"moodle-mod_quiz-autosave":{"requires":["base","node","event","event-valuechange","node-event-delegate","io-form"]},"moodle-mod_quiz-dragdrop":{"requires":["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-base","moodle-mod_quiz-util-page","moodle-mod_quiz-util-slot","moodle-course-util"]},"moodle-mod_quiz-modform":{"requires":["base","node","event"]},"moodle-mod_quiz-questionchooser":{"requires":["moodle-core-chooserdialogue","moodle-mod_quiz-util","querystring-parse"]},"moodle-mod_quiz-quizbase":{"requires":["base","node"]},"moodle-mod_quiz-repaginate":{"requires":["base","event","node","io","moodle-core-notification-dialogue"]},"moodle-mod_quiz-toolboxes":{"requires":["base","node","event","event-key","io","moodle-mod_quiz-quizbase","moodle-mod_quiz-util-slot","moodle-core-notification-ajaxexception"]},"moodle-mod_quiz-util":{"requires":["node","moodle-core-actionmenu"],"use":["moodle-mod_quiz-util-base"],"submodules":{"moodle-mod_quiz-util-base":{},"moodle-mod_quiz-util-slot":{"requires":["node","moodle-mod_quiz-util-base"]},"moodle-mod_quiz-util-page":{"requires":["node","moodle-mod_quiz-util-base"]}}},"moodle-mod_scheduler-delselected":{"requires":["base","node","event"]},"moodle-mod_scheduler-saveseen":{"requires":["base","node","event"]},"moodle-mod_scheduler-studentlist":{"requires":["base","node","event","io"]},"moodle-message_airnotifier-toolboxes":{"requires":["base","node","io"]},"moodle-filter_glossary-autolinker":{"requires":["base","node","io-base","json-parse","event-delegate","overlay","moodle-core-event","moodle-core-notification-alert","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-filter_mathjaxloader-loader":{"requires":["moodle-core-event"]},"moodle-editor_atto-editor":{"requires":["node","transition","io","overlay","escape","event","event-simulate","event-custom","node-event-html5","node-event-simulate","yui-throttle","moodle-core-notification-dialogue","moodle-core-notification-confirm","moodle-editor_atto-rangy","handlebars","timers","querystring-stringify"]},"moodle-editor_atto-plugin":{"requires":["node","base","escape","event","event-outside","handlebars","event-custom","timers","moodle-editor_atto-menu"]},"moodle-editor_atto-menu":{"requires":["moodle-core-notification-dialogue","node","event","event-custom"]},"moodle-editor_atto-rangy":{"requires":[]},"moodle-report_eventlist-eventfilter":{"requires":["base","event","node","node-event-delegate","datatable","autocomplete","autocomplete-filters"]},"moodle-report_loglive-fetchlogs":{"requires":["base","event","node","io","node-event-delegate"]},"moodle-gradereport_grader-gradereporttable":{"requires":["base","node","event","handlebars","overlay","event-hover"]},"moodle-gradereport_history-userselector":{"requires":["escape","event-delegate","event-key","handlebars","io-base","json-parse","moodle-core-notification-dialogue"]},"moodle-tool_capability-search":{"requires":["base","node"]},"moodle-tool_lp-dragdrop-reorder":{"requires":["moodle-core-dragdrop"]},"moodle-tool_monitor-dropdown":{"requires":["base","event","node"]},"moodle-assignfeedback_editpdf-editor":{"requires":["base","event","node","io","graphics","json","event-move","event-resize","transition","querystring-stringify-simple","moodle-core-notification-dialog","moodle-core-notification-alert","moodle-core-notification-warning","moodle-core-notification-exception","moodle-core-notification-ajaxexception"]},"moodle-atto_accessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_accessibilityhelper-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_align-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_bold-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_charmap-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_clear-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_collapse-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_cpaccessibilitychecker-button":{"requires":["color-base","moodle-editor_atto-plugin"]},"moodle-atto_cptitle-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_emoticon-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_equation-button":{"requires":["moodle-editor_atto-plugin","moodle-core-event","io","event-valuechange","tabview","array-extras"]},"moodle-atto_html-button":{"requires":["moodle-editor_atto-plugin","event-valuechange"]},"moodle-atto_image-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_indent-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_italic-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_link-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_managefiles-usedfiles":{"requires":["node","escape"]},"moodle-atto_media-button":{"requires":["moodle-editor_atto-plugin","moodle-form-shortforms"]},"moodle-atto_noautolink-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_orderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_recordrtc-button":{"requires":["moodle-editor_atto-plugin","moodle-atto_recordrtc-recording"]},"moodle-atto_recordrtc-recording":{"requires":["moodle-atto_recordrtc-button"]},"moodle-atto_rtl-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_strike-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_subscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_superscript-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_table-button":{"requires":["moodle-editor_atto-plugin","moodle-editor_atto-menu","event","event-valuechange"]},"moodle-atto_title-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_underline-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_undo-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-atto_unorderedlist-button":{"requires":["moodle-editor_atto-plugin"]},"moodle-tinymce_mathslate-dialogue":{"requires":["escape","moodle-local_mathslate-editor","moodle-tinymce_mathslate-editor"]},"moodle-tinymce_mathslate-editor":{"requires":["dd-drag","dd-proxy","dd-drop","event","tabview","io-base","json","moodle-tinymce_mathslate-textool","moodle-tinymce_mathslate-mathjaxeditor"]},"moodle-tinymce_mathslate-mathjaxeditor":{"requires":["moodle-tinymce_mathslate-snippeteditor","dd-drop"]},"moodle-tinymce_mathslate-snippeteditor":{"requires":["json"]},"moodle-tinymce_mathslate-textool":{"requires":["dd-drag","dd-proxy","dd-drop","event","json"]}}},"gallery":{"name":"gallery","base":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/lib\/yuilib\/gallery\/","combine":true,"comboBase":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/theme\/yui_combo.php?","ext":false,"root":"gallery\/1570980943\/","patterns":{"gallery-":{"group":"gallery"}}}},"modules":{"core_filepicker":{"name":"core_filepicker","fullpath":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/lib\/javascript.php\/1570980943\/repository\/filepicker.js","requires":["base","node","node-event-simulate","json","async-queue","io-base","io-upload-iframe","io-form","yui2-treeview","panel","cookie","datatable","datatable-sort","resize-plugin","dd-plugin","escape","moodle-core_filepicker","moodle-core-notification-dialogue"]},"core_comment":{"name":"core_comment","fullpath":"https:\/\/polylearn.calpoly.edu\/AY_2019-2020\/lib\/javascript.php\/1570980943\/comment\/comment.js","requires":["base","io-base","node","json","yui2-animation","overlay","escape"]},"mathjax":{"name":"mathjax","fullpath":"https:\/\/cdnjs.cloudflare.com\/ajax\/libs\/mathjax\/2.7.2\/MathJax.js?delayStartupUntil=configured"}}};
M.yui.loader = {modules: {}};

//]]>
</script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-mod-forum-view" class="format-topics forumtype-general  path-mod path-mod-forum safari dir-ltr lang-en_us yui-skin-sam yui3-skin-sam polylearn-calpoly-edu--AY_2019-2020 pagelayout-incourse course-6204 context-83011 cmid-26313 category-2 ">

<div id="page-wrapper">

    <div>
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script type="text/javascript" src="https://polylearn.calpoly.edu/AY_2019-2020/theme/yui_combo.php?rollup/3.17.2/yui-moodlesimple-min.js"></script><script type="text/javascript" src="https://polylearn.calpoly.edu/AY_2019-2020/lib/javascript.php/1570980943/lib/javascript-static.js"></script>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>



    <nav class="fixed-top navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
    
            <div data-region="drawer-toggle" class="d-inline-block mr-3">
                <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span></button>
            </div>
    
            <a href="https://polylearn.calpoly.edu/AY_2019-2020" class="navbar-brand has-logo
                    ">
                    <span class="logo d-none d-sm-inline">
                        <img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/cpboost/pix/cp_logo.svg?1570981110" alt="Academic Year 2019-2020">
                    </span>
                <span class="site-name d-none d-md-inline">Academic Year 2019-2020</span>
            </a>
    
            <ul class="navbar-nav d-none d-md-flex">
                <!-- custom_menu -->
                
                <!-- page_heading_menu -->
                
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <div class="d-none d-lg-block">
                
            </div>
                <!-- navbar_plugin_output -->
                <li class="nav-item">
                <div class="popover-region collapsed popover-region-messages"
    id="nav-message-popover-container" data-userid="280995"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5dbb26ae8065e5dbb26ae7d5ad5"
        aria-haspopup="true"
        aria-label="Show message window with no new messages"
        tabindex="0">
                <i class="icon fa fa-comment fa-fw "  title="Toggle messages menu" aria-label="Toggle messages menu"></i>
        <div class="count-container hidden" data-region="count-container">0</div>

    </div>
    <div 
        id="popover-region-container-5dbb26ae8065e5dbb26ae7d5ad5"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Messages</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <div class="newmessage-link">
            <a href="https://polylearn.calpoly.edu/AY_2019-2020/message/index.php?contactsfirst=1">New message
            </a>
        </div>
        <a class="mark-all-read-button"
           href="#"
           role="button"
           title="Mark all as read"
           data-action="mark-all-read">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Mark all as read" aria-label="Mark all as read"></i></span>
            <span class="loading-icon"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="https://polylearn.calpoly.edu/AY_2019-2020/message/edit.php?id=280995"
           title="Message preferences">
            <i class="icon fa fa-cog fa-fw "  title="Message preferences" aria-label="Message preferences"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="messages" data-region="messages" role="log" aria-busy="false" aria-atomic="false" aria-relevant="additions"></div>
        <div class="empty-message" data-region="empty-message" tabindex="0">No messages</div>

            </div>
            <span class="loading-icon"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://polylearn.calpoly.edu/AY_2019-2020/message/index.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="popover-region collapsed popover-region-notifications"
    id="nav-notification-popover-container" data-userid="280995"
    data-region="popover-region">
    <div class="popover-region-toggle nav-link"
        data-region="popover-region-toggle"
        role="button"
        aria-controls="popover-region-container-5dbb26ae820825dbb26ae7d5ad6"
        aria-haspopup="true"
        aria-label="Show notification window with no new notifications"
        tabindex="0">
                <i class="icon fa fa-bell fa-fw "  title="Toggle notifications menu" aria-label="Toggle notifications menu"></i>
        <div class="count-container hidden" data-region="count-container">0</div>

    </div>
    <div 
        id="popover-region-container-5dbb26ae820825dbb26ae7d5ad6"
        class="popover-region-container"
        data-region="popover-region-container"
        aria-expanded="false"
        aria-hidden="true"
        aria-label="Notification window"
        role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">Notifications</h3>
            <div class="popover-region-header-actions" data-region="popover-region-header-actions">        <a class="mark-all-read-button"
           href="#"
           title="Mark all as read"
           data-action="mark-all-read"
           role="button">
            <span class="normal-icon"><i class="icon fa fa-check fa-fw "  title="Mark all as read" aria-label="Mark all as read"></i></span>
            <span class="loading-icon"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </a>
        <a href="https://polylearn.calpoly.edu/AY_2019-2020/message/notificationpreferences.php?userid=280995"
           title="Notification preferences">
            <i class="icon fa fa-cog fa-fw "  title="Notification preferences" aria-label="Notification preferences"></i>
        </a>
</div>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container">
            <div class="popover-region-content" data-region="popover-region-content">
                        <div class="all-notifications"
            data-region="all-notifications"
            role="log"
            aria-busy="false"
            aria-atomic="false"
            aria-relevant="additions"></div>
        <div class="empty-message" tabindex="0" data-region="empty-message">You have no notifications</div>

            </div>
            <span class="loading-icon"><i class="icon fa fa-circle-o-notch fa-spin fa-fw "  title="Loading" aria-label="Loading"></i></span>
        </div>
                <a class="see-all-link"
                    href="https://polylearn.calpoly.edu/AY_2019-2020/message/output/popup/notifications.php">
                    <div class="popover-region-footer-container">
                        <div class="popover-region-seeall-text">See all</div>
                    </div>
                </a>
    </div>
</div><div class="localnavbarplus nav-link icon"><a alt="Support" title="Support" target="_blank" href="http://polylearnsupport.calpoly.edu/"><i class="icon fa fa-question-circle fa-fw"></i></a></div>
                </li>
                <!-- user_menu -->
                <li class="nav-item d-flex align-items-center">
                    <div class="usermenu"><div class="action-menu moodle-actionmenu nowrap-items d-inline" id="action-menu-1" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-1-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-1" aria-label="User menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-1-menu">
                            
                            <span class="userbutton"><span class="usertext mr-1">Bradley Hewitt</span><span class="avatars"><span class="avatar current"><img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/core/1570981110/u/f2" class="userpicture defaultuserpic" width="35" height="35" role="presentation" aria-hidden="true" /></span></span></span>
                                
                            <b class="caret"></b>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu  align-tr-br" id="action-menu-1-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-1" role="menu" data-align="tr-br" id="dropdown-menu-1">
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/my/" class="dropdown-item menu-action" role="menuitem" data-title="mymoodle,admin" aria-labelledby="actionmenuaction-1">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-1">
                                                Dashboard
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/user/profile.php?id=280995" class="dropdown-item menu-action" role="menuitem" data-title="profile,moodle" aria-labelledby="actionmenuaction-2">
                                                <i class="icon fa fa-user fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-2">
                                                Profile
                                            </span>
                                        </a>
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/grade/report/overview/index.php" class="dropdown-item menu-action" role="menuitem" data-title="grades,grades" aria-labelledby="actionmenuaction-3">
                                                <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-3">
                                                Grades
                                            </span>
                                        </a>
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/message/index.php" class="dropdown-item menu-action" role="menuitem" data-title="messages,message" aria-labelledby="actionmenuaction-4">
                                                <i class="icon fa fa-comment fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-4">
                                                Messages
                                            </span>
                                        </a>
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/user/preferences.php" class="dropdown-item menu-action" role="menuitem" data-title="preferences,moodle" aria-labelledby="actionmenuaction-5">
                                                <i class="icon fa fa-wrench fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-5">
                                                Preferences
                                            </span>
                                        </a>
                                        <div class="dropdown-divider" role="presentation"><span class="filler">&nbsp;</span></div>
                                        <a href="https://polylearn.calpoly.edu/AY_2019-2020/login/logout.php?sesskey=ayEw8LmFZV" class="dropdown-item menu-action" role="menuitem" data-title="logout,moodle" aria-labelledby="actionmenuaction-6">
                                                <i class="icon fa fa-sign-out fa-fw " aria-hidden="true"  ></i>
                                            <span class="menu-action-text" id="actionmenuaction-6">
                                                Log out
                                            </span>
                                        </a>
                            </div>
                    </div>
                </div>

        </div>

</div></div>
                </li>
            </ul>
            <!-- search_box -->
    </nav>
    

    <div id="page" class="container-fluid">
        <header id="page-header" class="row">
    <div class="col-12 pt-3 pb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="mr-auto">
                    <div class="page-context-header"><div class="page-header-headings"><h1>CPE-123-05-2198</h1></div></div>
                    </div>

                </div>
                <div class="d-flex flex-wrap">
                    <div id="page-navbar">
                        <nav role="navigation" aria-label="Navigation bar">
    <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/"  >Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/course/index.php"  >Courses</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204"  title="CPE-123-05-2198">CPE-123-05-2198</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204"  >Sections</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-0"  >General</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/view.php?id=26313" aria-current="page" title="Forum">Student Forum</a>
                </li>
    </ol>
</nav>
                    </div>
                    <div class="ml-auto d-flex">
                        <div class="forumsearch">
    <form action="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/search.php" class="form-inline">
        <input type="hidden" name="id" value="6204">
        <div class="input-group">
            <div class="input-group-prepend">
                <a class="btn btn-link p-0" role="button"
                    data-container="body" data-toggle="popover"
                    data-placement="right" data-content="&lt;div class=&quot;no-overflow&quot;&gt;&lt;p&gt;For basic searching of one or more words anywhere in the text, just type them separated by spaces. All words longer than two characters are used.&lt;/p&gt;

&lt;p&gt;For advanced searching, press the search button without typing anything in the search box to access the advanced search form.&lt;/p&gt;
&lt;/div&gt; "
                    data-html="true" tabindex="0" data-trigger="focus">
                  <i class="icon fa fa-question-circle text-info fa-fw "  title="Help with Search" aria-label="Help with Search"></i>
                </a>
            </div>
            <label class="sr-only" for="search">Search</label>
            <input id="search" name="search" type="text" class="form-control" value="">
            <div class="input-group-append">
                <button class="btn btn-secondary" id="searchforums" type="submit">Search forums</button>
            </div>
        </div>

    </form>
</div>
                    </div>
                    <div id="course-header">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

        <div id="page-content" class="row">
            <div id="region-main-box" class="col-12">
                <div id="region-main-settings-menu" class="d-print-none ">
                    <div> <div class="action-menu moodle-actionmenu d-inline" id="action-menu-3" data-enhance="moodle-core-actionmenu">

        <div class="menubar d-flex " id="action-menu-3-menubar" role="menubar">

            


                <div class="action-menu-trigger">
                    <div class="dropdown">
                        <a href="#" tabindex="0" class=" dropdown-toggle icon-no-margin" id="dropdown-3" aria-label="Actions menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" aria-controls="action-menu-3-menu">
                            
                            
<i class="icon fa fa-cog fa-fw "  title="Actions menu" aria-label="Actions menu"></i>                                
                        </a>
                            <div class="dropdown-menu dropdown-menu-right menu align-tr-br" id="action-menu-3-menu" data-rel="menu-content" aria-labelledby="action-menu-toggle-3" role="menu" data-align="tr-br" id="dropdown-menu-3">
                                            <div class="dropdown-item">

    <span class="currentlink "  role="menuitem" ><i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>Auto subscription</span>



</div>
                                            <div class="dropdown-item">

    <a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?id=8100&sesskey=ayEw8LmFZV" id="action_link5dbb26ae7d5ad16" class=""  role="menuitem" ><i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>Subscribe to this forum</a>



</div>
                                            <div class="dropdown-item">

    <a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/settracking.php?id=8100&sesskey=ayEw8LmFZV" id="action_link5dbb26ae7d5ad17" class=""  role="menuitem" ><i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>Don't track unread posts</a>



</div>
                            </div>
                    </div>
                </div>

        </div>

</div> </div>
                </div>
                <section id="region-main" >
                    <div class="card">
                        <div class="card-body">
                                <div class="region_main_settings_menu_proxy"></div>
                            <span class="notifications" id="user-notifications"></span>
                            <div role="main"><span id="maincontent"></span><h2>Student Forum</h2><div id="intro" class="box generalbox py-3"><div class="no-overflow"><p>A place to ask course-related questions to ALL your classmates, monitored by the instructor.</p></div></div><br /><div class="singlebutton forumaddnew">
    <form method="get" action="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/post.php" id="newdiscussionform">
            <input type="hidden" name="forum" value="8100">
        <button type="submit" class="btn btn-secondary"
            id="single_button5dbb26ae7d5ad19"
            title=""
            >Add a new discussion topic</button>
    </form>
</div><table cellspacing="0" class="forumheaderlist"><thead class="text-left"><tr><th class="header topic" scope="col">Discussion</th><th class="header author" scope="col">Started by</th><th class="header replies" scope="col">Replies</th><th class="header replies" scope="col">Unread<a title="Mark all posts in this forum read." href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/markposts.php?f=8100&amp;mark=read&amp;returnpage=view.php&amp;sesskey=ayEw8LmFZV"><i class="icon fa fa-check fa-fw "  title="Mark all posts in this forum read." aria-label="Mark all posts in this forum read."></i></a></th><th class="header lastpost" scope="col">Last post</th><th class="header discussionsubscription" scope="col"><span class="preload-subscribe">&nbsp;</span><span class="preload-unsubscribe">&nbsp;</span></th></tr></thead><tbody>

<tr class="discussion r0"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14899">Remote end closed without response Error. I can only run 100 attempts at a time and can't figure out whats wrong</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=271597&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/core/1570981110/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt="Picture of Nicholas Grover Gazdak" title="Picture of Nicholas Grover Gazdak" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=271597&amp;course=6204">Nicholas Grover Gazdak</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14899">3</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14899&amp;parent=29637">Mon, Oct 21, 2019, 10:33 AM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="14899" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=14899&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>



<tr class="discussion r1"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14446">Has anyone figured out how to maximize the amount of attempts before an error?</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=277440&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/core/1570981110/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt="Picture of Nick Herzig" title="Picture of Nick Herzig" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=277440&amp;course=6204">Nick Herzig</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14446">5</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281326&amp;course=6204">Marisa Lin</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14446&amp;parent=29521">Mon, Oct 21, 2019, 7:49 AM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="14446" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=14446&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>



<tr class="discussion r0"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14634">Timeout errors</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281137&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/core/1570981110/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt="Picture of Kiran Illindala" title="Picture of Kiran Illindala" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281137&amp;course=6204">Kiran Illindala</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14634">8</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=14634&amp;parent=29293">Sun, Oct 20, 2019, 9:41 PM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="14634" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=14634&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>



<tr class="discussion r1"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=9404">cpe123.csc.calpoly.edu Down</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/pluginfile.php/63925/user/icon/cpboost/f2?rev=2812732" class="userpicture" width="35" height="35" alt="Picture of Ethan Kita" title="Picture of Ethan Kita" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=9404">0</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=9404">Tue, Oct 8, 2019, 10:23 AM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="9404" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=9404&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>



<tr class="discussion r0"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=7220">File opening</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281137&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/theme/image.php/cpboost/core/1570981110/u/f2" class="userpicture defaultuserpic" width="35" height="35" alt="Picture of Kiran Illindala" title="Picture of Kiran Illindala" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281137&amp;course=6204">Kiran Illindala</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=7220">3</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=237550&amp;course=6204">Zachary Peterson</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=7220&amp;parent=14209">Thu, Oct 3, 2019, 10:24 AM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="7220" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=7220&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>



<tr class="discussion r1"><td class="topic starter"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=2462">Python</a></td>
<td class="author"><div class="media"><span class="pull-left"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204"><img src="https://polylearn.calpoly.edu/AY_2019-2020/pluginfile.php/63925/user/icon/cpboost/f2?rev=2812732" class="userpicture" width="35" height="35" alt="Picture of Ethan Kita" title="Picture of Ethan Kita" /></a></span><div class="media-body"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a></div></div></td>
<td class="replies"><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=2462">0</a></td>
<td class="replies"><span class="read">0</span></td>
<td class="lastpost"><a href="https://polylearn.calpoly.edu/AY_2019-2020/user/view.php?id=281898&amp;course=6204">Ethan Kita</a><br /><a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/discuss.php?d=2462">Tue, Sep 24, 2019, 2:03 PM</a></td>
<td class="discussionsubscription"><a title="You are not subscribed to this discussion. Click to subscribe." class="discussiontoggle iconsmall" data-forumid="8100" data-discussionid="2462" data-includetext="0" href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/subscribe.php?sesskey=ayEw8LmFZV&amp;id=8100&amp;d=2462&amp;returnurl=https%3A%2F%2Fpolylearn.calpoly.edu%2FAY_2019-2020%2Fmod%2Fforum%2Fview.php%3Fid%3D26313"><i class="icon fa fa-envelope-open-o fa-fw "  title="You are not subscribed to this discussion. Click to subscribe." aria-label="You are not subscribed to this discussion. Click to subscribe."></i></a></td></tr>

</tbody></table></div>
                            <div class="m-t-2 m-b-1">
<div class="row">
    <div class="col-md-4">        <div class="pull-left">
                <a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/view.php?id=26312&forceview=1" id="prev-activity-link" class="btn btn-link"  title="Announcements" >&#x25C0;&#xFE0E; Announcements</a>

        </div>
</div>
    <div class="col-md-4">        <div class="mdl-align">
            <div class="urlselect">
    <form method="post" action="https://polylearn.calpoly.edu/AY_2019-2020/course/jumpto.php" class="form-inline" id="url_select_f5dbb26ae7d5ad18">
        <input type="hidden" name="sesskey" value="ayEw8LmFZV">
            <label for="jump-to-activity" class="sr-only">
                Jump to...
            </label>
        <select  id="jump-to-activity" class="custom-select urlselect" name="jump"
                 >
                    <option value="" selected>Jump to...</option>
                    <option value="/mod/forum/view.php?id=26312&amp;forceview=1" >Announcements</option>
                    <option value="/mod/url/view.php?id=26314&amp;forceview=1" >Course Syllabus</option>
                    <option value="/mod/url/view.php?id=26316&amp;forceview=1" >CPE123 Pre-Survey</option>
                    <option value="/mod/url/view.php?id=157542&amp;forceview=1" >CSSE Experience Survey</option>
                    <option value="/mod/quiz/view.php?id=26320&amp;forceview=1" >Kind of a Midterm</option>
                    <option value="/mod/url/view.php?id=26323&amp;forceview=1" >Matt Bishop: What is Computer Security?</option>
                    <option value="/mod/url/view.php?id=26324&amp;forceview=1" >Emergent Chaos: The Security Principles of Saltzer and Schroeder</option>
                    <option value="/mod/resource/view.php?id=26325&amp;forceview=1" >J. Saltzer and M. Schroeder: The Protection of Information in Computer Systems</option>
                    <option value="/mod/url/view.php?id=26328&amp;forceview=1" >Lab 1: Ready Player One</option>
                    <option value="/mod/assign/view.php?id=26329&amp;forceview=1" >Lab 1: Assignment</option>
                    <option value="/mod/assign/view.php?id=26332&amp;forceview=1" >Week 0 Prompt</option>
                    <option value="/mod/url/view.php?id=26335&amp;forceview=1" >R. Anderson: Security Engineering, Chapter 2.4-2.4.4; 2.5.4-2.5.5</option>
                    <option value="/mod/url/view.php?id=26336&amp;forceview=1" >D. Goodin: “Anatomy of a Hack: How Crackers Ransack Passwords Like ‘qeadzcwrsfxv1331’ ”</option>
                    <option value="/mod/resource/view.php?id=26337&amp;forceview=1" >OUCH!: Two-Step Verification</option>
                    <option value="/mod/resource/view.php?id=26338&amp;forceview=1" >S. Bellovin: Identity And Security</option>
                    <option value="/mod/resource/view.php?id=26339&amp;forceview=1" >D. Seeley: Password Cracking: A Game of Wits</option>
                    <option value="/mod/assign/view.php?id=26341&amp;forceview=1" >Lab 2: Authentication</option>
                    <option value="/mod/resource/view.php?id=26342&amp;forceview=1" >level0-solution.py</option>
                    <option value="/mod/assign/view.php?id=26333&amp;forceview=1" >Week 1 Prompt</option>
                    <option value="/mod/url/view.php?id=26345&amp;forceview=1" >Important Announcement</option>
                    <option value="/mod/url/view.php?id=26347&amp;forceview=1" >R. Anderson: Security Engineering, Chapter 2.1-2.3.6</option>
                    <option value="/mod/resource/view.php?id=26348&amp;forceview=1" >Pieter Danhieux, “E-mail Phishing and Scams”, OUCH!</option>
                    <option value="/mod/resource/view.php?id=26349&amp;forceview=1" >Pieter Danhieux, “E-mail Phishing Attacks”, OUCH!</option>
                    <option value="/mod/url/view.php?id=26350&amp;forceview=1" >Stefan Savage. An Agenda for Empirical Cyber Crime Research. Keynote at USENIX ATC 2011</option>
                    <option value="/mod/page/view.php?id=26319&amp;forceview=1" >Team Assignments</option>
                    <option value="/mod/url/view.php?id=26352&amp;forceview=1" >Lab 3: Social Engineering &amp; Phishing</option>
                    <option value="/mod/url/view.php?id=26354&amp;forceview=1" >W3Schools.com: Introduction to HTML</option>
                    <option value="/mod/url/view.php?id=26355&amp;forceview=1" >Mozilla Developer Network: Sending form data</option>
                    <option value="/mod/url/view.php?id=26356&amp;forceview=1" >A quick overview of SMTP</option>
                    <option value="/mod/url/view.php?id=26357&amp;forceview=1" >How to Forge Email</option>
                    <option value="/mod/url/view.php?id=26358&amp;forceview=1" >Web.py Tutorial</option>
                    <option value="/mod/assign/view.php?id=26362&amp;forceview=1" >Homework 1: Social Engineering</option>
                    <option value="/mod/assign/view.php?id=26344&amp;forceview=1" >Week 3 Prompt</option>
                    <option value="/mod/resource/view.php?id=26365&amp;forceview=1" >CPE123 Human Factors Slides</option>
                    <option value="/mod/url/view.php?id=26367&amp;forceview=1" >Jeremiah Grossman: The State of Website Security</option>
                    <option value="/mod/url/view.php?id=26368&amp;forceview=1" >HTTP: The Protocol Every Web Developer Must Know - Part 1</option>
                    <option value="/mod/url/view.php?id=26369&amp;forceview=1" >Nicholas C. Zakas: HTTP cookies explained</option>
                    <option value="/mod/url/view.php?id=26370&amp;forceview=1" >W3Schools: JavaScript Introduction</option>
                    <option value="/mod/url/view.php?id=26371&amp;forceview=1" >W3Schools: JavaScript Cookies</option>
                    <option value="/mod/url/view.php?id=26372&amp;forceview=1" >What is Cross-Site Scripting?</option>
                    <option value="/mod/resource/view.php?id=26373&amp;forceview=1" >CPE123 Web Security Slides</option>
                    <option value="/mod/url/view.php?id=26375&amp;forceview=1" >Google's XSS Game</option>
                    <option value="/mod/resource/view.php?id=26381&amp;forceview=1" >CPE123 Web Security Slides</option>
                    <option value="/mod/url/view.php?id=26383&amp;forceview=1" >Ron Hipschman: Internet 101.101.101.101</option>
                    <option value="/mod/url/view.php?id=26384&amp;forceview=1" >Socket Programming in Python HOWTO</option>
                    <option value="/mod/url/view.php?id=26385&amp;forceview=1" >Aaron Balchunas: Introduction to Firewalls</option>
                    <option value="/mod/url/view.php?id=26386&amp;forceview=1" >Richard A. Kemmerer and Giovanni Vigna: Intrusion Detection: A Brief History and Overview</option>
                    <option value="/mod/url/view.php?id=26387&amp;forceview=1" >How to Use Wireshark to Capture, Filter and Inspect Packets</option>
                    <option value="/mod/url/view.php?id=26388&amp;forceview=1" >Julia Evans - How I use Wireshark</option>
                    <option value="/mod/url/view.php?id=26390&amp;forceview=1" >Lab 4: Network Security</option>
                    <option value="/mod/resource/view.php?id=26392&amp;forceview=1" >example.py</option>
                    <option value="/mod/resource/view.php?id=26393&amp;forceview=1" >searching.pcap</option>
                    <option value="/mod/resource/view.php?id=26394&amp;forceview=1" >traffic.pcap</option>
                    <option value="/mod/resource/view.php?id=26396&amp;forceview=1" >Slides from Thursday, November 15</option>
                    <option value="/mod/resource/view.php?id=26397&amp;forceview=1" >CPE123 Network Security Slides</option>
                    <option value="/mod/url/view.php?id=26399&amp;forceview=1" >R. Hipschman: The Secret Language: Cryptography &amp; Secret Codes</option>
                    <option value="/mod/url/view.php?id=26400&amp;forceview=1" >C. Pfleeger: Crypto: Not Just for the Defensive Team</option>
                    <option value="/mod/url/view.php?id=26401&amp;forceview=1" >Art of the Problem. Diffie-Hellman Key Exchange</option>
                    <option value="/mod/url/view.php?id=26402&amp;forceview=1" >How PGP works</option>
                    <option value="/mod/url/view.php?id=26403&amp;forceview=1" >A. Young and M. Yung: Cryptovirology: Extortion-Based Security Threats and Countermeasures</option>
                    <option value="/mod/resource/view.php?id=26406&amp;forceview=1" >CPE123 Crypto Slides</option>
                    <option value="/mod/url/view.php?id=26412&amp;forceview=1" >Bill Cheswick: An Evening with Berferd In Which a Cracker is Lured, Endured, and Studied</option>
                    <option value="/mod/url/view.php?id=26413&amp;forceview=1" >Clifford Stoll: Stalking the Wily Hacker</option>
                    <option value="/mod/url/view.php?id=26415&amp;forceview=1" >Binary File Format Posters</option>
        </select>
            <noscript>
                <input type="submit" class="btn btn-secondary" value="Go">
            </noscript>
    </form>
</div>

        </div>
</div>
    <div class="col-md-4">        <div class="pull-right">
                <a href="https://polylearn.calpoly.edu/AY_2019-2020/mod/url/view.php?id=26314&forceview=1" id="next-activity-link" class="btn btn-link"  title="Course Syllabus" >Course Syllabus &#x25B6;&#xFE0E;</a>

        </div>
</div>
</div>
</div>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex closed" aria-hidden="true" tabindex="-1">
        <nav class="list-group">
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204" data-key="coursehome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" >
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">CPE-123-05-2198</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/user/index.php?id=6204" data-key="participants" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="90" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-users fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Participants</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/grade/report/index.php?id=6204" data-key="grades" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-table fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Grades</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204" data-key="localboostnavigationcoursesections" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Sections</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action active" href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-0" data-key="18609" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="1" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body font-weight-bold">General</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-1" data-key="18610" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 0: Introduction to Computing &amp; Security</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-2" data-key="18611" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 1: Digital Identity &amp; Anonymity</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-3" data-key="24220" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 2: Human Factors &amp; Physical Security</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-4" data-key="24221" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 3: Web Security</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-5" data-key="24222" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 4: Network Security</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-6" data-key="24223" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 5: Secret Communication</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204#section-7" data-key="24224" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="30" data-nodetype="1" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="localboostnavigationcoursesections">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-folder-o fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Topic 6: Digital Forensics</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204" data-key="localboostnavigationactivities" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="1" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Activities</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/mod/assign/index.php?id=6204" data-key="localboostnavigationactivityassign" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-share-alt fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Assignments</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/mod/forum/index.php?id=6204" data-key="localboostnavigationactivityforum" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-share-alt fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Forums</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/mod/quiz/index.php?id=6204" data-key="localboostnavigationactivityquiz" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-share-alt fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Quizzes</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/course/resources.php?id=6204" data-key="localboostnavigationactivityresources" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="40" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationactivities">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-archive fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Resources</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/blocks/quickmail/emaillog.php?courseid=6204" data-key="localboostnavigationcustomcourseusers1" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="1" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Quickmail</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/blocks/quickmail/compose.php?courseid=6204" data-key="localboostnavigationcustomcourseusers2" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustomcourseusers1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Compose New Email</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/blocks/quickmail/signatures.php?courseid=6204" data-key="localboostnavigationcustomcourseusers3" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustomcourseusers1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Signatures</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/blocks/quickmail/drafts.php?courseid=6204" data-key="localboostnavigationcustomcourseusers4" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustomcourseusers1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">View Drafts</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/blocks/quickmail/sent.php?courseid=6204" data-key="localboostnavigationcustomcourseusers5" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustomcourseusers1">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">View History</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="http://lib.calpoly.edu/study-spaces-and-tech/convert" data-key="localboostnavigationcustomcourseusers6" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="1" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="6204">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">SensusAccess</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/my/?myoverviewtab=courses" data-key="courseindexpage" data-isexpandable="0" data-indent="1" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="mycourses">
                <div class="m-l-1">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-fw fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">More...</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="https://polylearn.calpoly.edu/AY_2019-2020/my/" data-key="localboostnavigationcustombottomusers1" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="1" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="home">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">My Courses</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="http://polylearnsupport.calpoly.edu/" data-key="localboostnavigationcustombottomusers2" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="1" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="home">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Support</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="http://polylearnsupport.calpoly.edu/" data-key="localboostnavigationcustombottomusers3" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustombottomusers2">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">PolyLearn Support</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="http://lib.calpoly.edu/" data-key="localboostnavigationcustombottomusers4" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustombottomusers2">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">Library Services</span>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action " href="http://polylearnsupport.calpoly.edu/Support/ScheduledMaintenance.html" data-key="localboostnavigationcustombottomusers5" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="1" data-preceedwithhr="0" data-parent-key="localboostnavigationcustombottomusers2">
                <div class="m-l-0">
                    <div class="media">
                        <span class="media-left">
                            <i class="icon fa fa-square local-boostnavigation-fa-sm fa-fw " aria-hidden="true"  ></i>
                        </span>
                        <span class="media-body ">PolyLearn Updates</span>
                    </div>
                </div>
            </a>
        </nav>
    </div>
</div>

<footer id="page-footer" class="py-3 bg-dark text-light">
    <div class="container">
        <div id="course-footer"></div>


        <div class="logininfo">You are logged in as <a href="https://polylearn.calpoly.edu/AY_2019-2020/user/profile.php?id=280995" title="View profile">Bradley Hewitt</a> (<a href="https://polylearn.calpoly.edu/AY_2019-2020/login/logout.php?sesskey=ayEw8LmFZV">Log out</a>)</div>
        <div class="tool_usertours-resettourcontainer"></div>
        <div class="homelink"><a href="https://polylearn.calpoly.edu/AY_2019-2020/course/view.php?id=6204">CPE-123-05-2198</a></div>
        <nav class="nav navbar-nav d-md-none">
                <ul class="list-unstyled pt-3">
                </ul>
        </nav>
        <div class="tool_dataprivacy"><a href="https://polylearn.calpoly.edu/AY_2019-2020/admin/tool/dataprivacy/summary.php">Data retention summary</a></div><a href="https://download.moodle.org/mobile?version=2018051708.01&amp;lang=en_us&amp;iosappid=633359593&amp;androidappid=com.moodle.moodlemobile">Get the mobile app</a>
        <script type="text/javascript">
//<![CDATA[
var require = {
    baseUrl : 'https://polylearn.calpoly.edu/AY_2019-2020/lib/requirejs.php/1570980943/',
    // We only support AMD modules with an explicit define() statement.
    enforceDefine: true,
    skipDataMain: true,
    waitSeconds : 0,

    paths: {
        jquery: 'https://polylearn.calpoly.edu/AY_2019-2020/lib/javascript.php/1570980943/lib/jquery/jquery-3.2.1.min',
        jqueryui: 'https://polylearn.calpoly.edu/AY_2019-2020/lib/javascript.php/1570980943/lib/jquery/ui-1.12.1/jquery-ui.min',
        jqueryprivate: 'https://polylearn.calpoly.edu/AY_2019-2020/lib/javascript.php/1570980943/lib/requirejs/jquery-private'
    },

    // Custom jquery config map.
    map: {
      // '*' means all modules will get 'jqueryprivate'
      // for their 'jquery' dependency.
      '*': { jquery: 'jqueryprivate' },
      // Stub module for 'process'. This is a workaround for a bug in MathJax (see MDL-60458).
      '*': { process: 'core/first' },

      // 'jquery-private' wants the real jQuery module
      // though. If this line was not here, there would
      // be an unresolvable cyclic dependency.
      jqueryprivate: { jquery: 'jquery' }
    }
};

//]]>
</script>
<script type="text/javascript" src="https://polylearn.calpoly.edu/AY_2019-2020/lib/javascript.php/1570980943/lib/requirejs/require.min.js"></script>
<script type="text/javascript">
//<![CDATA[
M.util.js_pending("core/first");require(['core/first'], function() {
;
require(["media_videojs/loader"], function(loader) {
    loader.setUp(function(videojs) {
        videojs.options.flash.swf = "https://polylearn.calpoly.edu/AY_2019-2020/media/player/videojs/videojs/video-js.swf";
videojs.addLanguage("en",{
 "Audio Player": "Audio Player",
 "Video Player": "Video Player",
 "Play": "Play",
 "Pause": "Pause",
 "Replay": "Replay",
 "Current Time": "Current Time",
 "Duration Time": "Duration Time",
 "Remaining Time": "Remaining Time",
 "Stream Type": "Stream Type",
 "LIVE": "LIVE",
 "Loaded": "Loaded",
 "Progress": "Progress",
 "Progress Bar": "Progress Bar",
 "progress bar timing: currentTime={1} duration={2}": "{1} of {2}",
 "Fullscreen": "Fullscreen",
 "Non-Fullscreen": "Non-Fullscreen",
 "Mute": "Mute",
 "Unmute": "Unmute",
 "Playback Rate": "Playback Rate",
 "Subtitles": "Subtitles",
 "subtitles off": "subtitles off",
 "Captions": "Captions",
 "captions off": "captions off",
 "Chapters": "Chapters",
 "Descriptions": "Descriptions",
 "descriptions off": "descriptions off",
 "Audio Track": "Audio Track",
 "Volume Level": "Volume Level",
 "You aborted the media playback": "You aborted the media playback",
 "A network error caused the media download to fail part-way.": "A network error caused the media download to fail part-way.",
 "The media could not be loaded, either because the server or network failed or because the format is not supported.": "The media could not be loaded, either because the server or network failed or because the format is not supported.",
 "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.": "The media playback was aborted due to a corruption problem or because the media used features your browser did not support.",
 "No compatible source was found for this media.": "No compatible source was found for this media.",
 "The media is encrypted and we do not have the keys to decrypt it.": "The media is encrypted and we do not have the keys to decrypt it.",
 "Play Video": "Play Video",
 "Close": "Close",
 "Close Modal Dialog": "Close Modal Dialog",
 "Modal Window": "Modal Window",
 "This is a modal window": "This is a modal window",
 "This modal can be closed by pressing the Escape key or activating the close button.": "This modal can be closed by pressing the Escape key or activating the close button.",
 ", opens captions settings dialog": ", opens captions settings dialog",
 ", opens subtitles settings dialog": ", opens subtitles settings dialog",
 ", opens descriptions settings dialog": ", opens descriptions settings dialog",
 ", selected": ", selected",
 "captions settings": "captions settings",
 "subtitles settings": "subititles settings",
 "descriptions settings": "descriptions settings",
 "Text": "Text",
 "White": "White",
 "Black": "Black",
 "Red": "Red",
 "Green": "Green",
 "Blue": "Blue",
 "Yellow": "Yellow",
 "Magenta": "Magenta",
 "Cyan": "Cyan",
 "Background": "Background",
 "Window": "Window",
 "Transparent": "Transparent",
 "Semi-Transparent": "Semi-Transparent",
 "Opaque": "Opaque",
 "Font Size": "Font Size",
 "Text Edge Style": "Text Edge Style",
 "None": "None",
 "Raised": "Raised",
 "Depressed": "Depressed",
 "Uniform": "Uniform",
 "Dropshadow": "Dropshadow",
 "Font Family": "Font Family",
 "Proportional Sans-Serif": "Proportional Sans-Serif",
 "Monospace Sans-Serif": "Monospace Sans-Serif",
 "Proportional Serif": "Proportional Serif",
 "Monospace Serif": "Monospace Serif",
 "Casual": "Casual",
 "Script": "Script",
 "Small Caps": "Small Caps",
 "Reset": "Reset",
 "restore all settings to the default values": "restore all settings to the default values",
 "Done": "Done",
 "Caption Settings Dialog": "Caption Settings Dialog",
 "Beginning of dialog window. Escape will cancel and close the window.": "Beginning of dialog window. Escape will cancel and close the window.",
 "End of dialog window.": "End of dialog window."
});

    });
});;
function legacy_activity_onclick_handler_1(e) { e.halt(); window.open('https://polylearn.calpoly.edu/AY_2019-2020/mod/url/view.php?id=157542&redirect=1'); return false; };
M.util.js_pending('local_boostnavigation/collapsenavdrawernodes');
require(['local_boostnavigation/collapsenavdrawernodes'], function(amd) {
    amd.init(["mycourses","localboostnavigationcoursesections","localboostnavigationactivities","localboostnavigationcustomcourseusers1","localboostnavigationcustombottomusers2"]);
    M.util.js_complete('local_boostnavigation/collapsenavdrawernodes');
});;
M.util.js_pending('local_notices/dismiss');
require(['local_notices/dismiss'], function(amd) {
    amd.init();
    M.util.js_complete('local_notices/dismiss');
});;

require(['jquery', 'message_popup/message_popover_controller'], function($, controller) {
    var container = $('#nav-message-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

require(['jquery', 'message_popup/notification_popover_controller'], function($, controller) {
    var container = $('#nav-notification-popover-container');
    var controller = new controller(container);
    controller.registerEventListeners();
    controller.registerListNavigationEventListeners();
});
;

        require(['jquery'], function($) {
            $('#jump-to-activity').change(function() {
                if (!$(this).val()) {
                    return false;
                }
                $('#url_select_f5dbb26ae7d5ad18').submit();
            });
        });
    ;

M.util.js_pending('theme_boost/loader');
require(['theme_boost/loader'], function() {
  M.util.js_complete('theme_boost/loader');
});
M.util.js_pending('theme_boost/drawer');
require(['theme_boost/drawer'], function(mod) {
    mod.init();
  M.util.js_complete('theme_boost/drawer');
});
;
M.util.js_pending('core/notification');
require(['core/notification'], function(amd) {
    amd.init(83011, []);
    M.util.js_complete('core/notification');
});;
M.util.js_pending('core/log');
require(['core/log'], function(amd) {
    amd.setConfig({"level":"warn"});
    M.util.js_complete('core/log');
});M.util.js_complete("core/first");
});
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
M.str = {"moodle":{"lastmodified":"Last modified","name":"Name","error":"Error","info":"Information","yes":"Yes","no":"No","cancel":"Cancel","confirm":"Confirm","areyousure":"Are you sure?","closebuttontitle":"Close","unknownerror":"Unknown error"},"repository":{"type":"Type","size":"Size","invalidjson":"Invalid JSON string","nofilesattached":"No files attached","filepicker":"File picker","logout":"Logout","nofilesavailable":"No files available","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached","renameto":"Rename to \"{$a}\"","referencesexist":"There are {$a} alias\/shortcut files that use this file as their source","select":"Select"},"admin":{"confirmdeletecomments":"You are about to delete comments, are you sure?","confirmation":"Confirmation"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
(function() {Y.use("moodle-filter_mathjaxloader-loader",function() {M.filter_mathjaxloader.configure({"mathjaxconfig":"\nMathJax.Hub.Config({\n    config: [\"Accessible.js\", \"Safe.js\"],\n    errorSettings: { message: [\"!\"] },\n    skipStartupTypeset: true,\n    messageStyle: \"none\"\n});\n","lang":"en"});
});
M.util.help_popups.setup(Y);
Y.use("moodle-mod_forum-subscriptiontoggle",function() {Y.M.mod_forum.subscriptiontoggle.init();
});
 M.util.js_pending('random5dbb26ae7d5ad20'); Y.on('domready', function() { M.util.js_complete("init");  M.util.js_complete('random5dbb26ae7d5ad20'); });
})();
//]]>
</script>

    </div>
</footer>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"4e34bbaf17","applicationID":"1977984","transactionName":"YldTYBRYXUVVURdZXFsdZEYPFlJGREFMXVxaVl1RSU5EQRtzOm8BBQMIGVQJAQYbXwxUHFNdQ0ELFkVfUUVNQFtF","queueTime":0,"applicationTime":217,"atts":"ThBQFlxCTks=","errorBeacon":"bam.nr-data.net","agent":""}</script></body>
</html>
