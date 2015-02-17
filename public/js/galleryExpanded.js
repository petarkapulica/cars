;
var Cars = Cars || {};

Cars.galleryExpanded = function(){
    $('.main').off("click",".previous-image-big").on("click", ".previous-image-big", $.proxy(this.OnPreviousBigClick, this));
    $('.main').off("click",".next-image-big").on("click", ".next-image-big", $.proxy(this.OnNextBigClick, this));
    $('.main').off("click",".btn-close-img").on("click", ".btn-close-img", $.proxy(this.ClosePopupOnButtonClick, this));
    $('.main').off("click",".popup-panel").on("click", ".popup-panel", $.proxy(this.ClosePopupOnSideClick, this));
    $('.main').off("click",".btn-autoplay-img").on("click", ".btn-autoplay-img", $.proxy(this.AutoplayImages, this));
    $('.main').off("click",".btn-stop-autoplay-img").on("click", ".btn-stop-autoplay-img", $.proxy(this.StopAutoPlay, this));
     this.run();
};

Cars.galleryExpanded.prototype = {
    
    autoplayStatus : false,
    
    run : function()
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
        $('.main').append('<div class="popup-panel"><div class="popup-panel-image"></div></div>');
    },
    
    AddImageToPanel : function()
    {   
        var src = $('.head-image').children('img').attr('src');
        var newSrc = src.replace('size=m','size=l');
        $('.popup-panel-image').html('<img src="' + newSrc + '">');
    },
    
    AddArrows : function()
    {
        $('.popup-panel-image').prepend('<div class="next-image-big"><img src="../../public/images/ad-next.png" /></div>');
        $('.popup-panel-image').append('<div class="previous-image-big"><img src="../../public/images/ad-prev.png" /></div>');
    },
    
    AddCounter : function()
    {
        var counter = $('.count-image').text().trim();
        $('.popup-panel-image').append('<div class="count-image">'+ counter +'</div>');
    },
    
    OnPreviousBigClick : function()
    {
        var previousImageSmall, previousImageBig, previousImageNumber;
        var totalImages = $('.gallery-single-img').length;
        var currentImage = $('.popup-panel-image').children('img').attr('src');
        var currentImageInThumbWrapper = currentImage.replace('size=l','size=thumb');
        $('.gallery-single-img').each(function(){
            if($(this).find('img').attr('src') === currentImageInThumbWrapper)
            {
                if($(this).prev().length === 0)
                {
                    previousImageSmall = $('.gallery-single-img').last().children('img').attr('src');
                    previousImageBig = previousImageSmall.replace('thumb','l');
                    previousImageNumber = $('.gallery-single-img').last().children('img').attr('data').slice(-1) + '/' + totalImages;
                }
                else
                {
                    previousImageSmall = $(this).prev().children('img').attr('src');
                    previousImageBig = previousImageSmall.replace('thumb','l');
                    previousImageNumber = $(this).prev().children('img').attr('data').slice(-1) + '/' + totalImages;;
                }
                
                $('.popup-panel-image').children('img').attr('src', previousImageBig);
                $('.popup-panel-image').children('.count-image').html(previousImageNumber);
            }
        });
    },
    
    OnNextBigClick : function()
    {
        var nextImageSmall, nextImageBig, nextImageNumber ;
        var totalImages = $('.gallery-single-img').length;
        var currentImage = $('.popup-panel-image').children('img').attr('src');
        var currentImageInThumbWrapper = currentImage.replace('size=l','size=thumb');
        $('.gallery-single-img').each(function(){
            if($(this).find('img').attr('src') === currentImageInThumbWrapper)
            {
                if($(this).next().length === 0)
                {
                    nextImageSmall = $('.gallery-single-img').first().children('img').attr('src');
                    nextImageBig = nextImageSmall.replace('thumb','l');
                    nextImageNumber = $('.gallery-single-img').first().children('img').attr('data').slice(-1) + '/' + totalImages;
                }
                else
                {
                    nextImageSmall = $(this).next().children('img').attr('src');
                    nextImageBig = nextImageSmall.replace('thumb','l');
                    nextImageNumber = $(this).next().children('img').attr('data').slice(-1) + '/' + totalImages;
                }
                $('.popup-panel-image').children('img').attr('src', nextImageBig);
                $('.popup-panel-image').children('.count-image').html(nextImageNumber);
            }
        });
    },
    
    AddCloseButton : function()
    {
        $('.popup-panel-image').append('<button class="btn-close-img">CLOSE</button>');
    },
    
    AddAutoplayButton : function()
    {
        $('.popup-panel-image').append('<button class="btn-autoplay-img">Play</button>');
        $('.popup-panel-image').append('<button class="btn-stop-autoplay-img">Stop</button>');
    },
    
    AutoplayImages : function()
    {
        $('.btn-autoplay-img').hide();
        $('.btn-stop-autoplay-img').show();
        this.autoplayStatus = true;
        setInterval($.proxy(this.AutoPlayNextImg, this), 3000); 
    },
    
    AutoPlayNextImg: function () {
        if(this.autoplayStatus){
            $(".next-image-big").click();
        }            
    },
    
    ClosePopupOnButtonClick : function(event)
    {
        $('.popup-panel').remove();
    },
    
    ClosePopupOnSideClick : function(event)
    {
        if(event.target.className === 'popup-panel')
         {
             $('.popup-panel').remove();
         } 
    },
    
    StopAutoPlay: function()
    {
        this.autoplayStatus = false;
        $('.btn-autoplay-img').show();
        $('.btn-stop-autoplay-img').hide();
    }
    
};