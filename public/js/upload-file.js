var UploadPhotos = function(){
    $('.add-more-photos').on('click',$.proxy(this.addMore,this));
};

UploadPhotos.prototype = {
    
    addMore : function()
    {
        $('.add-more-photos').before('<p><input type="file" name="photo_' + this.countPhotos() + '" /></p>');
    },
    
    countPhotos : function()
    {
        return $('input[type="file"]').length;
    }
    
};

$(document).ready(function(){
    new UploadPhotos();
});