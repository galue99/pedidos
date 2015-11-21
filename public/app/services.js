/**
 * Created by edgar on 19/11/15.
 */
/**
 * Created by 4geeks on 25/05/15.
 * (c) 2015 4geeks
 * License: MIT
 */

'use strict';

angular.module('pedidosApp')
    .service('websocket', function() {

        var service = {};
        service.callbacks = {}; //note the object declaration, not Array
        service.connect = function() {
            if(service.ws)
                return;
            var ws = new WebSocket("ws://localhost:3000/");
            ws.onmessage = function (message) {
                angular.forEach(service.callbacks, function(callback){
                    callback(message);
                });
            };
            service.ws = ws;
        };

        service.send = function(message) {
            service.ws.send(message);
        };

        service.subscribe = function(concernedScopeId, callback) {
            service.callbacks[concernedScopeId] = callback;
        };

        service.unsubscribe = function(concernedScopeId) {
            delete service.callbacks[concernedScopeId];
        };

        return service;


    });
