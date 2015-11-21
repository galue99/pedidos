/**
 * Created by edgar on 15/11/15.
 */
'use strict';

angular.module('pedidosApp')
    .controller('PedidoController', function ($log, $scope, $rootScope, ws) {

        $scope.friends = [
            {name:'John', age:25, gender:'boy'},
            {name:'Jessie', age:30, gender:'girl'},
            {name:'Johanna', age:28, gender:'girl'},
            {name:'Joy', age:15, gender:'girl'},
            {name:'Mary', age:28, gender:'girl'},
            {name:'Peter', age:95, gender:'boy'},
            {name:'Sebastian', age:50, gender:'boy'},
            {name:'Erika', age:27, gender:'girl'},
            {name:'Patrick', age:40, gender:'boy'},
            {name:'Samantha', age:60, gender:'girl'}
        ];

        /*$rootScope.ws.$on('$open', function () {
            var data = {
                level: 1,
                text: 'ngWebsocket rocks!',
                array: ['one', 'two', 'three'],
                nested: {
                    level: 2,
                    deeper: [{
                        hell: 'yeah'
                    }, {
                        so: 'good'
                    }]
                }
            };
            $rootScope.ws.$emit('pong', data);
        });*/

        ws.on('message', function (event) {
            $log.info('New message', event.data);
        });
        ws.send('custom message');
    });