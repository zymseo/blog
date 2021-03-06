<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html lang="en"><head><meta charset="UTF-8"><title>博客后台登录</title><meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/regist.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font.css" /></head><body><div class="registWrap"><h1>用户登录</h1><div class="registContent"><div class="logo"><img src="__PUBLIC__/images/login-logo.png" alt="logo" width="118" height="113" /></div><div class="registMessage"><input type="text" placeholder="邮箱" id="email" regTest="\w+@(qq|163|126|sina|google)(\.[A-Za-z])(\.[A-Za-z])?" /><input type="password" placeholder="密码" id="userPwd" regTest="(?=.*\d+)(?=.*[a-z])(?=.*[A-Z])(?=.*_).{8,}" /><div class="loginBtn" id="loginBtn"><i class="fa fa-check"></i></div></div></div><!-- <p class="clearfix"><a href="./find_password.html">忘记密码？</a><a href="./regist.html">去注册一个帐号</a></p> --></div></body></html><script type="text/javascript" type="text/javascript" src="__PUBLIC__/js/jquery.js"></script><script type="text/javascript" type="text/javascript">	//点击登录
	$('#loginBtn').click(validate);
	//回车事件登录
	document.onkeydown = function(e){
		var e = e || window.event;
		if(e && e.keyCode==13){
			validate();
		}
	}
	var registNum = 0;
	function validate(){
		registNum += 1;
		if(registNum>=3){
			alert('段时间内请勿重复登录！');
			return;
		}
		var $inpt = $('input');
		var $inptLength = $inpt.length;
		var num = 0;
		for(var i=0; i<$inptLength; i++){
			if(!new RegExp($inpt.eq(i).attr('regTest')).test($inpt.eq(i).val())){
				break;
			}else{
				num+=1;
			}
		}
//		if(num!=$inptLength){
//			alert('邮箱或密码填写错误！');
//			return;
//		}
		$.ajax({
			url : "<?php echo U('Admin/Login/loginValidate');?>",
			type : "post",
			dataType:'json',
			data : {
				email : $('#email').val(),
				pwd : $('#userPwd').val()
			},
			success:function(result){
				if(result){
					alert("登录成功！");
					window.location.href = "<?php echo U('Admin/Main/index');?>";
				}else{
					alert("登录失败！");
				}
			 }
		});
	}
</script>