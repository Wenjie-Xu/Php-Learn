var myModule = angular.module('myApp', []);
myModule
<<<<<<< HEAD
    .controller('myCtrl', function($scope){
        $scope.eat = true;
        $scope.todos = [
            {name: '吃饭', checked: false},
            {name: '睡觉', checked: false},
            {name: '打豆豆', checked: false},
        ]
=======
    .controller('myCtrl', function ($scope) {
        $scope.eat = true;
        $scope.todos = [
            { name: '吃饭', checked: false },
            { name: '睡觉', checked: false },
            { name: '打豆豆', checked: false },
        ]

        // 构建对象后添加
        $scope.add = function () {
            if ($scope.todo) {
                var todo = {
                    name: $scope.todo, checked: false
                }
                $scope.todos.unshift(todo);
                $scope.todo = '';
            } else {
                alert("不允许为空");
                return;
            }
        }

        // 用未勾选的项目替换原有的数据
        $scope.del = function () {
            var newtodos = [];
            $scope.todos.forEach(function(item, index){
                if(! item.checked) {
                    newtodos.push(item)
                }
            })
            
            if(newtodos.length < $scope.todos.length) {
                $scope.todos = newtodos;
            } else {
                alert("未选中任何项");
            }
        }
>>>>>>> e6558115d218a0bdf2c480ee50d023ea5e5d7de0
    })