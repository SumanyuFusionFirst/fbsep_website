<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<!-- position start -->
<?php include("loader.php"); ?>

<section id="formSuccess" style="display:none;">
    <div class="container">
        <section class="http-error py-0" style="height:80vh">
            <div class="row justify-content-center py-3">
                <div class="col-7 text-center">
                    <div class="http-error-main">
                        <!-- fa fa-circle-exclamation text-danger mb-2-->
                        <i class="fa fa-thumbs-up text-primary mb-2" style="font-size: 100px;"></i>
                        <h1 class=" text-5 font-weight-bold text-color-dark mb-2"></h1>
                        <p class="text-3 mt-2 line-height-8">
                        </p>
                    </div>
                    <div id="showResponse" style="display:none">
                        <div class="Copylabel">
                            Registration Id:
                        </div>
                        <div class="copy-text pb-0" style="margin: auto;width: max-content;">
                            <input type="text" class="text" value="" />
                            <button><i class="fa fa-clone"></i></button>
                        </div>
                        <div class="Copylabel">
                            Email:
                        </div>
                        <div class="copy-text pb-0" style="margin: auto;width: max-content;margin-bottom: 10px;">
                            <input type="text" class="text" value="" />
                            <button><i class="fa fa-clone"></i></button>
                        </div>
                        <div class="Copylabel"
                            style="font-weight: 500;color: #f95a5a;width: max-content;padding-bottom: 14px;">
                            Please note down the registration ID and email for your process.
                        </div>
                    </div>
                    <a href="<?= $baseurl2 ?>/careers"
                        class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3"><i
                            class="fas fa-arrow-left ms-2"></i> GO BACK TO CAREER PAGE</a>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->

<script>
    
    const urlSearchParams = new URLSearchParams(window.location.search);
    const params = Object.fromEntries(urlSearchParams.entries());
    let response = null
    try {
        response = JSON.parse(atob(params.q))
    }
    catch (err) {
        response = null
    }

    if (response) {
        // let response = JSON.parse(atob(params.q))
        if (response.Success == true) {
            let className = "text-color-success";
            const showResponse = document.querySelectorAll("#showResponse input");
            const formSuccess = document.querySelector("#formSuccess");
            formSuccess.style.display = "block";
            formSuccess.querySelector("h1").classList.add(className);
            formSuccess.querySelector("h1").textContent =
                "Congratulations! Your application has been successfully submitted.";
            if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
                document.querySelector("#showResponse").style.display = "block";
                showResponse[0].value = response["ID"];
                showResponse[1].value = response["Email"];
            }
        } else {
            const showResponse = document.querySelectorAll("#showResponse input");
            let className = "text-color-danger";
            const formSuccess = document.querySelector("#formSuccess");
            formSuccess.style.display = "block";
            formSuccess.querySelector("h1").classList.add(className);
            formSuccess.querySelector("h1").textContent = response.ErrorMessage || "Error";
            if (response.hasOwnProperty("ID") && response.hasOwnProperty("Email")) {
                document.querySelector("#showResponse").style.display = "block";
                showResponse[0].value = response["ID"];
                showResponse[1].value = response["Email"];
            }
        }
    } else {
        window.location.href = `${document
            .getElementById("myBase")
            .getAttribute("data-href")}/career`;
    }
</script>