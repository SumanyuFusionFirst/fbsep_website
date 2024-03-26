localStorage.clear();
let getQueryParams = () => {
    
    const campaignDetail = {
        campaignDetail: String(window.location.search)
    }; 
    const jsonString = JSON.stringify(campaignDetail);
    window.location.search ? localStorage.setItem("campaignDetail", jsonString) : localStorage.setItem("campaignDetail", null)
}
getQueryParams()