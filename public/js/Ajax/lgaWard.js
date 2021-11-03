$(document).ready(function(){
    $('select[name="lga"]').on('change',function(){
        var lgaId = $(this).val();
        if(lgaId){
            $.ajax({
                url: '/ajax/lga/'+lgaId+'/get-wards',
                type: 'GET',
                dataType: 'json',
                success: function(data){
                    $('select[name="ward"]').empty();
                    $('select[name="ward"]').append('<option value="">Select Your ward</option>');
                    $.each(data, function(key, value){
                        $('select[name="ward"]').append('<option value="'+key+'">'+ value +'</option>');
                    });
               }
            });
        } else {
            $('select[name="ward"]').empty();
        }
    });
});