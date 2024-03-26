const newslettersubmit = document.getElementById("newslettersubmit")
const newsletterform = document.getElementById("newsletterForm")


newslettersubmit.addEventListener("click", e => {
    
    e.preventDefault();
    let form = e.target.closest('form')
    if (form.checkValidity() == false) {
        form.reportValidity()
        return
    } else {
        document.querySelector('.loading-overlay').classList.remove("loading-bg")
        document.querySelector('.loading-overlay').classList.add("loading-tp-bg")
        document.querySelector('.loading-overlay').style.visibility = 'visible';
        document.querySelector('.loading-overlay').style.opacity = '1';
        document.getElementById("messagesuccesss").innerHTML = 'Loading please wait...';
        var newsletterEmail = $('#newsletterEmail').val();
        var send_data = { newsletterEmail: newsletterEmail };
        console.log(send_data)
        $.ajax({
            url: "php/newslettermail",
            type: "post",
            dataType: 'json',
            data: send_data,
            success: function (result) {
                if (result.Data == 'sent') {
                    document.querySelector('.loading-overlay').style.opacity = '0';
                    document.querySelector('.loading-overlay').style.visibility = 'hidden';
                    document.querySelector('.loading-overlay').classList.remove("loading-tp-bg")
                    document.querySelector('.loading-overlay').classList.add("loading-bg")
                    window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/mail-success`;
                }
            },
            error: function (result) {
                document.querySelector('.loading-overlay').style.opacity = '0';
                document.querySelector('.loading-overlay').style.visibility = 'hidden';
                document.querySelector('.loading-overlay').classList.remove("loading-tp-bg")
                document.querySelector('.loading-overlay').classList.add("loading-bg")
                console.log(result);
            }
        });
    }
})
