$(document).ready(function () {
    $('.deleteManuscriptModal').on('click', function () {
        loadModal('deleteManuscriptModal')
        $tr = $(this).closest('tr')
        var data = $tr.children('#td').map(function () {
            return $(this).text()
        }).get()
        console.log(data)
        $('#id').val(data[0])
    })
})

function fetch(id) {
    alert(id)
}

function loadModal(modalId) {
    $('#' + modalId).modal('show')
}
