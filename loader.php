<div class="loading-overlay loading-bg loaderShow">
    <div class="flexbox" style="border: none;" >
        <div style="align-items: end;flex-basis: 100%;height: 50vh;">
            <div style="position: absolute;">
                <img src="<?= $baseurl;?>/img/FBSPL/header/FBSPLNewLoader.svg" style="height: 80px;margin: 68px; border: none;">
            </div>
            <div class="multi-spinner-container">
                <div class="multi-spinner">
                    <div class="multi-spinner">
                        <div class="multi-spinner">
                            <div class="multi-spinner">
                                <div class="multi-spinner">
                                    <div class="multi-spinner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flexbox">
        <div style="flex-basis: 100%;height: 10vh;align-items:flex-start;border:none">
            <div>
                <h5 class="text-center" id="messagesuccesss">
                    “Success is Sure, Believe in Phoenix”
                </h5>
            </div>
        </div>
    </div>
</div>
<script>
function get_random() {
    var list = ['“Success is Sure, Believe in Phoenix”', '“Focus on being productive, instead of busy”',
        '“Step by step and the thing is done.”', '“Micromanage the process, not the people”'
    ]
   //  arr = window.location.href.split('/');
   //  if (arr[arr.length - 1] == 'contact-fbspl') {
   //      return "loading please wait";
   //  } else {
   //      return list[Math.floor((Math.random() * list.length))];
   //  }


    // arr[arr.length - 1] == 'contact-fbspl'

    //   var list= ['“Success is Sure, Believe in Phoenix”','“Focus on being productive, instead of busy”','“Step by step and the thing is done.”','“Micromanage the process, not the people”']

     return list[Math.floor((Math.random()*list.length))];

}




var name = get_random()

document.getElementById("messagesuccesss").innerHTML = name;
</script>