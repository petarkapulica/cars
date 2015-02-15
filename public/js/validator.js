;
var Cars = Cars || {};

Cars.Validator = {
    
    status : true,
    
    validate : function(element, condition, message)
    {        
        if( condition )
        {   
            Cars.Error.addError(element, message);
            this.status = false;
        }
        else
        {
            element.removeAttr( 'style' );
        }
    }
    
};
