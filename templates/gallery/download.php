<?php
?>
<form action="/gallery.php?action=download" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
        <label for="file" class="col-sm-2 col-form-label">Выберите фото</label>

        <div class="col-sm-10">
            <div class="file_upload">+<input type="file" name="file"></div>
        </div>

        <div class="col-sm-10">

            <input type="submit" id="file" value="Загрузить" class="btn btn-success">
        </div>

    </div>
</form>