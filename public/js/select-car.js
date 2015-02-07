;
var Cars = Cars || {};

Cars.carSelection = function(){
  
    $('.js_car_select').on('click', $.proxy(this.OnListClick,this));
    
};

Cars.carSelection.prototype = {
    
    OnListClick : function(event)
    {   
        $('.js_models').html('');
        var car = $(event.currentTarget).val();
        $.ajax({
                url: "/cars/selection/cartype",
                type: "POST",
                success: $.proxy(this.onSuccess,this, car)
            }); 
    },
    
    onSuccess : function(car, data)
    {
        var response = $.parseJSON(data);
        var c;
        $.each(response, function($key,$value){
            if($value.car_id == car)
            {
                $('.js_models').removeAttr('disabled');
                $('.js_models').append('<option value="' + $value.id + '">' + $value.model_name + '</option>');
            }
        });
    }
    
};