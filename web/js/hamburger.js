$(function(){

// l'evenement click sur l'icone hamburger declenche l'ajout d'une classe
	$("i").on("click",function(){
		$(".hidden").addClass("visible");
	});

// l'evenement click partout sur le document declenche le retrait de cette meme classe
	$("main").on("click",function(){
		$(".hidden").removeClass("visible");
	});

})