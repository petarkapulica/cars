;
var Cars = Cars || {};

Cars.uploadPhotos = function(){
    $('.add-more-photos').on('click',$.proxy(this.addMore,this));
};

Cars.uploadPhotos.prototype = {
    
    addMore : function()
    {
        $('.add-more-photos').before('<p><input type="file" name="photo_' + this.countPhotos() + '" /></p>');
    },
    
    countPhotos : function()
    {
        return $('input[type="file"]').length;
    }
    
};