import{k as x,b as B,u as D,j as F}from"./index.506b73e8.js";import{u as T}from"./PostTypes.dafa8837.js";import{A as q,T as L}from"./TitleDescription.ccb8b6d3.js";import{C as P}from"./Card.d0e52e4a.js";import{C as N}from"./Tabs.95165f45.js";import{C as O}from"./Tooltip.73441134.js";import{C,S as V}from"./Schema.b3446a12.js";import{_ as y}from"./_plugin-vue_export-helper.eefbdd86.js";import{v as l,o as n,c as S,k as d,b as k,F as M,J as U,l as a,a as m,G as z,x as h,t as u,C as _,q as E,T as I}from"./runtime-dom.esm-bundler.5c3c7d72.js";import{a as R}from"./index.b359096c.js";import"./translations.d159963e.js";import{_ as i}from"./default-i18n.20001971.js";import"./helpers.53868b98.js";import"./constants.a8a14dc3.js";import"./JsonValues.3fcfec97.js";import"./RadioToggle.333e7750.js";import"./RobotsMeta.12cd00ab.js";import"./Checkbox.6db0b9ed.js";import"./Checkmark.e40641dd.js";import"./Row.df38a5f6.js";import"./SettingsRow.ac18ea66.js";import"./Editor.590cac0d.js";import"./isEqual.96d3394c.js";import"./_baseIsEqual.aba7ca44.js";import"./_getTag.1e50d0c4.js";import"./_baseClone.f4be2bb9.js";import"./_arrayEach.6af5abac.js";import"./Caret.a21d4ca8.js";import"./helpers.3ed33f4a.js";import"./metabox.a04ab80a.js";import"./cleanForSlug.97664b33.js";import"./toString.f0787db8.js";import"./_baseTrim.11b89ad9.js";import"./_stringToArray.f9ddb970.js";import"./_baseSet.9f9da1bd.js";import"./regex.8a6101c0.js";import"./GoogleSearchPreview.b95b5c3b.js";import"./Url.9d3a2412.js";import"./HtmlTagsEditor.47bd1130.js";import"./UnfilteredHtml.d5db3c8d.js";import"./Slide.39c07c03.js";import"./vue-router.2f910c93.js";import"./ProBadge.751e0b85.js";import"./Information.13e8cece.js";import"./Textarea.97983cdc.js";import"./Blur.edde4939.js";import"./Index.a76253da.js";const G={setup(){return{licenseStore:x()}},components:{CustomFields:C,CustomFieldsLite:C},props:{type:{type:String,required:!0},object:{type:Object,required:!0},options:{type:Object,required:!0},showBulk:Boolean}},J={class:"aioseo-sa-ct-custom-fields-view"};function Q(t,r,e,s,f,p){const b=l("custom-fields",!0),g=l("custom-fields-lite");return n(),S("div",J,[s.licenseStore.isUnlicensed?k("",!0):(n(),d(b,{key:0,type:e.type,object:e.object,options:e.options,"show-bulk":e.showBulk},null,8,["type","object","options","show-bulk"])),s.licenseStore.isUnlicensed?(n(),d(g,{key:1,type:e.type,object:e.object,options:e.options,"show-bulk":e.showBulk},null,8,["type","object","options","show-bulk"])):k("",!0)])}const H=y(G,[["render",Q]]),c="all-in-one-seo-pack",K={setup(){const{getPostIconClass:t}=T();return{getPostIconClass:t,optionsStore:B(),rootStore:D(),settingsStore:F()}},components:{Advanced:q,CoreCard:P,CoreMainTabs:N,CoreTooltip:O,CustomFields:H,Schema:V,SvgCircleQuestionMark:R,TitleDescription:L},data(){return{internalDebounce:null,strings:{label:i("Label:",c),name:i("Slug:",c)},tabs:[{slug:"title-description",name:i("Title & Description",c),access:"aioseo_search_appearance_settings",pro:!1},{slug:"schema",name:i("Schema Markup",c),access:"aioseo_search_appearance_settings",pro:!0},{slug:"custom-fields",name:i("Custom Fields",c),access:"aioseo_search_appearance_settings",pro:!0},{slug:"advanced",name:i("Advanced",c),access:"aioseo_search_appearance_settings",pro:!1}]}},computed:{postTypes(){return this.rootStore.aioseo.postData.postTypes.filter(t=>t.name!=="attachment")}},methods:{processChangeTab(t,r){this.internalDebounce||(this.internalDebounce=!0,this.settingsStore.changeTab({slug:`${t}SA`,value:r}),setTimeout(()=>{this.internalDebounce=!1},50))},filteredTabs(t){const r=[];return this.tabs.forEach(e=>{t!=null&&t.buddyPress&&e.slug==="custom-fields"||t.name==="web-story"&&e.slug==="custom-fields"||r.push(e)}),r}}},W={class:"aioseo-search-appearance-content-types"},X={class:"aioseo-description"},Y=m("br",null,null,-1),Z=m("br",null,null,-1);function $(t,r,e,s,f,p){const b=l("svg-circle-question-mark"),g=l("core-tooltip"),v=l("core-main-tabs"),A=l("core-card");return n(),S("div",W,[(n(!0),S(M,null,U(p.postTypes,(o,j)=>(n(),d(A,{key:j,slug:`${o.name}SA`,"card-id":`${o.name}SA`},{header:a(()=>[m("div",{class:z(["icon dashicons",s.getPostIconClass(o.icon)])},null,2),h(" "+u(o.label)+" ",1),_(g,{"z-index":"99999"},{tooltip:a(()=>[m("div",X,[h(u(f.strings.label)+" ",1),m("strong",null,u(o.label),1),Y,h(" "+u(f.strings.name)+" ",1),m("strong",null,u(o.name),1),Z])]),default:a(()=>[_(b)]),_:2},1024)]),tabs:a(()=>[_(v,{tabs:p.filteredTabs(o),showSaveButton:!1,active:s.settingsStore.settings.internalTabs[`${o.name}SA`],internal:"",onChanged:w=>p.processChangeTab(o.name,w)},null,8,["tabs","active","onChanged"])]),default:a(()=>[_(I,{name:"route-fade",mode:"out-in"},{default:a(()=>[(n(),d(E(s.settingsStore.settings.internalTabs[`${o.name}SA`]),{object:o,separator:s.optionsStore.options.searchAppearance.global.separator,options:s.optionsStore.dynamicOptions.searchAppearance.postTypes[o.name],type:"postTypes"},null,8,["object","separator","options"]))]),_:2},1024)]),_:2},1032,["slug","card-id"]))),128))])}const He=y(K,[["render",$]]);export{He as default};
