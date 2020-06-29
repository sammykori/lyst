$(document).ready(function(){


    $('.savechangesbtn').click(function(e){
        console.log($('.updateform').serialize());
        sendDataToServer($('.updateform').serialize(), '/updaterecords');
    });

    function sendDataToServer(formdata, endpoint){
        $.ajaxSetup({
            headers:{ 'X-CSRF-TOKEN' : $('meta[name="_token"]').attr('content') }
        });

        $.ajax({
           method: 'POST',
           url: endpoint,
           data: formdata,
           success: function (data){
               alert(data.data);
              // console.log(data);
           },
           error: function (error){
               console.log(error);
           }

        });
    }
});
