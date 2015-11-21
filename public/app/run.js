/**
 * Created by edgar on 18/11/15.
 */
'use strict';

angular.module('pedidosApp', ['ngWebsocket'])


    .run(function ($websocket, $rootScope) {
        $rootScope.ws = $websocket.$new({
            url: 'ws://localhost:3000',
            mock: false,
            reconnect: true // it will reconnect after 2 seconds
        }); // instance of ngWebsocket, handled by $websocket service

        $rootScope.ws.$on('$open', function () {
            console.log('Oh my gosh, websocket is really open! Fukken awesome!');
        });

        $rootScope.ws.$on('pong', function (data) {
            console.log('The websocket server has sent the following data:');
            console.log(data);
            console.log('Run.js');
            $rootScope.ws.$close();
        });

        $rootScope.ws.$on('$close', function () {
            console.log('Noooooooooou, I want to have more fun with ngWebsocket, damn it!');
        });
    });