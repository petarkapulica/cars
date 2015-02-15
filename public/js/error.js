;
var Cars = Cars || {};

Cars.Error = {
    
    addError : function(element, message)
    {
        element.css("background-color", "red");
        element.before('<div class="js_error">' + message + '</div>');
    }
    
};


