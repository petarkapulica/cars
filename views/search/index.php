    <div class="body-content">
        <div class="search-content-minimized left clearfix">
            <form action="/search" method="GET" class="search-form form-inline">
                    <div class="form-group">
                        <label>Car</label>
                        <select name="car" class="middle js_car_select">
                        <option selected disabled>Pick</option>
                            <?php
                            foreach($this->cars as $key => $value)
                            {
                                echo '<option value="' . $value["id"] . '">' . $value["type"] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Model</label>
                        <select class="middle js_models" name="model" disabled="true"><option>Pick</option></select>
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <select class="middle" name="body">
                            <option selected disabled>Pick</option>
                            <option>Hatchback</option>
                            <option>Van/Minivan</option>
                            <option>Coupe</option>
                            <option>Sedan</option>
                            <option>Luxury</option>
                            <option>Convertible</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Price from</label>
                        <input class="middle" name="numberlow" type="number" />&#8364
                    </div>
                    <div class="form-group">
                        <label>Price to</label>
                        <input class="middle" name="numberhigh" type="number" />&#8364
                    </div>
                    <div class="form-group">
                        <label>Release date ( from - to )</label>
                        <select class="middle" name="yearlow">
                            <option selected disabled>Pick</option>
                            <?php
                             $current_year = date("Y");
                             for($i = $current_year;$i>1980;$i--)
                             {
                                 echo "<option>{$i}</option>";
                             }
                            ?>
                        </select>
                        <select class="middle" name="yearhigh">
                            <option selected disabled>Pick</option>
                            <?php
                             $current_year = date("Y");
                             for($i = $current_year;$i>1980;$i--)
                             {
                                 echo "<option>{$i}</option>";
                             }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Fuel</label>
                        <select class="middle" name="fuel">
                            <option selected disabled>Pick</option>
                            <option>Diesel</option>
                            <option>Gasoline</option>
                            <option>Gas</option>
                            <option>Methane</option>
                            <option>Hybride</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Region</label>
                        <select class="middle" name="region">
                            <option selected disabled>Pick</option>
                            <option>Europe</option>
                            <option>Asia</option>
                            <option>Africa</option>
                            <option>America</option>
                            <option>Australia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Payment</label>
                        <select class="middle" name="payment">
                            <option selected disabled>Pick</option>
                            <option>Cash</option>
                            <option>Credit</option>
                            <option>Leasing</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Look for</label>
                        <select class="middle" name="lookfor">
                            <option>Used and new</option>
                            <option>Only new</option>
                            <option>Only used</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit"/>
                    </div>
                </form>
                
        </div>
        
        <div class="found-cars left">
            <div class="found-cars-header">
                <strong>Cars</strong>
            </div>
            <div class="found-cars-nav">
                <p> Shown 
                    <?php
                    echo $this->count == 0 
                            ? 0
                            : 1;
                    ?>
                    out of <?php echo $this->count;?> results</p>
                <p>
                    <?php
                    $perPage = $this->perPage;
                    $count = $this->count;
                    $pages = ceil($count/$perPage);
                    $url = $_SERVER['REQUEST_URI'];
                    $url = preg_replace('/&?page=[0-9]+&?/', '', $url); 
                    for($page = 1; $page <= $pages; $page++)
                    {
                        echo '<a href="' . $url . '&page=' . $page .'"> ' . $page . ' </a>';
                    } 
                    ?>
                </p>
            </div>
            
            <?php
            foreach($this->searchedCars as $key => $value)
            {
                $html = '<div class="found-car">';
                $html .= '<div class="found-car-header">';
                $html .= '<span>';
                $html .= $value['type'] . ' ' . $value['model_name'];
                $html .= '</span>';
                $html .= '<span> ';
                $html .= $value['km'] . 'km';
                $html .= '</span>';
                $html .= '<span> ';
                $html .= $value['year'];
                $html .= '</span>';
                $html .= '<span class="found-car-price">';
                $html .= $value['price'] . ' &#8364';
                $html .= '</span>';
                $html .= '</div>';
                $html .= '<div class="found-car-details clearfix">
                        <div class="found-car-image left"><a href="../car/details/';
                $html .= $value["id"] . '">';
                $html .= '<img src="';
                $html .= '/image?img-name=';
                $html .= $value["images"][0];
                $html .= "&size=s";
                $html .= '" /></a></div>';
                $html .= '<div class="found-car-desc left">';
                $html .= "Configuration: {$value['config']},
                          Color: {$value['color']},
                          Doors: {$value['doors']} doors, 
                          Seats: {$value['seats']} seats,
                          Fuel:  {$value['fuel']}, 
                          Power: {$value['horsepower']} HP, 
                          Transmission: {$value['transmission']},
                          Airconditioning: {$value['ac']} .";
                $html .= '</div>';
                $html .= '</div>';
                $html .= '<div class="found-car-picture-quantity">';
                $html .= sizeof($value["images"]) . ' pics';
                $html .= '</div>';
                $html .= '</div>';
                echo $html;
            }
            ?>
            
        </div>
        
        <div class="found-cars-banners left">
            <div>
                <img src="http://carmodification.wnngroup.com/wp-content/uploads/2014/12/cartoon-car-pics-9.jpg"/>
            </div>
            <div>
                <img src="http://freedesignfile.com/upload/2013/02/Cartoon-cars-3.jpg"/>
            </div>
            <div>
                <img src="http://www.ochs4paws.org/wp-content/uploads/car-wash.jpg"/>
            </div>
        </div>
    </div>
        