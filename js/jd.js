let applyNow = document.querySelector("a[href='positiondetails']")
if(applyNow){
applyNow.addEventListener("click", e => {
    
    let obj = new Object()
    obj.deptType = "BPO"
    obj.PositionApplied = "Trainee Associate"
    // obj.relavantExperience = "Do you have more than 6 months of relevant domain experience?"
    localStorage.setItem("CurrentPosition", JSON.stringify(obj))
    window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/positiondetails`
})
}
