jQuery(document).ready(function() {
	var aboutUsTitles = [
		'&quot;James treated Dilbert like his own and kept us informed with photos of the day! He came to pick him up from our house, and dropped him off when we arrived home.&quot; - Jennifer &amp; Mike, the Marina District.',
		'&quot;My dog Belle loved going for walks with Jane. I was touched to hear that the money I spent was put towards helping other less fortunate dogs in a shelter close to my house. &quot; - Bill, Cortez Hill.',
		'&quot;David looked after Buddy for 4 days while we were in Europe. When we got home Belle almost didn\'t want to leave his new home! Thank you so much for keeping him safe.&quot; - Mark, East Village.',
		'&quot;Sara looked after our lovely Lucy for a couple of days when we went on vacation. We\'re so grateful to her for being such a great boarder. &quot; - Ron, La Mesa.'	
	];
	jQuery('.header-content-wrap .container .input-daterange').datepicker({
	    format: "mm-dd-yyyy",
	    todayBtn: true,
	    orientation: "bottom auto"
	});
    var swiper = new Swiper('.swiper-container', {
    	autoplay : 10000,
    	slidesPerView: 1,
    	pagination: '.swiper-pagination',
        effect: 'cube',
        grabCursor: true,
        paginationClickable : true,
        cube: {
            shadow: false
        },
    	onSlideChangeStart : function(swiper){
    		jQuery('#aboutus .section-legend').html(aboutUsTitles[swiper.activeIndex]);
    	},
        paginationBulletRender: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + '</span>';
        }
    });
});