var myModule = angular.module('myApp', []);
myModule
    .controller('myCtrl', function($scope){
        $scope.eat = true;
        $scope.todos = [
            {name: '吃饭', checked: false},
            {name: '睡觉', checked: false},
            {name: '打豆豆', checked: false},
        ]
    })