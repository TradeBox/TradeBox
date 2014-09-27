//FUNCTIONS USED GLOBALLY ON DOMREADY
var _l3_global = {

    search : function(o){

        var query = o.query;
        var results = o.results || $('#search-results li');
        var result;
        var found = false;

        if(query.length > 1){

            results.hide();
            results.each(function(){
                result = $(this);
                if(result.text().indexOf(query) > 0 && !result.hasClass('ignore')){
                    result.show();
                    found = true;
                }
            });

            if(!found){
                $('#leap_search_query').text(query);
                $('#leap_search_default').show();
            }

        } else {
            results.hide();
        }

    },

    cacheBandwidth : function(){
        
        var _this = this;

        _leap.cache.get('bandwidth').done(function(res){

            if (!res || res == 'false') {

                _leap.api.get('/server/bandwidth').done(function(bres){
                    if (bres.success) {
                        _leap.cache.insert({
                            'bandwidth' : bres.result
                        }, 2500);
                        _this.checkBandwidth(bres.result);
                    }

                });
            
            } else {

                _this.checkBandwidth(res);

            }
            
        });

    },

    checkBandwidth : function(components){
        
        var notify = false;
        var data = [];

        var pooledStats = {
            total: 0, 
            limit: 0
        };


        if (!(components instanceof Array)) {
            for (var component in components) {
                data.push(component);
            };
        } else {
            data = components;
        }

        for (var i = data.length - 1; i >= 0; i--) {
            var deviceBw = data[i].bandwidth;
            
            if (typeof deviceBw.pooled == 'string') {
                deviceBw.pooled = deviceBw.pooled == 'true' ? true : false;
            }

            if (deviceBw.pooled) {
                pooledStats.total += parseInt(deviceBw.total);
                pooledStats.limit += parseInt(deviceBw.limit);
            } else {
                if(
                    parseInt(deviceBw.limit) > 0 &&
                    parseInt(deviceBw.total) >= parseInt(deviceBw.limit) * .80
                ) {
                    notify = true;
                }
            }
            
        };

        if (
            pooledStats.total > 0 &&
            pooledStats.total >= pooledStats.limit * .80
        ) {
            notify = true;
        }

        if(notify && !localStorage.getItem('bandwidthNotified')){
            _leap.ui.notification({
                success : false,
                message : 'Your bandwidth summary requires attention.<br>'+
                '<a href="/components/bandwidth/">Click here to view your bandwidth summary.</a>'
            });
            localStorage.setItem('bandwidthNotified', true);
        }

    }

}

//GLOBAL DOMREADY
$(document).ready(function(){

    _l3_global.cacheBandwidth();
    
    $("div#user > div").click(function(){
        if($(this).is('.open')) {
            $('div#user > div').removeClass('open');
            $('.user_menu').hide();
            $('div#eventsbar').slideUp();
        } else {
            $('div#user > div').removeClass('open');
            $('.user_menu').hide();
            $(this).addClass('open');
            if($(this).is('#events')) {
                $('div#eventsbar:hidden').slideDown();
            } else {
                $('div#eventsbar').slideUp();
                $(this).next('.user_menu').css('top', ($(this).offset().top+$(this).height()) + 'px');
                $(this).next('.user_menu').css('left', $(this).position().left-($(this).next('.user_menu').outerWidth()-$(this).outerWidth()) + 'px');
                $(this).next('.user_menu').show();
            }
        }
    });

    $("#transparency, .modal .cancel, .modal .close").click(function() {
        $("#transparency").hide();
        $('.modal').fadeOut();
    });
    
    $('#search_components').focus(function() {
        $(this).val('');
    });
    
    
    $('#search_components').blur(function() {
        if($(this).val()=='') {
            $(this).val('Search Components');
            $('#search-results li').hide();
        }
    });
    
    $('#search_components').keyup(function() {
        
        _l3_global.search({
            query : $(this).val()
        });
    
    });
    
}); 