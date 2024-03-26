function submitnow() {

    var name = $('#footername').val();
    var email = $('#footeremail').val();

    var note = $('#footermessage').val();
    var send_data = { email: footeremail, name: footername,  note: footermessage };
    console.log(send_data)

    saveClient(send_data).then((data) => {

    }).catch((err) => {
        console.log(err)
    })
}
