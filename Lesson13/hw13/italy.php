<!doctype html>
<html lang = "ru">

	<head>
		<meta charset="UTF-8">
		<title>ITALY</title>
	</head>
	
	<body>
		<form action="italy.php" method="post">
			<p>Enter the number of people:
				<input type="text" name="people" size="1" maxlength="2" placeholder="<?=$_REQUEST['people']?>">
			</p>
				
			<button type="submit" >SUBMIT</button>
		</form>

		<?php
			class Tour{
				public $country;
				protected $people;
				protected $price;
				
				public function __construct($country,$people,$price){
					$this->country = $country;
					$this->people = $people;
					$this->price = $price;
				}
			}
				
			class TourTo extends Tour{
				public function calculate(){
					$this->cost = $this->people * $this->price;
					return $this->cost;
				}
			}
			if(isset($_REQUEST['people'])){
				$yourTour = new TourTo("Italy", $_REQUEST['people'], 2200);

				echo '<br>You\'ve just chosen a tour to '.$yourTour->country.' for '.$_REQUEST['people'].' person(-s). It\'s cost is $'.$yourTour->calculate().' for 10 days.<br>
				Enjoy your tour!';
			}	
		?>
		
	</body>
</html>