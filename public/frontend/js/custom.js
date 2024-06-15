function customAjaxCall(url, data, actionFunction) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        dataType: 'json',
        success: function (response) {
            actionFunction(response)
        }
    });
}

function popMessage(message) {
    swal({
        title: '',
        text: message,
        icon: "warning",
        buttons: true,
        dangerMode: true,
        showCancelButton: true,
    }) .then((willCancel) => {
        if (willCancel) {
            return true
        }
    })
}

function sweet_alert(code, message, setTimeOut = 1000) {
    if(code == 103){
        swal({
            title: '',
            text: message,
            icon: "success",
            buttons: false,
            timer: setTimeOut,
        })
    }else{
        swal({
            title: '',
            text: message,
            icon: "error",
            buttons: false,
            timer: setTimeOut,
        })
    }
}




// function customAjaxCall(url, data, actionFunction) {
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//         }
//     });
//     $.ajax({
//         type: 'POST',
//         url: url,
//         data: data,
//         dataType: 'json',
//         success: function (response) {
//             actionFunction(response)
//         }
//     });
// }


function popup(code, message,) {
    if(code == 105){
        swal({
            title: '',
            text: message,
            icon: "success",
            buttons: false,
        })
    }else{
        swal({
            title: '',
            text: message,
            icon: "error",
            buttons: false,
        })
    }
}


