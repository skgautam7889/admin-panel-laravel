$("#admin-login-form").submit(function (e) {
    e.preventDefault();
    let email = $('#email').val();
    let pass = $('#password').val();
    if (!email) {
        alert("please enter email");
        return false;
    }
    if (!pass) {
        alert("please enter password");
        return false;
    }
    let data = { email: email, password: pass };
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: 'POST',
        url: '/admin/check-admin-credential',
        data: data,
        success: function (data) {
            let userData = JSON.parse(data);
            if (userData.status == "failed") {
                alert(userData.massage);
            }
            if (userData.status == "success") {
                alert(userData.massage);
                window.location.href = "admin/dashboard";
            }
        }
    });
});