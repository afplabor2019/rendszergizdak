<?php include "database.php";
	include "header.php"; ?>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="search-wrap-1 ftco-animate mb-5">
							<form method="get" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Select Model</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="model" id="" class="form-control">
							  	<option></option>
								<?php
    							$query = $conn->prepare("SELECT `model` FROM `car` GROUP BY `model`");
								$query->execute();
								foreach ($query->fetchAll() as $value) : ?>
									<option <?php if (isset($_GET['model']) && $_GET['model'] == $value['model']) echo "selected"?>><?=$value['model']?></option>
								<?php endforeach; ?>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Select Brand</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="brand" id="" class="form-control">
							  	<option></option>
								<?php
    							$query = $conn->prepare("SELECT `brand` FROM `car` GROUP BY `brand`");
								$query->execute();
								foreach ($query->fetchAll() as $value) : ?>
									<option <?php if (isset($_GET['brand']) && $_GET['brand'] == $value['brand']) echo "selected"?>><?=$value['brand']?></option>
								<?php endforeach; ?>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Year Model</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="year" id="" class="form-control">
							  	<option></option>
								<?php
    							$query = $conn->prepare("SELECT `year` FROM `car` GROUP BY `year`");
								$query->execute();
								foreach ($query->fetchAll() as $value) : ?>
									<option <?php if (isset($_GET['year']) && $_GET['year'] == $value['year']) echo "selected"?>><?=$value['year']?></option>
								<?php endforeach; ?>
							 </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Max Price / day</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="price" id="" class="form-control">
							  	<option></option>
								<?php
    							$query = $conn->prepare("SELECT `price` FROM `car` GROUP BY `price`");
								$query->execute();
								foreach ($query->fetchAll() as $value) : ?>
									<option <?php if (isset($_GET['price']) && $_GET['price'] == $value['price']) echo "selected"?>><?=$value['price']?></option>
								<?php endforeach; ?>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" value="Search" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
	</section>
	
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
				<?php
				$model = (!empty($_GET['model']) ? $_GET['model'] : '%');
				$brand = (!empty($_GET['brand']) ? $_GET['brand'] : '%');
				$year = (!empty($_GET['year']) ? $_GET['year'] : '%');
				$price = (!empty($_GET['price']) ? $_GET['price'] : '%');
				$query = $conn->prepare("SELECT * FROM `car` WHERE `type` LIKE 'SELL' AND `model` LIKE '".$model."' AND `brand` LIKE '".$brand."' AND `year` LIKE '".$year."' AND `price` LIKE '".$price."'");
				$query->execute();
				foreach ($query->fetchAll() as $car): ?>
    			<div class="col-md-3">
    				<div class="car-wrap ftco-animate">
    					<div class="img d-flex align-items-end" style="background-image: url(<?=$car['img']?>);">
    						<div class="price-wrap d-flex">
    							<span class="rate">$<?=$car['price']?></span>
    						</div>
    					</div>
    					<div class="text p-4 text-center">
    						<h2 class="mb-0"><a href="car-single.html"><?=$car['name']?></a></h2>
    						<span><?=$car['brand']?></span>
							<span><?=$car['model']?></span>
    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
    					</div>
    				</div>
    			</div>				
				<?php endforeach ?>
    		</div>  		
    	</div>
	</section>
<?php include "footer.php"; ?>