var Cache = Leap.extend({
    
    init : function(){

    },

    insert : function(data, time){
        return this.api.post('/cache/', {
            data : data,
            time : time
        });
    },

    get : function(key){
        return this.api.get('/cache/'+key);
    },

    remove : function(key){
        return this.api.get('/cache/delete/'+key);
    }

});

_leap.instance('Cache');