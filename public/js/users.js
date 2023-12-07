function stopEnterKey(e) {
    var evt = (e) ? e : ((e) ? e : null);
    var node = (e.target) ? e.target : ((e.srcElement) ? e.srcElement : null);
    if ((e.keyCode == 13) && (node.type == "text")) { return false; }
}
document.onkeypress = stopEnterKey;


// $(document).ready(function () {
//     $('#hasil_users').on('keyup', function () {
//         var query = $(this).val();
//         $.ajax({
//             type: 'GET',
//             url: "mencari",
//             data: { 'search': query },
//             success: function (data) {
//                 $('#result_game').html(data);
//             }
//         });
//     });
// });


// pencarian hasil pertandingan
$(document).ready(function () {
    readData()
    $('#hasil_users').keyup(function () {
        var query = $('#hasil_users').val();
        if (query) {
            $('#result_game').hide();

        } else {
            $('#result_game').show();

        }
        if (query != "") {
            $("#read_data").html('<div class="d-flex justify-content-center"><div class="spinner-border" style="margin-top:20%" role="status"><span class="visually-hidden">Mencari...</span></div></div>');
            $.ajax({
                type: "GET",
                url: "carihasilusers",
                data: { 'cari': query },
                success: function (data) {
                    $('#read_data').html(data);
                }
            });
        } else {
            readData()
        }
    });
});
function readData() {
    $.get("read_data", {}, function (data) {
        $('#read_data').html(data);
    });
}


// $('#hasil_users').on('keyup', function () {
//     $value = $(this).val();
//     $.ajax({
//         type: 'get',
//         url: "searching",
//         data: { 'search': $value },
//         success: function (data) {
//             $('#read_data').html(data);
//         }
//     });
// })