$(document).ready(function(){
	
	var FixedNavTop = $('.navbar').offset().top;
	var FixedNav = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > FixedNavTop) { 
			$('.navbar').addClass('navbar_fixed');
			} else {
			$('.navbar').removeClass('navbar_fixed'); 
		}
	};
	
	FixedNav();
	$(window).scroll(function() {
		FixedNav();
	});
	
	//-------------------------------------------//
	
	$("#ReadMore").click(function(){
        $("#readMoreHistory").fadeIn("slow");
        $("#ReadMore").hide();
		
    });
	$("#ReadLess").click(function(){
        $("#readMoreHistory").fadeOut("slow");
		$("#ReadMore").show();
    });
	
	//-------------------------------------------//
	
	$(".tablinks").on("click", function() {
		$(this).addClass("active").siblings().removeClass("active");
		$(".tabcontent").hide();
		var car = $(this).html();	
		$("#"+car).show();
	});
	
	//-------------------------------------------//
	
	
	$("#start").click(function(){
		$("#mk3_golf").show();
		$("#mk3_golf").animate({left: '1000px'},2000);
		$("#mk2_golf").show();
		$("#mk2_golf").animate({left: '530px'},2000);
		$("#mk1_golf").show();
		$("#mk1_golf").animate({left: '60px'},2000);
		$("#mk6_golf").show();
		$("#mk6_golf").animate({left: '1000px'},2000);
		$("#mk5_golf").show();
		$("#mk5_golf").animate({left: '530px'},2000);
		$("#mk4_golf").show();
		$("#mk4_golf").animate({left: '60px'},2000);
		$("#mk7_golf").show();
		$("#mk7_golf").animate({left: '530px'},2000);
		$("#start").hide();
    });
	
	//-------------------------------------------//

	$(".accordion").click(function(){
        this.classList.toggle("active");
            var range = this.nextElementSibling;
        	if (range.style.display === "block") {
            	range.style.display = "none";
        	} else {
            	range.style.display = "block";
        	}
        })
		
	//-------------------------------------------//
	
	$('#S_FeaturesButton').click(function(){  
		$('#S_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="Sfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$('#GT_FeaturesButton').click(function(){  
		$('#GT_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="GTfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$('#GTI_FeaturesButton').click(function(){  
		$('#GTI_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="GTIfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$('#GTD_FeaturesButton').click(function(){  
		$('#GTD_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="GTDfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$('#GTE_FeaturesButton').click(function(){  
		$('#GTE_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="GTEfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$('#R_FeaturesButton').click(function(){  
		$('#R_FeaturesTable').append('<table class="featuresTable" />');
		$('table').append('<tr><th>Features</th></tr>' );
		$('span[class="Rfeature"]').each(function(){
			$('table').append('<tr><td>' + $(this).text()  + '</td></tr>' );
		}); 
	});
	
	//-------------------------------------------//
	
	$("#Animate_Golf").click(function(event) {
		var reg = $('#reg').val();
		$("#display_reg").text(reg);
	}); 
	
	//-------------------------------------------//

	$("#validation_message").hide();
	$("#btnSignUp").click(function(event) {
		var email = $('#email').val();
		var name = $('#name').val();
		if ($('#email').val() == ""){
			$("#validation_message").show();
		}
		else{
			alert("Thank You " + name + "! You have successfully signed up for email updates!");
			$("#validation_message").hide();
		}	
	});
})

/* 
	Jonathan McCrink - B00656761 
	COM554 - Inveractive Web Computing
	Assignment 1
*/


	