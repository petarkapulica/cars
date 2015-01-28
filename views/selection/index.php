INSERT
<form id="car_selection" enctype="multipart/form-data" method="POST">
    <select name="cars" class="js_car_select">
        <option selected disabled>Choose one</option>
    <?php
    foreach($this->cars as $key => $value)
    {
        echo '<option value="' . $value["id"] . '">' . $value["type"] . '</option>';
    }
    ?>
    </select>
    
    <select name="model_id" class="js_models" disabled="true">
        <option>Choose model</option>
    </select>
    
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
    
    <br>
    Km:<br>
    <input type="number" name="km">km
    <br>
    
    <br>
    Body:<br>
    <select name="config">
        <option selected disabled>Pick</option>
        <option>Hatchback</option>
        <option>Van/Minivan</option>
        <option>Coupe</option>
        <option>Sedan</option>
        <option>Luxury</option>
        <option>Convertible</option>
    </select>
    <br>
    Fuel:
    <br>
    <select name="fuel" class="fuel">
        <option selected disabled>Pick</option>
        <option>Diesel</option>
        <option>Gasoline</option>
        <option>Gas</option>
        <option>Methane</option>
        <option>Hybride</option>
    </select>
    
    <br>
    Price:
    <br>
    <select name="fixed" class="fixed">
        <option>Fixed price</option>
        <option>Not fixed price</option>
    </select>
    
    <br>
    
    <br>
    
    <select name="replace" class="replace">
        <option>Replace</option>
        <option>No replace</option>
    </select>
    
    <br>
    Engine Volume:<br>
    <input type="text" name="volume">
    <br>
    Horsepower:<br>
    <input type="text" name="horse">
    <br>
    <br>
    Motor:<br>
    <input type="text" name="motor">
    <br>
    <br>
    Drive:<br>
    <input type="text" name="drive">
    <br>
    <br>
    Transmission:<br>
    <input type="text" name="transmission">
    <br>
    <br>
    Doors:<br>
    <input type="text" name="doors">
    <br>
    <br>
    Seats:<br>
    <input type="text" name="seats">
    <br>
    <br>
    Wheel:<br>
    <input type="text" name="wheel">
    <br>
    <br>
    AC:<br>
    <input type="text" name="ac">
    <br>
    <br>
    Color:<br>
    <input type="text" name="color">
    <br>
    <br>
    Interior material:<br>
    <input type="text" name="material">
    <br>
    <br>
    Interior color:<br>
    <input type="text" name="interior">
    <br>
    <br>
    Registration expires:<br>
    <input type="date" name="regdate">
    <br>
    <br>
    Car origin:<br>
    <input type="text" name="origin">
    <br>
    <br>
    Damage:<br>
    <input type="text" name="damage">
    <br>
    Phone<br>
    <input type="text" name="phone">
    <br>
    Description:<br>
    <input type="text" name="desc">
    <input type="hidden" name="car_images">
    <br>
    Price
    <br>
    <input type="text" name="price" >
    <br>
    
    <input type="file" name="car_photo" />
    <span class="add-more-photos btn-primary">Add more</span>
    <br>
    <input type="submit" name="submit" value="submit" />
    
    
</form>