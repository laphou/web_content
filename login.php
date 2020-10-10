<!DOCTYPE html>
<html>
<head>
    <title>駿智樂賽馬程式</title>
    <meta name="content-type"; charset="UTF-8">
	<style>
		body
		{
			margin: 0;
			padding: 0;
			background-image: url("hourse_bg.jpg");	/* 背景图片 */
			background-repeat: no-repeat;	/* 背景图片不重复 */
			background-size:cover
		}
		#bigBox
		{
			margin: 0 auto;	/* login框剧中 */
			margin-top: 170px; /* login框与顶部的距离 */
			padding: 20px 50px;	/* login框内部的距离(内部与输入框和按钮的距离) */
			background-color: #00000090;	/* login框背景颜色和透明度 */
			width: 400px;
			height: 300px;
			border-radius: 10px;	/* 圆角边 */
			text-align: center;	/* 框内所有内容剧中 */
		}
		#bigBox h1
		{
			color: white;	/* LOGIN字体颜色 */
			font-family: "Comic Sans MS";
		}
		#bigBox .inputBox
		{
			margin-top: 20px;	/* 输入框顶部与LOGIN标题的间距 */
		}
		#bigBox .inputBox .inputText
		{
			margin-top: 20px;	/* 输入框之间的距离 */
		}
		#bigBox .inputBox .inputText input
		{
			border: 0;	/* 删除输入框边框 */
			padding: 10px 10px;	/* 输入框内的间距 */
			border-bottom: 1px solid white;	/* 输入框白色下划线 */
			background-color: #00000000;	/* 输入框透明 */
			color: white;	/* 输入字体的颜色 */
		}
		#bigBox .loginButton
		{

			margin-right: 30px;
			margin-top: 40px;	/* 按钮顶部与输入框的距离 */
			width: 100px;
			height: 25px;
			color: white;	/* 按钮字体颜色 */
			border: 0; /* 删除按钮边框 */
			border-radius: 20px;	/* 按钮圆角边 */
			background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #6060f0 0%, #6569db 33%, #3b2adb 66%, #3b2adb 100%);	/* 按钮颜色 */
		}
		.m-left{
			margin-left: 30px;

		}
		.register{
			position: absolute;
			margin-bottom: 1000px;
			right: 50px;
			color: #ffffff;
			/*left:  calc(5% - 200px);*/
			margin-right:800px;
			/*bottom: 240px;*/
			font-size: 13px;
		}
		.fgtpwd{
			position: absolute;
			margin-bottom: 1000px;
			right: 10px;
			color: #ffffff;
			/*left:  calc(5% - 200px);*/
			margin-right:666px;
			/*bottom: 240px;*/
			font-size: 13px;
		}
    </style>
</head>
<body>
<div id="bigBox">
        <h1>請先登入</h1>

        <form id="loginform" action="loginaction.php" method="post">
            <div class="inputBox">

                    <div class="inputText">
                        <input type="text" id="name" name="username" placeholder="用戶名稱" value="">
                    </div>
                <div class="inputText">
                   <input type="password" id="password" name="password" placeholder="密碼">
                </div>
                <br >
                <div style="color: white;font-size: 12px" >
                    <?php
                    $err = isset($_GET["err"]) ? $_GET["err"] : "";
                    switch ($err) {
                        case 1:
                            echo "用戶名或密碼錯誤！";
                            break;

                        case 2:
                            echo "用戶名或密碼不能為空！";
                            break;
                    } ?>
                </div>
            </div>
           <div>
               <input type="submit" id="login" name="login" value="登入" class="loginButton m-left">
			   <a href="register.php">
					<input type="button" id="reset" name="reset" value="註冊帳號" class="loginButton">
			   </a>
           </div>
</div>
</div>
</form>
</body>
</html>