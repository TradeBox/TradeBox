var Notification = UI.extend({

    init : function(o){
        this._super(o);

        if(!this.built){
            this.css('/resources/leap3/css/global/notifications.css');
            this.build();
        }

        if(typeof o !== 'undefined' && this.message !== null){
            this.setMessage(
                this.success, this.message
            );
            this.open();
        }
    },

    build : function(){
        if(!this.container){
            this.container = document.createElement('div');
            this.container.id = 'notifications';
            this.$container = $(this.container);
        }

        var elements = this.setElements(this.html);
        var content = this.setActions(elements, this.actions, this);

        //if hijacking already existing notifications, include them
        var existing = this.$container.find('.messages li');
        if(existing.length > 0){
            $(content).find('.messages').html(existing);
        }

        this.$container.html(content);
        this.built = true;

        $('body').prepend(this.container);

        //hack for existing notifications
        if(existing.length > 0){
            this.open();
        }
    },

    open : function(){
        this.$container.slideDown();
    },

    close : function(){
        var $container = this.$container;

        $container.slideUp(400, function(){
            $container.find('.messages').html('');
        });
    },

    setMessage : function(success, message){
        var ul = this.$container.find('.messages');
        var img = !success ? this.img.error : this.img.success;
        ul.prepend(
            '<li><img src = "' + this.img.path + img +'">' + message + '</li>'
        );
    },

    actions : {
        close : function(_this){
            return _this.close();
        }
    },

    success : false,
    message : null,
    built : false,
    container : document.getElementById('notifications'),
    $container : $('#notifications'),

    img: {
        path : '/resources/leap3/imgs/global/notifications/',
        success : 'success.png',
        error : 'warning.png'
    },

    defined : {
        success : false,
        message : false
    },

    html :
    '<div class="container">' +
        '<input type="button" class="gray close_button" value="Dismiss" _leap_action="close">' +
        '<ul class="messages"></ul>' +
    '</div>'

});

_leap.instance('UI', 'Notification');