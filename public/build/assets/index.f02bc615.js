import{m as t}from"./module.esm.1da87a7a.js";import{a as s}from"./index.f0052de0.js";import"./_commonjsHelpers.b8add541.js";window.Alpine=t;t.data("settings",()=>({localImage:null,file:null,fonts:[],currentFont:null,url:null,init(){this.fonts=[{name:"Arial",value:"Arial, Helvetica, sans-serif"},{name:"Arial Black",value:'"Arial Black", Gadget, sans-serif'},{name:"Comic Sans MS",value:'"Comic Sans MS", cursive, sans-serif'},{name:"Courier New",value:'"Courier New", Courier, monospace'},{name:"Georgia",value:"Georgia, serif"},{name:"Impact",value:"Impact, Charcoal, sans-serif"},{name:"Lucida Console",value:'"Lucida Console", Monaco, monospace'},{name:"Lucida Sans Unicode",value:'"Lucida Sans Unicode", "Lucida Grande", sans-serif'},{name:"Palatino Linotype",value:'"Palatino Linotype", "Book Antiqua", Palatino, serif'},{name:"Tahoma",value:"Tahoma, Geneva, sans-serif"},{name:"Times New Roman",value:'"Times New Roman", Times, serif'},{name:"Trebuchet MS",value:'"Trebuchet MS", Helvetica, sans-serif'},{name:"Open Sans",value:'"Open Sans", sans-serif'}],this.currentFont=window.getComputedStyle(document.body).getPropertyValue("font-family"),this.$watch("currentFont",e=>{document.body.style.fontFamily=e})},onSelectedImage(e){const a=e.target.files[0];if(!a){this.localImage=null,this.file=null;return}this.file=a;const n=new FileReader;n.onload=()=>this.localImage=n.result,n.readAsDataURL(a)},onSelectImage(){this.$refs.imageSelector.click()},setUrl(e){this.url=e},async saveSettings(e){return this.setUrl(await this.uploadImage(e)),!0},async uploadImage(e){if(!!e)try{const a="https://api.cloudinary.com/v1_1/dfpngwm6t/image/upload",n=new FormData;return n.append("upload_preset","demo-vue"),n.append("file",e),(await s.post(a,n)).data.secure_url}catch(a){return console.log("error en uploadImage",a),null}},submit(){this.$refs.formLogo.submit()}}));t.start();
