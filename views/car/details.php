    <div class="body-content clearfix">
        <div class="car-content left clearfix">
            <div class="car-header">
                2011 Fiat Linea 1.4tjet
            </div>
            <div class="car-content-nav clearfix">
                <div class="car-content-nav-title left">
                    Offer
                </div>
                <div class="car-content-nav-title left">
                    Credits
                </div>
                <div class="car-content-nav-title left">
                    About model
                </div>
                <div class="car-content-nav-title left">
                    Driver impressions
                </div>
                <div class="car-content-nav-title left">
                    Complete offer
                </div>
            </div>
            <div class="car-content-details clearfix left">
                <div class="car-content-details-img left">
                    <img src="../../image?img-name=<?php echo $this->images[0]["image_name"];?>&size=m" />
                    <?php
                    foreach($this->images as $key => $value)
                    {
                        if($key > 0 && $key < 4)
                        {
                        echo '<div class="left"><img src="../../image?img-name=' . $value["image_name"] . 
                                '&size=thumb"></div>';
                        }
                    }
                    ?>
                </div>
                <div class="car-content-details-list left">
                    <h2><?php echo $this->car[0]['price'] ?> &#8364</h2>
                    <ul>
                        <li>Used car</li>
                        <li><?php echo $this->car[0]['model_name'] ?></li>
                        <li><?php echo $this->car[0]['type'] ?></li>
                        <li><?php echo $this->car[0]['year'] ?>.</li>
                        <li><?php echo $this->car[0]['km'] ?></li>
                        <li><?php echo $this->car[0]['config'] ?></li>
                        <li><?php echo $this->car[0]['fuel'] ?></li>
                        <li><?php echo $this->car[0]['fixed'] ?></li>
                        <li><?php echo $this->car[0]['replace'] ?></li>
                        <li>Added someday</li>
                        <li>Offer no <?php echo $this->car[0]['id'] ?></li>
                        <br>
                        <li>Rate car 1 2 3 4 5</li>
                        
                    </ul>
                </div>
                <div class="car-content-details-contact left">
                    <h2>Contact data</h2>
                    <p>Auto Munich</p>
                    <p>Watch complete offer</p>
                    <ul>
                        <li>18000 Munich</li>
                        <li>Germany</li>
                        <li><?php echo $this->car[0]['phone'] ?></li>
                        <li><?php echo $this->car[0]['phone'] ?></li>
                    </ul>
                </div>
            </div>
            
            <div class="additional clearfix">
                <div class="additional-info">
                    <h2>Additional info</h2>
                    <div class="add-info1 left">
                        <ul>
                            <li>Engine capacity</li>
                            <li>Engine max power</li>
                            <li>Engine emission class</li>
                            <li>Drive</li>
                            <li>Transmission</li>
                            <li>Doors no</li>
                            <li>Seats no</li>
                            <li>Wheel side</li>
                            <li>AC</li>
                            <li>Color</li>
                            <li>Interior material</li>
                            <li>Interior color</li>
                            <li>Registration expires</li>
                            <li>Car origin</li>
                            <li>Damage</li>
                        </ul>
                    </div>
                    <div class="add-info2 left">
                        <ul>
                            <li><?php echo $this->car[0]['engine_volume'] ?></li>
                            <li><?php echo $this->car[0]['horsepower'] ?></li>
                            <li><?php echo $this->car[0]['motor'] ?></li>
                            <li><?php echo $this->car[0]['drive'] ?></li>
                            <li><?php echo $this->car[0]['transmission'] ?></li>
                            <li><?php echo $this->car[0]['doors'] ?></li>
                            <li><?php echo $this->car[0]['seats'] ?> </li>
                            <li><?php echo $this->car[0]['wheel'] ?></li>
                            <li><?php echo $this->car[0]['ac'] ?></li>
                            <li><?php echo $this->car[0]['color'] ?></li>
                            <li><?php echo $this->car[0]['intmat'] ?></li>
                            <li><?php echo $this->car[0]['intcol'] ?></li>
                            <li><?php echo $this->car[0]['regdate'] ?></li>
                            <li><?php echo $this->car[0]['origin'] ?></li>
                            <li><?php echo $this->car[0]['damage'] ?></li>
                        </ul>
                    </div>
                </div>

                <div class="safety clearfix">
                    <h2>Safety</h2>
                    <ul>
                        <li>Airbag for driver</li>
                        <li>Airbag for passengers</li>
                        <li>ABS</li>
                        <li>ESP</li>
                        <li>Coded key</li>
                        <li>Central lock</li>
                        <li>Central lock</li>
                        <li>Central lock</li>
                        <li>Central lock</li>
                        <li>Central lock</li>
                    </ul>
                </div>
                
                <div class="equipment ">
                    <h2>Equipment</h2>
                    <ul>Some equipment</ul>
                </div>
                
                <div class="description-data clearfix">
                    <h2>Description</h2>
                    <p><?php echo $this->car[0]['description'] ?></p>
                </div>
            </div>
            
        </div>
        
        <div class="found-cars-banners left">
            <div>
                <img src="http://www.beststylez.com/wp-content/uploads/2012/09/Disney-Cartoons-Cover-Timeline-39.jpg"/>
            </div>
            <div>
                <img src="http://www.alliancegroupusa.com/wp-content/uploads/2014/08/funny-yellow-and-blue-cartoon-car-old-cartoon-car-characters-.jpg"/>
            </div>
            <div>
                <img src="http://thumbs.dreamstime.com/z/funny-red-car-cartoon-isolated-white-42961192.jpg"/>
            </div>
        </div>
    </div>