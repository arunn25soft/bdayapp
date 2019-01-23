$(function() {
    //Copy employee address
    $('#empaddress').click(function(){
        //alert("chcekded");
        if($(this).is(':checked')){
            //alert($('#current_address').val());
            $('#current_address').focus();
            $('#current_address').val( $('#permanent_address').val() );

        }
    });
    
    //Datepicker
    $('#date-time').bootstrapMaterialDatePicker({
        format: 'YYYY-MM-DD HH:mm'
    });

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
    ///console.log('change me!');
})
    
});

