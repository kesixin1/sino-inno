<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="lib/html5.js"></script>
        <script type="text/javascript" src="lib/respond.min.js"></script>
        <script type="text/javascript" src="lib/PIE_IE678.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_HUI_ICONFONT_CSS_URL); ?>iconfont.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_ICHECK_CSS_URL); ?>icheck.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL); ?>skin.css" id="skin" />
        <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>style.css" />
        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <!--/meta 作为公共模版分离出去-->

        <title>中创产业研究院后台 - 修改密码</title>
    </head>
    <body>
        <article class="page-container">
            <form action="" method="post" class="form form-horizontal" id="form-change-password">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>账户：</label>
                    <div class="formControls col-xs-8 col-sm-9"> <?php echo ($arrUser["adminusername"]); ?> </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>新密码：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword" id="newpassword">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>确认密码：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="password" class="input-text" autocomplete="off" placeholder="不修改请留空" name="newpassword2" id="new-password2">
                    </div>
                </div>
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;保存&nbsp;&nbsp;">
                    </div>
                </div>
            </form>
        </article>

        <!--_footer 作为公共模版分离出去-->
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_ICHECK_JS_URL); ?>jquery.icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>jquery.validate.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>validate-methods.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>messages_zh.min.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
        <!--/_footer /作为公共模版分离出去-->

        <!--请在下方写此页面业务相关的脚本-->
        <script type="text/javascript">
            $(function () {
                $("#form-change-password").validate({
                    rules: {
                        newpassword: {
                            required: true,
                            minlength: 6,
                            maxlength: 16
                        },
                        newpassword2: {
                            required: true,
                            minlength: 6,
                            maxlength: 16,
                            equalTo: "#newpassword"
                        }
                    },
                    onkeyup: false,
                    focusCleanup: true,
                    success: "valid",
                    submitHandler: function (form) {
                        var password = $('#newpassword').val();
                        var data = {password: password};
                        $.post('/index.php/Admin/Users/changePassword', data, function (ret) {
                            var json = JSON.parse(ret);
                            if (json.result == 'true') {
                                layer.msg('修改成功!', {icon: 1, time: 1000},function(){
                                    var index = parent.layer.getFrameIndex(window.name);
                                    parent.layer.close(index);
                                });
                                

                            } else {
                                layer.msg('修改失败!', {icon: 1, time: 1000});
                            }

                        }, 'json');
                    }
                });
            });
        
        </script>
        <!--/请在上方写此页面业务相关的脚本-->
    </body>
</html>