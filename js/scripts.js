var carousselPosition = 1;

$(document).ready( function() {
	try {
		$('#homeCarousel').jcarousel({
			auto: autoRotate,
			scroll: 1,
			wrap: 'circular',
			initCallback: mycarousel_initCallback,
			itemVisibleInCallback: {onBeforeAnimation: carouselStepCallback},
			buttonNextHTML: null,
			buttonPrevHTML: null
		});
	}catch(e) {
	}
	
	$(".footerMenu li:last-child").addClass("last");
	try {
		$('.testiWrapper').jScrollPane();
	}catch(e) {
	}
	
	$("#rsvpNow").click(function(){
        var isValid = true;
		
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var company = $("#company").val();
		var title = $("#title").val();
		var email = $("#email").val();
		var size = $("#size").val();
		
		if(firstname!="") {
			$("#firstname").parent().parent().find(".error").hide();
		}else {
			$("#firstname").parent().parent().find(".error").show();
			isValid = false;
		}
		
		if(lastname!="") {
			$("#lastname").parent().parent().find(".error").hide();
		}else {
			$("#lastname").parent().parent().find(".error").show();
			isValid = false;
		}
		
		if(lastname!="") {
			$("#lastname").parent().parent().find(".error").hide();
		}else {
			$("#lastname").parent().parent().find(".error").show();
			isValid = false;
		}
		
		if(company!="") {
			$("#company").parent().parent().find(".error").hide();
		}else {
			$("#company").parent().parent().find(".error").show();
			isValid = false;
		}
		
		if(title!="") {
			$("#title").parent().parent().find(".error").hide();
		}else {
			$("#title").parent().parent().find(".error").show();
			isValid = false;
		}
		
		if(email!="") {
			$("#email").parent().parent().find(".errorEmpty").hide();
		}else {
			$("#email").parent().parent().find(".errorEmpty").show();
			isValid = false;
		}
		if(email!="") {
			if(validateEmail(email)) {
				$("#email").parent().parent().find(".emailFormatWrong").hide();
			}else {
				$("#email").parent().parent().find(".emailFormatWrong").show();
				isValid = false;
			}
		}
		
		if(size!="null") {
			$("#tshirtSizeError").hide();
		}else {
			$("#tshirtSizeError").show();
			isValid = false;
		}
		
		if(isValid) {
			$("#formRsvpNow").submit();
		}
		else {
		}
    });
	
	$("#closeModal").click(function(){
		$(".modalWrapper").hide();
		$("#modalBox").hide();
	});
	
	$("#subscribeButton").click(function(){
		var email = $("#emailSubscribe").val();
		if(email!="") {
			$("#formSubscribe").submit();
		}
	});

	//UI Style for radio, select
	if($('body').find('.formElement').length>0){
		$(".formElement").jqTransform();
	}
	
	$("#secure_cds").click(function(){
		if ( $(this).attr('checked')==true ) {
			$("#yesCDSMore").show();
		} else {
			$("#yesCDSMore").hide();
		}
	});
	
});

function mycarousel_initCallback(carousel) {
    jQuery('#carouselWrapper .next').bind('click', function() {
		if(carousselPosition<carousel.size()) {
			carousselPosition = carousselPosition+1;
			carousel.next();
		}
		
		jQuery('#carouselNav a').removeClass("active");
		$("#carouselNavItem_"+carousselPosition).addClass("active");
		$(".description").hide();
		$("#description"+carousselPosition).show();
        return false;
    });

    jQuery('#carouselWrapper .prev').bind('click', function() {
		if(carousselPosition>1) {
			carousselPosition = carousselPosition-1;
			carousel.prev();
		}

		jQuery('#carouselNav a').removeClass("active");
		$("#carouselNavItem_"+carousselPosition).addClass("active");
		$(".description").hide();
		$("#description"+carousselPosition).show();
        return false;
    });
	
	jQuery('.carouselNavItem').bind('click', function() {
		var carousselPosition = jQuery.jcarousel.intval(jQuery(this).find("span").text());
		carousel.scroll( jQuery.jcarousel.intval(jQuery(this).find("span").text()) );
		jQuery('#carouselNav a').removeClass("active");
		jQuery(this).addClass("active");
		$(".description").hide();
		$("#description"+carousselPosition).show();
        return false;
    });
	
	jQuery('#carouselNav a').bind('mouseenter', function() {
 		carousel.stopAuto();      
		return false;
    });
	jQuery('#carouselNav a').bind('mouseleave', function() {
		carousel.startAuto();       
		return false;
    });
};

function carouselStepCallback(carousel) {
	carousselPosition = carousel.last % carousel.size();
	carousselPosition = carousselPosition==0 ? carousel.size() : carousselPosition;  

	jQuery('#carouselNav a').removeClass("active");
	$("#carouselNavItem_"+carousselPosition).addClass("active");
	
	$(".description").hide();
	$("#description"+carousselPosition).show();
}

function showModal() {
	var documentWidth = $(document).width();
	var documentHeight = $(document).height();
	
	var modalWidth = $("#modalBox").width();
	var modalHeight = $("#modalBox").height();
	
	var left = (documentWidth-modalWidth) / 2;
	var top = (documentHeight-modalHeight) / 2;
	top = top <= 50 ? 50 : top;
	
	$("#modalBox").css("top",top+"px");
	$("#modalBox").css("left",left+"px");
	
	$(".modalWrapper").show();
	$("#modalBox").show();
}

function validateEmail(strEmail)
{
	validRegExp = /^[^@]+@[^@]+.[a-z]{2,}$/i;

	if (strEmail.search(validRegExp) == -1) 
	{
		return false;
	}

	return true; 
}