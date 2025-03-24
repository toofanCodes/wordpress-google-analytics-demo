import{c as T,R as F,a as H}from"./constants.a8a14dc3.js";import{r as x,l as I,n as M,e as ne,u as j}from"./index.506b73e8.js";import{b as X,c as $,e as ee,d as Y,C as Q,_ as te}from"./Caret.a21d4ca8.js";import{u as ce}from"./JsonValues.3fcfec97.js";import"./translations.d159963e.js";import{_ as i,s as L}from"./default-i18n.20001971.js";import{u as G}from"./Url.9d3a2412.js";import{B as K,S as re,b as se}from"./index.b359096c.js";import{C as de}from"./ProBadge.751e0b85.js";import{S as he}from"./External.c9d4f255.js";import{v as d,o as a,c as R,a as o,F as V,J as N,k as p,l as v,x as w,t as S,b as g,E as le,C as f,G as q,m as ge,$ as me}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{_ as B}from"./_plugin-vue_export-helper.eefbdd86.js";import{e as pe}from"./escapeRegExp.9b141b1a.js";import{S as ie}from"./Exclamation.22e53a8b.js";import{B as fe}from"./Checkbox.6db0b9ed.js";import{S as _e}from"./Gear.bd4e1565.js";import{T as ae}from"./Slide.39c07c03.js";import{a as ye}from"./date.a0d85d51.js";import{D as Z}from"./datetime.f197aeae.js";import{B as ve}from"./DatePicker.108c35e2.js";import{C as Re}from"./Tooltip.73441134.js";import{S as Ue}from"./Plus.426117bd.js";const O="all-in-one-seo-pack",oe=()=>({redirectHasUnPublishedPost:t=>t.post_id&&t.postStatus!=="publish",validateRedirect:t=>{const n=[];if(!t.url.url)return n;if(t.url.regex)try{new RegExp(t.url.url)}catch{return n.push(i("The regex syntax is invalid.",O)),n}if(!t.url.regex&&!x(t.url.url))return n.push(i("Your URL is invalid.",O)),n;t.url.url.substr(0,4)==="http"&&n.push(i("Please enter a valid relative source URL.",O));const s=/%[a-zA-Z_]+%/,l=/%[0-9A-Fa-f]{2}/;if(t.url.url.match(s)&&!t.url.url.match(l)&&n.push(i("Permalinks are not currently supported.",O)),(t.url.url==="/(.*)"||t.url.url==="^/(.*)")&&n.push(i("This redirect is supported using the Relocate Site feature under Full Site Redirect tab.",O)),t.url.url&&t.url.url.length&&t.targetUrl&&t.targetUrl.length){let y=t.url.ignoreSlash?I.unTrailingSlashIt(t.url.url):t.url.url,m=t.url.ignoreSlash?I.unTrailingSlashIt(t.targetUrl):t.targetUrl;y=t.url.ignoreCase?y.toLowerCase():y,m=t.url.ignoreCase?m.toLowerCase():m,t.url.regex||(y=y.replace(/#.*?$/,"")),m=m.replace(/#.*?$/,""),(y===m||t.url.regex&&m.match(y))&&n.push(i("Your source is the same as a target and this will create a loop.",O))}const c=M();if(0<(c==null?void 0:c.protectedPaths.length)){const y=c.protectedPaths.map(m=>m.replace(/\/$/,""));t.url.url.match(new RegExp("^("+y.join("|")+")"))&&n.push(i("Your source is a protected path and cannot be redirected.",O))}return n}}),J="all-in-one-seo-pack",be={emits:["set-url"],components:{CoreProBadge:de,SvgExternal:he},props:{results:{type:Array,required:!0},url:String},data(){return{strings:{DRAFT:i("DRAFT",J),PENDING:i("PENDING",J),FUTURE:i("FUTURE",J)}}},methods:{getOptionTitle(e){e=x(e);const r=x(this.url),t=new RegExp(`(${pe(r)})`,"gi");return e.replace(t,'<span class="search-term">$1</span>')},getStatusLabel(e){switch(e.toLowerCase()){case"draft":return this.strings.DRAFT;case"future":return this.strings.FUTURE;case"pending":return this.strings.PENDING}}}},Se={class:"aioseo-add-redirection-url-results"},Te=["onClick"],we={class:"option"},ke={class:"option-title"},De=["innerHTML"],Ce={class:"option-details"},Ee=["href"];function Le(e,r,t,n,s,l){const c=d("core-pro-badge"),y=d("svg-external");return a(),R("div",Se,[o("ul",null,[(a(!0),R(V,null,N(t.results,(m,P)=>(a(),R("li",{key:P,onClick:A=>e.$emit("set-url",m.link)},[o("span",null,[o("div",we,[o("div",ke,[o("div",{innerHTML:l.getOptionTitle(m.label)},null,8,De),m.status!=="publish"?(a(),p(c,{key:0},{default:v(()=>[w(S(l.getStatusLabel(m.status)),1)]),_:2},1024)):g("",!0)]),o("div",Ce,[o("span",null,S(m.link),1)])]),o("a",{class:"option-permalink",href:m.link,target:"_blank",onClick:le(()=>{},["stop"])},[f(y)],8,Ee)])],8,Te))),128))])])}const ue=B(be,[["render",Le]]),Ve={setup(){const{decodeUrl:e}=G();return{postEditorStore:ne(),redirectsStore:M(),rootStore:j(),decodeUrl:e}},components:{BaseInput:K,CoreAddRedirectionUrlResults:ue,CoreLoader:X,SvgCircleCheck:$,SvgCircleClose:ee,SvgCircleExclamation:ie},props:{url:String,errors:Array,warnings:Array},data(){return{showResults:!1,isLoading:!1,value:null,results:[]}},watch:{value(){this.value&&(this.value=this.value.replace(/(https?:\/)(\/)+|(\/)+/g,"$1$2$3"),this.value.startsWith("/")&&(this.value=this.value.replace(/\s+/g,"")))},url:{immediate:!0,handler(){this.value=this.url}}},methods:{onBlur(){setTimeout(()=>{this.$emit("update:modelValue",this.value)},150)},searchChange(){if(!this.value){this.isLoading=!1,this.showResults=!1,this.results=[];return}if(this.value.startsWith("/")||this.value.startsWith("http:")||this.value.startsWith("https:")){this.isLoading=!1,this.showResults=!1,this.results=[];return}this.isLoading=!0,Y(()=>{if(!this.value){this.isLoading=!1,this.showResults=!1,this.results=[];return}this.showResults=!0,this.ajaxSearch(this.value).then(()=>this.isLoading=!1)},500)},ajaxSearch(e){return this.redirectsStore.getPosts({query:e,postId:this.postEditorStore.currentPost.id}).then(r=>{this.results=r.body.objects})},setUrl(e){this.showResults=!1,this.value=e.replace(this.rootStore.aioseo.urls.home,"",e),this.$emit("update:modelValue",this.value)},inputEventDecodeUrl(e){this.value="",this.value=this.decodeUrl(e)},documentClick(e){if(!this.showResults)return;const r=e&&e.target?e.target:null,t=this.$refs["redirect-target-url"];t&&t!==r&&!t.contains(r)&&(this.showResults=!1)}},mounted(){document.addEventListener("click",this.documentClick);const e=document.querySelector("#aioseo-modal-portal .modal-wrapper");e&&e.addEventListener("click",this.documentClick);const r=document.querySelector("#main-settings-cont");r&&r.addEventListener("click",this.documentClick)},beforeUnmount(){document.removeEventListener("click",this.documentClick);const e=document.querySelector("#aioseo-modal-portal .modal-wrapper");e&&e.removeEventListener("click",this.documentClick);const r=document.querySelector("#main-settings-cont");r&&r.removeEventListener("click",this.documentClick)}},Pe={class:"aioseo-add-redirection-target-url",ref:"redirect-target-url"},Ae={class:"append-icon"};function xe(e,r,t,n,s,l){const c=d("svg-circle-close"),y=d("svg-circle-check"),m=d("svg-circle-exclamation"),P=d("core-loader"),A=d("base-input"),E=d("core-add-redirection-url-results");return a(),R("div",Pe,[f(A,{modelValue:s.value,"onUpdate:modelValue":[r[0]||(r[0]=k=>s.value=k),r[2]||(r[2]=k=>e.$emit("update:modelValue",n.decodeUrl(s.value)))],onKeyup:l.searchChange,onFocus:r[1]||(r[1]=k=>s.showResults=!0),onInput:r[3]||(r[3]=k=>l.inputEventDecodeUrl(k.target.value)),size:"medium",placeholder:"/target-page/",class:q({"aioseo-error":t.errors.length,"aioseo-active":!t.errors.length&&!t.warnings.length&&t.url,"aioseo-warning":t.warnings.length})},{"append-icon":v(()=>[o("div",Ae,[s.isLoading?g("",!0):(a(),R(V,{key:0},[t.errors.length?(a(),p(c,{key:0})):g("",!0),!t.errors.length&&!t.warnings.length&&t.url?(a(),p(y,{key:1})):g("",!0),t.warnings.length?(a(),p(m,{key:2})):g("",!0)],64)),s.isLoading?(a(),p(P,{key:1,dark:""})):g("",!0)])]),_:1},8,["modelValue","onKeyup","class"]),s.showResults&&s.results.length?(a(),p(E,{key:0,results:s.results,url:s.value,onSetUrl:l.setUrl},null,8,["results","url","onSetUrl"])):g("",!0)],512)}const Oe=B(Ve,[["render",xe]]),Ne=function(e,r){if(typeof e!="string")return e;const t=new RegExp("^"+r.replace(/\/$/,""),"i");return e.replace(t,"")},C="all-in-one-seo-pack",qe={emits:["updated-url","remove-url","updated-option"],setup(){const{validateRedirect:e}=oe(),{decodeUrl:r}=G();return{redirectsStore:M(),rootStore:j(),validateRedirect:e,decodeUrl:r}},components:{BaseCheckbox:fe,BaseInput:K,CoreAddRedirectionUrlResults:ue,CoreAlert:Q,CoreLoader:X,SvgCircleCheck:$,SvgCircleClose:ee,SvgCircleExclamation:ie,SvgGear:_e,SvgTrash:re,TransitionSlide:ae},props:{url:{type:Object,default(){return{id:null,url:null,regex:!1,ignoreSlash:!0,ignoreCase:!0,errors:[],warnings:[]}}},allowDelete:Boolean,targetUrl:String,log404:Boolean,disableSource:Boolean},data(){return{showResults:!1,isLoading:!1,showOptions:!1,strings:{ignoreSlash:i("Ignore Slash",C),ignoreCase:i("Ignore Case",C),regex:i("Regex",C)},results:[]}},watch:{targetUrl(){this.updateSourceUrl(this.url.url)}},computed:{maybeRegex(){return this.url.url.match(/[*\\()[\]^$]/)!==null||this.url.url.indexOf(".?")!==-1},iffyUrl(){if(!this.url.url||this.disableSource)return[];const e=[];return this.url.url.substr(0,4)!=="http"&&this.url.url.substr(0,1)!=="/"&&0<this.url.url.length&&!this.url.regex&&e.push(L(i("The source URL should probably start with a %1$s",C),"<code>/</code>")),this.url.url.indexOf("#")!==-1&&e.push(i("Anchor values are not sent to the server and cannot be redirected.",C)),!this.log404&&this.maybeRegex&&!this.url.regex&&e.push(L(i("Remember to enable the %1$s option if this is a regular expression.",C),"<code>Regex</code>")),this.url.regex&&(this.url.url.indexOf("^")===-1&&this.url.url.indexOf("$")===-1&&e.push(L(i("To prevent a greedy regular expression you can use %1$s to anchor it to the start of the URL. For example: %2$s",C),"<code>^/</code>","<code>^/"+x(this.url.url.replace(/^\//,""))+"</code>")),0<this.url.url.indexOf("^")&&e.push(L(i("The caret %1$s should be at the start. For example: %2$s",C),"<code>^/</code>","<code>^/"+x(this.url.url.replace("^","").replace(/^\//,""))+"</code>")),this.url.url.indexOf("^")===0&&this.url.url.indexOf("^/")===-1&&e.push(L(i("The source URL should probably start with a %1$s",C),"<code>^/</code>")),this.url.url.length-1!==this.url.url.indexOf("$")&&this.url.url.indexOf("$")!==-1&&e.push(L(i("The dollar symbol %1$s should be at the end. For example: %2$s",C),"<code>$</code>","<code>"+x(this.url.url.replace(/\$/g,""))+"$</code>"))),this.url.url.match(/(\.html|\.htm|\.php|\.pdf|\.jpg)$/)!==null&&e.push(i("Some servers may be configured to serve file resources directly, preventing a redirect occurring.",C)),e},urlOptionsActive(){return this.url.regex||this.showOptions}},methods:{updateSourceUrl(e){!this.disableSource&&e&&(e&&(e=e.replace(/(https?:\/)(\/)+|(\/)+/g,"$1$2$3")),!this.url.regex&&e.startsWith("/")&&(e=e.replace(/\s+/g,"")),e=Ne(e,this.rootStore.aioseo.urls.home)),this.url.url=e,this.url.errors=this.validateRedirect(this),this.url.warnings=this.iffyUrl,this.$emit("updated-url",this.url)},updateOption(e,r){this.url[e]=r,this.updateSourceUrl(this.url.url),this.$emit("updated-option",this.url)},searchChange(){if(!this.url.url||this.url.regex){this.isLoading=!1,this.showResults=!1,this.results=[];return}if(this.url.url.startsWith("/")||this.url.url.startsWith("^")||this.url.url.startsWith("http:")||this.url.url.startsWith("https:")){this.isLoading=!1,this.showResults=!1,this.results=[];return}this.isLoading=!0,Y(()=>{if(!this.url.url){this.isLoading=!1,this.showResults=!1,this.results=[];return}this.showResults=!0,this.ajaxSearch(this.url.url).then(()=>this.isLoading=!1)},500)},ajaxSearch(e){return this.redirectsStore.getPosts({query:e}).then(r=>{this.results=r.body.objects})},setUrl(e){this.showResults=!1,this.updateOption("url",e.replace(this.rootStore.aioseo.urls.home,"",e))},documentClick(e){if(!this.showResults)return;const r=e&&e.target?e.target:null,t=this.$refs["redirect-source-url"];t&&t!==r&&!t.contains(r)&&(this.showResults=!1)}},mounted(){this.url.showOptions&&(this.showOptions=!0,this.updateSourceUrl(this.url.url)),document.addEventListener("click",this.documentClick)},beforeUnmount(){document.removeEventListener("click",this.documentClick)}},He={class:"aioseo-redirect-source-url",ref:"redirect-source-url"},Ie={class:"append-icon"};function Be(e,r,t,n,s,l){const c=d("svg-circle-close"),y=d("svg-circle-check"),m=d("svg-circle-exclamation"),P=d("svg-gear"),A=d("svg-trash"),E=d("core-loader"),k=d("base-input"),z=d("core-add-redirection-url-results"),b=d("base-checkbox"),D=d("transition-slide"),u=d("core-alert");return a(),R("div",He,[f(k,{modelValue:n.decodeUrl(t.url.url),"onUpdate:modelValue":r[2]||(r[2]=h=>l.updateSourceUrl(n.decodeUrl(h))),onKeyup:l.searchChange,onFocus:r[3]||(r[3]=h=>s.showResults=!0),disabled:t.log404||t.disableSource,size:"medium",placeholder:"/source-page/",class:q({"aioseo-error":t.url.errors.length,"aioseo-active":!t.url.errors.length&&!t.url.warnings.length&&t.url.url,"aioseo-warning":t.url.warnings.length})},{"append-icon":v(()=>[o("div",Ie,[s.isLoading?g("",!0):(a(),R(V,{key:0},[t.url.errors.length?(a(),p(c,{key:0})):g("",!0),!t.url.errors.length&&!t.url.warnings.length&&t.url.url?(a(),p(y,{key:1})):g("",!0),t.url.warnings.length?(a(),p(m,{key:2})):g("",!0),f(P,{class:q({active:l.urlOptionsActive}),onClick:r[0]||(r[0]=h=>s.showOptions=!s.showOptions)},null,8,["class"]),t.allowDelete?(a(),p(A,{key:3,onClick:r[1]||(r[1]=h=>e.$emit("remove-url"))})):g("",!0)],64)),s.isLoading?(a(),p(E,{key:1,dark:""})):g("",!0)])]),_:1},8,["modelValue","onKeyup","disabled","class"]),!t.url.regex&&s.showResults&&s.results.length?(a(),p(z,{key:0,results:s.results,url:t.url.url,onSetUrl:l.setUrl},null,8,["results","url","onSetUrl"])):g("",!0),t.log404?g("",!0):ge(e.$slots,"source-url-description",{key:1}),f(D,{active:s.showOptions,class:"source-url-options"},{default:v(()=>[f(b,{size:"medium",modelValue:t.url.ignoreSlash,"onUpdate:modelValue":r[4]||(r[4]=h=>l.updateOption("ignoreSlash",h))},{default:v(()=>[w(S(s.strings.ignoreSlash),1)]),_:1},8,["modelValue"]),f(b,{size:"medium",modelValue:t.url.ignoreCase,"onUpdate:modelValue":r[5]||(r[5]=h=>l.updateOption("ignoreCase",h))},{default:v(()=>[w(S(s.strings.ignoreCase),1)]),_:1},8,["modelValue"]),!t.log404&&!t.disableSource?(a(),p(b,{key:0,size:"medium",modelValue:t.url.regex,"onUpdate:modelValue":r[6]||(r[6]=h=>l.updateOption("regex",h))},{default:v(()=>[w(S(s.strings.regex),1)]),_:1},8,["modelValue"])):g("",!0)]),_:1},8,["active"]),f(D,{active:!!t.url.errors.length},{default:v(()=>[(a(!0),R(V,null,N(t.url.errors,(h,W)=>(a(),p(u,{key:W,class:"source-url-error",type:"red",size:"small",innerHTML:h},null,8,["innerHTML"]))),128))]),_:1},8,["active"]),f(D,{active:!!t.url.warnings.length},{default:v(()=>[(a(!0),R(V,null,N(t.url.warnings,(h,W)=>(a(),p(u,{key:W,class:"source-url-warning",type:"yellow",size:"small",innerHTML:h},null,8,["innerHTML"]))),128))]),_:1},8,["active"])],512)}const ze=B(qe,[["render",Be]]),U="all-in-one-seo-pack",Fe={type:null,key:null,value:null,regex:null},Me={emits:["redirects-custom-rule-error"],setup(){return{dateStringToLocalJs:ye,rootStore:j()}},components:{BaseButton:te,BaseDatePicker:ve,BaseInput:K,BaseSelect:se,CoreAlert:Q,CoreTooltip:Re,SvgCirclePlus:Ue,SvgTrash:re},props:{editCustomRules:Array},data(){return{DateTime:Z,strings:{customRules:i("Custom Rules",U),selectMatchRule:i("Select Rule",U),delete:i("Delete",U),add:i("Add Custom Rule",U),regex:i("Regex",U),selectAValue:i("Select a Value or Add a New One",U),key:i("Key",U),value:i("Value",U),startDate:i("Start Date",U),endDate:i("End Date",U)},customRules:[],rulesErrors:[],types:[{label:T.schedule,value:"schedule",taggable:!1,regex:!1,dateRange:!0},{label:T.login,value:"login",placeholder:i("Select Status",U),singleRule:!0,options:[{label:T.loggedin,value:"loggedin"},{label:T.loggedout,value:"loggedout"}]},{label:T.role,value:"role",multiple:!0,placeholder:i("Select Roles",U),options:Object.entries(this.rootStore.aioseo.user.roles).map(e=>({label:e[1],value:e[0]}))},{label:T.referrer,value:"referrer",regex:!0,singleRule:!0},{label:T.agent,value:"agent",regex:!0,taggable:!0,multiple:!0,options:[{label:T.mobile,value:"mobile",docLink:I.getDocLink(i("Learn more",U),"redirectCustomRulesUserAgent",!0)},{label:T.feeds,value:"feeds",docLink:I.getDocLink(i("Learn more",U),"redirectCustomRulesUserAgent",!0)},{label:T.libraries,value:"libraries",docLink:I.getDocLink(i("Learn more",U),"redirectCustomRulesUserAgent",!0)}]},{label:T.cookie,value:"cookie",keyValuePair:!0,regex:!0},{label:T.ip,value:"ip",placeholder:i("Enter an IP Address",U),taggable:!0,regex:!0,singleRule:!0},{label:T.server,value:"server",placeholder:i("Enter the Server Name",U),regex:!0,singleRule:!0},{label:T.header,value:"header",keyValuePair:!0,regex:!0},{label:T.wp_filter,value:"wp_filter",placeholder:i("Enter a WordPress Filter Name",U),taggable:!0},{label:T.locale,value:"locale",taggable:!0,regex:!0,placeholder:i("Enter a Locale Code, e.g.: en_GB, es_ES",U),singleRule:!0}]}},watch:{customRules:{deep:!0,handler(){this.validationError()}}},computed:{hasCustomRules(){return 0<this.customRules.length},filteredTypes(){return this.types.map(e=>(e.$isDisabled=!1,e.singleRule&&this.customRules.find(r=>e.value===r.type)&&(e.$isDisabled=!0),e))}},methods:{isDisabledStartDate(e){const r=new Date;return r.setHours(0,0,0,0),e<r},isDisabledEndDate(e,r){const t=this.getRuleValue("scheduleStart",r);return t?(e.setHours(23,59,59,0),this.dateStringToLocalJs(t)>e):this.isDisabledStartDate(e)},removeRule(e){this.customRules.splice(e,1),this.hasCustomRules||this.addRule(null)},addRule(e,r=!1){e||(e=JSON.parse(JSON.stringify(Fe))),(!r||r&&this.customRules.filter(t=>t===e).length===0)&&this.customRules.push(e)},updateRule(e,r,t){const n=this.customRules[t];r=typeof r.value<"u"?r.value:r,r=typeof r=="object"&&r.length?r.map(s=>s.value):r,n[e]=r,e==="type"&&(n.value=""),this.customRules[t]=n},getRuleValue(e,r,t=!1){if(!this.customRules[r])return;let s=this.customRules[r][e],l=null;if(t)return s;switch(e){case"type":s=this.types.find(c=>s===c.value);break;case"value":l=this.getType(r,"options"),l&&(typeof s=="object"?s=s.map(c=>l.find(y=>c===y.value)||c).filter(c=>!!c):s=l.find(c=>s===c.value)||s),this.getType(r,"taggable")&&(s=typeof s=="object"?s.map(c=>typeof c.label>"u"?{label:c,value:c}:c):[]);break}return s},getType(e,r){const t=this.getRuleValue("type",e);return r?t&&typeof t[r]<"u"?t[r]:!1:t},validationError(){let e=!1,r=null,t=null;this.customRules.forEach((n,s)=>{switch(this.rulesErrors[s]=null,n.type){case"schedule":r=this.getRuleValue("scheduleStart",s),t=this.getRuleValue("scheduleEnd",s),r&&t&&(r>t&&(this.rulesErrors[s]=i("The Start Date must be lower than the End Date.",U),e=!0),r===t&&(this.rulesErrors[s]=i("Start Date and End Date must be different.",U),e=!0));break}}),this.$emit("redirects-custom-rule-error",e)},updateDate(e,r,t){const n=e!==null?Z.fromJSDate(e).toUTC().toString():"";this.updateRule(r,n,t)}},mounted(){this.editCustomRules&&(this.customRules=this.editCustomRules),this.hasCustomRules||this.addRule(null)}},We={class:"custom-rules"},Je={class:"redirects-options-table",cellspacing:"0",cellpadding:"0","aria-label":"Custom Rules"},je={colspan:"2"},Ye={class:"rule-settings"},Qe={class:"rule-row"},Ge={class:"rule-option"},Ke={key:3,class:"date-range"},Ze={key:0,class:"rule-error"},Xe={class:"actions"},$e={colspan:"2"};function et(e,r,t,n,s,l){const c=d("base-select"),y=d("base-input"),m=d("base-date-picker"),P=d("base-toggle"),A=d("core-alert"),E=d("svg-trash"),k=d("core-tooltip"),z=d("svg-circle-plus"),b=d("base-button");return a(),R("div",We,[o("table",Je,[o("thead",null,[o("tr",null,[o("td",je,S(s.strings.customRules),1)])]),o("tbody",null,[(a(!0),R(V,null,N(s.customRules,(D,u)=>(a(),R("tr",{class:q(["rule",{even:u%2===0}]),key:u},[o("td",Ye,[o("div",Qe,[o("div",Ge,[f(c,{options:l.filteredTypes,size:"medium",placeholder:s.strings.selectMatchRule,modelValue:l.getRuleValue("type",u),"onUpdate:modelValue":h=>l.updateRule("type",h,u)},null,8,["options","placeholder","modelValue","onUpdate:modelValue"]),l.getType(u,"options")||l.getType(u,"taggable")?(a(),p(c,{key:0,options:l.getType(u,"options")||[],size:"medium",modelValue:l.getRuleValue("value",u),"onUpdate:modelValue":h=>l.updateRule("value",h,u),multiple:l.getType(u,"multiple")||l.getType(u,"taggable"),taggable:l.getType(u,"taggable"),placeholder:l.getType(u,"placeholder")||s.strings.selectAValue},null,8,["options","modelValue","onUpdate:modelValue","multiple","taggable","placeholder"])):g("",!0),l.getType(u,"keyValuePair")?(a(),p(y,{key:1,modelValue:l.getRuleValue("key",u),"onUpdate:modelValue":h=>l.updateRule("key",h,u),size:"medium",placeholder:l.getType(u,"placeholderKey")||s.strings.key},null,8,["modelValue","onUpdate:modelValue","placeholder"])):g("",!0),!l.getType(u,"options")&&!l.getType(u,"taggable")&&!l.getType(u,"dateRange")?(a(),p(y,{key:2,modelValue:l.getRuleValue("value",u),"onUpdate:modelValue":h=>l.updateRule("value",h,u),size:"medium",placeholder:l.getType(u,"placeholder")||s.strings.value,disabled:!l.getType(u)},null,8,["modelValue","onUpdate:modelValue","placeholder","disabled"])):g("",!0),l.getType(u,"dateRange")?(a(),R("div",Ke,[f(m,{type:"datetime",size:"large",placeholder:s.strings.startDate,dateFormat:n.rootStore.aioseo.data.dateFormat+" - "+n.rootStore.aioseo.data.timeFormat,defaultValue:n.dateStringToLocalJs(l.getRuleValue("scheduleStart",u)),onChange:h=>l.updateDate(h,"scheduleStart",u),isDisabledDate:l.isDisabledStartDate},null,8,["placeholder","dateFormat","defaultValue","onChange","isDisabledDate"]),f(m,{type:"datetime",size:"large",placeholder:s.strings.endDate,dateFormat:n.rootStore.aioseo.data.dateFormat+" - "+n.rootStore.aioseo.data.timeFormat,defaultValue:n.dateStringToLocalJs(l.getRuleValue("scheduleEnd",u)),onChange:h=>l.updateDate(h,"scheduleEnd",u),isDisabledDate:h=>l.isDisabledEndDate(h,u)},null,8,["placeholder","dateFormat","defaultValue","onChange","isDisabledDate"])])):g("",!0),l.getType(u,"regex")?(a(),p(P,{key:4,modelValue:l.getRuleValue("regex",u),"onUpdate:modelValue":h=>l.updateRule("regex",h,u)},{default:v(()=>[w(S(s.strings.regex),1)]),_:2},1032,["modelValue","onUpdate:modelValue"])):g("",!0)]),s.rulesErrors[u]?(a(),R("div",Ze,[f(A,{type:"red",size:"small"},{default:v(()=>[w(S(s.rulesErrors[u]),1)]),_:2},1024)])):g("",!0)])]),o("td",Xe,[f(k,{class:"action",type:"action"},{tooltip:v(()=>[w(S(s.strings.delete),1)]),default:v(()=>[f(E,{onClick:h=>l.removeRule(u)},null,8,["onClick"])]),_:2},1024)])],2))),128))]),o("tfoot",null,[o("tr",null,[o("td",$e,[f(b,{size:"small-table",type:"black",onClick:r[0]||(r[0]=D=>l.addRule(null))},{default:v(()=>[f(z),w(" "+S(s.strings.add),1)]),_:1})])])])])])}const tt=B(Me,[["render",et],["__scopeId","data-v-76a3b290"]]),rt={},st={width:"36",height:"16",viewBox:"0 0 36 16",fill:"none",xmlns:"http://www.w3.org/2000/svg",class:"aioseo-right-arrow"},lt=o("path",{d:"M36 8L28.4211 0.5V6.125H0V9.875H28.4211V15.5L36 8Z",fill:"currentColor"},null,-1),it=[lt];function at(e,r){return a(),R("svg",st,it)}const ot=B(rt,[["render",at]]),_="all-in-one-seo-pack",ut={emits:["cancel","added-redirect"],setup(){const{getJsonValue:e}=ce(),{redirectHasUnPublishedPost:r}=oe(),{decodeUrl:t}=G();return{getJsonValue:e,redirectHasUnPublishedPost:r,decodeUrl:t,redirectsStore:M()}},components:{BaseButton:te,BaseSelect:se,CoreAddRedirectionTargetUrl:Oe,CoreAddRedirectionUrl:ze,CoreAlert:Q,CustomRules:tt,SvgRightArrow:ot,TransitionSlide:ae},props:{edit:Boolean,log404:Boolean,disableSource:Boolean,url:Object,urls:Array,target:String,type:Number,query:String,slash:Boolean,case:Boolean,rules:{type:Array,default(){return[]}},postId:Number,postStatus:String},data(){return{REDIRECT_TYPES:F,genericError:!1,addingRedirect:!1,targetUrlErrors:[],targetUrlWarnings:[],customRulesError:!1,strings:{redirectType:i("Redirect Type:",_),targetUrl:i("Target URL",_),targetUrlDescription:i("Enter a URL or start by typing a page or post title, slug or ID.",_),addUrl:i("Add URL",_),sourceUrlDescription:L(i("Enter a relative URL to redirect from or start by typing in page or post title, slug or ID. You can also use regex (%1$s)",_),I.getDocLink(i("what's this?",_),"redirectManagerRegex")),advancedSettings:i("Advanced Settings",_),queryParams:i("Query Parameters:",_),saveChanges:i("Save Changes",_),cancel:i("Cancel",_),genericErrorMessage:i("An error occurred while adding your redirects. Please try again later.",_),sourceUrlSetOncePublished:i("source url set once post is published",_)},sourceDisabled:!1,editing:!1,editingRedirect:{sourceUrls:[],targetUrl:null,redirectType:null,queryParam:null,customRules:[],showAdvancedSettings:!1}}},watch:{sourceUrls:{deep:!0,handler(){Y(()=>this.checkForDuplicates(),500)}}},computed:{sourceUrls:{get(){return this.editing?this.editingRedirect.sourceUrls:this.redirectsStore.addNewRedirect.sourceUrls},set(e){this.editing?this.editingRedirect.sourceUrls=e:this.redirectsStore.addNewRedirect.sourceUrls=e}},targetUrl:{get(){return this.editing?this.editingRedirect.targetUrl:this.redirectsStore.addNewRedirect.targetUrl},set(e){this.editing?this.editingRedirect.targetUrl=e:this.redirectsStore.addNewRedirect.targetUrl=e}},redirectType:{get(){return this.editing?this.editingRedirect.redirectType:this.redirectsStore.addNewRedirect.redirectType},set(e){this.editing?this.editingRedirect.redirectType=e:this.redirectsStore.addNewRedirect.redirectType=e}},queryParam:{get(){return this.editing?this.editingRedirect.queryParam:this.redirectsStore.addNewRedirect.queryParam},set(e){this.editing?this.editingRedirect.queryParam=e:this.redirectsStore.addNewRedirect.queryParam=e}},customRules:{get(){return this.editing?this.editingRedirect.customRules:this.redirectsStore.addNewRedirect.customRules},set(e){this.editing?this.editingRedirect.customRules=e:this.redirectsStore.addNewRedirect.customRules=e}},showAdvancedSettings:{get(){return this.editing?this.editingRedirect.showAdvancedSettings:this.redirectsStore.addNewRedirect.showAdvancedSettings},set(e){this.editing?this.editingRedirect.showAdvancedSettings=e:this.redirectsStore.addNewRedirect.showAdvancedSettings=e}},saveIsDisabled(){return!!this.sourceUrls.filter(e=>!e.url).length||!!this.sourceUrls.filter(e=>0<e.errors.length).length||this.redirectTypeHasTarget()&&!this.targetUrl||this.customRulesError},getRelativeAbsolute(){const e=this.targetUrl.match(/^\/([a-zA-Z0-9_\-%]*\..*)\//);return e?e[0]:null},sourceUrl(){return 1<this.sourceUrls.length?i("Source URLs",_):i("Source URL",_)},addRedirect(){return 1<this.sourceUrls.length?i("Add Redirects",_):i("Add Redirect",_)},hasTargetUrlErrors(){if(!this.targetUrl)return[];const e=[],r=x(this.targetUrl);if(!r)return e.push(i("Your target URL is not valid.",_)),e;this.targetUrl&&!this.beginsWith(this.targetUrl,"https://")&&!this.beginsWith(this.targetUrl,"http://")&&this.targetUrl.substr(0,1)!=="/"&&e.push(L(i("Your target URL should be an absolute URL like %1$s or start with a slash %2$s.",_),"<code>https://domain.com/"+r+"</code>","<code>/"+r+"</code>"));const t=this.targetUrl.match(/[|\\$]/g);return t!==null&&(this.sourceUrls.map(s=>s.regex).every(s=>s)||e.push(L(i("Your target URL contains the invalid character(s) %1$s",_),"<code>"+t+"</code>"))),e},hasTargetUrlWarnings(){if(!x(this.targetUrl))return[];const e=[];return this.getRelativeAbsolute&&e.push(L(i("Your URL appears to contain a domain inside the path: %1$s. Did you mean to use %2$s instead?",_),"<code>"+this.getRelativeAbsolute+"</code>","<code>https:/"+this.getRelativeAbsolute+"</code>")),e},getDefaultRedirectType(){let e=this.getJsonValue(this.redirectsStore.options.redirectDefaults.redirectType);return e||(e=F[0]),e},getDefaultQueryParam(){let e=this.getJsonValue(this.redirectsStore.options.redirectDefaults.queryParam);return e||(e=H[0]),e},getDefaultSlash(){return this.redirectsStore.options.redirectDefaults.ignoreSlash},getDefaultCase(){return this.redirectsStore.options.redirectDefaults.ignoreCase},getDefaultSourceUrls(){return[JSON.parse(JSON.stringify(this.getDefaultSourceUrl))]},getDefaultSourceUrl(){return{id:null,url:null,regex:!1,ignoreSlash:this.slash||this.getDefaultSlash||!1,ignoreCase:this.case||this.getDefaultCase||!1,errors:[],warnings:[]}},redirectQueryParams(){return 0<this.sourceUrls.filter(e=>e.regex).length?H.map(e=>(e.$isDisabled=!1,e.value==="exact"&&(e.$isDisabled=!0,this.queryParam.value==="exact"&&(this.queryParam=H.find(r=>!r.$isDisabled))),e)):H.map(e=>(e.$isDisabled=!1,e))},unPublishedPost(){return this.redirectHasUnPublishedPost({post_id:this.postId,postStatus:this.postStatus})}},methods:{beginsWith(e,r){return r.indexOf(e)===0||e.substr(0,r.length)===r},addUrl(){this.sourceUrls.push(JSON.parse(JSON.stringify(this.getDefaultSourceUrl)))},removeUrl(e){this.sourceUrls.splice(e,1)},addRedirects(){this.genericError=!1,this.addingRedirect=!0,this.sourceUrls.map(e=>(e.url.substr(0,4)!=="http"&&e.url.substr(0,1)!=="/"&&0<e.url.length&&!e.regex&&(e.url="/"+e.url),e)),this.redirectsStore.create({sourceUrls:this.sourceUrls,targetUrl:this.targetUrl,queryParam:this.queryParam.value,customRules:this.customRules,redirectType:this.redirectType.value,redirectTypeHasTarget:this.redirectTypeHasTarget(),group:this.log404?"404":"manual",postId:this.postId}).then(()=>{this.$emit("added-redirect"),window.aioseoBus.$emit("added-redirect"),this.reset()}).catch(e=>{this.handleError(e)})},saveChanges(){this.genericError=!1,this.addingRedirect=!0,this.sourceUrls[0].url.substr(0,4)!=="http"&&this.sourceUrls[0].url.substr(0,1)!=="/"&&0<this.sourceUrls[0].url.length&&!this.sourceUrls[0].regex&&(this.sourceUrls[0].url="/"+this.sourceUrls[0].url),this.redirectsStore.update({id:this.sourceUrls[0].id,payload:{sourceUrls:this.sourceUrls,targetUrl:this.targetUrl,queryParam:this.queryParam.value,customRules:this.customRules,redirectType:this.redirectType.value,redirectTypeHasTarget:this.redirectTypeHasTarget(),postId:this.postId}}).then(()=>{this.$emit("added-redirect"),this.reset()}).catch(e=>{console.error(e),this.handleError(e)})},handleError(e){if(e.response.status!==409||!e.response.body.failed||!e.response.body.failed.length){this.genericError=!0,this.addingRedirect=!1;return}const r=[],t=e.response.body.failed,n=i("A redirect already exists for this source URL. To make changes, edit the original instead.",_);t.forEach(s=>{const l=this.sourceUrls.findIndex(c=>c.url===s.url||s);l!==-1&&(this.sourceUrls[l].errors.find(c=>c===s.error||c===n)||this.sourceUrls[l].errors.push(s.error||n),r.push(l))});for(let s=this.sourceUrls.length-1;0<=s;s--)r.includes(s)||this.sourceUrls.splice(s,1);this.addingRedirect=!1},updateTargetUrl(e){this.targetUrl=e,this.targetUrlErrors=this.hasTargetUrlErrors,this.targetUrlWarnings=this.hasTargetUrlWarnings},reset(){if(this.showAdvancedSettings=!1,this.addingRedirect=!1,this.edit)return;const e=F.find(t=>t.value===this.type)||this.getDefaultRedirectType,r=H.find(t=>t.value===this.query)||this.getDefaultQueryParam;this.sourceUrls=[JSON.parse(JSON.stringify(this.getDefaultSourceUrl))],this.targetUrl=null,this.targetUrlErrors=[],this.targetUrlWarnings=[],this.redirectType=e||{label:"301 "+i("Moved Permanently",_),value:301},this.queryParam=r||{label:i("Ignore all parameters",_),value:"ignore"},this.customRules=[]},checkForDuplicates(){const e=[];this.sourceUrls.forEach((r,t)=>{if(!(!r.url||r.errors.length)){if(e.includes(r.url.replace(/\/$/,""))){this.sourceUrls[t].errors.push(i("This is a duplicate of a URL you are already adding. You can only add unique source URLs.",_));return}e.push(r.url.replace(/\/$/,""))}}),this.updateTargetUrl(this.targetUrl)},redirectTypeHasTarget(){return this.redirectType&&(typeof this.redirectType.noTarget>"u"||!this.redirectType.noTarget)}},mounted(){this.sourceUrls.length||(this.sourceUrls=this.getDefaultSourceUrls),this.url&&(this.editing=!0,this.sourceUrls=[{...this.getDefaultSourceUrl,...this.url}]),this.urls&&this.urls.length&&(this.editing=!0,this.sourceUrls=this.urls.map(e=>({...this.getDefaultSourceUrl,...e}))),this.sourceDisabled=this.disableSource,this.unPublishedPost&&(this.sourceUrls=this.sourceUrls.map(e=>(e.url="("+this.strings.sourceUrlSetOncePublished+")",e)),this.sourceDisabled=!0),this.target&&(this.targetUrl=this.target),this.rules&&this.rules.length!==0&&(this.customRules=this.rules),this.redirectType=F.find(e=>e.value===this.type)||this.redirectType||this.getDefaultRedirectType,this.queryParam=H.find(e=>e.value===this.query)||this.queryParam||this.getDefaultQueryParam}},nt={class:"urls"},ct={class:"source"},dt={class:"aioseo-settings-row no-border no-margin small-padding"},ht={class:"settings-name"},gt={class:"name small-margin"},mt=["innerHTML"],pt={key:0,class:"url-arrow"},ft={key:1,class:"target"},_t={class:"aioseo-settings-row no-border no-margin small-padding"},yt={class:"settings-name"},vt={class:"name small-margin"},Rt={class:"url"},Ut={class:"aioseo-description"},bt=o("div",{class:"break"},null,-1),St={class:"source"},Tt=["innerHTML"],wt=o("div",{class:"url-arrow"},null,-1),kt=o("div",{class:"target"},null,-1),Dt={class:"all-settings"},Ct={class:"all-settings-content"},Et={class:"redirect-type"},Lt={class:"query-params"};function Vt(e,r,t,n,s,l){const c=d("core-alert"),y=d("core-add-redirection-url"),m=d("base-button"),P=d("svg-right-arrow"),A=d("core-add-redirection-target-url"),E=d("transition-slide"),k=d("base-select"),z=d("custom-rules");return a(),R("div",{class:q(["aioseo-add-redirection",{"edit-url":t.edit,"log-404":t.log404}])},[s.genericError?(a(),p(c,{key:0,class:"generic-error",type:"red"},{default:v(()=>[w(S(s.strings.genericErrorMessage),1)]),_:1})):g("",!0),o("div",nt,[o("div",ct,[o("div",dt,[o("div",ht,[o("div",gt,S(l.sourceUrl)+": ",1)]),(a(!0),R(V,null,N(l.sourceUrls,(b,D)=>(a(),p(y,{key:D,url:b,"allow-delete":1<l.sourceUrls.length,onRemoveUrl:u=>l.removeUrl(D),"target-url":l.targetUrl,log404:t.log404,disableSource:s.sourceDisabled},me({_:2},[t.edit&&!s.sourceDisabled?{name:"source-url-description",fn:v(()=>[o("div",{class:"aioseo-description source-description",innerHTML:s.strings.sourceUrlDescription},null,8,mt)]),key:"0"}:void 0]),1032,["url","allow-delete","onRemoveUrl","target-url","log404","disableSource"]))),128)),!t.edit&&!t.log404&&!s.sourceDisabled?(a(),p(m,{key:0,size:"small",type:"gray",onClick:l.addUrl},{default:v(()=>[w(S(s.strings.addUrl),1)]),_:1},8,["onClick"])):g("",!0)])]),l.redirectTypeHasTarget()?(a(),R("div",pt,[f(P)])):g("",!0),l.redirectTypeHasTarget()?(a(),R("div",ft,[o("div",_t,[o("div",yt,[o("div",vt,S(s.strings.targetUrl)+": ",1)]),o("div",Rt,[f(A,{url:n.decodeUrl(l.targetUrl),errors:s.targetUrlErrors,warnings:s.targetUrlWarnings,"onUpdate:modelValue":l.updateTargetUrl},null,8,["url","errors","warnings","onUpdate:modelValue"]),o("div",Ut,S(s.strings.targetUrlDescription),1),f(E,{active:!!s.targetUrlErrors.length},{default:v(()=>[o("div",null,[(a(!0),R(V,null,N(s.targetUrlErrors,(b,D)=>(a(),p(c,{key:D,class:"target-url-error",type:"red",size:"small",innerHTML:b},null,8,["innerHTML"]))),128))])]),_:1},8,["active"]),f(E,{active:!!s.targetUrlWarnings.length},{default:v(()=>[o("div",null,[(a(!0),R(V,null,N(s.targetUrlWarnings,(b,D)=>(a(),p(c,{key:D,class:"target-url-warning",type:"yellow",size:"small",innerHTML:b},null,8,["innerHTML"]))),128))])]),_:1},8,["active"])])])])):g("",!0),!t.edit&&!t.log404&&!s.sourceDisabled?(a(),R(V,{key:2},[bt,o("div",St,[o("div",{class:"aioseo-description source-description",innerHTML:s.strings.sourceUrlDescription},null,8,Tt)]),wt,kt],64)):g("",!0)]),o("div",{class:q(["settings",{advanced:l.showAdvancedSettings}])},[o("div",Dt,[o("div",Ct,[o("div",Et,[w(S(s.strings.redirectType)+" ",1),f(k,{options:s.REDIRECT_TYPES,modelValue:l.redirectType,"onUpdate:modelValue":r[0]||(r[0]=b=>l.redirectType=b),size:"medium"},null,8,["options","modelValue"])]),f(E,{class:"advanced-settings",active:l.showAdvancedSettings},{default:v(()=>[o("div",Lt,[w(S(s.strings.queryParams)+" ",1),f(k,{options:l.redirectQueryParams,modelValue:l.queryParam,"onUpdate:modelValue":r[1]||(r[1]=b=>l.queryParam=b),size:"medium"},null,8,["options","modelValue"])])]),_:1},8,["active"]),l.showAdvancedSettings?g("",!0):(a(),R("a",{key:0,class:"advanced-settings-link",href:"#",onClick:r[2]||(r[2]=le(b=>l.showAdvancedSettings=!l.showAdvancedSettings,["prevent"]))},S(s.strings.advancedSettings),1))])]),f(E,{class:"advanced-settings",active:l.showAdvancedSettings},{default:v(()=>[(a(),p(z,{key:l.customRules,"edit-custom-rules":l.customRules,onRedirectsCustomRuleError:r[3]||(r[3]=b=>s.customRulesError=b)},null,8,["edit-custom-rules"]))]),_:1},8,["active"]),o("div",{class:q(["actions",{advanced:l.showAdvancedSettings}])},[f(m,{size:"medium",type:"blue",onClick:r[4]||(r[4]=b=>t.edit?l.saveChanges():l.addRedirects()),loading:s.addingRedirect,disabled:l.saveIsDisabled},{default:v(()=>[w(S(t.edit?s.strings.saveChanges:l.addRedirect),1)]),_:1},8,["loading","disabled"]),t.edit?(a(),p(m,{key:0,size:"medium",type:"gray",onClick:r[5]||(r[5]=b=>e.$emit("cancel",!0)),class:"cancel-edit-row"},{default:v(()=>[w(S(s.strings.cancel),1)]),_:1})):g("",!0)],2)],2)],2)}const er=B(ut,[["render",Vt]]);export{er as C};
