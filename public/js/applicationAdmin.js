;
var Cars = Cars || {};

Cars.ApplicationAdmin = function(){
    
};


Cars.ApplicationAdmin.prototype = {
    
    init: function()
    {  
         new Cars.carSelection(); 
         new Cars.uploadPhotos();
    }
    
};

$(function(){
    new Cars.ApplicationAdmin().init();
});