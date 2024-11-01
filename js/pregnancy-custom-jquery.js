jQuery(document).ready(function($){


    $("#sipc_datepicker").datepicker({
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onSelect: function (dateText, inst) {
            isWidget = false;
            dueCalculate(dateText,isWidget);
        }
    });

    $("#sipc_widget-datepicker").datepicker({
        prevText: '<i class="fa fa-chevron-left"></i>',
        nextText: '<i class="fa fa-chevron-right"></i>',
        onSelect: function (dateText, inst) {
            isWidget = true;
            dueCalculate(dateText,isWidget);
        }
    });

    $("#ui-datepicker-div").addClass("datepicker");

    var dueCalculate = function(date,bool){

        var a = new Date(date);
        var initUtc = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
        var calcUtc = moment(initUtc).add(280, 'day');
        var b = new Date(calcUtc);

        console.log(bool);
        var day = b.getDate();
        var month = b.getMonth();
        var year = b.getFullYear();
        
        var months = [ "January", "February", "March", "April", "May", "June","July", "August", "September", "October", "November", "December" ];
        var monthToString = months[month];
        var monthShort = monthToString.slice(0,3);

        displayDate = day +' '+monthToString+' '+ year ;
        
        if (bool== false) {
            $("#sipc_selectedDate").html(date);
            $("#sipc_result").html('Your due date is expected at </span><strong>'+displayDate+'</strong><span>. Congratulations');
            $("#sipc_res-day").html(day);
            $('#sipc_month-short').html(monthToString);
            $("#sipc_res-year").html(year);
            console.log(displayDate);
            animate("#sipc_res-card", "flipInX");
        }else{
            $("#sipc_widgetSelectedDate").html(date);
            $("#sipc_widget-result").html('Your due date is expected at </span><strong>'+displayDate+'</strong><span>. Congratulations');
            $("#sipc_widget-res-day").html(day);
            $('#sipc_widget-month-short').html(monthToString);
            $("#sipc_widget-res-year").html(year);
            console.log(displayDate);
            animate("#sipc_widget-res-card", "flipInY");
        }
    };


    function animate(element_ID, animation) {
        $(element_ID).addClass(animation);
        console.log(animation);
        var wait = window.setTimeout( function(){
                $(element_ID).removeClass(animation)}, 1300
        );
    }

});