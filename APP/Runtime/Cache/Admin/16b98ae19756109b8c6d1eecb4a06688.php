<?php if (!defined('THINK_PATH')) exit();?><!doctype html><html lang="en"><head><meta charset="UTF-8" /><meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8" /><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" /><title>博客后台管理系统</title><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/common.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/main.css" /><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/font.css" /></head><body><!--外层--><div class="wrap"><!--左侧--><div class="wrapLeft"><!--logo--><div class="logo"><a href="javascript:;" class="router"><img src="__PUBLIC__/images/logo.png" alt="logo" /></a></div><!--下拉导航--><ul class="nav"><li><a ui-sref="index" class="router tmp slide"><span><i class="fa fa-home"></i>首页</span></a></li><li><a href="javascript:;" class="tmp slide"><span><i class="fa fa-hacker-news"></i>新闻中心</span></a><ul class="navList"><li><a ui-sref="publishNews" class="router">发布新闻</a></li><li><a ui-sref="newsList" class="router">新闻管理</a></li><li><a ui-sref="recycle" class="router">回收站</a></li></ul></li><li><a href="javascript:;" class="tmp slide"><span><i class="fa fa-hacker-news"></i>系统管理</span></a><ul class="navList"><li><a ui-sref="userList" class="router">用户管理</a></li><li><a ui-sref="roleList" class="router">角色管理</a></li><li><a ui-sref="nodeList" class="router">节点管理</a></li><li><a ui-sref="addUser" class="router">添加用户</a></li><li><a ui-sref="addRole" class="router">添加角色</a></li><li><a ui-sref="addNode" class="router">添加节点</a></li></ul></li></ul></div><!--右侧--><div class="wrapRight"><!--顶部--><div class="header clearfix"><!--伸缩按钮--><div class="navBar"><i class="fa fa-bars"></i></div><!--个人设置或退出选择菜单--><div class="menu"><a href="javascript:;" class="menuBtn"><img src="__PUBLIC__/images/person.png" alt="个人头像" width="26" height="26" /><span><?php echo ($uname); ?></span><i class="fa fa-sort-desc"></i></a><ul class="menuList"><li><a href="javascript:;" class="router"><i class="fa fa fa-cog"></i>个人中心</a></li><li><a href="javascript:;" id="loginOut"><i class="fa fa fa-sign-out"></i>退出</a></li></ul></div></div><!--主体部分--><div ui-view class="main"></div></div></div><!-- js文件 --><script type="text/javascript">			var publicPath = "__PUBLIC__",
				indexPath = '<?php echo U("Admin/AdminIndex/index");?>',
				loginPath = '<?php echo U("Admin/Login/index");?>',
				loginOutPath = '<?php echo U("Admin/Login/loginOut");?>',
				nodeListPath = '<?php echo U("Admin/Rbac/nodeList");?>',
				addNodePath = '<?php echo U("Admin/Rbac/addNode");?>',
				addNodeFormPath = '<?php echo U("Admin/Rbac/addNodeForm");?>',
				nodeListPath = '<?php echo U("Admin/Rbac/nodeList");?>',
				nodeListDataPath = '<?php echo U("Admin/Rbac/nodeListData");?>',
				userListPath = '<?php echo U("Admin/Rbac/userList");?>',
				userListDataPath = '<?php echo U("Admin/Rbac/userListData");?>',
				addUserPath = '<?php echo U("Admin/Rbac/addUser");?>',
				addUserFormPath = '<?php echo U("Admin/Rbac/addUserForm");?>',
				removeUserFormPath = '<?php echo U("Admin/Rbac/removeUserForm");?>',
				addRolePath = '<?php echo U("Admin/Rbac/addRole");?>',
				addRoleFormPath = '<?php echo U("Admin/Rbac/addRoleForm");?>',
				roleListPath = '<?php echo U("Admin/Rbac/roleList");?>',
				roleListDataPath = '<?php echo U("Admin/Rbac/roleListData");?>',
				removeRoleFormPath = '<?php echo U("Admin/Rbac/removeRoleForm");?>',
				assignRoleFormPath = '<?php echo U("Admin/Rbac/assignRoleForm");?>',
				roleToUserPath = '<?php echo U("Admin/Rbac/roleToUser");?>',
				accessListPath = '<?php echo U("Admin/Rbac/accessList");?>',
				accessListDataPath = '<?php echo U("Admin/Rbac/accessListData");?>',
				changeAccessFormPath = '<?php echo U("Admin/Rbac/changeAccessForm");?>',
				publishNewsPath = '<?php echo U("Admin/News/publishNews");?>',
				publishNewsFormPath = '<?php echo U("Admin/News/publishNewsForm");?>',
				newsListPath = '<?php echo U("Admin/News/newsList");?>',
				recyclePath = '<?php echo U("Admin/News/recycle");?>',
				newsListDataPath = '<?php echo U("Admin/News/newsListData");?>',
				toRecyclePath = '<?php echo U("Admin/News/toRecycle");?>',
				editNewsPath = '<?php echo U("Admin/News/editNews");?>',
				editNewsDataPath = '<?php echo U("Admin/News/editNewsData");?>';
		</script><script type="text/javascript" src="__PUBLIC__/js/require.js"></script><script type="text/javascript" src="__PUBLIC__/js/main.js"></script></body></html>