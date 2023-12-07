
// $(document).ready(function () {
//     $('#cari').on('keyup', function () {
//         var query = $(this).val();
//         $.ajax({
//             url: "cari",
//             type: "GET",
//             data: { 'cari': query },
//             success: function (data) {
//                 $('#cari_tampil').html(data);
//             }
//         });
//     });
// }); 


// $("#save_disable").on('click', function () {
//     var team1 = $("#left").val();
//     var team2 = $("#right").val();
//     var score1 = $("#counter1").val();
//     var score2 = $("#counter2").val();
//     var set = $("#set_game").val();
//     var spike1 = $("#spike1").val();
//     var spike2 = $("#spike2").val();
//     var block1 = $("#block1").val();
//     var block2 = $("#block2").val();
//     var serve1 = $("#serve1").val();
//     var serve2 = $("#serve2").val();
//     var opponent1 = $("#opponent1").val();
//     var opponent2 = $("#opponent2").val();

//     $.ajax({
//         type: "GET",
//         url: "store",
//         data: {
//             "team1": team1,
//             "team2": team2,
//             "score1": score1,
//             "score2": score2,
//             "set": set,
//             "spike1": spike1,
//             "spike2": spike2,
//             "block1": block1,
//             "block2": block2,
//             "serve1": serve1,
//             "serve2": serve2,
//             "opponent1": opponent1,
//             "opponent2": opponent2,
//         },
//         success: function (e) {
//             Swal.fire('Any fool can use a computer')
//         }
//     });
// });

// if (jQuery.browser.mobile) {

//     $('#detect-mobile').click(function () {
//         Swal.fire({
//             title: 'Rotate Your Phone!',
//             text: 'landscape your phone to be better!',
//             imageUrl: 'https://unsplash.it/400/200',
//             imageWidth: 400,
//             imageHeight: 200,
//             imageAlt: 'Custom image',
//         });
//     });

// }
//disable enter saat input form
function stopEnterKey(e) {
    var evt = (e) ? e : ((e) ? e : null);
    var node = (e.target) ? e.target : ((e.srcElement) ? e.srcElement : null);
    if ((e.keyCode == 13) && (node.type == "text")) { return false; }
}
document.onkeypress = stopEnterKey;

//detect mobile browser
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    Swal.fire({
        title: 'Rotate Your Mobile Phone!',
        text: 'Landscape view be better.',
        imageUrl: '/assets/img/landscape.png',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
    });
}

$(document).ready(function () {
    readData()
    $('#search').keyup(function () {
        var query = $('#search').val();
        if (query != "") {
            $("#read").html('<center><p class="text-muted">Mencari..</p></center>');
            $.ajax({
                type: "GET",
                url: "search",
                data: { 'search': query },
                success: function (data) {
                    $('#read').html(data);
                }
            });
        } else {
            readData()
        }
    })
})
function readData() {
    $.get("read", {}, function (data, status) {
        $('#read').html(data);
    });
}
