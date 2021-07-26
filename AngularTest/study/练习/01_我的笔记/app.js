var myModule = angular.module('noteApp', []);
myModule.controller('NoteController', function($scope){
    $scope.areastyle = {
        border: '2px solid #ccc',
    }

    $scope.message = '';
    $scope.getLength = function(){
        // 判断用户输入的内容有没有大于100
        if($scope.message.length<=100) {
            return 100 - $scope.message.length;
        } else {
            $scope.message = $scope.message.slice(0,100);
            return 0;
        }
    }

    // 保存数据到sessionStorage
    $scope.save = function(){
        sessionStorage.setItem('message',JSON.stringify($scope.message));// 将数据转化为json字符串
        $scope.message='';
        window.alert('保存成功');
    }

    // 从sessionStorage中读取数据
    $scope.read = function(){
        // 处理直接点击的情况，解析{}返回对象，[]返回null
        $scope.message = JSON.parse(sessionStorage.getItem('message') || '[]');
    }

    // 从sessionStorage中删除数据
    $scope.remove = function(){
        $scope.message = '';
        sessionStorage.removeItem('message');
        alert('清除成功');
    }
})
