var UI = Leap.extend({

    init : function (o){
        //save passed in params for debuggin / check if o is defined
        this.params = o = typeof o !=='undefined' ? o : {};

        //check for certain definable attributes, overwrite defaults if exist
        for(var attr in this.defined){
            if(typeof o[attr] !== 'undefined'){
                this[attr] = o[attr];
                this.defined[attr] = true;
            }
        }

        //if user defined actions exist extend default actions
        if(typeof o.actions !== 'undefined'){
            $.extend(this.actions, o.actions);
        }
    },

    build : function(elements){
        var content = this.setElements(elements);
        //check if dimensions have been defined with inline styles, set if so
        if((height = parseInt(content.style.height)) > 0 && !this.defined.height)
            this.height = height;
        if((width = parseInt(content.style.width)) > 0 && !this.defined.width)
            this.width = width;
        return content;
    },

    css : function(href){
        var doc = document;
        var head  = doc.getElementsByTagName('head')[0];
        var link  = doc.createElement('link');

        link.rel  = 'stylesheet';
        link.type = 'text/css';
        link.href = href;
        link.media = 'all';
        head.appendChild(link);
    },

    setActions : function(content, actions, scope){
        var scope = typeof scope !== 'undefined' ? scope : null;
        var matches = [];
        var elements = content.getElementsByTagName('*');
        var action;

        for (var i = elements.length - 1; i >= 0; i--) {
            if((action = elements[i].getAttribute('_leap_action')) !== null){
                elements[i].onclick = function(act){
                    return function(){
                        actions[act](scope);
                    }
                }(action);
            }
        };

        return content;
    },

    setElements : function(html){
        var content;

        if(html instanceof jQuery){
            content = html[0];
            if(this.detach == true){
                html[0].parentNode.removeChild(html[0]);
            }
        } else if(typeof html === 'string') {
            content = $(html)[0];
        } else {
            content = html;
        }
        
        return content;
    },

    setCanvas : function(){
        if(typeof window.requestAnimation == 'undefined'){
            window.requestAnimation = (function(){
                return  window.requestAnimationFrame   ||
                        window.webkitRequestAnimationFrame ||
                        window.mozRequestAnimationFrame    ||
                        window.oRequestAnimationFrame      ||
                        window.msRequestAnimationFrame     ||
                        function(/* function */ callback, /* DOMElement */ element){
                            window.setTimeout(callback, 1000 / 60);
                        };
            })();
        }
    },

    actions : {},

    defined : {}

});

_leap.instance('UI');