let mobileDrop = document.querySelectorAll("#mainNavMobile .dropdown a i")

Array.from(mobileDrop).forEach((e, index) => {
    e.addEventListener("click", f => {
        // Array.from(mobileDrop).forEach((x, i) => {
        //     if(index != i){
        //         x.closest("li").classList.remove("open")
        //     }
        // })
        if(f.target.closest("li").classList.contains("open") == true){
            f.target.closest("li").classList.remove("open")
            // f.target.closest("li").querySelector("i").setAttribute("class", "fa-solid fa-angle-down")
        }else{
            f.target.closest("li").classList.add("open")
            // f.target.closest("li").querySelector("i").setAttribute("class", "fa-solid fa-angle-up")
        }
        f.preventDefault()
    })
})
