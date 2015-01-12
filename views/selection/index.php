IZABERI
<form id="car_selection" method="POST">
    <select name="cars" class="cars_select">
        <option selected disabled>Choose one</option>
    <?php
    foreach($this->cars as $key => $value)
    {
        echo '<option value="' . $value["id"] . '">' . $value["type"] . '</option>';
    }
    ?>
    </select>
    
    <select name="models" class="models">
        <option selected disabled>Choose model</option>
        
    </select>
    
    <br>
    <br>
    Price
    <br>
    <input type="text" name="price" >
    <br>
    <select name="year" class="year">
        <option selected disabled>Year</option>
        <?php 
        for($i=0;$i<30;$i++)
        {
            echo '<option>' . (2015 - $i) . '</option>';
        }
        ?>
    </select>
    <br>
    <select name="fuel" class="fuel">
        <option selected disabled>Fuel</option>
        <option>Petrol</option>
        <option>Dizel</option>
        <option>Methane</option>
        <option>Electrical</option>
        <option>Hybrid</option>
    </select>
    <br>
    Engine Volume:<br>
    <input type="text" name="volume">
    <br>
    Horsepower:<br>
    <input type="text" name="horse">
    <br>
    Phone:<br>
    <input type="text" name="phone">
    <br>
    Description:<br>
    <input type="text" name="desc">
    
    <br>
    <input type="submit" name="submit" value="submit" />
    
</form>