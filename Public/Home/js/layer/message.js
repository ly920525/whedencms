/**
 * Created by Administrator on 2017/3/20.
 */
var message= {
    /**
     * 留言板业务类
     */
    liuyan: function () {
        //获取登陆页面的用户名和密码\
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var content = document.getElementById("content").value;
        var data = {
            "name": name,
            "phone": phone,
            "content": content,
        };
        if (name == "") {
            return dialog.tishi("请输入您的姓名！",2);
        }
        var reg = /^[\u4E00-\u9FA5]{2,4}$/;

        if(!reg.test(name)){
            return dialog.tishi("请输入您的真实姓名！",2);
        }
        if (phone == "") {
            return dialog.tishi("请输入您的联系方式！",2);
        }
        var myreg = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1}))+\d{8})$/;
        if(!myreg.test(phone))
        {
            return dialog.tishi("请输入正确的手机号,以方便我们和你取得联系！",2);
        }

        if (content == "") {
            return dialog.tishi("请输入您的留言内容！",2);
        }
        var url = "/whedencms/index.php/Home/Contact/message";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message,2);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load(2);
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message,3);
                }, 1000);
            }
        }, "JSON");
    }
};
