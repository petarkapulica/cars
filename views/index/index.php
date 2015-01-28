    <div class="body-content">
        <div class="search-content">
            <div class="form-holder left">
                <ul class="search-navigation clearfix">
                    <li class="active"><a href="search">Search</a></li>
                    <li><a href="car_models">Model</a></li>
                    <li><a href="offerno">Offer no</a></li>
                </ul>
                
                <form action="/search" method="GET" class="search-form form-inline">
                    <div class="form-group">
                        <label>Car</label>
                        <select name="car" class="large js_car_select">
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
                        <select class="large js_models" name="model" disabled="true"><option>Pick</option></select>
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
                        <select class="small" name="yearlow">
                            <option selected disabled>Pick</option>
                            <?php
                             $current_year = date("Y");
                             for($i = $current_year;$i>1980;$i--)
                             {
                                 echo "<option>{$i}</option>";
                             }
                            ?>
                        </select>
                        <select class="small" name="yearhigh">
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
                        <select class="large" name="fuel">
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
                        <select class="large" name="region">
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
                        <select class="large" name="lookfor">
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
            <div class="left">
                <img alt="ducky" class="banner-tard-picture" src="http://static-1.mojvideo.com/foto2072-9668-36709/slika.jpg">
            </div>
        </div>
        <div class="bottom-content clearfix">
            <div class="data-content left">
                <h2 class="display-inline">USED CARS</h2>
                <h2 class="display-inline">NEW CARS</h2>

                <ul class="inline-list data-content-list">
                    <?php
                        foreach($this->randomCars as $key => $value)
                        {
                            $html = '<li class="clearfix">';
                            $html .= '<span class="price">';
                            $html .= $value['price'];
                            $html .= '</span>';
                            $html .= '<a href="/car/details/' . $value["id"]. '"' . ' class="clearfix">';
                            $html .= '<img src="image?img-name=';
                            $html .= $value['images'][0];
                            $html .= '&size=s';
                            $html .= '"></a>';
                            $html .= '<p>';
                            $html .= $value['type'] . ' ' . $value['model_name'] . ' ' . $value['year'];
                            $html .= '</p></li>';
                            echo $html;
                        }
                    ?>
                </ul>
            </div>
            <div class="head-news left">
            <ul>
                <li><a href="#">McLaren 650S Le Mans special edition launched</a></li>
                <li><a href="#">No plans for Vauxhall Adam VXR</a></li>
                <li><a href="#">Cat D and Cat C cars: insurance write-offs explained</a></li>
                <li><a href="#">Vauxhall Adam Grand Slam price revealed</a></li>
                <li><a href="#">Mazda CX-3 Racing concept revealed in Tokyo</a></li>
                <li><a href="#">Citroen SUV on the way as sales surge</a></li>
                <li><a href="#">What to do after a road traffic accident: first aid tips</a></li>
            </ul>
        </div>
        </div>
    </div>
       