/**
 * TGBSBOILER Main Controller
 * @return {object} Main Controller
 */
(function () {
    'use strict';

    angular
        .module('tgbsboiler', [])
        .controller('Main', Main);

    Main.$inject = ['$location'];

    function Main($location) {
        /*jshint validthis: true */
        var vm = this;

        vm.title = null;
        vm.version = 'v.1.0';
        
        getTitle();

        function getTitle() {
           return vm.title = 'TBGSBOILER';
        }
    }

})();