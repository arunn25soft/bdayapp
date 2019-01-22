$(function() {
    $(".list_user").hide();
    //$(".nav-item").hide();
    $("#create").click(function(){
        $(".nav-item").hide();
        $(".list_user").slideToggle("slow");
        $(".create_user").slideToggle("slow");
    });
    $("#list").click(function(){
        $(".nav-item").show();
        $(".list_user").slideToggle("slow");
        $(".create_user").slideToggle("slow");
    });

    var fileinput = $('.fileinput').fileinput();
fileinput.on('change.bs.fileinput', function(e, files){
    console.log('change me!');
})
    
});

