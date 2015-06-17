<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Public/css/index.css" media="all" type="text/css">
    <title>注册</title>
    <!--<script src="../Public/js/jquery-easyui-1.4.2/jquery.min.js"></script>-->
    <script src="../Public/js/register.js"></script>
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="../Public/js/jquery-easyui-1.4.2/demo/demo.css">
    <link rel="stylesheet" href="../Public/css/css.css" media="all">
    <link href="../Public/css/register.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="quanbu">
    <div>
    <img src="../Public/images/travelsm.png" class="travelsm">
    <img src="../Public/images/personal.png"class="personal">
    <img src="../Public/images/travel.png" class="travel" >
    <img src="../Public/images/makeplan.png" class="makeplan">
    <img src="../Public/images/index.png"class="index">
    <img src="../Public/images/yuan.png"class="yuan">
    <img src="../Public/images/travelbook.png"class="travelbook">
    <img src="../Public/images/xuanchuan.png"class="xuanchuan">
    <img src="../Public/images/phone.png"class="phone">
    <img src="../Public/images/register.png"class="register">
    </div>
    <div ><a href="javascript:;"class=" btn-large theme-login"><img src="../Public/images/login.png"class="login"></a>
    </div>

    <div class="container">
        <img src="../Public/images/register/menberregister.png"><br>
        <p style="font-size: 20px;color: darkgray">欢迎您注册游迹旅游网</p><br>
        <div class="mainbox">
            <img src="../Public/images/register/word_1.png">
            <div class="theme-popbod dform">
                <form class="theme-signin" name="form" action="#" method="post">
                    <ol>
                        <li><strong>用户名：</strong><label><input class="ipt" type="text" name="log" size="20" required></label></li>
                        <li><strong>密码：</strong><label><input class="ipt" type="password" name="pwd" size="20" id="password" required></label></li>
                        <li><strong>确认密码：</strong><label><input class="ipt" type="password" name="confirm" size="20" id="confpassword" required></label></li>
                        <li><strong>邮箱：</strong><label><input class="ipt" type="email" name="log" size="20" required></label></li>
                        <li><strong>验证码：</strong><label><input class="ipt" type="text" name="log" size="20" style="width: 20%" required>&nbsp;<img src="<?php echo U('Index/loginVerify/identify');?>" id="code"/><a href="javascript:void(change_code(this));">看不清</a></label></li><br/><br/>
                    </ol>
                    <script>
                        var verifyURL = "<?php echo U('Index/loginVerify/identify','','');?>";
                        function change_code(){
                            document.getElementById("code").setAttribute("src",verifyURL +'/' + Math.random());
                            return false;
                        }
                    </script>
                    <label style="padding-left: 70px"><input type="checkbox" value="">愿意接受免费的旅游咨询<br/></label><br/>
                    <label style="padding-left: 70px"><input type="checkbox" value="" required>我已阅读并接受了<a href="">注册协议</a></label><br/><br/>
                    <input class="btn btn-primary" type="submit" name="submit" value=" 提 交 注 册 " style="left: 70px" onclick="isEnterLegal()">
                </form>
                <script type="text/javascript">
                    function isEnterLegal(){
                        var password,confpassword;
                        password = document.getElementById("password").value;
                        confpassword = document.getElementById("confpassword").value;
                        if(password != confpassword){
                            alert("请确认两次密码输入一致");
                            return false;
                        }
                    }
                </script>
            </div>
        </div>
    </div>

    <div>
    <div class="bottom"></div>
    <div class="bottomsm"><span class="bottombiao">旅游超市</span><div class="bottomxuanxiang">住<br>吃货</div></div>
    <div class="bottompersonal"><span class="bottombiao">会员中心</span><div class="bottomxuanxiang1">我的订单<br>我的奖励<br>我的积分<br>我的评价<br>我的信息<br>我的储钱罐旅行计划</span><br>找朋友</div> </div>
    <div class="bottombook"><span class="bottombiao">旅游志</span><div class="bottomxuanxiang">旅游随感<br>写给未来的信</div></div>
    <div class="weishenme"><span class="bottombiao">主题旅游</span><div class="bottomxuanxiang">城市之间<br>学子游<br>年休假<br>美食游</div></div>
    <div class="bottomaboutus"><span class="bottombiao">关于游记</span><div class="bottomxuanxiang">关于我们<br>联系我们<br>一起合作<br>用户协议<br>诚聘英才</div></div>
    </div>

    <img src="../Public/images/steptu.png" class="steptu">
    <img src="../Public/images/banquan.png" class="banquan">
    <img src="../Public/images/renzhengwang.png" class="renzhengwang">
    <img src="../Public/images/kexin.png" class="kexin">
    <img src="../Public/images/chengxin.png" class="chengxin">
</div>

<div class="theme-popover">
    <div class="theme-poptit">
        <a href="javascript:;" title="关闭" class="close">×</a>
        <h3>旅行是一种生活</h3>
    </div>
    <div class="theme-popbod dform">
        <form class="theme-signin" name="loginform" action="" method="post">
            <ol>
                <li><h4>请登录</h4></li>
                <li><strong>用户名：</strong><input class="ipt" type="text" name="log" value="jq22" size="20" /></li>
                <li><strong>密码：</strong><input class="ipt" type="password" name="pwd" value="***" size="20" /></li>
                <li><input class="btn btn-primary" type="submit" name="submit" value=" 登 录 " /></li>
            </ol>
        </form>
    </div>
</div>
<div class="theme-popover-mask"></div>
</body>
</html>