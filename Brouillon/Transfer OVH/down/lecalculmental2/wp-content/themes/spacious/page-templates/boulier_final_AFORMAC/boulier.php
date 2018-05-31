<?php
/*
Template Name: spacious
*/
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head><title>Boulier Virtuel</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="Boulier Virtuel">
<meta name="keywords" content="Boulier Virtuel">
<meta name="robots" content="index,follow">
<!--<link rel="shortcut icon" href="/img/favicon.ico">-->
<link href="css/cfdv2.css?<?php echo time();?>" rel="stylesheet" type="text/css">
<link href="css/cfdv_responsive.css?<?php echo time();?>" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<h1>Boulier didactique</h1>
	<div class="btn b7">Nombres Entiers</div>
	<div class="btn b13">Nombres Décimaux</div>
	<div class="btn restart">Recommencer</div>
	<h3 class="btn nbr">Valeur</h3>
	<div class="result btn" style="opacity:0">0</div>
	<div class="boulier">
		<div class="boulier_top">
			<span id="btl9" class="bl inlineblock" data-val="5000000000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl8" class="bl inlineblock" data-val="500000000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl7" class="bl inlineblock" data-val="50000000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl6" class="bl inlineblock" data-val="5000000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl5" class="bl inlineblock" data-val="500000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl4" class="bl inlineblock" data-val="50000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl3" class="bl inlineblock" data-val="5000">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl2" class="bl inlineblock" data-val="500">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl1" class="bl inlineblock" data-val="50">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btl0" class="bl inlineblock" data-val="5">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btr1" class="bl inlineblock" data-val="0.5">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btr2" class="bl inlineblock" data-val="0.05">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
			<span id="btr3" class="bl inlineblock" data-val="0.005">
				<span id="bt1" class="clearbothcenter"></span>
				<span id="bt2" class="clearbothcenter"></span>
			</span>
		</div>
		<div class="middle"></div>
		<div class="boulier_bottom">
			<span id="bbl9" class="bl inlineblock" data-val="1000000000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl8" class="bl inlineblock" data-val="100000000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl7" class="bl inlineblock" data-val="10000000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl6" class="bl inlineblock" data-val="1000000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl5" class="bl inlineblock" data-val="100000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl4" class="bl inlineblock" data-val="10000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl3" class="bl inlineblock" data-val="1000">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl2" class="bl inlineblock" data-val="100">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbl1" class="bl inlineblock" data-val="10">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bb0" class="bl inlineblock" data-val="1">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbr1" class="bl inlineblock" data-val="0.1">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbr2" class="bl inlineblock" data-val="0.01">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
			<span id="bbr3" class="bl inlineblock" data-val="0.001">
				<span id="bb1" class="clearbothcenter"></span>
				<span id="bb2" class="clearbothcenter"></span>
				<span id="bb3" class="clearbothcenter"></span>
				<span id="bb4" class="clearbothcenter"></span>
				<span id="bb5" class="clearbothcenter"></span>
			</span>
		</div>
	</div>
	<script type="text/javascript" language="javascript">
		result=Number("0");
		$(window).resize(function(){
			$(".bl>span").each(function(){
				/* var pos=$(this).position().top;
				var hasClass=$(this).hasClass("active");
				var val=$(this).parent().data("val");
				var index=$(this).index();
				var parentHeight=$(this).parent().height();
				$(this).attr("data-initial",pos);
				if($(this).parent().parent().hasClass("boulier_bottom")){
					var newpos=(index * $(this).height()) +10;
				}else{
					var newpos=parentHeight - (index * $(this).height()) - 33;
				}
				if(!hasClass){
					$(this).animate({'top':newpos+'px'},100).addClass("active");
				} */
				/* var pos=$(this).position().top;
				$(this).attr("data-initial",pos);
				$(this).removeClass("active").animate({'top':pos+"px"},1).addClass("bl_abs");
				result=0;
				$(".result").text(result); */

			});
			document.location.href=window.location;
		});
		function roundNumber(number, decimals) {
			var newnumber = new Number(number+'').toFixed(parseInt(decimals));
			return parseFloat(newnumber);
		}
		$(document).ready(function(){
			$("#bbr1,#bbr2,#bbr3,#btr1,#btr2,#btr3,#btl9,#btl8,#btl7,#bbl9,#bbl8,#bbl7").hide(1);
			$(".bl>span").each(function(){
				var pos=$(this).position().top;
				$(this).attr("data-initial",pos);
				$(this).animate({'top':pos+"px"},1).addClass("bl_abs");
			});
			$(".restart").click(function(){
				document.location.href=window.location;
			});
			$(".b7").click(function(){
				$("#bbr1,#bbr2,#bbr3,#btr1,#btr2,#btr3,#btl9,#btl8,#btl7,#bbl9,#bbl8,#bbl7").hide(50);
				$(".result").text(0);
			});
			$(".b13").click(function(){
				$("#bbr1,#bbr2,#bbr3,#btr1,#btr2,#btr3,#btl9,#btl8,#btl7,#bbl9,#bbl8,#bbl7").show(50);
				$(".result").text(0);
			});
			$(".nbr").click(function(){
				$(".result").animate({"opacity":1},150);
			});
			$(".bl>span").click(function(){
				var hasClass=$(this).hasClass("active");
				var val=Number($(this).parent().data("val"));
				var index=$(this).index();
				var pos=$(this).position().top;
				var parentHeight=$(this).parent().height();


				if(hasClass==true){
					var parentID=$(this).parent().attr("id");
					$(".bl>span").each(function(){
						var otherparentID=$(this).parent().attr("id");
						var otherindex=$(this).index();
						var otherval=Number($(this).parent().data("val"));
						var otherhasClass=$(this).hasClass("active");
						var resindex=parseInt(otherindex) - parseInt(index);
						if(parseInt(otherindex)>parseInt(index) && otherhasClass && parentID==otherparentID){
							$(this).animate({'top':$(this).data("initial")+"px"},50).removeClass("active");

							if($(this).attr("id")=="btr1"){
								result=roundNumber(Number(result) - Number("0.5"), 3);
							}else if($(this).attr("id")=="btr2"){
								result=roundNumber(Number(result) - Number("0.05"), 3);
							}else if($(this).attr("id")=="btr3"){
								result=roundNumber(Number(result) - Number("0.005"), 3);
							}else if($(this).attr("id")=="bbr1"){
								result=roundNumber(Number(result) - Number("0.1"), 3);
							}else if($(this).attr("id")=="bbr2"){
								result=roundNumber(Number(result) - Number("0.01"), 3);
							}else if($(this).attr("id")=="bbr3"){
								result= roundNumber(Number(result) - Number("0.001"), 3);
							}else{
								result=roundNumber(Number(result) - otherval, 3);
							}
						}
					});
					$(this).animate({'top':$(this).data("initial")+"px"},100).removeClass("active");
					if($(this).attr("id")=="btr1"){
						result=roundNumber(Number(result) - Number("0.5"), 3);
					}else if($(this).attr("id")=="btr2"){
						result=roundNumber(Number(result) - Number("0.05"), 3);
					}else if($(this).attr("id")=="btr3"){
						result=roundNumber(Number(result) - Number("0.005"), 3);
					}else if($(this).attr("id")=="bbr1"){
						result=roundNumber(Number(result) - Number("0.1"), 3);
					}else if($(this).attr("id")=="bbr2"){
						result=roundNumber(Number(result) - Number("0.01"), 3);
					}else if($(this).attr("id")=="bbr3"){
						result= roundNumber(Number(result) - Number("0.001"), 3);
					}else{
						result=roundNumber(Number(result) - val, 3);
					}

				}else{
					if($(this).parent().parent().hasClass("boulier_bottom")){
						var newpos=(index * $(this).height()) +10;
					}else{
						var newpos=parentHeight - (index * $(this).height()) - 33;
					}
					var parentID=$(this).parent().attr("id");
					$(".bl>span").each(function(){
						var otherparentID=$(this).parent().attr("id");
						var otherindex=$(this).index();
						var otherval=Number($(this).parent().data("val"));
						var otherhasClass=$(this).hasClass("active");
						var resindex=parseInt(otherindex) - parseInt(index);
						if($(this).parent().parent().hasClass("boulier_bottom")){
							var othernewpos=(otherindex * $(this).height()) +10;
						}else{
							var othernewpos=parentHeight - (otherindex * $(this).height()) - 33;
						}
						if(parseInt(otherindex)<parseInt(index) && !otherhasClass && parentID==otherparentID){
							$(this).animate({'top':othernewpos+"px"},50).addClass("active");
							if($(this).attr("id")=="btr1"){
								result=roundNumber(Number(result) + Number("0.5"), 3);
							}else if($(this).attr("id")=="btr2"){
								result=roundNumber(Number(result) + Number("0.05"), 3);
							}else if($(this).attr("id")=="btr3"){
								result=roundNumber(Number(result) + Number("0.005"), 3);
							}else if($(this).attr("id")=="bbr1"){
								result=roundNumber(Number(result) + Number("0.1"), 3);
							}else if($(this).attr("id")=="bbr2"){
								result=roundNumber(Number(result) + Number("0.01"), 3);
							}else if($(this).attr("id")=="bbr3"){
								result= roundNumber(Number(result) +Number("0.001"), 3);
							}else{
								result=roundNumber(Number(result) + otherval, 3);
							}
						}
					});
					$(this).animate({'top':newpos+'px'},100).addClass("active");
					if($(this).attr("id")=="btr1"){
						result=roundNumber(Number(result) + Number("0.5"), 3);
					}else if($(this).attr("id")=="btr2"){
						result=roundNumber(Number(result) + Number("0.05"), 3);
					}else if($(this).attr("id")=="btr3"){
						result=roundNumber(Number(result) + Number("0.005"), 3);
					}else if($(this).attr("id")=="bbr1"){
						result=roundNumber(Number(result) + Number("0.1"), 3);
					}else if($(this).attr("id")=="bbr2"){
						result=roundNumber(Number(result) + Number("0.01"), 3);
					}else if($(this).attr("id")=="bbr3"){
						result= roundNumber(Number(result) +Number("0.001"), 3);
					}else{
						result=roundNumber(Number(result) + val, 3);
					}
				}
				console.log(new Intl.NumberFormat().format(result));
				var res = new Intl.NumberFormat().format(result);
				$(".result").text(res);
			})
		})
	</script>
</body>
</html>
