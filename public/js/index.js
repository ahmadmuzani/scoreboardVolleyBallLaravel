//pencarian hasil pertandingan
$(document).ready(function () {
    readData()
    $('#hasil').keyup(function () {
        var query = $('#hasil').val();
        if (query) {
            $('#resultt').hide();
            $('#read_data').show();

        } else {
            $('#resultt').show();
            $('#read_data').hide();
        }
        if (query != "") {
            $("#read_data").html('<div class="d-flex justify-content-center"><div class="spinner-border" style="margin-top:20%" role="status"><span class="visually-hidden">Mencari...</span></div></div>');
            $.ajax({
                type: "GET",
                url: "carilah",
                data: { 'cari': query },
                success: function (data) {
                    $('#read_data').html(data);
                }
            });
        } else {
            readData()
        }
    })
})
function readData() {
    $.get("read_data", {}, function (data, status) {
        $('#read_data').html(data);
    });
}


//cari berdasarkan tanggal
$(document).ready(function () {
    readData()
    $('#tanggal').keyup(function () {
        var query = $('#tanggal').val();
        if (query) {
            $('#resultt').hide();
            $('#read_data').show();

        } else {
            $('#resultt').show();
            $('#read_data').hide();
        }
        if (query != "") {
            $("#read_data").html('<div class="d-flex justify-content-center"><div class="spinner-border" style="margin-top:20%" role="status"><span class="visually-hidden">Mencari...</span></div></div>');
            $.ajax({
                type: "GET",
                url: "cari_tanggal",
                data: { 'cari': query },
                success: function (data) {
                    $('#read_data').html(data);
                }
            });
        } else {
            readData()
        }
    })
})
function readData() {
    $.get("read_data", {}, function (data, status) {
        $('#read_data').html(data);
    });
}