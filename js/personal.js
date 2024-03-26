firstName = document.getElementById('firstName');
lastName = document.getElementById('lastName');
fatherName = document.getElementById('fatherName');
gender = document.getElementsByName('gender');
dob = document.getElementById('dob');
maritalStatus = document.getElementById('maritalStatus');
aadhaar = document.getElementById('aadhaar');
email = document.getElementById('email');
mobile = document.getElementById('mobile');
phone = document.getElementById('phone');
sameAddCheckBox = document.getElementById('sameAddress');
sameAddCheckBox = document.getElementById('sameAddress');
sameAddCheckBox = document.getElementById('sameAddress');
currentAddress = document.getElementById('currentAddress');
State = document.getElementsByName('State')[0];
City = document.getElementById('City');
pin = document.getElementById('pin');
permanentAddress = document.getElementById('permanentAddress');
permanentState = document.getElementsByName('permanentState')[0];
permanentCity = document.getElementById('permanentCity');
permanentPin = document.getElementById('permanentPin');
nextBtn = document.getElementById('nextBtn');
form = document.getElementById('personalDetails');
previousBtn = document.getElementById('previous');
Resume = document.getElementById('Resume')
Photo = document.getElementById('Photo')
spouseField = document.getElementById('spouseField')
spouseName = document.getElementById('spouseName')
photoPath = ""  
resumePath = ""

let getQueryStr = JSON.parse(localStorage.getItem("positionDetails"))

if(getQueryStr){
  PositionDetailsHref = document.getElementById("PositionDetailsHref")
  PositionDetailsHref.setAttribute('href', `${document.getElementById("myBase").getAttribute("data-href")}/positiondetails${getQueryStr.queryString}`)
}

sameAddCheckBox.addEventListener('change',(e)=>{
  const checked = document.querySelectorAll('input[type="checkbox"]:checked')
  selected = Array.from(checked).map(x => x.value)
  if(selected.length > 0){
    document.querySelectorAll('#SameAsCurrentDiv input, select').forEach((e)=>{
      if(e.value){
        $(`#${e.id}`).removeClass("is-invalid");
        $(`#${e.id}`).addClass("is-valid");
        $(`#${e.id}-error`).hide();
      }
  })
  }
})

allowedExtensions = /(\.png|\.jpeg|\.jpg)$/i;
allowedExtensions1 = /(\.doc|\.docx|\.pdf)$/i;

$(function(){
  var dtToday = new Date();
  var month = dtToday.getMonth() + 1;// jan=0; feb=1 .......
  var day = dtToday.getDate();
  var year = dtToday.getFullYear() - 18;
  if(month < 10)
      month = '0' + month.toString();
  if(day < 10)
      day = '0' + day.toString();
var minDate = year + '-' + month + '-' + day;
  var maxDate = year + '-' + month + '-' + day;
$('#dob').attr('max', maxDate);
});

function isNumber(evt) {
   evt = (evt) ? evt : window.event;
   var charCode = (evt.which) ? evt.which : evt.keyCode;
   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
      }
     return true;
  }

Resume.addEventListener("change", e => {
  e.preventDefault()
  target = e.target
  file = target.files[0];
  let error = `<label class="error">File should be in pdf, doc or docx format</label>`
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
    Resume.value = ""
    return
  }
  if (!allowedExtensions1.exec(file.name)) {
    target.classList.add("is-invalid")
    let form = target.closest(".form-group")
    if (form.querySelector('.error')) {
      form.removeChild(form.querySelector('.error'));
    }
    let label = document.createElement("label")
    label.textContent = "File should be in pdf, doc or docx format"
    label.classList.add("error")
    form.appendChild(label)
    Resume.value = ""
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
        
        resumePath = `${document.getElementById("myBase").getAttribute("data-href")}${response.path.replace("..", "")}`
      } else if (response.status == 'type_err') {
        alert('Internal Server Error')
      } else {
        alert('Internal Server Error')
      }
    };
  }
})

Photo.addEventListener("change", e => {
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
    Photo.value = ""
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
    Photo.value = ""
    return
  }
  if (file.size < 2097152 && allowedExtensions.exec(file.name)) {

    let dataPhoto = new FormData();
    dataPhoto.append('file', file, file.name);
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'php/upload', true);
    xhr.send(dataPhoto);
    xhr.onload = async function () {

      var response = await JSON.parse(xhr.responseText);

      if (xhr.status === 200 && response.status == 'ok') {
        
        photoPath = `${document.getElementById("myBase").getAttribute("data-href")}${response.path.replace("..", "")}`

      } else if (response.status == 'type_err') {
        alert('Internal Server Error')
      } else {
        alert('Internal Server Error')
      }
    };
  }
})

let getQuery = () => {
  
  let positionDetails = JSON.parse(localStorage.getItem("positionDetails"))
  if (positionDetails) {
  } else {
    window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/positiondetails`
    return
  }
  
  let PersonalDetails = JSON.parse(localStorage.getItem("PersonalDetails"))
  if (PersonalDetails) {
    Object.entries(PersonalDetails).forEach(e => {
      if (e[0] == 'gender') {
        gender.forEach(f => {
          f.value == e[1] ? f.checked = true : ''
        })
      } else {
        try {
          document.getElementById(e[0]).value = e[1]
        } catch (err) {
          console.log(`Error = ${e}`)
        }
      }
    })
  
  document.getElementById("email").value = PersonalDetails.email
  if (PersonalDetails.image_url != "") {
    photoPath = PersonalDetails.image_url
    const myFile = new File(['Hello World!'], `${PersonalDetails.image_url.split('/')[PersonalDetails.image_url.split('/').length - 1]
      }`, {
      type: 'text/plain',
      lastModified: new Date(),
    });
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(myFile);
    document.getElementById("Photo").files = dataTransfer.files;
  }

  if (PersonalDetails.resume_url != "") {
    resumePath = PersonalDetails.resume_url
    const myFile = new File(['Hello World!'], `${PersonalDetails.resume_url.split('/')[PersonalDetails.resume_url.split('/').length - 1]
      }`, {
      type: 'text/plain',
      lastModified: new Date(),
    });
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(myFile);
    document.getElementById("Resume").files = dataTransfer.files;
  }
}
}

maritalStatus.addEventListener('change', e => {
  if(e.target.value == "Married"){
    spouseField.style.display = "block"
    spouseName.setAttribute("required", "")
  }
  else{
    spouseField.style.display = "none"
    spouseName.removeAttribute("required")
  }
})

getQuery()

const Obj = new Object;

function adharNoFormate(value) {
  if (!value) return value;
  const ssn = value.replace(/[^\d]/g, '');
  const ssnLength = ssn.length;
  if (ssnLength < 4) return ssn;
  if (ssnLength < 6) {
    return `${ssn.slice(0, 3)} ${ssn.slice(3, 6)}`;
  }
  return `${ssn.slice(0, 3)} ${ssn.slice(3, 7)} ${ssn.slice(7, 12)}`;
}

function adharFormatter() {
  const formattedInputValue = adharNoFormate(aadhaar.value);
  aadhaar.value = formattedInputValue;
}

function fillAddress() {
  permanentAddress.value = currentAddress.value;
  permanentState.value = State.value;
  permanentCity.value = City.value;
  permanentPin.value = pin.value;
}
function SaveToLocal() {

  // if(form.checkValidity() == false){
  //   return
  // }else{

  localStorage.removeItem("PersonalDetails");
  const data = document.querySelector('form').querySelectorAll("input[type='text']");
  Array.from(data).forEach(e => {
    let id = e.getAttribute('id')
    Obj[id] = document.getElementById(id).value
  })
  
  Obj.gender = document.querySelector('input[name="gender"]:checked').value
  Obj.dob = dob.value
  Obj.maritalStatus = maritalStatus.value
  Obj.permanentState = permanentState.value
  Obj.State = State.value
  Obj.dob = dob.value
  Obj.image_url = photoPath
  Obj.resume_url = resumePath
  // Obj.mobile = mobile.value
  // Obj.phone = phone.value
  Obj.email = email.value
  localStorage.setItem('PersonalDetails', JSON.stringify(Obj))
  // window.location.href = `${window.location.origin}/app/fbspl_website/educationaldetails`

}
// }

function previousPage() {
  
  let positionDetails = JSON.parse(localStorage.getItem("positionDetails"))
  window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/positiondetails${positionDetails.queryString}`
}

sameAddCheckBox.addEventListener('click', fillAddress)
nextBtn.addEventListener('click', SaveToLocal)
previousBtn.addEventListener('click', previousPage)

