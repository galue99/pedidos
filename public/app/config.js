/**
 * Created by edgar on 19/11/15.
 */
angular.module('pedidosApp', ['ws'])
    .config(function (wsProvider) {
        wsProvider.setUrl('ws://localhost:3000');
    })