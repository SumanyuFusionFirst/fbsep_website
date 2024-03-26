const SubmitGuest = document.getElementById("SubmitGuest")
const GuestForm =document.getElementById("GuestForm")
const publishedcontent = document.getElementById("publishedcontent")
const Articleimages = document.getElementById("Articleimages")
 publishedcontentPath = ""
 ArticleimagesPath = ""

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
allowedExtensions = /(\.png|\.jpeg|\.jpg)$/i;
allowedExtensions1 = /(\.doc|\.txt|\.docx|\.png|\.jpeg|\.jpg)$/i;

publishedcontent.addEventListener("change", e => {
    e.preventDefault()
    target = e.target
    file = target.files[0];
    let error = `<label class="error">File should be in doc, docx, or pdf format</label>`
    if (file.size > 2097152) {
      target.classList.add("is-invalid")
      let form = target.closest(".form-group")
      if (form.querySelector('.error')) {
        form.removeChild(form.querySelector('.error'));
      }
      let label = document.createElement("label")
      label.textContent = "File should be under 2MB"
      label.classList.add("error")
      form.appendChild(label)
      publishedcontent.value = ""
      return
    }
    if (!allowedExtensions1.exec(file.name)) {
      target.classList.add("is-invalid")
      let form = target.closest(".form-group")
      if (form.querySelector('.error')) {
        form.removeChild(form.querySelector('.error'));
      }
      let label = document.createElement("label")
      label.textContent = "File should be in jpeg, png or jpg format"
      label.classList.add("error")
      form.appendChild(label)
      publishedcontent.value = ""
      return
    }
    if (file.size < 2097152 && allowedExtensions1.exec(file.name)) {
      let dataPhoto = new FormData();
      dataPhoto.append('file', file, file.name);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'php/upload', true);
      xhr.send(dataPhoto);
      xhr.onload = function () {
        var response = JSON.parse(xhr.responseText);
        if (xhr.status === 200 && response.status == 'ok') {
          publishedcontentPath = `${document.getElementById("myBase").getAttribute("data-href")}${response.path.replace("..", "")}`
        } else if (response.status == 'type_err') {
          alert('Internal Server Error')
        } else {
          alert('Internal Server Error')
        }
      };
    }
  })

  Articleimages.addEventListener("change", e => {
    e.preventDefault()
    target = e.target
    file = target.files[0];
    let error = `<label class="error">File should be in jpeg, png or jpg format</label>`
    if (file.size > 2097152) {
      target.classList.add("is-invalid")
      let form = target.closest(".form-group")
      if (form.querySelector('.error')) {
        form.removeChild(form.querySelector('.error'));
      }
      let label = document.createElement("label")
      label.textContent = "File should be under 2MB"
      label.classList.add("error")
      form.appendChild(label)
      Articleimages.value = ""
      return
    }
    if (!allowedExtensions.exec(file.name)) {
      target.classList.add("is-invalid")
      let form = target.closest(".form-group")
      if (form.querySelector('.error')) {
        form.removeChild(form.querySelector('.error'));
      }
      let label = document.createElement("label")
      label.textContent = "File should be in jpeg, png or jpg format"
      label.classList.add("error")
      form.appendChild(label)
      Articleimages.value = ""
      return
    }
    if (file.size < 2097152 && allowedExtensions.exec(file.name)) {
      let dataPhoto = new FormData();
      dataPhoto.append('file', file, file.name);
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'php/upload', true);
      xhr.send(dataPhoto);
      xhr.onload = function () {
        var response = JSON.parse(xhr.responseText);
        if (xhr.status === 200 && response.status == 'ok') {
          
          ArticleimagesPath = `${document.getElementById("myBase").getAttribute("data-href")}${response.path.replace("..", "")}`
        } else if (response.status == 'type_err') {
          alert('Internal Server Error')
        } else {
          alert('Internal Server Error')
        }
      };
    }
  })


  SubmitGuest.addEventListener("click", e => {

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
    var website = $('#website').val();
    var email = $('#email').val();
    var linkedInprofile = $('#linkedInprofile').val();
    var articletitle = $('#articletitle').val();
    var TargetKeywords = $('#TargetKeywords').val();
    var ArticleDescription = $('#ArticleDescription').val();
    var Authorbio = $('#Authorbio').val();
    var Headshot = $('#Headshot').val();
    var send_data = { email: email, name: name, website: website,ArticleimagesPath: ArticleimagesPath,publishedcontentPath: publishedcontentPath, linkedInprofile: linkedInprofile, articletitle: articletitle, TargetKeywords: TargetKeywords,ArticleDescription: ArticleDescription,Authorbio: Authorbio,Headshot: Headshot, };
    console.log(send_data)
    // if (name == "" || email == "" || phone == "" || sub == "" || note == "") {
    //     alert('Please Enter All Details');
    //     return;
    // }
    
    $.ajax({
        url: "php/submit-guestmail",
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
            url: "submit-guestmail", //the page containing php script
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
    var website = $('#website').val();
    var email = $('#email').val();
    var linkedInprofile = $('#linkedInprofile').val();
    var articletitle = $('#articletitle').val();
    var TargetKeywords = $('#TargetKeywords').val();
    var ArticleDescription = $('#ArticleDescription').val();
    var Authorbio = $('#Authorbio').val();
    var Headshot = $('#Headshot').val();
    var send_data = { email: email, name: name, website: website,ArticleimagesPath: ArticleimagesPath,publishedcontentPath: publishedcontentPath, linkedInprofile: linkedInprofile, articletitle: articletitle, TargetKeywords: TargetKeywords,ArticleDescription: ArticleDescription,Authorbio: Authorbio,Headshot: Headshot, };
    console.log(send_data)

    saveClient(send_data).then((data) => {

    }).catch((err) => {
        console.log(err)
    })
}





