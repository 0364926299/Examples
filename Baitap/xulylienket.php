<?php
    if(!empty($_GET)){
        $al = $_GET['al'];
    }
?>
<HTML>
<HEAD>
<TITLE>::Welcome to PHP</TITLE>

</HEAD>
<BODY>

<table border="1">
<?php if(isset($al))
{
?>

<tr><td>Select:<?=$al?></td></tr>
<?php
}
?>
</table>
</BODY>
</HTML>