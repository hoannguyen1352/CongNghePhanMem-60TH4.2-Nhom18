function ajax_adapter($param){
	$.ajax({
            type:$param.type,
            url:$param.url,
            data:$param.data,
            dataType:$param.dataType,
            async:true,
            success:$param.callback
    });
}
function cms_load_pos($id_table){
	$param={
		type:'POST',
		url:'cms_load_pos.php',
		dataType:'html',
		data:
		{
			id_table:$id_table
		},
		callback: function(data){
			$('#pro_search_append').html(data);
			cms_load_infor_order();
		}
	}
	ajax_adapter($param);
	$('#table-list').attr('hidden',true);
	$('#pos').attr('hidden',false);
	$('.table-infor').html('<strong data-id="'+$id_table+'" id="table_id">Bàn '+$id_table+'</strong>');
}