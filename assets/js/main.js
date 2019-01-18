$(document).ready(function(){
    var pathname = window.location.pathname;
	$('.nav > .nav-item  > a[href="'+pathname+'"]').parent().addClass('active');
    // $(".nav li").each(function () {
    //     var href = $(this).attr('href');
    //     if (path.substring(0, href.length) === href) {
    //         $(this).closest('li').addClass('active');
    //     }
    // });
    //$(".nav-link").click(function(){
    //     var pathname = window.location.pathname;
	// $('.nav > .nav-item  > a[href="'+pathname+'"]').parent().addClass('active');
    //});
  });