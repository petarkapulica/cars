;
var Cars = Cars || {};

Cars.checkForm = function(){
    
    $( "input[name='submit']" ).on('click', $.proxy(this.onSubmit,this));
    
};

Cars.checkForm.prototype = {
    
    reset : function()
    {
        $('.js_error').remove();
        Cars.Validator.status = true;
    },
    
    onSubmit : function(event)
    {
        this.reset();
        event.preventDefault();
        this.checkForm();
        if(Cars.Validator.status)
        {
            this.submit();
        }
    },
    
    submit : function()
    {
        $( "input[name='submit']" ).unbind('click');
    },
    
    checkForm : function()
    {
        this.checkYear();
        this.checkPrice();
    },
    
    checkYear : function()
    {
        var yearlow = parseInt($("select[name='yearlow']").val());
        var yearhigh = parseInt($("select[name='yearhigh']").val());
        
        var element = $("select[name='yearlow']");
        var condition = yearlow > yearhigh;
        var message = 'Invalid year ratio';
        Cars.Validator.validate(element, condition, message);
        
    },
    
    checkPrice : function()
    {
        var pricelow = parseInt($("input[name='numberlow']").val());
        var pricehigh = parseInt($("input[name='numberhigh']").val());
        
        var element = $("input[name='numberlow']");
        var condition = pricelow > pricehigh;
        var message = 'Invalid price ratio';
        
        Cars.Validator.validate(element, condition, message);
    }
    
};

