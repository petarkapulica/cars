;
var Cars = Cars || {};

Cars.Application = function(){
    
};


Cars.Application.prototype = {
    
    init: function()
    {  
         new Cars.carSelection(); 
         new Cars.gallery(); 
         new Cars.checkForm();
    }
    
};

$(function(){
    new Cars.Application().init();
});