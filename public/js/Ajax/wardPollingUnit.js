$(document).ready(function(){
    $('select[name="ward"]').on('change',function(){
        var wardId = $(this).val();
        if(wardId){
            $.ajax({
               url: '/ajax/ward/'+wardId+'/get-polling-units',
               type: 'GET',
               dataType: 'json',
               success: function(data){
                    $('select[name="polling_unit"]').empty();
                    $('select[name="polling_unit"]').append('<option value="">Select Polling Unit</option>');
                    $.each(data, function(key, value){
                        $('select[name="polling_unit"]').append('<option value="'+key+'">'+ value +'</option>');
                    });
               }
            });
        } else {
            $('select[name="polling_unit"]').empty();
        }
    });
    
});