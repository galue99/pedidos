/**
 * Created by edgar on 18/11/15.
 */

'use strict';

angular.module('pedidosApp', ['ngResource', 'ws'])
    .config(function ($interpolateProvider) {

        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');


    });