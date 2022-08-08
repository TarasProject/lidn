/*SLICK slider*/
/*setting for function slick*/
function getBigSliderSettings(){
    return {
        arrows:false,
        fade:true,
        asNavFor: '.sl2',
    }
}
function getLittleSliderSettings(){
    return {
        arrows:false,
        slidesToShow:4,
        asNavFor: '.sl',
        focusOnSelect: true,
    }
}
/*function slick*/
$(document).ready(function slik(){
	$('.sl').slick(getBigSliderSettings());
	$('.sl2').slick(getLittleSliderSettings());
});
/*ISOTOPE*/
import 'isotope-layout';
window.Isotope=require('isotope-layout');

$('.portfolio-item').isotope({
	itemSelector: '.item',
});
$('.portfolio-menu ul li a').click(function(){
	$('.btn-load-more').css({"display": "block"});
	$('.portfolio-menu ul li a').removeClass('active');
	$(this).addClass('active');

	var selector = $(this).attr('data-filter');
	$('.portfolio-item').isotope({
		filter: selector
	});
	return false;
});

$('.btn-load-more').click(function(){
	$(this).css({"display": "none"});
	$('.portfolio-menu ul li a').removeClass('active');
	$(this).addClass('active');

	var selector = $(this).attr('data-filter');
	$('.portfolio-item').isotope({
		filter: selector
	});
	return false;
});

/*SEND MAIL*/
function sendEmailFormData(form, url) {
	var data = $(form).serialize();
	$(form).find('button[type=submit]').prop('disabled', true);
	$.ajax({
		type: "POST",
		headers: {
			'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content'),
		},
		url: url,
		data: data,
		dataType: 'json',
		success: function (data) {
			if (data.status === true) {
				$(form).find('button[type=submit]').hide();
                $(".er").addClass("d-none");
				$("#success").removeClass("d-none");
			}
		},
		error: function (data) {
            $(form).find('button[type=submit]').prop('disabled', false);
			$(".er").removeClass("d-none");
		}
	});
}
$('#contact-form').submit(function (e) {
	e.preventDefault();
	sendEmailFormData(this, '/contact');
});


$(document).ready(function () {
    /*Animation hover on Post and Share*/

    $(".card-img-top").mouseover(function(){
        $(this).next(".post-card-body").css({"margin-top": "-250px","transition": "0.15s padding ease-out, 0.25s margin ease-out, 0.25s border ease-out"});
        $(this).css({"z-index": "500","opacity": "0.5"});
    });
    $(".card-img-top").mouseout(function(){
        $(this).next(".post-card-body").css({"margin-top": "0px"});
        $(this).css({"z-index": "500","opacity": "1"});
    });

    $(".btn-share").click(function() {
        $(".social-links-portfolio").toggle(600);
    });

    /*prev next projects(portfolio)*/

    $('#next,#prev').click(function () {
        $.ajax({
            type:"POST",
            headers: {
                'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content'),
            },
            url: routProjectID,
            data: {projectID : projectID, projectEvent : projectEvent},
            dataType: "json",
            success: function (data) {
                $("#title").html(data.project["title"]);
                $("#brand").html(data.project["brand"]);
                $("#created_at").html(data.project["created_at"]);
                $("#text").html(data.project["text"]);
                var like = data.project["like"]
                $(".project-col").html((like!=null)?like:'0');
                $('#no-foto').html('');
                $(".sl").slick('unslick');
                $(".sl2").slick('unslick');
                imagesDisplay(data);
                $(".sl").not('.slick-initialized').slick(getBigSliderSettings());
                $(".sl2").not('.slick-initialized').slick(getLittleSliderSettings());
                projectID = data.project["id"];
                if (getCookie("project_" + projectID)) {
                    $("#like").css("pointer-events", "none");
                }
                if (!getCookie("project_" + projectID)) {
                    $("#like").css("pointer-events", "auto");
                }
            }
        })
    })
    function imagesDisplay(data) {
        var htmlBigSlider =[];
        var htmlLittleSlider =[];
        if (data.project["img"].length != 0) {
            for (var i = 0; i < data.img.length; i++) {
                htmlBigSlider.push('<div class="sl__slide"><a href="#"><img src = " ' + asset + '/' + data.img[i] + ' " alt="картинка слайда" class="sl_img"></a></div>')
                htmlLittleSlider.push('<div class="sl2__slide"><img src = " ' + asset + '/' + data.img[i] + ' " alt="картинка слайда" class="sl_img"></div>')
            }
            return $(".sl").html(htmlBigSlider), $(".sl2").html(htmlLittleSlider);
        } else if (data.project["img"].length === 0) {
            return $(".sl").html('<h2>There are no photos in the project</h2>'), $(".sl2").html('');
        }
    }
    /*LIKE*/
    function getCookie(name) {
        name = name.toLowerCase();
        const parts = document.cookie.split(';');

        for (const part of parts) {
            const pair = part.split('=');
            const key = decodeURIComponent(pair[0].trim().toLowerCase());

            if (key === name) {
                return decodeURIComponent(pair[1]);
            }
        }

        return null;
    }

    function setCookie(name, value) {
        document.cookie = encodeURIComponent(name) + '=' + encodeURIComponent(value) + ';path=/';
    }
    $('#like').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            method: 'POST',
            url: routProjectLike,
            data: {projectID: projectID, _token: token},
            dataType: 'json',
            success: function (data) {
                if (data.success === true) {
                    setCookie("project_" + projectID, true);
                    $("#like").html('<small class="pl-5"><i class="far fa-heart"></i><span class="project-col">' + data.project["like"] + '</span>likes</small>');
                }
            }
        })
    });
    if (typeof projectID !== 'undefined') {
        if (getCookie("project_" + projectID)) {
            $("#like").css("pointer-events", "none");
            // console.log(projectID, 'getCookie');
        }
        $("#like").click(function () {
            if (!getCookie("project_" + projectID)) {
                $("#like").css("pointer-events", "none");
            }
        });
    }
})
/*BUTTON read more*/
/*
var count=0, lengthItem=0;
var c=count+3;
function getMore()
{
	for(var i=count;i<=c;i++)
	{
		if(count<lengthItem)
		{
			$('.portfolio-item .item:eq('+i+')').show();
			count++;
		}
		else
		{
			break;
		}
	}
}
$('.btn-load-more').bind('click',
function()
{
	for(var i=c;i<lengthItem;i++)
	{
		if(count<lengthItem)
		{
			$('.portfolio-item .item').css({"display":"block"});
		}
		else
		{
			break;
		}
	}

});
$(document).ready(function(){
	$('.portfolio-item .item').hide();
	lengthItem=$('.portfolio-item .item').length;
	getMore();
});*/
