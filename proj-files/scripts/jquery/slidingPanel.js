$(document).ready(function(){
	$(".toggle").mouseenter(function(){
		$(".infoPanel").slideDown("slow");
	});
	
	$(".toggle").mouseleave(function(){
		$(".infoPanel").slideUp("slow");
	});
	
	$(".infoPanel").mouseenter(function(){
		$(".infoPanel").stop();
	});
	
	$(".infoPanel").mouseleave(function(){
		$(".infoPanel").slideUp("slow");
	});
});