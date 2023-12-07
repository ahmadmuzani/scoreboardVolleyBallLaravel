$('#hapusphotos').click(function () {
    var users = $(this).attr('data-image');
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "/deletephotos/" + users + ""
            // Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            // )
        }
    })
})

// $('#ganti').click(function () {
//     const { value: file } = await Swal.fire({
//         title: 'Select image',
//         input: 'file',
//         inputAttributes: {
//             'accept': 'image/*',
//             'aria-label': 'Upload your profile picture'
//         }
//     })

//     if (file) {
//         const reader = new FileReader()
//         reader.onload = (e) => {
//             Swal.fire({
//                 title: 'Your uploaded picture',
//                 imageUrl: e.target.result,
//                 imageAlt: 'The uploaded picture'
//             })
//         }
//         reader.readAsDataURL(file)
//     }
// })

// $('.hapusFoto').click(function () {
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
//             Swal.fire(
//                 'Deleted!',
//                 'Your file has been deleted.',
//                 'success'
//             )
//         }
//     })
// })

