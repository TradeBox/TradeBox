var Alert = UI.extend({
    
    init : function(content){

        if (!this.built) {
            this.content = content;
            this.css('/resources/global/css/ui/alert.css');
            this.build();
            this.open();
        }

        return this;
    },

    build : function(){
        
        if(!this.container){
            this.container = document.createElement('div');
            this.container.className = 'leap_alert';
            this.$container = $(this.container);
        }
        
        var elements = this.setElements(this.html());
        var content = this.setActions(elements, this.actions, this);
        
        this.$container.hide();
        this.$container.html(content);
        $('body').append(this.$container);

        this.built = true;
    },

    open : function(){
        this.$container.fadeIn();
    },

    close : function(callback){
        var _this = this;

        this.$container.fadeOut(function(){
            _this.destroy();

            if (typeof callback !== 'undefined' && callback instanceof Function) {
                callback();
            }

        })
    },

    destroy : function(){
        this.$container.remove();
    },

    actions : {
        close : function(_this){
            return _this.close(_this.onclose);
        }
    },

    content : '',

    html : function(){
        return '<div class="wrap">'+
            '<span class="content">'+this.content+'</span>'+
            '<div class="alertClose" _leap_action="close">&#10006;</div>'+
        '</div>';
    },

    built: false,

    onclose : null
});

_leap.ui.alert = function(content){
    return new Alert(content);
}