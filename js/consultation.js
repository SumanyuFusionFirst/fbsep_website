const BodyEmail1 =document.getElementById("BodyEmail1");
const SubmitConsult = document.getElementById("SubmitConsult");


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
// function  dateformat() {
//   var date1 = document.getElementById("date");
//   date1.datetimepicker({
//     format: 'MM-DD-YYYY LT'
//   });
// }

SubmitConsult.addEventListener("click", e => {
    
    let form = e.target.closest('form')
    if(form.checkValidity() == false){
        return 
    }


    document.querySelector('.loading-overlay').classList.remove("loading-bg")
    document.querySelector('.loading-overlay').classList.add("loading-tp-bg")
    document.querySelector('.loading-overlay').style.visibility = 'visible';
    document.querySelector('.loading-overlay').style.opacity = '1';
    document.getElementById("messagesuccesss").innerHTML = 'Loading please wait...';

    
  
    var name1 = $('#name1').val();
    var phone1 = $('#phone1').val();
    var CompanyName = $('#CompanyName').val();
    var email1 = $('#email1').val();
    var source = $('#source').val()
    var date = $('#date').val();
    var time  = $('#time').val();
    var timezone = $('#timezone').val();
    var note1 = $('#note1').val();
    const checkBox = document.querySelectorAll("#BodyEmail1 input[type='checkbox']")
    const checkBoxArr = []
    Array.from(checkBox).forEach(element => {
        if (element.checked == true) {
            checkBoxArr.push(element.value)
        }
    });
    var selecedCheckBoxStr = checkBoxArr.length == 0 ? "" : checkBoxArr.join(", ")
    var send_data = { email1: email1, name1: name1, phone1: phone1, CompanyName: CompanyName,source: source, date: `Date: ${date} || Time ${time}`, checkBox: selecedCheckBoxStr,timezone: timezone, note1: note1,  };
    console.log(send_data)
    $.ajax({
        url: "php/mailsent1",
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
            alert('Internal Server Error')
        }
    });
    e.preventDefault();
})


function sendmail1() {
    

    var name1 = $('#name1').val();
    var phone1 = $('#phone1').val();
    var CompanyName = $('#CompanyName').val();
    var email1 = $('#email1').val();
    var source = $('#source').val()
    var date = $('#date').val();
    // var time = $('#time').val();
    var timezone = $('#timezone').val();
    var note1 = $('#note1').val();
    //    var comments= $('#comments').val();
    //  var date2= $('#datetimepicker4').val();
    //  var time1= $('#datetimepicker3').val();
    //  var date1=date2+' '+time1
    //   var timezone= $('#timezone').val();
    var send_data = { email1: email1, name1: name1, phone1: phone1, CompanyName: CompanyName,source: source, date: date, timezone: timezone, note1: note1 };
    console.log(send_data)



    $.ajax({
        url: "php/mailsent1", //the page containing php script
        type: "post", //request type,
        dataType: 'json',
        data: send_data,
        success: function (result) {


            if (result.abc == 'sent') {

                document.querySelector('.loading-overlay').style.opacity = '0';
                document.querySelector('.loading-overlay').style.visibility = 'hidden';
                document.querySelector('.loading-overlay').classList.remove("loading-tp-bg")
                document.querySelector('.loading-overlay').classList.add("loading-bg")
                window.location.href = `${document.getElementById("myBase").getAttribute("data-href")}/mail-success`;

            }
            else {
                alert("Internal Server Error");
            }

        },
        error: function (result) {

            console.log(result);
        }
    });

}
(function ($) {
    var CheckboxDropdown = function (el) {
      var _this = this;
      this.isOpen = false;
      this.areAllChecked = false;
      this.$el = $(el);
      this.$label = this.$el.find(".dropdown-label");
      this.$checkAll = this.$el.find('[data-toggle="check-all"]').first();
      this.$inputs = this.$el.find('[type="checkbox"]');

      this.onCheckBox();

      this.$label.on("click", function (e) {
        e.preventDefault();
        _this.toggleOpen();
      });

      this.$checkAll.on("click", function (e) {
        e.preventDefault();
        _this.onCheckAll();
      });

      _this.onCheckAll(undefined, false);

      this.$inputs.on("change", function (e) {
        _this.onCheckBox();
      });
    };

    CheckboxDropdown.prototype.onCheckBox = function () {
      this.updateStatus();
    };

    CheckboxDropdown.prototype.updateStatus = function () {
      var checked = this.$el.find(":checked");

      this.areAllChecked = false;
      this.$checkAll.html("Check All");

      if (checked.length <= 0) {
        this.$label.html("Please Select Services");
      } else if (checked.length === 1) {
        this.$label.html(checked.parent("label").text());
      } else if (checked.length === this.$inputs.length) {
        this.$label.html("Please Select Services");
        this.areAllChecked = true;
        this.$checkAll.html("Uncheck All");
      } else {
        this.$label.html(checked.length + " Services Selected");
      }
    };

    CheckboxDropdown.prototype.onCheckAll = function (checkAll, OnLoadCheckAll = true) {
      if (!this.areAllChecked || checkAll) {
        this.areAllChecked = false;
        this.$checkAll.html("Uncheck All");
        this.$inputs.prop("checked", false);
        // for (let i = 0; i <= 7; i++) {
        //   showColumn(i);
        // }
      } else if (OnLoadCheckAll) {
        // for (let i = 0; i <= 7; i++) {
        //   hideColumn(i);
        // }
        this.areAllChecked = false;
        this.$checkAll.html("Check All");
        this.$inputs.prop("checked", false);
      }

      this.updateStatus();
    };

    CheckboxDropdown.prototype.toggleOpen = function (forceOpen) {
      var _this = this;

      if (!this.isOpen || forceOpen) {
        this.isOpen = true;
        this.$el.addClass("on");
        $(document).on("click", function (e) {
          if (!$(e.target).closest("[data-control]").length) {
            _this.toggleOpen();
          }
        });
      } else {
        this.isOpen = false;
        this.$el.removeClass("on");
        $(document).off("click");
      }
    };

    var checkboxesDropdowns = document.querySelectorAll(
      '[data-control="checkbox-dropdown"]'
    );
    for (var i = 0, length = checkboxesDropdowns.length; i < length; i++) {
      new CheckboxDropdown(checkboxesDropdowns[i]);
    }
  })(jQuery);
  