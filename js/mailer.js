const SubmitData = document.getElementById("SubmitData")
const BodyEmail1 =document.getElementById("BodyEmail1")
const trans1 = document.getElementById("trans1") 
const transdata = document.getElementById("transdata")
const Hidetrans = document.getElementById("Hidetrans")

function ShowHideLoader(x){
    const loading = document.querySelector('.loading-overlay')
    if(x == true){
    loading.classList.remove("loading-bg")
    loading.classList.add("loading-tp-bg")
    loading.style.visibility = 'visible';
    loading.style.opacity = '1';
    }else{
    loading.classList.remove("loading-tp-bg")
    loading.classList.add("loading-bg")
    loading.style.visibility = 'hidden';
    loading.style.opacity = '0';
    }
}

SubmitData.addEventListener("click", e => {
    let form = e.target.closest('form')
    
    if(form.checkValidity() == false){
        return 
    }
    // if (BodyEmail.checkValidity() == false) {
    //     BodyEmail.reportValidity()
    //     return;
    // }
    document.querySelector('.loading-overlay').classList.remove("loading-bg")
    document.querySelector('.loading-overlay').classList.add("loading-tp-bg")
    document.querySelector('.loading-overlay').style.visibility = 'visible';
    document.querySelector('.loading-overlay').style.opacity = '1';
    document.getElementById("messagesuccesss").innerHTML = 'Loading please wait...';

    // document.querySelector('.loading-overlay').style.background = '#ffffff66 !important';
    // document.querySelector('.loading-overlay').style.opacity = '1';
    

    var name = $('#name').val();
    var sub = $('#sub').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var note = $('#note').val();
    var send_data = { email: email, name: name, phone: phone, sub: sub, note: note };
    console.log(send_data)
    // if (name == "" || email == "" || phone == "" || sub == "" || note == "") {
    //     alert('Please Enter All Details');
    //     return;
    // }
    
    $.ajax({
        url: `${document.getElementById("myBase").getAttribute("data-href")}/php/mailsent`,
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
          //  alert('Internal Server Error')
        }
    });
    e.preventDefault();
})

let saveClient = (send_data) => {

    return new Promise(function (resolve, reject) {
        $.ajax({
            url: "mailsent", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
            data: send_data,
            async: false,
            success: function (result) {
                
                // if (result.abc == 'sent') {
                //     console.log(result.abc)
                //     window.location.href = `${window.location.origin}/app/Template%20Main/mail-success.html`;
                // }
                resolve(result)
            },
            error: function (result) {
                reject(result);
                // console.log(result);
            }
        });
    })
}

function sendmail() {

    var name = $('#name').val();
    var sub = $('#sub').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var note = $('#note').val();
    var send_data = { email: email, name: name, phone: phone, sub: sub, note: note };
    console.log(send_data)

    saveClient(send_data).then((data) => {

    }).catch((err) => {
        console.log(err)
    })
}



trans1.addEventListener("click", e => {
    transdata.style.display = 'block';
    trans1.style.display = 'none';

})

Hidetrans.addEventListener("click", e => {
    transdata.style.display = 'none';
    trans1.style.display = 'block';
    document.documentElement.scrollTop = 0;
})