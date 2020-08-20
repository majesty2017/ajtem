$(document).ready(function () {
    // Data table
    $('#dataTables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"],
        ],
        responsive: true,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Search Records",
        },
    });

    // Categories edit modal, show the modal and  populate each data from the table into the for fields based on each individual data by id... Same for others.
    $('.editCategoryModal').on('click', function () {
        $('#editCategoryModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children('#td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#category_id').val(data[0]);
        $('#category').val(data[1]);
    });

    // Categories delete modal
    $('.deleteCategoryModal').on('click', function () {
        $('#deleteCategoriesModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children('#td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#deleteCatId').val(data[0]);
    });

//    Articles edit
    $('.editArticleModal').on('click', function () {
        $('#editArticlesModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children('#td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#article_id').val(data[0]);
        $('#inputTitle').val(data[2]);
        $('#inputYear').val(data[3]);
        $('#inputVolume').val(data[4]);
        $('#inputPages').val(data[5]);
        $('#inputAuthor').val(data[6]);
        $('#uploadFile').val(data[7]);
    });

    // Categories delete modal
    $('.deleteArticleModal').on('click', function () {
        $('#deleteArticlesModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children('#td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#articleId').val(data[0]);
    });

    // Publish Article
    $('.publishArticleModal').on('click', function () {
        $('#publishArticlesModal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text();
        }).get();
        console.log(data);
        $('#publish_article_id').val(data[0]);
    });

//    Editor in chief Edit
    $('.editEditorInChiefModal').on('click', function () {
        $('#editEditorInChiefModal').modal('show')
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#edit_id').val(data[0])
        $('#name').val(data[1])
        $('#email').val(data[2])
    })

//    Editor in chief Delete
    $('.deleteEditorInChiefModal').on('click', function () {
        $('#deleteEditorInChiefModal').modal('show')
        $tr = $(this).closest('tr');
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get();
        console.log(data)
        $('#delete_id').val(data[0])
    })
});
