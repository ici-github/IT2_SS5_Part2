<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body 
<?php
    if(isset($_POST['submit_form'])) {
        backgroundColor($_POST['color']);
    }
?>
>
    <form method="post">
        Single-line input text: <input type="text" name="input_text" id=""><br>
        Multiple-line input text: <br>
        <textarea name="multiline_text" id="" cols="30" rows="10"></textarea> <br>
        Radio buttons: <br>
        <input type="radio" name="select_radio" value="Option 1"> Option 1 <br>
        <input type="radio" name="select_radio" value="Option 2"> Option 2 <br>
        Checkboxes: <br>

        <input type="checkbox" name="select_checkbox" value="Option 1"> Option 1 <br>
        <input type="checkbox" name="select_checkbox" value="Option 2"> Option 2 <br>
        <input type="checkbox" name="select_checkbox" value="Option 3"> Option 3 <br>
        <input type="checkbox" name="select_checkbox" value="Option 4"> Option 4 <br>

        Calendar: <br>
        <input type="date" name="calendar" id=""><br>
        File Upload: <br>
        <input type="file" name="file_upload" id=""><br>
        Color: <br>
        <input type="color" name="color" id=""> <br>
        Dropdown lists: <br>
        <select name="dropdownLists" id="">
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
            <option value="Option 4">Option 4</option>
            <option value="Option 5">Option 5</option>
        </select>   <br><br><br><br><br><br><br><br>
        <input type="submit" name="submit_form" value="Submit Form"> 
    </form>

    <?php

        function backgroundColor($color) {
            echo "style='background-color:$color'";

        }
    ?>  
</body>
</html>
