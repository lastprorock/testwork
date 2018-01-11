<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/main.css">	

	<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
	<script src="https://use.fontawesome.com/585763270a.js"></script>

</head>
<body>
	<div id="div"></div>

	<script>
	$.getJSON('products.json', function(products) {
            for(var i=0;i<products.length;i++){   	

products[i].primaryImageUrl= products[i].primaryImageUrl.replace(".jpg", "_220x220_1.jpg"); 


                $('#div').append('<div class="container">	<div class="row">		<div class="img col-xs-12 col-sm-12  col-lg-3">		<img src="'+ products[i].primaryImageUrl +'" alt="">		</div>			<div class="col-xs-12 col-sm-6 col-lg-4">				<div class="row">				<div class="cod col-md-12 col-sm-12">					<p class="">Код: '+ products[i].code +'</p>				</div>			</div>			<div class="row">				<div class="name col-md-12 col-sm-12">					'+ products[i].title +'</div>			</div>				<div class="row">				<div class="mogP col-md-12 col-sm-12">					<p>Могут понадобиться:' + products[i].assocProducts.split('/n') +'</p>				</div>			</div>			<div class="row">				<div class="col-md-12 col-sm-12">									</div>			</div>		</div>			<div class="col-xs-12 col-sm-6 col-lg-4" >				<div class="row">					<div class="p col-xs-12  col-sm-12">					<p>Наличие</p>					</div>				</div>				<div class="row">					<div class="col-md-12 col-sm-12">					<p class="textCart" ><span class="carta">По карте<br>клуба	</span>					<span class="priseForMYcart">'+ products[i].priceGoldAlt +' Р</span><span class="priseForUpYcart">'+ products[i].priceGold +' Р</span></p>					<p class="priseForMNcart">'+ products[i].priceRetailAlt +' P</p><p class="priseForUpNcart">'+ products[i].priceRetail +' P</p>					</div>				</div>					<div class="row">					<div class="col-md-12 col-sm-12">										</div>				</div>				<div class="row">					<div class="name1 col-md-12 col-sm-12">					<p>можно купить за '+ products[i].priceGoldAlt +' баллов</p>					</div>				</div>				<div class="row">					<div class="name3 col-md-12 col-sm-12">					<p><span class="ForM">За м.кв </span><span class="ForUp">За упаковку</span></p>					</div>				</div>				<div class="row">					<div class="col-md-12 col-sm-12">					<div class="purchase_information ">							<span class="img_production"></span>							<p>					<span>Продается упаковками:</span>					 <br>					 <span>'+ products[i].unitRatio +' упак. = '+ products[i].unitRatioAlt +' м.кв.</span>						</p>					</div>					</div>				</div>					<div class="row">					<div class="col-xs-12 col-md-12 col-sm-12">					<div class="control">					<div class="stepper" >						<input type="text" class="button" name="" value="1" id="">						<span class="arrowUp StepImgUP"></span>						<span class="arrowDown StepImDown"></span>					</div>					<div data-product-id="'+ products[i].productId +'"class="buyButton">						<p>						<span class="buttonImage fa fa-shopping-cart"></span>						<span class="buttonInscription">В КОРЗИНУ</span>					</p>					</div>					</div>					</div>				</div>		</div>		</div>		</div>')
            }
    });


	</script>
	 <script>
        $(document).ready(function() {
        $('#div').on('click', '.arrowDown', function(e){
                      var $input = $(this).parent().find('input');
                var count = parseInt($input.val()) - 1;
                count = count < 1 ? 1 : count;
                $input.val(count);
                $input.change();
                return false;
    });
         $('#div').on('click', '.arrowUp', function(e){
                var $input = $(this).parent().find('input');
                $input.val(parseInt($input.val()) + 1);
                
                return false;
    });	
        $('#div').on('click', '.ForUp', function(e){
        	    var $input = $(this).parentsUntil(".container").find(".priseForUpNcart");
        	      var $input1 = $(this).parentsUntil(".container").find(".priseForUpYcart");
        	        var $input2 = $(this).parentsUntil(".container").find(".priseForMYcart");
        	          var $input3 = $(this).parentsUntil(".container").find(".priseForMNcart");        	          
        	          var $input4 = $(this).parentsUntil(".container").find(".ForM");
                $input.css("display", "inline-block");
                $input1.css("display", "inline-block");
                $input2.css("display", "none");
                $input3.css("display", "none");
                        	            $input4.css("background", "#fff");
        	           $input4.css("color", "#000");
                        	          $(this).css("background", "#000");
        	           $(this).css("color", "#fff");
                return false;
        });	
                $('#div').on('click', '.ForM', function(e){
        	    var $input = $(this).parentsUntil(".container").find(".priseForUpNcart");
        	      var $input1 = $(this).parentsUntil(".container").find(".priseForUpYcart");
        	        var $input2 = $(this).parentsUntil(".container").find(".priseForMYcart");
        	          var $input3 = $(this).parentsUntil(".container").find(".priseForMNcart");
        	             var $input4 = $(this).parentsUntil(".container").find(".ForUp");
        	          $(this).css("background", "#000");
        	           $(this).css("color", "#fff");
        	            $input4.css("background", "#fff");
        	           $input4.css("color", "#000");
                $input.css("display", "none");
                $input1.css("display", "none");
                $input2.css("display", "inline-block");
                $input3.css("display", "inline-block");
                return false;
        });
        });	
</script>
</body>
</html>