//图片上传
class Upload{
	constructor(url,fileobj,imgobj,progressobj,success){
		this.url=url;
		this.fileobj=fileobj;
		this.imgobj=imgobj;
		this.progressobj=progressobj;
		this.success=success;
		//定义图片大小
		this.size=20*1024*1024;
		this.imgarr=['png','gif','jpg'];
	}
	change(){
		let that=this;
		this.fileobj.onchange=function(){//文件改变时执行函数
			//文件保存在files里面，但不会存在浏览器里
			console.log(this.files); 
			//
			that.file=this.files[0];
			//console1.log(that.file);
			//开启文件阅读
			let fileread=new FileReader();
			//读成指定文件的格式
			fileread.readAsDataURL(that.file);
			//that.check();
			//当读在加载时
			fileread.onload=function(e){
				console.log(e);
				if(that.check()){
					console.log(e.target);
					console.log(e.target.result);
			    that.imgobj.src=e.target.result;
			   }
				if(that.check()){
					that.uploadimg();
				}
			}
			console.log(this.files);
		}
	}
	check(){
		if(this.file.size>this.size){
			alert('图片过大');
			//this.flag=false;
			return false;
		}
		console.log(this.file.name);
		let type=this.file.name.split('.')[1].toLowerCase() ;
		//this.flag=this.imgarr.indexOf(type);
	    //this.flag==-1	
		if(!this.imgarr.includes(type)){//如果图片格式，在定义的图片数组中，执行
	         alert('图片格式不对');
	         return false;
         }	
      return true;
   }
	//上传图片
	uploadimg(){
		let that=this;
		let ajax=new XMLHttpRequest();
		let formdata=new FormData();//传表单对象(可以不填，也可以填整个表单对象)
		formdata.append('img',this.file);
//		//上传文件开始时就促发
//		ajax.upload.onloadstart=function(){
//			
//		}
		//触发进度
		ajax.upload.onprogress=function(e){
			console.log(e);
			let per=e.loaded/e.total*100;
			that.progressobj.style.width=per+'%';
			console.log(111);
		}
		//检查现在的上传过程有没有完成
		ajax.onload=function(){
			//console1.log(ajax.responseText);
			that.success(ajax.responseText);
           // that.success(console.log(1));

        }
		ajax.open('post',this.url,true);
		ajax.send(formdata);
		
	}

}
//获取文档对象
let fileobj=document.querySelector('#file');
let imgobj=document.querySelector('#img');
let progressobj=document.querySelector('#progress');
let urlimg=document.querySelector('#imgurl');
let newobj=new Upload('index.php?d=index&f=upload&a=init',fileobj,imgobj,progressobj,function(text){

	urlimg.value=text;
    console.log(text);
	return;
});
//程序入口
newobj.change();





