$('.coba').click(function () {
    Swal.fire({
        icon: 'error',
        title: '<h6>Select a valid type image.. Only jpeg and jpg allowed!</h6>',
        showConfirmButton: false,
        timer: 4000
    })
});


$('#profile_pict').on('change', function (e) {
    var fileData = this.files[0];
    var imgType = fileData.type;
    var reader = new FileReader();
    //validasi type image
    var match = ['image/jpeg', 'image/jpg'];
    if (!(imgType == match[0]) || (imgType == match[1])) {
        $('.coba').click();
        // $('#mgs_ta').html('<p style="color:red">Select a valid type image.. Only jpeg, jpg and png allowed!</p>')
    } else {
        $('#mgs_ta').empty();
        //image preview
        reader.onload = function (e) {
            $('#wrapper').css('background', 'url(' + e.target.result + ')').css('height', '150px').css('width', '150px').css('background-size', '100% 100%');
        }
        reader.readAsDataURL(this.files[0]);
        //preview end
        //upload

    }
});

// $('.coba2').click(function () {
//     Swal.fire({
//         icon: 'error',
//         title: '<h6>Select a valid type image.. Only jpeg and jpg allowed!</h6>',
//         showConfirmButton: false,
//         timer: 4000
//     })
// });


// $('#profile_pict2').on('change', function (e) {
//     var fileData = this.files[0];
//     var imgType = fileData.type;
//     var reader = new FileReader();
//     //validasi type image
//     var match = ['image/jpeg', 'image/jpg'];
//     if (!(imgType == match[0]) || (imgType == match[1])) {
//         $('.coba2').click();
//         // $('#mgs_ta').html('<p style="color:red">Select a valid type image.. Only jpeg, jpg and png allowed!</p>')
//     } else {
//         $('#mgs_ta2').empty();
//         //image preview
//         reader.onload = function (e) {
//             $('#wrapper2').css('background', 'url(' + e.target.result + ')').css('height', '150px').css('width', '150px').css('background-size', '100% 100%');
//         }
//         reader.readAsDataURL(this.files[0]);
//         //preview end
//         var postData = new FormData();
//         postData.append('file', this.files[0]);
//         // var url = "{{('ajaxuploadimg')}}";
//         $.ajax({
//             headers: { 'X-CSRF-Token': $('meta[name=csrf_token]').attr('content') },
//             async: true,
//             type: "post",
//             contentType: false,
//             url: "ajaxuploadimg",
//             data: postData,
//             processData: false,
//             success: function () {
//                 console.log("success")
//             }
//         });
//     }
// });

$(document).ready(function () {

    $("#form").on('submit', function (e) {
        e.preventDefault();
        var formData = $("#form").serializeArray();
        console.log(formData);
        $.ajax({
            url: "scoreboard/create",
            type: 'post',
            data: formData,
            dataType: 'text',
            success: function (res) {
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: 'Hasil pertandingan telah tersimpan',
                    showConfirmButton: false,
                    timer: 1500
                })

                $(".set_incr1").click();
                $(".clear").click();

                // $(".save-data").removeClass('disabled').text('submit');
            }
        })
        if ($('.save-data').click()) {
            $('#save_disable').attr('disabled', 'disabled');
        }
        // if ($('.clear').click()) {
        //     $('.incr1').removeAttr('disabled');
        //     $('.incr2').removeAttr('disabled');
        //     $('.decr1').removeAttr('disabled');
        //     $('.decr2').removeAttr('disabled');
        // }


        // var team1 = $("#left").val();
        // var team2 = $("#right").val();
        // var counter1 = $("#counter1").val();
        // var counter2 = $("#counter2").val();
        // var set = $("#set").val();
        // var spike1 = $("#spike1").val();
        // var spike2 = $("#spike2").val();
        // var block1 = $("#block1").val();
        // var block2 = $("#block2").val();
        // var serve1 = $("#serve1").val();
        // var serve2 = $("#serve2").val();
        // var opponent1 = $("#opponent1").val();
        // var opponent2 = $("#opponent2").val();

        // $.ajax({
        //     type: 'get',
        //     url: "storeData",
        //     data: {
        //         'team1': team1,
        //         'team2': team2,
        //         'counter1': counter1,
        //         'counter2': counter2,
        //         'set': set,
        //         'spike1': spike1,
        //         'spike2': spike2,
        //         'block1': block1,
        //         'block2': block2,
        //         'serve1': serve1,
        //         'serve2': serve2,
        //         'opponent1': opponent1,
        //         'opponent2': opponent2,
        //     },
        //     success: function (e) {
        //         $(".clear").click();
        //         Swal.fire({
        //             position: 'top-end',
        //             icon: 'success',
        //             title: 'Your work has been saved',
        //             showConfirmButton: false,
        //             timer: 1500
        //         })
        //     }
        // })
    })

})

