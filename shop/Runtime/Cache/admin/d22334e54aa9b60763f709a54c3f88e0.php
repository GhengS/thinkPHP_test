<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台品字形框架搭建</title>
</head>
<!-- 为什么frameset爆红,还有frameset的右边没有了 -->
<!-- <frameset border="0" framespacing="0" rows="60,*" frameborder="0">
    <frame name="head" src="./head.html" frameborder="0" noresize scrolling="no">
        <frameset col="50%,50%">
            <frame name="left" src="./left.html"/>
            <frame name="right" src="./right.html"/>
        </frameset>
</frameset>
<noframes>
</noframes> -->
<frameset rows="59,*" cols="*" frameborder="no" border="0" framespacing="0">
		<frame src="./head.html" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" />
		<frameset cols="213,*" frameborder="no" border="0" framespacing="0">
			<frame src="./left.html" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" />
			<frame src="./right.html" name="mainFrame" id="mainFrame" />
		</frameset>
	</frameset>
</html>