/**
 * @author 蔡孟珂
 */
$(document).ready(function(){
	
	//宣告變數選項 陣列
	var option=new Array();
	
	option[0]='布';
	option[1]='剪刀';
	option[2]='石頭';
	
	//宣告圖片連結 物件
	var right_hand_url=new Object();
	
	right_hand_url['布']='images/right-bo.jpg';
	right_hand_url['剪刀']='images/right-cut.jpg';
	right_hand_url['石頭']='images/right-stone.jpg';
	
	//亂數取得限定範圍的整數
	function getRandomInt (min, max) {
	    return Math.floor(Math.random() * (max - min + 1)) + min;
	}
	
	/**
	 * 比較
	 * compare(your,computer)
	 * string your 為玩家所選的拳。
	 * string computer 為電腦所選的拳
	 */
	function compare(your,computer){
		//使用 switch 來篩選你的拳
		switch(your){
			//如果為 布
			case "布":
				if(computer=='剪刀'){
					return '輸';
				}else if(computer=='石頭'){
					return '贏';
				}else{
					return '平手';
				}
				break;
			//如果為 剪刀
			case "剪刀":
				if(computer=='剪刀'){
					return '平手';
				}else if(computer=='石頭'){
					return '輸';
				}else{
					return '贏';
				}
				break;
			//如果為 石頭
			case "石頭":
				if(computer=='剪刀'){
					return '贏';
				}else if(computer=='石頭'){
					return '平手';
				}else{
					return '輸';
				}
				break;
			default:
				return '你選的值不再選項中唷！';
		}
	}
	
	
	/*
	 * 當點擊要出的拳的時候
	 */
	$("a.choice").click(function(){
		
		
		//先產生電腦隨機出的拳
		var getIndex = getRandomInt(0,2); //亂數選取0～2的值
		var computer = option[getIndex]; //然後亂數取得 電腦出的拳
		var myChoiceImg = $(this).find("img");
		
		//取得你的拳
		var your = $(this).attr('rel');
		
		//取得挑戰者的名字
		var yourname = $("#name").val();
		
		//檢查是否有輸入挑戰者的名字
		
		if(yourname==''){
			//當你的名字沒有輸入，為空字串的時候，警告沒有輸入名字。
			alert("你必須輸入挑戰者名字唷！");
		}else{
			//開始比較 compare
			var result = compare(your,computer);
			
			//若要儲存每次的猜拳結果，再把資料丟給php檔做資料庫存檔
			// 給資料庫的存檔方式
			// 寫在這兒
			//
			
			//顯示比較結果
			$("div.result").text(yourname+'，你出「'+your+'」結果為「'+result+'」');
			
			//顯示電腦的出拳
			$("img.computerResult").attr('src',right_hand_url[computer]);
			
			//顯示我選的拳
			$("div.myAns").html("<img src='" + myChoiceImg.attr("src") + "'>");
		}
		
	});
	
	
	/**
	 * 重新設定電腦的手
	 */
	$("button#resetComputerHand").click(function(){
		//將圖片換gif
		$("img.computerResult").attr('src','images/right-hand.gif');
		
		//清除結果中的文字
		$("div.result").text('');
		//清除我選的圖
		$("div.myAns").html('');
	});
	
	
});
