<?php
/* Smarty version 3.1.36, created on 2021-01-22 16:02:30
  from 'C:\xampp\htdocs\PHP\1-22try\admindel.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_600a8696788910_76958408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89cb9f78403b1f1ae2017c6808eebd9f159856fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\1-22try\\admindel.html',
      1 => 1611302500,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600a8696788910_76958408 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>後台管理區</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!-- CSS only -->
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'><?php echo '</script'; ?>
>
</head>

<body>
    <!-- 頁首 -->
    <header>
        <div align="center">
            <img class="bear" src="images/小熊維尼.gif" alt="" width="49" height="69">
            <strong class="header">留言版後台</strong>
        </div>

        <table border="0" align="center" cellpadding="4" cellspacing="0" class="table table-success table-striped" style="max-width:1200px;">
            <tr>
                <td>
                    <a href="?logout=true" class="btn btn-success" id="admin" style=" height:45px;line-height:30px;">管理員登出</p>
                </td>
            </tr>
        </table>
    </header>

    <!-- 頁中 -->
    <content>
        <form name="form1" method="post" action="delete.php">
            <table border="0" align="center" class="table table-success table-striped" style="max-width:1200px;" cellpadding="4" cellspacing="0">
                <tr>
                    <td colspan="2" align="center" style="font-size:24px;color:blue;">刪除訪客留言版資料</td>
                </tr>
                <tr valign="top">
                    <td>
                        <p>
                            <strong>姓名</strong>：<?php echo $_smarty_tpl->tpl_vars['boardname']->value;?>
&nbsp;&nbsp;&nbsp;
                            <strong>性別</strong>：<?php echo $_smarty_tpl->tpl_vars['boardsex']->value;?>

                        </p>
                        <p>
                            <strong>標題</strong>：<?php echo $_smarty_tpl->tpl_vars['boardsubject']->value;?>

                        </p>
                        <p>
                            <strong>內容</strong>：<?php echo $_smarty_tpl->tpl_vars['boardcontent']->value;?>

                        </p>
                    </td>
                </tr>
                <tr valign="top">
                    <td align="center">
                        <p>
                            <input name="boardid" type="hidden" id="boardid" value="<?php echo $_smarty_tpl->tpl_vars['boardid']->value;?>
">
                            <input name="action" type="hidden" id="action" value="delete">
                            <input type="submit" name="button" id="button" value="確定刪除資料" class="btn btn-danger">
                            <input type="button" name="button3" id="button3" value="回上一頁" class="btn btn-primary" onClick="window.history.back();">
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </content>

</body>

</html>
<?php }
}
