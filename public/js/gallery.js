;
var Cars = Cars || {};

Cars.gallery = function(){
    $('.next-image').on('click', $.proxy(this.OnNextClick, this));
    $('.previous-image').on('click', $.proxy(this.OnPreviousClick, this));
    $('.gallery-single-img').on('click', $.proxy(this.OnThumbImageClick, this));
    $('.zoom-img').on('click', $.proxy(this.OnMainImageClick, this));
};



Cars.gallery.prototype = {
    
    getFirstImage: function()
    {
        return $( ".car-content-details-img-wrapper div:first-child" );
    },

    getLastImage: function()
    {
        return $( ".car-content-details-img-wrapper div:last-child" );
    },
    
    OnNextClick : function()
    {
       $( ".car-content-details-img-wrapper" ).append(this.getFirstImage());       
       this.setNewLargeImage();
    },
    
    setNewLargeImage: function()
    {   
        var src = this.getFirstImage().children('img').attr('src');
        var newSrc = src.replace('thumb','m');
        $('.head-image').children('img').attr('src', newSrc);
        
        var data = this.getFirstImage().children('img').attr('data');
        $('.head-image').children('img').attr('data', data);
        
        this.CountImages();
    },
    
    OnPreviousClick : function()
    {
       $( ".car-content-details-img-wrapper" ).prepend(this.getLastImage());  
       this.setNewLargeImage();
    },
    
    OnThumbImageClick : function(event)
    {
        var src = $(event.currentTarget).children('img').attr('src');
        var newSrc = src.replace('thumb','m');
        $('.head-image').children('img').attr('src', newSrc);
        
        var data = $(event.currentTarget).children('img').attr('data');
        $('.head-image').children('img').attr('data', data);
        
        this.CountImages();
    },
    
    CountImages : function()
    {
        var imageNumber = $('.head-image').children('img').attr('data').replace(/[^0-9]/g, '');
        var totalImages = $('.car-content-details-img-wrapper').children().length;
        $('.count-image').html(imageNumber + '/' + totalImages);
    },
    
    OnMainImageClick : function()
    {
        new Cars.galleryExpanded();
    }
    
};