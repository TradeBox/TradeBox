var Leap = Class.extend({

    init : function(){
        //apply bind to function prototype if nonexistent
        if(!Function.prototype.bind){
            this.applyBind();
        }
    },

    log : function(message){
        console.log(message);
    },

    error : function(message){
        console.error(message);
    },

    api : {

        get : function(section, data){
            return this.ajax('GET', section, data);
        },

        post : function(section, data){
            return this.ajax('POST', section, data);
        },

        update : function(section, data){
            return this.ajax('UPDATE', section, data);
        },

        remove : function(section, data){
            return this.ajax('DELETE', section, data);
        },

        ajax : function(request, section, data){
            var _this = this;
            var url;
            
            if (typeof data == 'undefined') {
                data = {};
            }

            if (typeof data === 'string' || Object.prototype.toString.call(data) == '[object Array]') {
                data = { input : data };
            }

            if (Object.prototype.toString.call(data) !== '[object Object]') {
                return false;
            }

            for (var i = this.directpaths.length - 1; i >= 0; i--) {
                if (section.indexOf(this.directpaths[i]) > -1) {
                    url = _this.host+section;
                }
            };

            if (typeof url == 'undefined') {
                url = _this.host;
                data  = {
                    'call' : section.charAt(section.length-1) == '/' ? section : section+'/',
                    'data' : data
                }
            }

            url = url.charAt(url.length-1) == '/' ? url : url+'/';

            return $.ajax({
                url : url,
                type : request,
                dataType: 'JSON',
                data : data
            });

        },

        directpaths : ['/cache'],

        host : '/api'

    },

    instance : function(baseclass, subclass, single){
        if(typeof subclass == 'undefined'){
            if(typeof this.instances[baseclass] == 'undefined'){
                this.instances[baseclass] = new window[baseclass];
                this[baseclass.toLowerCase()] = this.instances[baseclass];
            }
        } else {
            if(typeof this.instances[baseclass][subclass] == 'undefined'){
                this.instances[baseclass][subclass] = new window[subclass];
                this[baseclass.toLowerCase()][subclass.toLowerCase()] =
                    this.instances[baseclass][subclass].init.bind(this.instances[baseclass][subclass]);
            }
        }
    },

    applyBind : function(){
        Function.prototype.bind = function (_this) {
            if (typeof this !== "function") {
                throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");
            }

            var aArgs = Array.prototype.slice.call(arguments, 1),
                fToBind = this,
                fNOP = function () {},
                fBound = function () {
                    return fToBind.apply(this instanceof fNOP && _this
                        ? this
                        : _this,
                        aArgs.concat(Array.prototype.slice.call(arguments)));
                };

            fNOP.prototype = this.prototype;
            fBound.prototype = new fNOP();

            return fBound;
        };
    },

    delay : (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);
            timer = setTimeout(callback, ms);
        };
    })(),

    storage : {},

    instances : {}
});

var _leap = new Leap();