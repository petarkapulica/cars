<html>    
<head>
    <title>Cars</title>
    <link href="public/stylesheets/sass/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <link href="public/stylesheets/sass/print.css" media="print" rel="stylesheet" type="text/css" /> 
    <!--[if IE]>
        <link href="public/stylesheets/sass/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
    <![endif]-->
   
 </head>
<body>


IZABERI
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
    Configuration:<br>
    <select name="config">
        <option>limuzina</option>
        <option>hecbek</option>
        <option>karavan</option>
        <option>kupe</option>
    </select>
    <br>
    
    <select name="fuel" class="fuel">
        <option value="petrol">Petrol</option>
        <option value="dizel">Dizel</option>
        <option value="methane">Methane</option>
        <option value="electrical">Electrical</option>
        <option value="hybrid">Hybrid</option>
    </select>
    
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


<footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/select-car.js"></script>
    <script type="text/javascript" src="public/js/upload-file.js"></script>
</footer>


</body>
</html>