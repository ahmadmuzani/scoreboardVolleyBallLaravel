// $('#cari_hasil').on('keyup', function () {
//     $value = $(this).val();

//     $.ajax({
//         type: 'get',
//         url: "cari",
//         data: { 'cari': $value },
//         success: function (data) {
//             console.log(data);
//             $('#content_hasil').html(data);
//         }
//     });
// });

//disable enter saat input form
function stopEnterKey(e) {
    var evt = (e) ? e : ((e) ? e : null);
    var node = (e.target) ? e.target : ((e.srcElement) ? e.srcElement : null);
    if ((e.keyCode == 13) && (node.type == "text")) { return false; }
}
document.onkeypress = stopEnterKey;


//pencarian hasil pertandingan
$(document).ready(function () {
    readData()
    $('#cari_hasil').keyup(function () {
        var query = $('#cari_hasil').val();
        if (query) {
            $('#result_game').hide();

        } else {
            $('#result_game').show();

        }
        if (query != "") {
            $("#read_data").html('<div class="d-flex justify-content-center"><div class="spinner-border" style="margin-top:20%" role="status"><span class="visually-hidden">Mencari...</span></div></div>');
            $.ajax({
                type: "GET",
                url: "cari",
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










// function deleteData(id) {
//     swal({
//         title: "Anda yakin ingin menghapus data ini?",
//         text: "Data telah terhapus, anda tidak mengembalikannya!",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     })
//         .then((willdelete) => {
//             if (willdelete) {
//                 $()
//             }
//         })
// }
// $('#hapus').click(function () {
//     Swal.fire(
//         'The Internet?',
//         'That thing is still around?',
//         'question'
//     )
// });



//confirm hapus hasil pertandingan
// $('.result').click(function () {
//     var scoreboardid = $(this).attr('data-id');
//     Swal.fire({
//         title: 'Are you sure?',
//         text: "You won't be able to revert this!",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             window.location = "/delete/" + scoreboardid + ""
//             // Swal.fire(
//             //     'Deleted!',
//             //     'Your file has been deleted.',
//             //     'success'
//             // )
//         }
//     })
// })




//ganti foto profile
// function doAfterSelectImage(input) {
//     readURL(input);
//     uploadUserProfileImage();
// }
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function (e) {
//             $('#wrapper').css('background', 'url(' + e.target.result + ')');
//         };
//         reader.readAsDataURL(input.files[0]);
//     }
// }

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
        $('#mgs_ta').click();
        // $('#mgs_ta').html('<p style="color:red">Select a valid type image.. Only jpeg, jpg and png allowed!</p>')
    } else {
        $('#mgs_ta').empty();
        //image preview
        reader.onload = function (e) {
            $('#wrapper').css('background', 'url(' + e.target.result + ')').css('height', '200px').css('width', '200px').css('background-size', '100% 100%');
        }
        reader.readAsDataURL(this.files[0]);
        //preview end

        //upload
        var postData = new FormData();
        postData.append('file', this.files[0]);
        // var url = "{{('ajaxuploadimg')}}";
        $.ajax({
            headers: { 'X-CSRF-Token': $('meta[name=csrf_token]').attr('content') },
            async: true,
            type: "post",
            contentType: false,
            url: "ajaxuploadimg",
            data: postData,
            processData: false,
            success: function () {
                console.log("success")
            }
        });
    }
});



// function uploadUserProfileImage() {
//     let myForm = document.getElementById('user_save_profile_form');
//     let formData = new FormData(myForm);
//     var url = "{{url('save.profile.image')}}";
//     $.ajax({
//         type: 'POST',
//         data: formData,
//         dataType: 'JSON',
//         contentType: false,
//         cache: false,
//         processData: false,
//         url: url,
//         success: function (response) {
//             if (response == 200) {
//                 $('#notif').fadeIn();
//                 $('#notif').css('background', 'blue');
//                 $('#notif').text('Photos saved');
//                 setTimeout(() => {
//                     $('#notif').fadeOut();
//                 }, 3000);
//             } else if (response == 700) {
//                 $('#notif').fadeIn();
//                 $('#notif').css('background', 'red');
//                 $('#notif').text('An error accured. Please try later');
//                 setTimeout(() => {
//                     $('#notif').fadeOut();
//                 }, 3000);
//             }
//         }.bind($(this))
//     });
// }








//alert delete
// $('.deleteData').click(function () {
//     var scoreboardid = $(this).attr('data-id');
//     swal({
//         title: "Anda yakin?",
//         text: "Kamu akan menghapus data dan tidak bisa dikembalikan",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,
//     })
//         .then((willDelete) => {
//             if (willDelete) {
//                 window.location = "/delete/" + scoreboardid + ""
//                 swal("Yeay! Data berhasil dihapus!", {
//                     icon: "success",
//                 });
//             } else {
//                 swal("Data tidak jadi dihapus!");
//             }
//         });
// });



// function show(id) {
//     $.get("{{url ('show') }}/" + id, {}, function (data, status) {
//         $("#exampleModalLabel").html('edit');
//         $("#page").html(data);
//         $("#exampleModal").modal('show');
//     })
// }


