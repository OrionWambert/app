<!DOCTYPE html>
<html>
<head>
	<title>LES CASES DE LA CHANCE</title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<style type="text/css">
		body{
			background: #eee url(http://subtlepatterns.com/patterns/sativa.png);
			font-family: "tw cen mt";

		}
		.hidden{
			visibility: hidden;
		}
		img,iframe{
			cursor: pointer;
			margin-left:3%;
		}
		h1{
			color: black;
			text-align: center;
		}
		.item:hover{
			cursor: pointer; 
	    }

		.pull-right{
			float: right;
			cursor: pointer;
		}
		.item{
			font-size: 5rem;
			padding: 2rem 0;
			color:orange;

			text-align: center;
			background-color: white;
			border: 1px solid orange;
			width: 15%;
			border-radius: 20%;
			min-width: 100px;
			margin-top: 2%;
			margin-bottom: 2%;
		}

		.container{
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: space-around; 
		}
		img{
			height: 50px;
			width: 50px;
		}
		.desc{
			color: black;
			text-align: center;

		}
	</style>
</head>
<body>
	<h1>LES CASES DE LA CHANCE</h1>

	<p class="desc">SELECTIONNER UNE CASE ET DECOUVREZ CE QUE LE DESTIN VOUS RESERVE</p>
	
	<iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fwww.lugingu.com&layout=button&size=large&mobile_iframe=true&appId=2284048105146085&width=89&height=28" width="89" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

	
	<div class="container">
		
	</div>

	<script type="text/javascript" src="react.development.js"></script>
	<script type="text/javascript" src="react-dom.development.js"></script>
	<script type="text/javascript" src="sweetalert.min.js"></script>
	<script type="text/javascript" src="babel.min.js" charset="UTF-8"></script>
	<script type="text/javascript">
		

		 function anim(){
		 	let allItem=document.querySelectorAll(".item");
		 	for (var i = 0; i < allItem.length; i++) {
		 		allItem[i].style.marginTop = '1%';
		 	}
		 	

		 }
		  function reset(){
		 	let allItem=document.querySelectorAll(".item");
		 	for (var i = 0; i < allItem.length; i++) {
		 		allItem[i].style.marginTop = '-1%';
		 	}
		 	

		 }
		 setInterval(anim,1000);
		 setInterval(reset,2000);

	</script>
	
	<script type="text/babel">
		swal("hello world");
		var casa=[
			 {
			 	"id" :"1",
			 	"message":"Il faut viser la lune, parce qu’au moins, si vous échouez, vous finirez dans les étoiles"
			 },
			 {
			 	"id" :"2",
			 	"message":"La meilleure façon de prédire l’avenir est de le créer"

			 },
			 {
			 	"id" :"3",
			 	"message":"Agissez toujours comme s’il était impossible d’échouer"
			 },
			 {
			 	"id" :"4",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"5",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"6",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"7",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"8",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"9",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"10",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"11",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"12",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"13",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"14",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"15",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"16",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"17",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"18",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"19",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"20",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"21",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"22",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"23",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"24",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"25",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"26",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"27",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"28",
			 	"message":"INFOS"
			 },
			 {
			 	"id" :"29",
			 	"message":"INFOS"
			 }
			 ,
			 {
			 	"id" :"30",
			 	"message":"INFOS"
			 }
		];
		var ListElement=[];

		
		for (var i = 0; i < casa.length; i++) {
			let id=casa[i].id;
			 
		
			let message=casa[i].message;
			function init(){
				swal("CASE "+id,message);
			}

			let element=(
				<div className="item" onClick={init}>?</div>
			);
			
			
				
			ListElement.push(element);
		 }
		ReactDOM.render(ListElement,document.querySelector(".container"));


	</script>


</body>
</html>