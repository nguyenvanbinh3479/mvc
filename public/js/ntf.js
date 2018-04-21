


type = ['', 'info', 'success', 'warning', 'danger'];


ntf = {



    showNotification: function(from, align, URL) {
    color = Math.floor((Math.random() * 4) + 1);
    $.notify({
        icon: "notifications",
        message: "Welcome to <b>M.S.C</b> - You have not entered your username or password"

    }, {
        type: type[color],
        timer: 100000,
        placement: {
            from: from,
            align: align
        }
    });
    
    setTimeout( function() { window.location = URL }, 1000 );
    }
}
