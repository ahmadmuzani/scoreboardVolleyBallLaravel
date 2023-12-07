
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
//         //end of ajax call
//     });
// });

// function hanyaHuruf(evt) {
//     var charCode = (evt.which) ? evt.which : event.keyCode
//     if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32) {
//         return false;
//     }
//     return true;
// }

//increment with keyboard
document.onkeydown = checkKey;
function checkKey(e) {
    e = e || window.event;

    //HOME key incr 1
    if ($('.incr1').prop('disabled')) {
        e.keyCode == '49';
    } else {
        if (e.keyCode == '49') {
            $('#incr1').click();
        }
    }
    // if (e.keyCode == '83') {
    //     $('#decr1').click();
    // }
    //AWAY key incr 2
    if ($('.incr2').prop('disabled')) {
        e.keyCode == '50';
    } else {
        if (e.keyCode == '50') {
            $('#incr2').click();
        }
    }

    // if (e.keyCode == '88') {
    //     $('#decr2').click();
    // }
    // if (e.keyCode == '') {
    //     $('#tambahSpike1').click();
    // }
}



$(document).ready(function () {
    //Boxscore 1


    $('.incr1').click(function (e) {
        e.preventDefault();
        var inc_value1 = $('.counter1').val();
        var inc_value2 = $('.counter2').val();
        var value = parseInt(inc_value1, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 35) {
            value++;
            $('.counter1').val(value);
        }
        if (inc_value1 >= 23 && inc_value2 >= 24) {
            $('#jus').show();
        }
        //jika box 1 26 dan box 2 24
        if (inc_value1 == 25 && inc_value2 == 24) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 27 dan box 2 25
        if (inc_value1 == 26 && inc_value2 == 25) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 28 dan box 2 26
        if (inc_value1 == 27 && inc_value2 == 26) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 29 dan box 2 27
        if (inc_value1 == 28 && inc_value2 == 27) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 30 dan box 2 28
        if (inc_value1 == 29 && inc_value2 == 28) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 31 dan box 2 29
        if (inc_value1 == 30 && inc_value2 == 29) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 32 dan box 1 30
        if (inc_value1 == 31 && inc_value2 == 30) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 33 dan box 1 31
        if (inc_value1 == 32 && inc_value2 == 31) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 34 dan box 1 32
        if (inc_value1 == 33 && inc_value2 == 32) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 35 dan box 1 33
        if (inc_value1 == 34 && inc_value2 == 33) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jik box 1 25 lebih dulu button incr disable dan button save enable
        if (inc_value1 == 24 && inc_value2 < 23) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        // if (value < 25) {
        //     $('#save_disable').attr('disabled', 'disabled');
        // }
    });

    $('.decr1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.counter1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.counter1').val(value);
        }
        // if (value < 25) {
        //     $('#save_disable').attr('disabled', 'disabled');
        // }
        // else {
        //     $('#save_disable').removeAttr('disabled');
        // }
    });

    // set
    $('.set_incr1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.set_game').val();
        var value = parseInt(inc_value, 5);
        value = isNaN(value) ? 5 : value;
        if (value) {
            value++;
            $('.set_game').val(value);
        }
        if (value > 5) {
            value = 1;
            $('.set_game').val(value);

        }
    });

    // $('.set_decr1').click(function (e) {
    //     e.preventDefault();
    //     var inc_value = $('.set_game').val();
    //     var value = parseInt(inc_value, 00);
    //     value = isNaN(value) ? 0 : value;
    //     if (value = 5) {
    //         value = 1;
    //         $('.set_game').val(value);
    //     }
    // });
    //Boxscore2
    $('.incr2').click(function (e) {
        e.preventDefault();
        var inc_value2 = $('.counter2').val();
        var inc_value1 = $('.counter1').val();
        var value = parseInt(inc_value2, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 35) {
            value++;
            $('.counter2').val(value);
        }
        if (inc_value2 >= 23 && inc_value1 >= 24) {
            $('#jus').show();
        }
        //jika box 1 24 dan box 2 26
        if (inc_value1 == 24 && inc_value2 == 25) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 25 dan box 2 27
        if (inc_value1 == 25 && inc_value2 == 26) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 26 dan box 2 28
        if (inc_value1 == 26 && inc_value2 == 27) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 27 dan box 2 29
        if (inc_value1 == 27 && inc_value2 == 28) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 28 dan box 2 30
        if (inc_value1 == 28 && inc_value2 == 29) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 29 dan box 2 31
        if (inc_value1 == 29 && inc_value2 == 30) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 30 dan box 2 32
        if (inc_value1 == 30 && inc_value2 == 31) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 31 dan box 2 33
        if (inc_value1 == 31 && inc_value2 == 32) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jika box 1 32 dan box 2 34
        if (inc_value1 == 32 && inc_value2 == 34) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        //jik box 2 25 lebih dulu button incr disable dan button save enable
        if (inc_value2 == 24 && inc_value1 < 23) {
            $('.incr1').prop('disabled', true);
            $('.decr1').prop('disabled', true);
            $('.incr2').prop('disabled', true);
            $('.decr2').prop('disabled', true);
            $('#save_disable').removeAttr('disabled');
        }
        // if (value < 25) {
        //     $('#save_disable').attr('disabled', 'disabled');
        // }
    });

    $('.decr2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.counter2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.counter2').val(value);
        }
        // if (value < 25) {
        //     $('#save_disable').attr('disabled', 'disabled');
        // }
        // else {
        //     $('#save_disable').removeAttr('disabled');
        // }

    });

    //game statistic
    // SPIKE
    $('.tambahSpike1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.spike1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.spike1').val(value);
        }
    });
    $('.tambahSpike2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.spike2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.spike2').val(value);
        }
    });

    $('.kurangSpike1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.spike1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.spike1').val(value);
        }
    });
    $('.kurangSpike2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.spike2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.spike2').val(value);
        }
    });

    //BLOCK
    $('.tambahBlock1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.block1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.block1').val(value);
        }
    });
    $('.tambahBlock2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.block2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.block2').val(value);
        }
    });

    $('.kurangBlock1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.block1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.block1').val(value);
        }
    });
    $('.kurangBlock2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.block2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.block2').val(value);
        }
    });

    //SERVE
    $('.tambahServe1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.serve1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.serve1').val(value);
        }
    });
    $('.tambahServe2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.serve2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.serve2').val(value);
        }
    });

    $('.kurangServe1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.serve1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.serve1').val(value);
        }
    });
    $('.kurangServe2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.serve2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.serve2').val(value);
        }
    });

    //OPPONENT
    $('.tambahOpponent1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.opponent1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.opponent1').val(value);
        }
    });
    $('.tambahOpponent2').click(function (e) {
        e.preventDefault();
        var inc_value = $('.opponent2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value < 100) {
            value++;
            $('.opponent2').val(value);
        }
    });

    $('.kurangOpponent1').click(function (e) {
        e.preventDefault();
        var inc_value = $('.opponent1').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.opponent1').val(value);
        }
    });
    $('.kurangOpponent').click(function (e) {
        e.preventDefault();
        var inc_value = $('.opponent2').val();
        var value = parseInt(inc_value, 0);
        value = isNaN(value) ? 0 : value;
        if (value > 0) {
            value--;
            $('.opponent2').val(value);
        }
    });

});





function switchText() {
    var obj1 = document.getElementById('left').value;
    var obj2 = document.getElementById('right').value;
    var obj3 = document.getElementById('counter1').value;
    var obj4 = document.getElementById('counter2').value;


    var temp = obj1;
    obj1 = obj2;
    obj2 = temp;

    var temp = obj3;
    obj3 = obj4;
    obj4 = temp;


    // Save the swapped values to the input element.
    document.getElementById('left').value = obj1;
    document.getElementById('right').value = obj2;
    // document.getElementById('counter1').value = obj3;
    // document.getElementById('counter2').value = obj4;
}



function clearText() {
    $('#jus').hide();
    $('.incr1').removeAttr('disabled');
    $('.incr2').removeAttr('disabled');
    $('.decr1').removeAttr('disabled');
    $('.decr2').removeAttr('disabled');
    $('.save-data').prop('disabled', true);
    // document.getElementById('left').value = '';
    // document.getElementById('right').value = '';
    document.getElementById('counter1').value = '0';
    document.getElementById('counter2').value = '0';
    document.getElementById('spike1').value = '0';
    document.getElementById('spike2').value = '0';
    document.getElementById('block1').value = '0';
    document.getElementById('block2').value = '0';
    document.getElementById('serve1').value = '0';
    document.getElementById('serve2').value = '0';
    document.getElementById('opponent1').value = '0';
    document.getElementById('opponent2').value = '0';
    // if (value < 25) {
    //     $('#save_disable').attr('disabled', 'disabled');
    // }
    // else {
    //     $('#save_disable').removeAttr('disabled');
    // }
}


// $('#increment-btn').click(function () {
//     $(this).slideUp();
// });

// const counter = document.getElementById('counter');
// const incr = document.querySelector('.incr');
// const decr = document.querySelector('.decr');

// let count = 0;
// incr.addEventListener("click", () => {
//     count++;
//     counter.innerHTML = count;
// });
// decr.addEventListener("click", () => {
//     count--;
//     counter.innerHTML = count;
// });

    // $('.incr1').click(function (e) {
    //     e.preventDefault();
    //     var inc_value1 = $('.counter1').val();
    //     var inc_value2 = $('.counter2').val();
    //     var value1 = parseInt(inc_value1, 0);
    //     var value2 = parseInt(inc_value2, 0);
    //     if (value1 < 24 || value2 < 24) {
    //         $('.save_disable').attr('disabled', 'disabled');
    //     } else {
    //         $('.save_disable').removeAttr('disabled');
    //     }
    // });
