<?php if (!defined('THINK_PATH')) exit();?><div><input type="text" name="txt" id="txt" class="inpt" /><input type="file" name="file1" id="file" class="inpt" /><input type="file" name="file2" id="file2" class="inpt" /><a href="javascript:;" class="commonBtn" id="toUpload">确认上传</a></div><script type="text/javascript" src="__PUBLIC__/js/ajaxfileupload.js"></script><script type="text/javascript">	(function(){
		var toUpload = document.getElementById('toUpload');
		toUpload.onclick = uploadFile;
		//上传文件
		function uploadFile(){
			var txtVal = document.getElementById('txt').value;
			$.ajaxFileUpload({
				type : "post",
				url: '<?php echo U("Admin/News/fileHandle");?>',
				fileElementId: ['file1', 'file2'],
				dataType: 'json',
				data : {
					txtVal : txtVal
				},
				success: function(data){
					console.log(data);
				},
			})
		}
	})();
</script>