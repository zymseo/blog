<?php if (!defined('THINK_PATH')) exit();?><link href="__PUBLIC__/feditor/css/font-awesome.min.css" rel="stylesheet" type="text/css" /><link href="__PUBLIC__/feditor/css/froala_editor.min.css" rel="stylesheet" type="text/css" /><style>div[contenteditable='true']{display:none;}
</style><div class="allTable"><table cellpadding="0" cellspacing="0"><tbody><tr><td>标题：</td><td><input type="text" name="newTitle" value="{{title}}" id="newsTitle" class="inpt" /></td></tr><tr><td colspan="2"><section id="editor"><div id='edit' style="margin-top: 30px;"></div><div ng-bind-html="content" id="tmpContent" contenteditable></div></section></td></tr><tr><td colspan="2"><input type="button" value="发布" class="commonBtn" ng-click="publishNews();" /></td></tr></tbody></table></div><script src="__PUBLIC__/feditor/js/froala_editor.min.js"></script><!--[if lt IE 9]><script src="__PUBLIC__/feditor/js/froala_editor_ie8.min.js"></script><![endif]--><script src="__PUBLIC__/feditor/js/plugins/tables.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/lists.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/colors.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/media_manager.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/font_family.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/font_size.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/block_styles.min.js"></script><script src="__PUBLIC__/feditor/js/plugins/video.min.js"></script><script type="text/javascript">	//配置编辑器
     $(function(){
         $('#edit').editable({
        	 inlineMode: false, 
        	 alwaysBlank: true,
        	 imageUploadURL: '<?php echo U("Admin/News/uploadImages");?>',
         });
     });
 </script>