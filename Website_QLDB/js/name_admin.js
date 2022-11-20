
$(document).ready(function () {
    getresult();
});
function getresult() {
    $.ajax({
        url: '../../pages/samples/name_admin.php',
        type: "POST",
        success: function (data) {
            $("#name_admin").append(data);
        },
    });
}
