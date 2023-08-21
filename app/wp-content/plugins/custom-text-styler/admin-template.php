<div id="admin-form" class="wrap">
    <h1>Custom Text Styler</h1>
    <form method="post" action="">

        <label for="text">Enter your text:</label>
        <textarea name="text" id="text" rows="4" cols="50"></textarea><br>

        <label for="size">Select font size:</label>
        <input type="number" name="size" id="size" min="10" max="100"><br>

        <label for="font">Select font family:</label>
        <select name="font" id="font">
            <option value="Arial">Arial</option>
            <option value="Times New Roman">Times New Roman</option>
            <option value="Verdana">Verdana</option>
        </select><br>

        <label for="color">Select text color:</label>
        <input type="color" name="color" id="color"><br>

        <input type="submit" value="Generate" class="button button-primary">
    </form>
</div>

