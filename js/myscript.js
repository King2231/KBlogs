	$(document).ready(function(){
 	$(document).on('click','.slider',function(e){
		let sectionID=$(this).attr('href');
		$("html, body").animate({
			scrollTop:$(sectionID).offset().top
		},1000,'swing');
		e.preventDefault();
	});

 	$(document).on('click','.arrow',function(e){
		let sectionID=$(this).attr('href');
		$("html, body").animate({
			scrollTop:$(sectionID).offset().top
		},1000,'swing');
		e.preventDefault();
	});

 	$(document).on('click','.uarrow',function(e){
		let sectionID=$(this).attr('href');
		$("html, body").animate({
			scrollTop:$(sectionID).offset().top},1000);
		e.preventDefault();
	});

 	$(document).on('click','#signin_btn',function(){
		$('#signin').toggleClass('visible');
	});

	$(document).on('click','#reg_btn',function(){
		$('#register').toggleClass('visible');
	});

	$(document).on('click','.closesignin',function(){
		$('#signin').removeClass('visible');
	});

	$(document).on('click','.closereg',function(){
		$('#register').removeClass('visible');
	});

	$(document).on('click','#righttopright',function(){
		$('#signin').addClass('visible');
	});

	$(document).on('click','#rightbottomright',function(){
		$('#register').addClass('visible');
	});
});	

function validateForm() {
    var x = document.forms["myForm"]["mail"].value;
    x=x.trim();
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}	
function validateForm1() {
    var x = document.forms["myForm1"]["mail"].value;
    x=x.trim();
    var n=document.forms["myForm1"]["name"].value;
    n=n.trim();
    if(n==""){
    	alert("Not a valid name");
    	return false;
    }
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}	
