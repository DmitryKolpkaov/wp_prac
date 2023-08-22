<?php
    global $wpdb;
    $table_name = $wpdb->prefix . 'custom_text_styler_settings';
    $records = $wpdb->get_results("SELECT shortcode, css FROM $table_name");
?>

<div id="admin-form" class="wrap">
    <h1>Custom Text Styler</h1>
    <form method="post" action="">

        <label for="text">Enter your text:</label>
        <textarea name="text" id="text" rows="4" cols="50"></textarea>

        <br>
        <br>

        <label for="size">Select font size:</label>
        <input type="number" name="size" id="size" min="10" max="100">

        <br>
        <br>

        <label for="font">Select font family:</label>
        <select name="font" id="font">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>
        </select>

        <br>
        <br>

        <label for="font_style">Select font style:</label>
        <select name="font_style" id="font_style">
            <option value="normal">Normal</option>
            <option value="italic">Italic</option>
            <option value="oblique">Oblique</option>
        </select>

        <br>
        <br>

        <label for="decoration">Select text decoration:</label>
        <select name="decoration" id="decoration">
            <option value="none">None</option>
            <option value="underline">Underline</option>
            <option value="overline">Overline</option>
            <option value="line-through">Line Through</option>
        </select>

        <br>
        <br>

        <label for="opacity">Select opacity:</label>
        <input type="number" name="opacity" id="opacity" step="0.01" min="0" max="1" value="0,5">

        <br>
        <br>

        <label for="text-shadow-h">Horizontal offset:</label>
        <input type="number" name="text-shadow-h" id="text-shadow-h" value="0">

        <label for="text-shadow-v">Vertical offset:</label>
        <input type="number" name="text-shadow-v" id="text-shadow-v" value="0">

        <label for="text-shadow-blur">Blur radius:</label>
        <input type="number" name="text-shadow-blur" id="text-shadow-blur" value="0">

        <label for="text-shadow-color">Shadow color:</label>
        <input type="color" name="text-shadow-color" id="text-shadow-color" value="none">

        <br>
        <br>

        <label for="font-weight">Select font weight:</label>
        <select name="font-weight" id="font-weight">
            <option value="normal">Normal</option>
            <option value="bold">Bold</option>
            <option value="bolder">Bolder</option>
            <option value="lighter">Lighter</option>
        </select>

        <br>
        <br>

        <label for="color">Select text color:</label>
        <input type="color" name="color" id="color">

        <br>
        <br>

        <label for="background_color">Select background color:</label>
        <input type="color" name="background_color" id="background_color">

        <br>
        <br>

        <input type="submit" value="Generate" class="button button-primary">
    </form>
</div>



