/**
 * Created by Administrator on 2017/3/20.
 */
var login= {
    /**
     * 前端登陆业务类
     */
    check: function () {
        //获取登陆页面的用户名和密码
        var username = document.getElementById("login_username").value;
        var password = document.getElementById("login_password").value;
        if(username==""||password==""){
            return dialog.tishi("账号或者密码不能为空！",2)
        }
        var url = "/wheden/index.php/Admin/login/check";
        var data = {"username": username, "password": password};
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                 setTimeout(function () {
                 layer.close(ii);
                     return dialog.tishi(result.message,1);
                 }, 1000);

            }
            if (result.code == 1) {
                var url="/wheden/index.php/Admin/index/index";
                return dialog.jiazai(url,3);

                // return dialog.success(result.message,"/wheden/index.php/Admin/index/index")
            }
        }, "JSON");
    },
    /**
     * 注册功能
     * @returns {*}
     */
    zhuce: function () {
        //获取登陆页面的用户名和密码\
        var username = document.getElementById("register_username").value;
        var password = document.getElementById("register_password").value;
        var password1 = document.getElementById("register_password1").value;
        var mail = $('input[name="mail"]').val();
        var numb = $('input[name="numb"]').val();
        var data = {
            "username": username,
            "password1": password,
            "password2": password1,
            "mail": mail,
            "numb": numb,
        };
        if (username == "") {
            return dialog.tishi("请输入账号！",2);
        }
        if (password == "") {
            return dialog.tishi("请输入密码！",2);
        }
        if (password1 == "") {
            return dialog.tishi("请再次输入密码！",2);
        }
        if (password != password1) {
            return dialog.tishi("两次密码不一致",2);
        }
        if (!$("input[type='checkbox']").is(':checked')) {
            return dialog.tishi("请同意我的协议！",2);
        }

        var url = "/wheden/index.php/Admin/login/register";
        $.post(url, data, function (result) {
            if (result.code == 0) {
                var ii = layer.load();
                setTimeout(function () {
                    layer.close(ii);
                    return dialog.tishi(result.message,4);
                }, 1000);

            }
            if (result.code == 1) {
                var ii = layer.load();
                setTimeout(function () {
                    return dialog.success(result.message, "/wheden/index.php/Admin/index/index");
                    layer.close(ii);
                }, 1000);

            }
        }, "JSON");
    },
    /**
     * 忘记密码 用邮件找回
     */
    forget: function () {
        var mail = document.getElementById("forget_mail").value;
        var url = "/wheden/index.php/admin/login/forget";
        var data = {'mail': mail};
        if (mail == "") {
            return dialog.tishi("请输入注册邮箱！", 2);
        }
        else {
            var reg = /^([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/gi;
            if (!reg.test(mail)) {
                return dialog.tishi("邮箱格式不正确！", 2);
            }
        }
//截取@~.之间的字符串 做判断  转什么邮箱。
        var yx=mail.substring(mail.indexOf("@")+1,mail.indexOf("."));
        var url1="http://mail."+yx+".com";
        var url2="/wheden/index.php/Admin/login/login1";
        $.post(url, data, function (result) {

                if (result.code == 1) {
                    var ii = layer.load();
                    setTimeout(function () {
                        layer.close(ii);
                        return dialog.tishi2(result.message,url1,url2);

                    }, 1000);
                }
                if (result.code == 0) {
                    var ii = layer.load();
                    setTimeout(function () {
                        layer.close(ii);
                        return dialog.tishi(result.message,2)

                    }, 1000);
                }
        }, "JSON");

    },
    /*var ii = layer.load();
    setTimeout(function () {
    layer.close(ii);
    }, 1000);*/
    xiugaipass:function (){

}
}
