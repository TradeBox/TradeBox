var Modal = UI.extend({

    init : function(o){
        this._super(o);
        this.overlay = $('#transparency');
        this.container = this.build();
        this.$container = $(this.container);
    },

    build : function(){
        var _this = this;
        var el = document.createElement('div');
        var content = this.setElements(this.html);
        var height;
        var width;

        //check if dimensions have been defined with inline styles, set if so
        if((height = parseInt(content.style.height)) > 0 && !this.defined.height)
            this.height = height;
        if((width = parseInt(content.style.width)) > 0 && !this.defined.width)
            this.width = width;

        //check if translucent background exists
        if(this.overlay.length < 1){
            var overlay = document.createElement('div');
                overlay.setAttribute('id', 'transparency');
            this.overlay = $(overlay);
            document.body.appendChild(overlay);
        }

        //check for leap actions within content, set if needed
        content = this.setActions(content, this.actions, this);
        content.style.display = 'block';

        //set padding into width and height
        this.height += this.padding*2;
        this.width += this.padding*2;

        //set content
        el.className += 'modal';
        el.style.padding = this.padding+'px';
        el.style.height = this.height+'px';
        el.style.width = this.width+'px';
        el.style.marginLeft = -(this.width/2)+'px';
        el.style.marginTop = -(this.height/2)+'px';
        el.style.maxHeight = 'none';
        el.appendChild(content);
        el.appendChild(this.buildLoader());

        //append content
        document.body.appendChild(el);

        this.content = content;
        this.$content = $(content);

        return el;
    },

    buildLoader : function(){
        var el = document.createElement('div');
        this.loader = el;
        this.$loader = $(el);
        this.$loader.addClass('loadbar').hide();
        return el;
    },

    show : function(callback){
        this.overlay.stop().fadeIn();
        this.$container.stop().fadeIn('fast', function(){
            if(typeof callback !== 'undefined' && callback instanceof Function) callback();
        });
        this.visible = true;
    },

    hide : function(callback){
        this.overlay.stop().fadeOut();
        this.$container.stop().fadeOut('fast', function(){
            if(typeof callback !== 'undefined' && callback instanceof Function) callback();
        });
        this.visible = false;
    },

    loading : function(o){
        var _this = this;
        var height = this.$loader.height()+this.padding*2;
        var width = this.$loader.width()+this.padding*2;
        var styles = {
            height : height,
            width : width,
            'margin-left' : -(width/2),
            'margin-top' : -(height/2)
        }

        if(!this.visible){
            this.$container.css(styles);
            this.show(
                this.$loader.fadeIn()
            );
        } else {
            this.$content.fadeOut('fast', function(){
                _this.$container.animate(styles, 'fast', function(){
                    _this.$loader.fadeIn();
                });
            });
        }

        this.overlay.unbind('click');
    },

    destroy : function(o){
        var _this = this;
        if (this.visible) {
            this.hide(function(){
                _this.$container.remove();
            });
        } else {
            this.$container.remove();
        }
    },

    actions : {
        close : function(_this){
            return _this.hide();
        }
    },

    defined : {
        html : false,
        height : false,
        width : false,
        padding : false,
        detach : false
    },

    html : '<div></div>',
    detach : true,
    padding : 12,
    height : 300,
    width : 600,
    visible : false,
    overlay : null,
    $container : null,
    container : null,
    $content : null,
    content : null,
    $loader :null,
    loader : null

});

_leap.ui.modal = function(o){
    return new Modal(o);
};