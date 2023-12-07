var team = [
    obj1 = document.getElementById('1').value,
    obj2 = document.getElementById('2').value,
    obj3 = document.getElementById('3').value,
    obj4 = document.getElementById('4').value,
];
var text = "";

function shuffle(array) {
    var currentIndex = array.length, temporaryValue, randomIndex;

    // While there remain elements to shuffle...
    while (0 !== currentIndex) {

        // Pick a remaining element...
        var randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // And swap it with the current element.
        var temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}


function shuffler() {
    shuffle(team);
    document.getElementById("1").innerHTML = team[0];
    document.getElementById("2").innerHTML = team[1];
    document.getElementById("3").innerHTML = team[2];
    document.getElementById("4").innerHTML = team[3];
    document.getElementById("player-4").innerHTML = team[4];
    document.getElementById("player-5").innerHTML = team[5];
    document.getElementById("player-6").innerHTML = team[6];
    document.getElementById("player-7").innerHTML = team[7];
    document.getElementById("player-8").innerHTML = team[8];
}

// var myInterval = setInterval(shuffler, 50);
// clearInterval(myInterval);

document.getElementById("random").addEventListener("click", shuffler);

window.addEventListener("keypress", checkKeyPressed, false);

function checkKeyPressed(e) {
    if (e.charCode == "32") {
        document.getElementById("random").addEventListener("click", shuffler);
    }
}





$(document).ready(function () {
    $("#btn1").click(function () {
        $("#1").show(1000);
        $("#2").hide(1000);
        $("#3").hide(1000);
        $("#4").hide(1000);
        $("#5").hide(1000);
        $("#6").hide(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn2").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").hide(1000);
        $("#4").hide(1000);
        $("#5").hide(1000);
        $("#6").hide(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn3").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").hide(1000);
        $("#5").hide(1000);
        $("#6").hide(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn4").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").hide(1000);
        $("#6").hide(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn5").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").hide(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn6").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").hide(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn7").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").hide(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn8").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").hide(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn9").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").hide(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn10").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").hide(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn11").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").hide(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn12").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").show(1000);
        $("#13").hide(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn13").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").show(1000);
        $("#13").show(1000);
        $("#14").hide(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn14").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").show(1000);
        $("#13").show(1000);
        $("#14").show(1000);
        $("#15").hide(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn15").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").show(1000);
        $("#13").show(1000);
        $("#14").show(1000);
        $("#15").show(1000);
        $("#16").hide(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});
$(document).ready(function () {
    $("#btn16").click(function () {
        $("#1").show(1000);
        $("#2").show(1000);
        $("#3").show(1000);
        $("#4").show(1000);
        $("#5").show(1000);
        $("#6").show(1000);
        $("#7").show(1000);
        $("#8").show(1000);
        $("#9").show(1000);
        $("#10").show(1000);
        $("#11").show(1000);
        $("#12").show(1000);
        $("#13").show(1000);
        $("#14").show(1000);
        $("#15").show(1000);
        $("#16").show(1000);

        // $("#content").hide(2000);
        // $(".lorem").hide(2000);
        // $("#contak").hide(2000);
        // $(".isiskill").hide(2000);
    });
});






















// const btn = document.getElementById('.btn-masukan');
// const jmlteam = document.getElementById('.jumlahteam');
// const 

// $('#jumlahteam').on('change', function(){
//     const select = $('#jumlahteam').val();
//     $()
// })

// function tampil() {
//     var obj1 = document.getElementById('tim1').value = '1';
//     var obj2 = document.getElementById('tim2').value = '2';
//     // var obj3 = document.getElementById('tim3').value = '3';
//     // var obj4 = document.getElementById('tim4').value = '4';
//     if (document.getElementById("jumlahteam").value = obj1) {
//         document.getElementById("1").style.display = 'inline';
//     } else if (document.getElementById("jumlahteam").value = ['obj1', 'obj2']) {
//         document.getElementById("1").style.display = 'inline';
//         document.getElementById("2").style.display = 'inline';
//     }
// }
//     // } else {
//     //     document.getElementById("2").style.display = 'none'
//     // }
//     // if (document.getElementById("jumlahteam").value = obj2) {
//     //     document.getElementById("2").style.display = 'inline';
//     // }

// }




    // if (document.getElementById("jumlahteam").value) {
    //     document.getElementById("1").style.display = 'inline';
    // }
    // if (document.getElementById("jumlahteam").value) {
    //     document.getElementById("2").style.display = 'inline';
    // }
    // if (document.getElementById("jumlahteam").value) {
    //     document.getElementById("3").style.display = 'inline';
    // }


    // if (this.selectedIndex == 1) {
    //     document.getElementById("1").style.display = 'inline';
    // }
// }

    // if (this.selectedIndex == 1) {
    //     document.getElementById("1").style.display = 'inline';
    // };

