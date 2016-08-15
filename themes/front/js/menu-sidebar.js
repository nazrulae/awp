$(function(){
	$('#parent').live('click',function(){
		id=$(this).attr('data');
		$('.'+id).toggle("slow");
	});
	
});