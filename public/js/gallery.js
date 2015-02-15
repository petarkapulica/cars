;
var Cars = Cars || {};

Cars.gallery = function(){
    $('.next-image').on('click', $.proxy(this.OnNextClick, this));
    $('.previous-image').on('click', $.proxy(this.OnPreviousClick, this));
    $('.gallery-single-img').on('click', $.proxy(this.OnThumbImageClick, this));
    $('.zoom-img').on('click', $.proxy(this.OnMainImageClick, this));
    $('.main').on("click", ".previous-image-big", $.proxy(this.OnPreviousBigClick, this));
    $('.main').on("click", ".next-image-big", $.proxy(this.OnNextBigClick, this));
    $('.main').on("click", ".btn-close-img", $.proxy(this.ClosePopupImage, this));
    $('.main').on("click", ".btn-autoplay-img", $.proxy(this.AutoplayImages, this));
    $('.main').on("click", ".btn-stop-autoplay-img", $.proxy(this.stopAutoPlay, this));
};



Cars.gallery.prototype = {
    
    autoplayStatus:false,
    
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
        this.CreatePopupPanel();
        this.AddImageToPanel();
        this.AddArrows();
        this.AddCounter();
        this.AddCloseButton();
        this.AddAutoplayButton();
    },
    
    CreatePopupPanel : function()
    {
        $('.main').append('<div class="PopupPanel">1</div>');
    },
    
    AddImageToPanel : function()
    {
        var src = $('.head-image').children('img').attr('src');
        var newSrc = src.replace('size=m','size=l');
        $('.PopupPanel').html('<img src="' + newSrc + '">');
    },
    
    AddArrows : function()
    {
        $('.PopupPanel').prepend('<div class="next-image-big"><img src="../../public/images/ad-next.png" /></div>');
        $('.PopupPanel').append('<div class="previous-image-big"><img src="../../public/images/ad-prev.png" /></div>');
    },
    
    AddCounter : function()
    {
        var counter = $('.count-image').text().trim();
        $('.PopupPanel').append('<div class="count-image">'+ counter +'</div>');
    },
    
    OnPreviousBigClick : function()
    {
        var currentImage = $('.PopupPanel').children('img').attr('src');
        var currentImageInThumbWrapper = currentImage.replace('size=l','size=thumb');
        $('.gallery-single-img').each(function(){
            if($(this).find('img').attr('src') === currentImageInThumbWrapper)
            {
                if($(this).prev().length === 0)
                {
                    return false;
                }
                var previousImageSmall = $(this).prev().children('img').attr('src');
                var previousImageBig = previousImageSmall.replace('thumb','l');
                $('.PopupPanel').children('img').attr('src', previousImageBig);
                
               var count = $('.PopupPanel').children('.count-image').text().split('/');
               var image = parseInt(count[0]);
               var total = parseInt(count[1]);
               var newCount = (image - 1) + '/' + total;
               $('.PopupPanel').children('.count-image').text(newCount);
            }
        });
    },
    
    OnNextBigClick : function()
    {
        var currentImage = $('.PopupPanel').children('img').attr('src');
        var currentImageInThumbWrapper = currentImage.replace('size=l','size=thumb');
        $('.gallery-single-img').each(function(){
            if($(this).find('img').attr('src') === currentImageInThumbWrapper)
            {
                if($(this).next().length === 0)
                {
                    return false;
                }
                var nextImageSmall = $(this).next().children('img').attr('src');
                var nextImageBig = nextImageSmall.replace('thumb','l');
                $('.PopupPanel').children('img').attr('src', nextImageBig);
                
                var count = $('.PopupPanel').children('.count-image').text().split('/');
                var image = parseInt(count[0]);
                var total = parseInt(count[1]);
                var newCount = (image + 1) + '/' + total;
                $('.PopupPanel').children('.count-image').text(newCount);
            }
        });
    },
    
    AddCloseButton : function()
    {
        $('.PopupPanel').append('<button class="btn-close-img">CLOSE</button>');
    },
    
    AddAutoplayButton : function()
    {
        $('.PopupPanel').append('<button class="btn-autoplay-img">Play</button>');
        $('.PopupPanel').append('<button class="btn-stop-autoplay-img">Stop</button>');
    },
    
    AutoplayImages : function()
    {
        $('.btn-autoplay-img').hide();
        $('.btn-stop-autoplay-img').show();
        this.autoplayStatus = true;
        setInterval($.proxy(this.AutoPlayNextImg, this), 4000); 
    },
    
    AutoPlayNextImg: function () {
        if(this.autoplayStatus){
            $(".next-image-big").click();
        }            
    },
    
    ClosePopupImage : function(event)
    {
//         if(event.currentTarget.className === 'PopupPanel')
//         {
//            return false;
//         }
         
             $('.PopupPanel').remove();
         
    },
    
    stopAutoPlay: function()
    {
        this.autoplayStatus = false;
    }
    
};