(function() {
    tinymce.create('tinymce.plugins.sisCarousel', {
 
        init : function(ed, url) {
            ed.addCommand('siscarouseltriger', function() {
                return_text = '[carousel][item img_link=""][item img_link=""][item img_link=""][item img_link=""][item img_link=""][/carousel]';
                ed.execCommand('mceInsertContent', 0, return_text);
            });

           
            ed.addButton('siscarouseltriger', {
                title : 'Add Carousel Slider',
                cmd : 'siscarouseltriger',
                image : url + '/carousel.png'
            });

        },
        createControl : function(n, cm) {
            return null;
        },
    });

    // Register plugin
    tinymce.PluginManager.add('siscours', tinymce.plugins.sisCarousel);
})();