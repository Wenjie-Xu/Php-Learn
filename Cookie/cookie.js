var Cookie = {
    set : function(key, value, days) {
        if(days){
            var date = new Date();
            date.setTime(date.getTime()+days*24*3600*1000);
            var dateStr = "; expires="+date.toGMTString()+";";
        }else {
            var dateStr = "";
        }
        document.cookie = key + "=" + value + dateStr;
    },
    get : function(key) {
        var cookie = document.cookie.replace(/[ ]/g, '');
        var keyArr = cookie.split(";");
        var res;
        for(var i = 0; i<keyArr.length; i++) {
            var valueArr = keyArr[i].split("=");
            if(valueArr[0] == key) {
               res = valueArr[1];
               break;
            }
        }
        return res;
    }
}