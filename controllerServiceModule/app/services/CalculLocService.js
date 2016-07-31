var moduleMathLoc = angular.module('MathLoc');
moduleMathLoc.service('CalculLocService',function () {
    this.mult = function (arg1,arg2) {
        return arg1 * arg2;
    }
})