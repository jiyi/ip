<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="css/main.css" type="text/css" rel="stylesheet" />

    <title>登录</title>
  </head>

  <body>
    <table width="100%" id="buju">
      <tr>
        <td align="center" valign="middle">
          <table width="647" height="317" border="0" style="background-image:url(images/login_pic.gif)">
            <tr>
              <td width="369" height="187">&nbsp;</td>
              <td width="268">&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>

                <form id="form1" name="form1" method="post" action="login_check.php?action=login" onSubmit="return check()" >
                  <table width="237" border="0" align="center" cellpadding="0" cellspacing="0" >
                    <tr>
                      <td width="59" height="25" align="right">用户名：</td>
                      <td width="178" height="25"><input type="text" name="user_name" id="user_name" /></td>
                    </tr>
                    <tr>
                      <td height="25" align="right">密　码：</td>
                      <td height="25"><input type="password" name="pwd" id="pwd" /></td>
                    </tr>
                  </table>
                  <table width="117" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="50" height="25" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
                      <td width="50" height="25" align="right"><input type="reset" name="button2" id="button2" value="重置" /></td>
                    </tr>
                  </table>
                </form>

              </td>
            </tr>
          </table>

        </td>
      </tr>
    </table>
  </body>
</html>
<script>
 window.onload = function() {
     document.form1.elements['user_name'].focus();
 }
 function charLength(str) {
     if ( str == null || str ==  "" ) 
         return 0;
     var totalCount = 0;
     for (i = 0; i< str.length; i++) {
         if (str.charCodeAt(i) > 127) 
             totalCount += 2;
         else
             totalCount++ ;
     }
     return totalCount;
 }
 function check() {
     var frm = document.form1;
     if (frm.elements["user_name"].value =="") {
         alert("请输入用户登录名");
         frm.elements["user_name"].focus();
         return false;
     }
     if (frm.elements["pwd"].value =="") {
         alert("请输入密码");
         frm.elements["pwd"].focus();
         return false;
     }
     if (frm.elements["pwd"].value.length < 6 ||frm.elements["pwd"].value.length > 20) {
         alert("密码长度请在6--20位之间");
         frm.elements["pwd"].focus();
         return false;
     }
     frm.elements["user_name"].value = trim(frm.elements["user_name"].value);
     frm.elements["pwd"].value = trim(frm.elements["pwd"].value);
     return true;
 }
 //增加用户名去左右空格函数
 function trim(string) {
     return string.replace(/(^\s*)|(\s*$)/g, "");
 }
</script>
