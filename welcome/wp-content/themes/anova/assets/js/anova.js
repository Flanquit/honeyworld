function center() {
    //$('.ourProducts .all-product .block .inner').each(function(){
    //    var height= $(this).height();
    //    var height2= $(this).find('.box').height();
    //    if (height2<height){
    //        var banH = height - height2;
    //        $(this).css('margin-top',(banH/2));
    //    }
    //});

    $('a.add-another-tour-to-cart').bind('click', function () {
        $('<input>').attr({
            type: 'hidden',
            id: 'redirectToList',
            name: 'redirectToList',
            value: 1
        }).appendTo('form#book');

        $('#original-book-submit').trigger('click');
    });

    var bad = $('body').width();
    if (bad > 767) {
        $('.ourProducts .all-product .block .row').each(function () {
            var height = $(this).height();
            var image = $(this).find('.image img').height();
            var mar = image + (40);
            if (height > image)
                $(this).find('.image').css('height', height + 30);
            else
                $(this).find('.image').css('height', mar);
        });
    }
}

function anova_js_success(){
    var url      = window.location.href;
    var newu = url.split('/');
    var  url1=newu[2];
    if ($('html').attr('lang') == "he-IL"){
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-he.jpg'/>";
    }
    else {
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank.png'/>";
    }
    $('.wrap-cf7').html(src);
    // console.log('no conversion!');
}

// function anova_js_success_new_event(){
//     var url      = window.location.href;
//     var newu = url.split('/');
//     var  url1=newu[2];
//     if ($('html').attr('lang') == "he-IL"){
//         var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-he.jpg'/>";
//     }
//     else {
//         var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank.png'/>";
//     }
//     $('.wrap-cf7').html(src);
//     obApi('track', 'mnh action');
//     console.log('page view sent ok!');
// }

function anova_js_success_tracking(){
    var url      = window.location.href;
    var newu = url.split('/');
    var  url1=newu[2];
    if ($('html').attr('lang') == "he-IL"){
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-he.jpg'/>";
    }
    else {
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank.png'/>";
    }
    $('.wrap-cf7').html(src);
    window._tfa = window._tfa || [];
    _tfa.push({ notify: 'action',name: 'MnH_conv' });
    obApi('track', 'mnh action');
    console.log('conversion sent ok!');
}

function centerAll(){
    var heightImage = $('.about .top-description-img').height();
    var heightLogoImage = $('.about .top-description .logo img').height();
    if (heightImage>heightLogoImage){
        var margin= (heightImage-heightLogoImage)/2;
        $('.about .top-description .logo').css('margin-top', margin);
    }
    else {
        $('.about .top-description .logo img').css('height', heightImage);
    }
}

function adjustTiming() {
    $('#wc_bookings_field_persons').bind('change', function() {
        checkTheTiming();
    });

    $('form#book').bind('submit', function() {
        $('.time-error').hide();
        $('li.block a').removeClass('red');
        if ($('li.block a.selected').length == 0) {
            $('.time-error').show();
            $([document.documentElement, document.body]).animate({
                scrollTop: $("ul.block-picker").offset().top - 120
            }, 200);
            $('li.block a').addClass('red');
            return false;
        }
    });

}

function setTermsClick() {
    $('a.woocommerce-terms-and-conditions-link').unbind('click');

    $('a.woocommerce-terms-and-conditions-link').bind('click', function() {
        window.open($(this).attr('href'), '_blank');
        return false;
    });
}

function checkTheTiming() {
    var requiredPersons = $('#wc_bookings_field_persons').val();
    $('li.block').each(function() {
        $(this).find('a').unbind('click');
        $(this).removeClass('has-error');
        if (parseInt($(this).attr('data-availability')) < parseInt(requiredPersons)) {
            $(this).addClass('has-error');
            $(this).find('a').bind('click', function() {
                return false;
            });
        }
    });
}
$(document).ready(function(){

    $('select#select_tour').bind('change', function() {
        location.href = $(this).val();
    });

    var showError = true;

    try {
        if ($('ul.woocommerce-error').length &&
            (
            $('ul.woocommerce-error li').text().toLowerCase().includes('coupon') ||
            $('ul.woocommerce-error li').text().toLowerCase().includes('קופון')
            ))
        {
            showError = false;
            $('ul.woocommerce-error').each(function() {
               $('div.coupon').addClass('errored');
                $('div.coupon.errored label').attr('data-content', '* ' + $('ul.woocommerce-error li').text().replace('!', ''));

            });
        }

        if ($('ul.woocommerce-error').length &&
            (
                $('ul.woocommerce-error li').text().toLowerCase().includes('time is required') ||
                $('ul.woocommerce-error li').text().toLowerCase().includes('לבחור שעה')
            ))
        {
            showError = false;
            $('ul.woocommerce-error').each(function() {
                $('div#wc-bookings-booking-form').addClass('has-error');
                $('p.error').text($('ul.woocommerce-error li').text().replace('above', ''));
            });
        }


        if (showError) {
            $('ul.woocommerce-error').show();
        }


        adjustTiming();
        setTermsClick();
    } catch (Err) {

    }

    $('a.ui-state-default').bind('click', function() {
        $('.wc-bookings-booking-form').removeClass('has-error');
    });

    $( '.single_add_to_cart_button' ).unbind('click');
    $( '.single_add_to_cart_button' ).on( 'click', function( event ) {
        if ( $(this).hasClass('disabled') ) {
            $('.wc-bookings-booking-form').addClass('has-error');
            event.preventDefault();
        }
    });

    // store locator

    var myURL = window.location.href;

    var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    };


    // show hide middle tab content
    $('.top_tabs .middle_tabs li.active').each(function () {
        $(this).parent().siblings('.tab_content').each(function () {
            if ($(this).attr('id') === $('.top_tabs.in .middle_tabs li.active').data('id')) {
                $(this).addClass('active');
            }
        });
    });



    if ($(window).width() < 768) {
        $('.store_post a').click(function (e) {
            e.preventDefault();
            window.location.href = $('.store_post a').attr('href');
        });
    }

// end store locator

    
    center();
    centerAll();
    var rtl = $('html').attr('lang') == "he-IL" ? true : false ;

    $('.homeslider').slick({
        dots: true,
        rtl:rtl,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 500,
        fade: true,
        pauseOnHover: false,
        cssEase: 'linear'
    });

    $('.slider-products-homepage').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:rtl,
        arrows: true,
        focusOnSelect: true,
        speed: 800,
        autoplay: true,
        dots: true,
        asNavFor: '.slider-products-text-homepage',
        prevArrow: '<span class="prev"></span>',
        nextArrow: '<span class="next"></span>'

    });
    $('.slider-products-text-homepage').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:rtl,
        asNavFor: '.slider-products-homepage',
        dots: true,
        centerMode: false,
        arrows: true,
        speed: 800,
        //autoplay: true,
        focusOnSelect: true
    });




    jQuery('.productSlider').slick({
        rtl: rtl,
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable:false,
        centerMode:true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    arrows: true,
                    draggable:false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    draggable:false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    arrows: true,
                    draggable:true
                }
            }

        ],
        arrows: true
    });



    $('.slider-cocktail').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:rtl,
        arrows: true,
        focusOnSelect: true,
        speed: 1000,
        //autoplay: true,
        asNavFor: '.slider-text-cocktail',
        prevArrow: '<span class="prev"></span>',
        nextArrow: '<span class="next"></span>'

    });
    $('.slider-text-cocktail').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        rtl:rtl,
        asNavFor: '.slider-cocktail',
        dots: true,
        centerMode: false,
        arrows: true,
        speed: 1000,
        //autoplay: true,
        focusOnSelect: true
    });
    $('.slider-all-cocktails').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        rtl:rtl,
        dots: true,
        centerMode: false,
        arrows: true,
        focusOnSelect: true,
        cssEase: 'linear',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    arrows: true,
                    draggable:true
                }
            }

        ]
    });
    $('.visitslider').slick({
        dots: false,
        rtl:rtl,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        fade: true,
        cssEase: 'linear'
    });
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50){
            $('#up').css('opacity','1');
        }
        else{
            $('#up').css('opacity','0');
        }
        $('#myTabs a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        });
    });
    $('#myTabs a[href="#profile"]').tab('show');// Select tab by name
    //$('#myTabs a:first').tab('show'); // Select first tab
    //$('#myTabs a:last').tab('show'); // Select last tab
    //$('#myTabs li:eq(2) a').tab('show'); // Select third tab (0-indexed)
    $('#up').click(function(e){
        e.preventDefault()
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });
    $( ".add-text-d" ).click(function() {
        if($(this).next().css("display")=="block"){
            $(this).next().slideUp("slow");
            $(this).removeClass('display-text');
        }
        else{
            $(this).next().slideDown("slow");
            $(this).addClass('display-text');
        }

    });
    $('.product-item[data-slick-index=0]').addClass('active');
    $('.product-item').click(function(){
        var slideIndex = $(this).data('slick-index');
        $('.slider-cocktail').slick( "slickGoTo", parseInt(slideIndex));

        $('.product-item').removeClass('active');
        $('.product-item[data-slick-index='+slideIndex+']').addClass('active');
    });
    $('.slider-cocktail .slick-arrow').click(function() {
        var slideIndex = $('.slider-cocktail .slick-active').data('slick-index');
        $('.product-item').removeClass('active');
        $('.product-item[data-slick-index='+slideIndex+']').addClass('active');
    });
    $('.wrap-productsSlider a[href*=#]').each(function () {
        $(this).attr('href', $(this).attr('href').replace('#', '#_'));
        $(this).on( "click", function() {

            var hashname = $(this).attr('href').replace('#_', '');

            if($(this).attr('href') == "#_") {
                $('html, body').animate({ scrollTop: 0 }, 950);
            }
            // else if($(this).attr('href') == "#_1829"){
            //     var target2 = $('.cat-wrap#888'),
            //         targetOffset2 = target2.offset().top;
            //     if(targetOffset2 >= 1) {
            //         $('html, body').animate({ scrollTop: targetOffset2-60 }, 950);
            //     }
            // }
            else {
                var target = $('a[name="' + hashname + '"], #' + hashname),
                    targetOffset = target.offset().top;
                if(targetOffset >= 1) {
                    $('html, body').animate({ scrollTop: targetOffset-60 }, 950);
                }
            }

            if($(this).attr('href') == "#_1829") {
                console.log($('#888 .title'));
                var target = $('#888 p'),
                    targetOffset = target.offset().top;
                // if (targetOffset >= 1) {
                    $('html, body').animate({scrollTop: targetOffset + 340}, 950);
                // }
            }
            if($(this).attr('href') == "#_1865") {
                console.log($('#890 .title'));
                var target = $('#890 p'),
                    targetOffset = target.offset().top;
                // if (targetOffset >= 1) {
                    $('html, body').animate({scrollTop: targetOffset + 340}, 950);
                // }
            }
        });
    });
    var enter;
    var email;
    var min1;
    var min2;
    var min9;
    var numbers;
    var thankyou;

    if ($('html').attr('lang') == "he-IL"){
        enter = '* בבקשה להכניס את כל השדות הדרושים';
        email = '* הזן כתובת דוא"ל תקפה';
        min1 = '* תו אחד לפחות';
        min2 = '* 2 תווים לפחות';
        min9 = '* 9 תווים לפחות';
        numbers ='* הכנס ספרות בלבד';
        thankyou = 'תודה על ההרשמה, נתראה בקרוב';
    }
    else {
        enter = '* please insert all necessary fields';
        email = '* Please enter a valid e-mail';
        min2 = '* Minimum 1 character';
        min9 = '* Minimum 9 characters';
        numbers ='* Please enter only numbers';
        thankyou = 'Thank you for signing up, see you soon'
    }
    $("#form-newsletter").validate({
        rules: {
            email:{required: true,email:true}
        },
        messages: {
            email: {required: enter ,email: email}
        },
        submitHandler: function(form){
            $.ajax({
                url: 'https://leads.anova-host.com',
                data: $(form).serialize(),
                type: 'GET',
                dataType: 'jsonp',
                cache: false,

                success: function(response) {
                    if(response.status == 'SUCCESS') {
                        $('.newsletter .container').html('<h3>' +thankyou+ '</h3>');
                    }
                    else {
                        //There was an error in the process
                        //show the error
                        console.log(response.massage);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(status + '; ' + error);

                }
            });
        }
    });
    $("#contact").validate({
        rules: {
            name: {required: true,minlength: 2},
            phone: {required: true,number: true,minlength: 9},
            email:{required: true,email:true}
            //messege:{required: true,minlength: 2}
        },
        messages: {
            name: {required: enter ,minlength: min2 },
            phone: {required: enter ,minlength: min9 ,number: numbers },
            email: {required: enter ,email: email }
            //messege: {required: enter ,minlength: min2 }
        },
        submitHandler: function(form){
            $.ajax({
                url: 'https://leads.anova-host.com',
                data: $(form).serialize(),
                type: 'GET',
                dataType: 'jsonp',
                cache: false,

                success: function(response) {
                    if(response.status == 'SUCCESS') {
                        var url      = window.location.href;
                        var newu = url.split('/');
                        var  url1=newu[2];
                        if ($('html').attr('lang') == "he-IL"){
                            var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-he.jpg'/>";
                        }
                        else {
                            var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank.png'/>";
                        }
                        $('#contact').html(src);
                    }
                    else {
                        //There was an error in the process
                        //show the error
                        console.log(response.massage);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(status + '; ' + error);

                }
            });
        }
    });

    $("#contact-visit").validate({
        rules: {
            name: {required: true,minlength: 2},
            phone: {required: true,number: true,minlength: 9},
            email:{required: true,email:true},
            usr_time:{required: true}
            //messege:{required: true,minlength: 2}
        },
        messages: {
            name: {required: enter ,minlength: min2 },
            phone: {required: enter ,minlength: min9 ,number: numbers },
            email: {required: enter ,email: email },
            usr_time:{required: enter }
            //messege: {required: enter ,minlength: min2 }
        },
        submitHandler: function(form){
            $.ajax({
                url: ajax_url,
                data: $(form).serialize() + '&action=visit_contact',
                type: 'POST',
                cache: false,

                success: function(response) {
                    if(response.status == 'SUCCESS') {
                        visitorContactSuccess();
                    }
                    else {
                        //There was an error in the process
                        //show the error
                        console.log(response.massage);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(status + '; ' + error);
                    if (xhr.status == 200) {
                        visitorContactSuccess();
                    }
                }
            });
        }
    });
    $('.open-js').hide();
    $('.g-maps').click(function(){
            $(this).find('iframe').addClass('clicked')})
        .mouseleave(function(){
            $(this).find('iframe').removeClass('clicked')}
        );
    $('#yes').on('click', function(){
        $(this).parents('body').find('.open-mh .yesno').fadeOut(1000);

        setTimeout(function(){

            var height= ($('body').height())*-1;
            $('body').find('.open-mh').animate({'top': height+'px'}, 5000);
            localStorage.setItem('yes' , true);
        }, 1000);
    });
    $('#no').on('click', function(){
        //window.location.href= 'http://google.co.il';
        $('body').find('.open-mh .yesno').addClass('hei');
        $('body').find('.open-mh .select-no').fadeIn(1000);
    });

    if(localStorage.getItem('yes')){
        //$('body').find('.open-mh .yesno').addClass('hei');
        //var height= ($('body').height())*-1;
        $('.open-mh').hide();
    }

    $('.like-share').click(function() {
        //var winWidth = $(window).width();
        //var w = winWidth < 400 ? winWidth : 400;
        //
        //var NWin = window.open($(this).prop('href'), '', 'height=400,width=' + w);
        //if (window.focus)
        //{NWin.focus();}
        //return false;
    });
    $('.top-slick .productSlider').slick('unslick');
    $('.top-slick .productSlider').slick({
        rtl: rtl,
        slidesToShow: 2,
        slidesToScroll: 1,
        draggable:false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    draggable:false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    arrows: true,
                    draggable:false
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: false,
                    autoplaySpeed: 2000,
                    arrows: true,
                    draggable:true
                }
            }

        ],
        arrows: true
    });

    
});
$(window).load(function(){
    center()
    /*
    * Daniel Smolkin Dev - BEGIN
    */
    ValidateContactUSShowState();
    jQuery(document).scroll(function(){
       ValidateContactUSShowState();
    });
    /*
    * Daniel Smolkin Dev - BEGIN
    */
});
$(window).resize(function(){
    centerAll();
    center()
});

/*
* Daniel Smolkin Dev - BEGIN
*/
function ValidateContactUSShowState()
{
    if(jQuery("#wpcs_content_main_3749").html() != null || jQuery("#wpcs_content_main_4666").html() != null)
    {
        var iContactItemID = "3749";
        if(jQuery("#wpcs_content_main_4666").html() != null)
        {
            iContactItemID = "4666";
        }
        if((jQuery("div.contactus").position().top-((jQuery(window).height()/2)+50)) <= jQuery(window).scrollTop())
        {
            jQuery("#wpcs_tab_"+iContactItemID).hide();
            // jQuery("#wpcs_content_main_"+iContactItemID).hide();
        }
        else
        {
            jQuery("#wpcs_tab_"+iContactItemID).css("display","");
            // jQuery("#wpcs_content_main_"+iContactItemID).css("display","");
        }
    }
}
/*
* Daniel Smolkin Dev - BEGIN
*/
function visitorContactSuccess() {
    // ga('send', 'pageview', '/thank-you');
    ga('send', 'event', '/thank-you',{
        // ga('send', 'event', 'link', 'click', 'http://example.com', {
        nonInteraction: true
    });
    console.log('1234');
    var url      = window.location.href;
    var newu = url.split('/');
    var  url1=newu[2];
    if ($('html').attr('lang') == "he-IL"){
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-you-he.jpg'/>";
    }
    else {
        var src = "<img src='http://"+ url1 +"/wp-content/themes/anova/assets/images/message-thank-you.jpg'/>";
    }
    $('#contact-visit').html(src);
}

 //tablet form validation
 jQuery("#mc-embedded-subscribe-form").submit(function () {

    var required = '';
    var validEmail = '';
    var validDate = '';
    var phoneValid = '';

	if (window.location.href.indexOf("/he/") > -1) {
        required = '* שדה חובה';
        validEmail = '* נדרשת כתובת מייל תיקנית';
        validDate = ' נדרש להקליד תאריך תקני :  01 01 ';
        phoneValid = 'נדרש להקליד מספר טלפון תקני';
		list = [533536];
      } else {
        required = '* Required';
        validEmail = '* Please enter a valid email';
        validDate = 'A valid date is required';
        phoneValid = 'A valid phone number is required';
		list = [535677];
      }

    var jform = jQuery(this);
    jform.find('.error-active').removeClass('error-active').find('.error-response').html('').hide();

    var jfname = jform.find('input[name="NAME"]');
    var fname = jfname.val();

    var jphone = jform.find('input[name="PHONE"]');
    var phone = jphone.val();

    var jemail = jform.find('input[name="EMAIL"]');
    var email = jemail.val();

    var jbday = jform.find('input[name="MMERGE3[day]"]');
    var bday = jbday.val();

    var jmonth = jform.find('input[name="MMERGE3[month]"]');
    var bmonth = jmonth.val();

    var jsubscribe = jform.find('input[type="checkbox"]');
    var subscribe = jsubscribe.is(':checked');


       var re = /\S+@\S+\.\S+/;
       var dayReg = /(0[1-9]|[12]\d|3[01])/;
       var monthReg = /(0[1-9]|1[012])/;
    // var phoneReg = /^0[\d]/; //only number. Starting with 0.
       var phoneReg = /^0\d([\d]{0,1})([-]{0,1})\d{7}$/;//israel phone number regex

       var formValid = true;

        if (!fname) {
            jfname.parent().addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
        } else {
            jfname.parent().find('.error-response').hide();

		}
        if (phone) {
            if (!phoneReg.test(phone)) {
                jphone.parent().addClass('error-active').find('.error-response').html(phoneValid).show();
                formValid = false;
            }else {
                jphone.parent().removeClass('error-active').find('.error-response').html(phoneValid).hide();

		}
        } else {
            jphone.parent().addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
        }
        if (email) {
            if (!re.test(email)) {
                jemail.parent().addClass('error-active').find('.error-response').html(validEmail).show();
                formValid = false;
            } else {
                jemail.parent().removeClass('error-active').find('.error-response').html(phoneValid).hide();

		}
        } else {
            jemail.parent().addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
        }
        if (bday) {
            if (!dayReg.test(bday)) {
                jQuery(jbday.parents().get(2)).addClass('error-active').find('.error-response').html(validDate).show();
                formValid = false;
            }
        } else {
            jQuery(jbday.parents().get(2)).addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
        }
        
        if (bmonth) {
            if (!monthReg.test(bmonth)) {
                jQuery(jmonth.parents().get(2)).addClass('error-active').find('.error-response').html(validDate).show();
                formValid = false;
            }
        } else {
            jQuery(jmonth.parents().get(2)).addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
        }

		if (!$('input[name="confirm_checkbox"]').is(':checked') )
		{
            $(this).parent().addClass('error-active').find('.error-response').html(required).show();
            formValid = false;
		}else {
            $(this).parent().removeClass('error-active').find('.error-response').html(required).hide();

		}

		if (formValid)
		{

		
		jsonData = {
		"firstName": fname,
		"email": email,
		"phone": phone,
		"lists_ToSubscribe": list,
		"customFields": {"i3": bday+"/"+bmonth}
		};

            $.ajax({
                url: 'https://ssl-vp.com/rest/v1/Contacts?updateIfExists=true&restoreIfDeleted=true&restoreIfUnsubscribed=true',
                data: JSON.stringify(jsonData),
                type: 'POST',
				contentType: "application/json",
				dataType: "json",
				beforeSend: function ajaxBeforeSend(xhr) {
					/* Authorization header */
					xhr.withCredentials = true;
					xhr.setRequestHeader("Authorization", "Bearer d625665a-b432-40fe-a1ba-43b26181eb6d");
				},
                success: function(response) {
					console.log(response);
                    if(response.status == 'SUCCESS') {
                    }
                    else {
                        //There was an error in the process
                        //show the error
                        console.log(response.massage);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(status + '; ' + error);

                }
            });

		} else {
		//	console.log('invalid');
		}


		//return false;
       return formValid;
    
});



 jQuery("#wpcf7-f18537-o1 form").submit(function () {

		list = [537171];

    var jform = jQuery(this);

    var jfname = jform.find('input[name="your-name"]');
    var fname = jfname.val();

    var jphone = jform.find('input[name="your-phone-valid"]');
    var phone = jphone.val();

    var jemail = jform.find('input[name="your-email"]');
    var email = jemail.val();



       var formValid = true;


		if (formValid)
		{

		
		jsonData = {
		"firstName": fname,
		"email": email,
		"phone": phone,
		"lists_ToSubscribe": list
		};

            $.ajax({
                url: 'https://ssl-vp.com/rest/v1/Contacts?updateIfExists=true&restoreIfDeleted=true&restoreIfUnsubscribed=true',
                data: JSON.stringify(jsonData),
                type: 'POST',
				contentType: "application/json",
				dataType: "json",
				beforeSend: function ajaxBeforeSend(xhr) {
					/* Authorization header */
					xhr.withCredentials = true;
					xhr.setRequestHeader("Authorization", "Bearer d625665a-b432-40fe-a1ba-43b26181eb6d");
				},
                success: function(response) {
					console.log(response);
                    if(response.status == 'SUCCESS') {
                    }
                    else {
                        //There was an error in the process
                        //show the error
                        console.log(response.massage);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(status + '; ' + error);

                }
            });

		} else {
		//	console.log('invalid');
		}


		//return false;
       return formValid;
    
});
