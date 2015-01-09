IZABERI
<form id="car_selection" method="POST">
    <select name="cars">
    <?php
    foreach($this->cars as $key => $value)
    {
        echo '<option value="' . $value["type"] . '">' . $value["type"] . '</option>';
    }
    ?>
    </select>
    
    <select name="models">
        <option value="volvo">auto1 iz baze</option>
        <option value="saab">auto2 iz baze</option>
        <option value="fiat">auto3 iz baze</option>
        <option value="audi">auto4 iz baze</option>
    </select>
    
    <br>
    <br>
    Price:<br>
    <input type="text" name="price">
    <br>
    Year:<br>
    <input type="text" name="year">
    <br>
    Fuel:<br>
    <input type="text" name="fuel">
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
    
</form>