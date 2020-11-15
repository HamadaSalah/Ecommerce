$(document).ready(function()
{
		$('#1 h3').click(function(){
			$('#1 i').toggleClass("rot");
			$('#1 h3, #1 i').toggleClass("roth");
			$('#1 ul').toggleClass("dispo");

		});
		$('#2 h3').click(function(){
			$('#2 i').toggleClass("rot");
			$('#2 h3, #2 i').toggleClass("roth");
			$('#2 ul').toggleClass("dispo");
		});
		$('#3 h3').click(function(){
			$('#3 i').toggleClass("rot");
			$('#3 h3, #3 i').toggleClass("roth");
			$('#3 ul').toggleClass("dispo");
		});
		$('#4 h3').click(function(){
			$('#4 i').toggleClass("rot");
			$('#4 h3, #4 i').toggleClass("roth");
			$('#4 ul').toggleClass("dispo");
		});
		$( "#n1" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n1").click(function(){
		    $("#n11").slideToggle();
		});
 
		$( "#n2" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n2").click(function(){
		    $("#n22").slideToggle();
		});
 
		$( "#n3" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n3").click(function(){
		    $("#n33").slideToggle();
		});
 
		$( "#n4" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n4").click(function(){
		    $("#n44").slideToggle();
		});
 
		$( "#n5" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n5").click(function(){
		    $("#n55").slideToggle();
		});
 
		$( "#n6" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n6").click(function(){
		    $("#n66").slideToggle();
		});
 
		$( "#n7" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n7").click(function(){
		    $("#n77").slideToggle();
		});
 
		$( "#n8" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n8").click(function(){
		    $("#n88").slideToggle();
		});
 
		$( "#n9" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n9").click(function(){
		    $("#n99").slideToggle();
		});
 
		$( "#n10" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n10").click(function(){
		    $("#n101").slideToggle();
		});
 
		$( "#n11_1" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n11_1").click(function(){
		    $("#n111").slideToggle();
		});
 
		$( "#n12" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n12").click(function(){
		    $("#n121").slideToggle();
		});
 
		$( "#n13" ).click(function() {
		  $( this ).toggleClass( "glyphicon-plus glyphicon-minus" );
		});
		$("#n13").click(function(){
		    $("#n131").slideToggle();
		});
		$("#des").click(function(){
			$(".reve").hide();
			$(".decre").show();
			$("#des").css({"background":"#7da350","color":"#fff"});
			$("#rev").css({"background":"#fff","color":"#7da350"});
		});
 
		$("#rev").click(function(){
			$(".reve").show();
			$(".decre").hide();
			$("#rev").css({"background":"#7da350","color":"#fff"});
			$("#des").css({"background":"#fff","color":"#7da350"});
		});
 


		$("#up_i").click(function(){
			var num = +$("#qnt_val").val() + 1;
		$("#qnt_val").val(num);
		});
		$("#down_i").click(function(){
			var num = +$("#qnt_val").val() - 1;
		$("#qnt_val").val(num);
		});
	 	$("#hiddenlog").click(function(){
	 		$(".logining").hide();
	 	});
	 	$("#btnsign").click(function(){
	 		$("#form1").hide();
	 		$("#form2").show();
	 		$(this).css({"color":"#7da350","border-bottom":"5px solid #7da350"});
	 		$("#btnlog").css({"color":"#000","border-bottom":"0"});
	 		$(".right_log img").css({"margin-top":"-70px"});
	 	});
	 	$("#btnlog").click(function(){
	 		$("#form2").hide();
	 		$("#form1").show();
	 		$(this).css({"color":"#7da350","border-bottom":"5px solid #7da350"});
	 		$("#btnsign").css({"color":"#000","border-bottom":"0"});
	 	});
	 	$("#log_click").click(function(){
	 		$(".logining").show();
	 	});
	 	$("#sign_click").click(function(){
	 		$(".logining").show();
	 		$("#form1").hide();
	 		$("#form2").show();
	 		$("#btnsign").css({"color":"#7da350","border-bottom":"5px solid #7da350"});
	 		$("#btnlog").css({"color":"#000","border-bottom":"0"});
	 		$(".right_log img").css({"margin-top":"-70px"});
	 	});

 });   
