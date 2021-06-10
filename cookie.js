var Cookie = {
    set: function(key, value, days){
        // 判断是否设置days
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+days*24*3600*1000); // 格式化时间
            var expireStr = "expires="+date.toGMTString()+";";
        } else {
            var expireStr = '';
        }
        document.cookie = key+"="+value+";"+expireStr;
    },
    get: function(key){
        var getCookie = document.cookie.replace(/[ ]/g, "");
        var resArr = getCookie.split(";");
        var res;
        for(var i=0; i<resArr.length; i++) {
            var arr = resArr[i].split("=");
            if(arr[0] == key) {
                res = arr[1];
                break;
            }
        }
        return unescape(res);
    }
};