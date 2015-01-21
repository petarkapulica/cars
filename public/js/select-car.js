var carSelection = function(){
  
    $('.cars_select').on('click', $.proxy(this.OnListClick,this));
    
};

carSelection.prototype = {
    
    OnListClick : function(event)
    {   
        $('.models').html('');
        var car = $(event.currentTarget).val();
        debugger;
        $.ajax({
                url: "http://localhost/cars/selection/cartype",
                type: "POST",
                success: $.proxy(this.onSuccess,this, car)
            }); 
    },
    
    onSuccess : function(car, data)
    {
        var response = $.parseJSON(data);
        debugger;
        var c;
        $.each(response, function($key,$value){
            if($value.car_id == car)
            {
                $('.models').append('<option value="' + $value.id + '">' + $value.model_name + '</option>');
            }
        });
    }
    
};

$(document).ready(function(){
    
   new carSelection(); 
   
});


