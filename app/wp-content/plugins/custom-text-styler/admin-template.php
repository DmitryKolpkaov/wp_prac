<?php
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_text_styler_settings';
    $records = $wpdb->get_results("SELECT shortcode, css FROM $table_name");
?>
<div id="admin-form" class="wrap">
    <h1>Custom Text Styler</h1>
    <form method="post" action="">
        <div class="text">
            <label for="text">Enter your text:</label>
            <textarea name="text" id="text" rows="4" cols="50"></textarea>
        </div>

        <br>
        <br>

        <div class="size">
            <label for="size">Select font size:</label>
            <input type="number" name="size" id="size" min="6" max="100">
        </div>

        <br>
        <br>

        <div class="family">
            <label for="font">Select font family:</label>
            <select name="font" id="font">
                <option value="Arial">Arial</option>
                <option value="Times New Roman">Times New Roman</option>
                <option value="Roboto">Roboto</option>
                <option value="Poppins">Poppins</option>
                <option value="Verdana">Verdana</option>
                <option value="Helvetica Neue">Helvetica Neue</option>
                <option value="Red Hat Display">Red Hat Display</option>
            </select>
        </div>

        <br>
        <br>

        <div class="style">
            <label for="font_style">Select font style:</label>
            <select name="font_style" id="font_style">
                <option value="normal">Normal</option>
                <option value="italic">Italic</option>
                <option value="oblique">Oblique</option>
            </select>
        </div>

        <br>
        <br>

        <div class="decoration">
            <label for="decoration">Select text decoration:</label>
            <select name="decoration" id="decoration">
                <option value="none">None</option>
                <option value="underline">Underline</option>
                <option value="overline">Overline</option>
                <option value="line-through">Line Through</option>
            </select>
        </div>

        <br>
        <br>

        <div class="opacity">
            <label for="opacity">Select opacity:</label>
            <input type="number" name="opacity" id="opacity" step="0.01" min="0" max="1" value="0,5">
        </div>

        <br>
        <br>

        <label for="text-shadow">Select text shadow:</label>
        <br>
        <hr>
        <div class="shadow">
            <label for="text-shadow-h">Horizontal offset:</label>
            <input type="number" name="text-shadow-h" id="text-shadow-h" value="0">
            <label for="text-shadow-v">Vertical offset:</label>
            <input type="number" name="text-shadow-v" id="text-shadow-v" value="0">
            <label for="text-shadow-blur">Blur radius:</label>
            <input type="number" name="text-shadow-blur" id="text-shadow-blur" value="0">
            <label for="text-shadow-color">Shadow color:</label>
            <input type="color" name="text-shadow-color" id="text-shadow-color" value="none">
        </div>
        <hr>
        <br>
        <br>

        <div class="weight">
            <label for="font-weight">Select font weight:</label>
            <select name="font-weight" id="font-weight">
                <option value="normal">Normal</option>
                <option value="bold">Bold</option>
                <option value="bolder">Bolder</option>
                <option value="lighter">Lighter</option>
            </select>
        </div>

        <br>
        <br>

        <div class="color">
            <label for="color">Select text color:</label>
            <input type="color" name="color" id="color">
        </div>

        <br>
        <br>

        <div class="background-color">
            <label for="background_color">Select background color:</label>
            <input type="color" name="background_color" id="background_color">
        </div>

        <br>
        <br>
        <input type="submit" value="Generate" class="button button-primary">
    </form>
</div>



