<?php if (!defined('THINK_PATH')) exit();?><div class="allTable"><table cellpadding="0" cellpadding="0"><thead><tr><td>ID</td><td>标题</td><td>时间</td><td>点击</td><td>操作</td></tr></thead><tbody><?php if(is_array($recycleList)): foreach($recycleList as $key=>$v): ?><tr><td><?php echo ($v['id']); ?></td><td><?php echo ($v['title']); ?></td><td><?php echo (date('Y-m-d h:m:s',$v['time'] )); ?></td><td><?php echo ($v['click']); ?></td><td><a href="javascript:;" onclick="commonFunc(this, <?php echo ($v['id']); ?>, 'restore')">还原</a>|
						<a href="javascript:;" onclick="commonFunc(this, <?php echo ($v['id']); ?>, 'remove')">彻底删除</a></td></tr><?php endforeach; endif; ?></tbody></table></div><script type="text/javascript">	//还原或彻底删除
	function commonFunc(This, nid, msg){
		if(!nid){
			alert('非法操作');
			return;
		}
		//还原
		if(msg=='restore'){
			$.ajax({
				url : '<?php echo U("Admin/News/restore");?>',
				type : 'post',
				data : {
					nid : nid
				},
				success : function(result){
					if(result){
						alert('还原成功');
						$(This).parents('tr').remove();
					}else{
						alert('还原失败，请重新操作');
					}
				}
			});
			return;
		}
		//彻底删除
		if(msg=='remove'){
			if(confirm('彻底删除之后将不可恢复，确认删除？')){
				$.ajax({
					url : '<?php echo U("Admin/News/removeNews");?>',
					type : 'post',
					data : {
						nid : nid
					},
					success : function(result){
						if(result){
							alert('删除成功');
							$(This).parents('tr').remove();
						}else{
							alert('删除失败，请重新操作');
						}
					}
				});
			}
			return;
		}
	}
</script>