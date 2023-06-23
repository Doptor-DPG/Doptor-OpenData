function searchUsernameByNid() {
    var nid = document.getElementById('nid_no_input').value;
    if (nid == null || nid == '') {
        Swal.fire({
            icon: 'error', title: 'NID নম্বর ইনপুট দিন।',
        })
        return;
    }
    var url = '/api/user/search/nid';
    $.post(url, {nid}, function (response) {
        if (response.status == 'success') {
            Swal.fire({
                icon: 'success', title: 'ইউজার আইডিঃ ' + response.data.username,
            })
        } else {
            Swal.fire({
                icon: 'error', title: 'Error', text: response.message,
            })
        }
    });
}

function switchTab(element) {
    area = $(element).attr('aria-controls');
    $('.nav-link').removeClass('show');
    $('.nav-link').removeClass('active');
    $('.tab-pane.fade').removeClass('active')
    $('#' + area).addClass('active');
    $('#' + area).addClass('show');
}