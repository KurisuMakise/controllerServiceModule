var moduleMath = angular.module('Math');
moduleMath.service('CalculService',function () {
    this.add = function (arg1,arg2) {
        return arg1 + arg2;
    }
})