$(document).ready(function () {
    setTimeout(function () {
        $("#danger-alert").slideToggle();
    }, 4000);
});
$(document).ready(function () {
    setTimeout(function () {
        $("#success-alert").slideToggle();
    }, 4000);
});

$(document).ready(function () {
    setTimeout(function () {
        $("#pesan-error").slideToggle();
    }, 5000);
});
$(document).ready(function () {
    setTimeout(function () {
        $("#passwordnotmatch").slideToggle();
    }, 4000);
});






// $(document).ready(function () {
//     $('#search').on('keyup', function () {
//         var query = $(this).val();
//         $.ajax({
//             url: "search",
//             type: "GET",
//             data: { 'search': query },
//             success: function (data) {
//                 $('#search_list').html(data);
//             }
//         });
//     });
// });





// $(document).ready(function () {
//     window.setTimeout(function () {
//         $("#danger-alert").alert('close');
//     }, 2000);
// });
// window.setTimeout(function () {
//     $("#danger-alert").fadeTo(500, 0).slideUp(500, function () {
//         $(this).remove();
//     });
// }, 3000);
// $('div.alert').not('.alert-important').delay(3000).slideUp(300);



