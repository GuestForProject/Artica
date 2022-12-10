<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
    $str = $root . '/components/OpenAdminLayout.php';
    require $str;
?>


<div class="posts col-9" style="width: 50%; margin: 0 auto">
    <div class="button row" >
        <a href="creates.php" class="col-2 btn btn-success">Создать пост</a>
        <span class="col-1"></span>
        <a href="index.php" class="col-2 btn btn-warning">Редактирование постов</a>
    </div>
    <div class="row title-table" style="margin-top: 25px">
        <h2>Добавление поста</h2>
    </div>
    <div class="row add-post">
        <div class="mb-12 col-12 col-md-12 err">
            <!-- Вывод массива с ошибками -->
        </div>
        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="col mb-4">
                <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
            </div>
            <div class="col">
                <label for="editor" class="form-label">Содержимое записи</label>
                <textarea name="content" id="editor" class="form-control" rows="6"></textarea>
            </div>
            <div class="input-group col mb-4 mt-4">
                <input name="img" type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02">Upload</label>
            </div>
            <select name="topic" class="form-select mb-2" aria-label="Default select example">
                <option selected>Категория поста:</option>
            </select>
            <div class="form-check">
                <input name="publish" class="form-check-input" type="checkbox" value="1" id="flexCheckChecked" checked>
                <label class="form-check-label" for="flexCheckChecked">
                    Publish
                </label>
            </div>
            <div class="col col-6">
                <button name="add_post" class="btn btn-primary" type="submit">Добавить запись</button>
            </div>
        </form>
    </div>
</div>


<script>
ClassicEditor
    .create( document.querySelector( '#editor' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );

</script>