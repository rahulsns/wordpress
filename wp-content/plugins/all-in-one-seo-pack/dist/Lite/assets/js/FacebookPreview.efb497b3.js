import{u as v,t as h}from"./links.da3be5e7.js";import{B as y}from"./Img.f4a97ae4.js";import{C as S}from"./Caret.8cc4e863.js";import{S as b}from"./Profile.870d95a3.js";import{r as n,o as c,c as l,a as e,d as r,z as s,n as k,f as I,e as x,D as C,M as N,N as B}from"./vue.runtime.esm-bundler.c297bd08.js";import{_ as V}from"./_plugin-vue_export-helper.8a32e791.js";const w={setup(){return{rootStore:v()}},components:{BaseImg:y,CoreLoader:S,SvgDannieProfile:b},props:{description:{type:String,required:!0},image:String,loading:{type:Boolean,default:!1},title:{type:String,required:!0}},data(){return{images:{}}},computed:{appName(){return"All in One SEO"},date(){const o=new Date;return o.toLocaleString("default",{month:"long"})+" "+o.getDate()},isVerticalImage(){const o=this.images[this.image];return o?o.vertical:!1}},methods:{truncate:h}},d=o=>(N("data-v-55e2045a"),o=o(),B(),o),D={class:"aioseo-facebook-preview"},A={class:"facebook-post"},L={class:"facebook-header"},P={class:"profile-photo"},q={class:"poster"},z={class:"poster-name"},E={class:"poster-date"},F=d(()=>e("div",{class:"ellipsis"},[e("div"),e("div"),e("div")],-1)),O={key:0,class:"loader"},R={class:"facebook-site-description"},M={class:"site-domain"},T={class:"site-title"},U={class:"site-description"},j=d(()=>e("div",{class:"facebook-footer"},null,-1));function G(o,i,a,_,u,t){const p=n("svg-dannie-profile"),m=n("base-img"),f=n("core-loader");return c(),l("div",D,[e("div",A,[e("div",L,[e("div",P,[r(p)]),e("div",q,[e("div",z,s(t.appName),1),e("div",E,s(t.date),1)]),F]),e("div",{class:k(["facebook-content",{vertical:t.isVerticalImage}])},[r(m,{debounce:!1,src:a.image,onImages:i[0]||(i[0]=g=>u.images=g),class:"facebook-content__image"},null,8,["src"]),a.loading?(c(),l("div",O,[r(f)])):I("",!0),e("div",R,[e("div",M,[x(o.$slots,"site-url",{},()=>[C(s(_.rootStore.aioseo.urls.domain),1)],!0)]),e("div",T,s(t.truncate(a.title,60)),1),e("div",U,s(t.truncate(a.description,110)),1)])],2),j])])}const Y=V(w,[["render",G],["__scopeId","data-v-55e2045a"]]);export{Y as C};
