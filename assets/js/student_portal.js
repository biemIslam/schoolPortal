// $(document).ready(function(){
//     $('.hide-div').css('display', 'none');
//     $('.contents').click(function () {
//         $('.show-div').css('display', 'block');
//     });
// });

$(document).ready(function() 
{
//     // dashboard load function
    $("#dashboard").click(function() {                
        $('#divContent').load('././dashboard_div.php', function(response, status, callback){
            if (status == 'error') {
                var msg = 'An error occurred ';
                alert (msg + callback.status + '. Status text: ' + callback.statusText)
            }
        });

    });

//     // profile load function
    $("#profile").click(function() {            
        $('#divContent').load('././profilediv.php', function(response, status, callback){
            if (status == 'error') {
                var msg = 'An error occurred';
                alert (msg + callback.status + '. Status text: ' + callback.statusText)
            }
        });   
    });
   
       

});
