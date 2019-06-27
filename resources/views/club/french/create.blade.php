@extends('main')

@section('title', '| French Club Form' )

@section('content')

<html><head><style type="text/css">.ng-animate.item:not(.left):not(.right){-webkit-transition:0s ease-in-out left;transition:0s ease-in-out left}</style><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style><!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"><!-- Bootswatch "paper" used in easy form website : feel free to use your own -->
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css" rel="stylesheet"><!-- font-awesome -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"><!-- animate -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css" rel="stylesheet"><!-- textAngular -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.4.1/dist/textAngular.css" rel="stylesheet"><!-- This is nya select : bootstrap template style  -->
  <link href="https://rawgit.com/lordfriend/nya-bootstrap-select/master/dist/css/nya-bs-select.min.css" rel="stylesheet"><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <style type="text/css">body { 
        margin: 20px 
      } 
      .formly-field { 
        margin-bottom: 16px; 
      } 

      .shadow{
        -webkit-box-shadow: -2px 3px 47px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: -2px 3px 47px 0px rgba(0,0,0,0.75);
        box-shadow: -2px 3px 47px 0px rgba(0,0,0,0.75);
      }

      .div-blue{
        width: 100% ;
        background-color: rgb(6, 6, 145) ;
        color: white ;
        height: 40%;
      }

      input{
        font-size: 50px ;
        color: black ;
      }

      label{
        font-size: 20px;
        padding-top: 50px;
      }

      .form-style {
        border-top: 2px solid blue ;
        border-radius: 3px 0 0 3px;
      }

      label{
        color: rgb(12, 12, 12);
      }
  </style>
  <title>French Club form</title>
</head>
<body class="container" ng-app="demoApp" ng-controller="MainCtrl as vm" style="overflow-x: hidden">
<div class="container text-center">
<h4>French Club Registration</h4>

<p><a href="https://lh3.googleusercontent.com/kUGo_RR3VjqWFlMsGUw-RfGLYdCmr30apMTn8-jaPWScWnrZyGtSYrLY4KLKybW7k41FbqS8iw=w200"><img alt="" src="{{asset('image/french.png')}}" style="width: 100px; height: 100px;"></a></p>
<p><span style="font-size:16px;">The French Club is a social club focused on French culture and language for students of all levels. If you are interested in sharing and exploring your passion for the French culture and language outside of the classroom we welcome you to join our OrgSync group in order to stay connected and updated on upcoming events. With French Club, you have the opportunity to meet new people with similar passions as well as improve your French-speaking skills Our events include French conversation groups, French movie nights, and a few French dinners, attending the CALCOA French Film Festival in late April, and field trips whenever possible throughout each semester! À bientôt! :)</span></p>

<p><span style="font-size:16px;"><strong>OBJECTIVES OF FRENCH CLUB</strong></span></p>

<p><span style="font-size:16px;"> Conducting French language courses<br>
 Providing scholarships or free tuition to deserving Students willing to pursue further their courses in French language or literature at the Society AFC<br>
 Supporting the teaching/ Education of the French language in local schools<br>
 Arranging cultural and social programs such as films shows, lectures in French or other languages, art exhibits, music concerts, etc., by which the aims and objectives of the Society AFC could be furthered<br>
 Organizing linguistic tour in France or in French speaking countries.<br>
 Establishing and maintaining a library and a reading room for the benefit of its Members<br>
 Fostering friendship with Members of other similar cultural associations<br>
 Undertaking such other activities as are compatible with and conducive to the nature and objectives of the Society AFC</span></p>

<p><span style="font-size:16px;"><strong>BENEFITS OF JETS CLUB</strong></span></p>
<p><span style="font-size:16px;"> Enhances overall cognitive skills and improves brain development.<br>
  Increases critical thinking skills, creativity, problem-solving skills and flexibility of mind in young children.<br> 
Flourish and develop socially in a group activity<br> Confidence in a foreign language broadens the choice of university and career options later in life</span></p>

<p style="color: red">please fill all the required fields marked *</p>
</div>

<hr>
<div style="overflow-x: auto"><!-- here is the simple HTML you need (everything else is decoration) : -->
<form class="form-style shadow container" enctype="application/x-www-form-urlencoded" id="form-data" name="vm.form" ng-submit="vm.onSubmit()" novalidate="" style="height: 100%;" method="POST" action="{{route('frenches.store')}}">
  {{ csrf_field() }}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="color: white">
<h2 class="text-center div-blue">Personal Information</h2>
</div>

<div class="col-xs-12 col-sm-6 col-lg-4 " ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Firstname<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="first_name" name="first_name" ng-class="{'has-error': showError}" placeholder="Firstname" required="" type="text" value=""></div>

<div class="col-xs-12 col-sm-6 col-lg-4 " ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Middlename<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="middle_name" name="middle_name" ng-class="{'has-error': showError}" placeholder="Middlename" required="" type="text" value=""></div>

<div class="col-xs-12 col-sm-6 col-lg-4" ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Lastname<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="last_name" name="last_name" ng-class="{'has-error': showError}" placeholder="Lastname" required="" type="text" value=""></div>


<div class="col-xs-12 col-sm-6 col-md-6" ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Email Address<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required " id="email" name="email" ng-class="{'has-error': showError}" placeholder="Your mail Address" required="" type="email" value=""></div>

<div class="col-xs-12 col-sm-6 col-lg-6 " ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Phone Number<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="phone_number" name="phone_number" ng-class="{'has-error': showError}" placeholder="Your Phone Number" required="" type="number" value=""></div>

<div class="col-xs-12 col-sm-6 col-md-6 " ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Address<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="address" name="address" ng-class="{'has-error': showError}" placeholder="Your Home Address" required="" type="text" value=""></div>

<div class="col-xs-12 col-sm-6 col-lg-6" ng-class="{'has-error': showError}"><label style="color: rgb(12, 12, 12)">Select Gender<i style="color: red">*</i></label> <select class="form-control" id="sex" name="sex" type="text" value=""><option></option><option>Male</option><option>Female</option> </select></div>

<div class="col-xs-12 col-sm-6 col-md-6" ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)">Date of Birth<i style="color: red">*</i> </label> <input class="form-control ng-pristine ng-untouched ng-invalid ng-invalid-required" id="birthday" name="birthday" ng-class="{'has-error': showError}" placeholder="Your date of birth" required="" type="date" value=""></div>


<div class="col-xs-12 col-sm-6 col-lg-6" ng-class="{'has-error': showError}"><label style="color: rgb(12, 12, 12)">class<i style="color: red">*</i></label> <select class="form-control" id="class_school" name="class_school" type="text" value=""><option></option><option>SS3</option><option>SS2</option><option>SS1</option><option>JS3</option><option>JS2</option><option>JS1</option> </select></div>

<div class="col-xs-12 col-sm-6 col-md-6" ng-class="{'has-error': showError}"><label class="control-label " style="color: rgb(12, 12, 12)"><h3 id="amount" style="margin-top: 50px;">Payment : 8000</h3></label></div>
</div>
<button class="btn btn btn-primary pull-right" id="process-payment" style="margin-top: 20px; margin-bottom: 20px; background-color: green" type="button">Process Payment and Submit</button></form>
</div>
<!-- <script type="text/javascript" src="https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script> --><script src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script><iframe style="position:fixed; top:0; left:0; z-index:-1; border:none;opacity: 0;pointer-events: none" allowtransparency="true" width="100%" height="100%" id="flwpugpaidid" src="https://ravemodal.herokuapp.com/?"></iframe><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.2/jquery.min.js"></script><!-- bootstrap framework scripts --><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script><!-- angular ui bootstrap --><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.0/ui-bootstrap-tpls.min.js"></script><script src="https://rawgit.com/lordfriend/nya-bootstrap-select/master/dist/js/nya-bs-select.min.js"></script><script>

   var responsePayload = {} ;
    var xml = new XMLHttpRequest();
    var checkCharge = new XMLHttpRequest() ;

    var formFields = new FormData(document.getElementById('form-data'));
    var apiKey = "sholaApi.clerab0324677059860000d1db690f4033b03";
    //const API_publicKey ="FLWPUBK-08b9b714bde7cf75b92041a3f987b210-X";
    const API_publicKey = "FLWPUBK-c03c8b729c68969b6bdbef3f94898484-X";

    document.getElementById('process-payment').onclick= (event) =>{

      var email = document.getElementById('email').value;
      var first_name = document.getElementById("first_name").value; 
      var last_name = document.getElementById("last_name").value

      var amount_to_pay = responsePayload.amount;
      var phone_number = responsePayload.phone_number;
      var partnerPhoneNumber =responsePayload.partner_phone_number
      var partnerEmailAddress = responsePayload.partner_email_address
      var alreadyRegistered = false ;
      var status = 200 ;


        //console.log("SUBMIT BUTTON WAS CLICKED!!!!!!!") 
            //an alert of the data model 
            ////console.log(responsePayload)
      /**
       *Check if the guest is already registered to avoid multiple charging
       * The email : This is the email adddress of the person registering
       * The phone_number : This the phone number of the guest registering
       * The partnerEmailAddress : The partner email address
       * partnerPhoneNumber : The partner phone number
       */

       //console.log(email,phone_number,partnerEmailAddress,partnerPhoneNumber)
      checkCharge.open("POST",`https://cc-2019-reg.appspot.com/guest/exits/${apiKey}/${email}/${phone_number}/${partnerEmailAddress}/${partnerPhoneNumber}`);
      
        checkCharge.onreadystatechange = () => {
                //console.log("STATUS CHECKED" , checkCharge.status)
                if(checkCharge.readyState === 4 && checkCharge.status === 409 ) {
                        //console.log("CHECKING FOR STATUS!!!!")
                        // alert(xml.response);
                        alreadyRegistered = true ;
                        status = checkCharge.status ;
                        //console.log("STATUS IS NOW",status)
                        window.confirm(checkCharge.response) ;
                        return;
                        // rave.close();
                  }if (checkCharge.readyState === 4 && checkCharge.status == 200){
                        //console.log("Registering new user now")
                       registerNewGuest() ;
                       return ;
                  }
        }

        //console.log(responsePayload)
        checkCharge.send(JSON.stringify(responsePayload)); //send the form data  
                  
          function registerNewGuest() {
                    //console.log("SECOND RUNNING ---------------------")
                    /*********************************************
                     * Process another payment for the new guest
                     *********************************************
                     */
                    ///create hascode value for the transaction for the customer
                  function HashCodeGenerator(){}
                        HashCodeGenerator.prototype = {} ; // object prototype
                        HashCodeGenerator.prototype.hashCode = function(hashVariable) {
                        var hash = 0, i, chr;
                        if (this.length === 0) return hash;
                            for (i = 0; i < this.length; i++) {
                                chr   = this.charCodeAt(i);
                                hash  = ((hash << 5) - hash) + chr;
                                hash |= 0; // Convert to 32bit integer
                      }

                      return hash; 
                    };

              const hashedValue = new HashCodeGenerator().hashCode(email+first_name+last_name+phone_number+amount_to_pay);
              // getpaidSetup is Rave's inline script function. it holds the payment data to pass to Rave.
              var x = getpaidSetup({
                PBFPubKey: API_publicKey,
                customer_email: email,
                amount: amount_to_pay,
                customer_phone: phone_number,
                currency: "NGN",
                txref: "rave-"+new Date().toDateString(),
                meta: [{
                    metaname: "flightID",
                    metavalue: "AP1234"
                }],
                onclose: function() {
                  alert("Transaction was close!");
                },

                callback: function(response) {
                  flw_ref = response.tx.flwRef;// collect flwRef returned and pass to a           server page to complete status check.
                if(response.success === true ) {
                xml.open("POST","https://cc-2019-reg.appspot.com/save/response/"+apiKey);


                xml.onreadystatechange =()=> {
                if(xml.readyState === 4) {
                const okClicked = window.confirm(xml.response + "\n"+"Click Ok!") ;
                if (okClicked) window.open("https://cc-2019-reg.appsmithers.com.ng/success.html","_self");
                        x.close();
                        }
                      }

                xml.send(JSON.stringify(responsePayload)); //send the form data
                } else {
                  // redirect to a failure page.
                        alert("Payment Was not Successful.... Status ",response.tx.status);
                 }
                }
              }); // end get paid set up
            }
          }
        
  var elements = null ;
  var elementLenght = 0 ;
  var ms = null ;
  var checker = true ;

  setInterval(()=>{


console.log('i am running');
    
        responsePayload["amount"] = 5000; 
        console.log(responsePayload);        

        /**if (ms.value === "Single"){
              document.getElementById("amount").innerHTML = "Amount : <h3 style=\"color:green\">N3,000.00<h3>";
               //console.log(elements);
              responsePayload["marital_status"] = ms.value;
              responsePayload["amount"] = 3000;
          }


          if (ms.value === "Married"){
              document.getElementById("amount").innerHTML = "Amount : <h3 style=\"color:green\">N5,000.00<h3>";
              //console.log(elements);
              responsePayload["marital_status"] = ms.value;
              responsePayload["amount"] = 5000;         
          }
      }*/

       elements = document.querySelectorAll('input,select');
       elementLenght = elements.length ;
       console.log(elements);
       ms = document.getElementById("marital_status");

      //console.log("Marital Status Value =>",ms.value);

      for (let i = 0 ;  i < elementLenght ; i ++) {
          elements[i].value === "" ? checker = true : checker = false ;
          console.log(checker)
          if(checker == true) {
            break ;
          }else{
            responsePayload[elements[i].name] = elements[i].value
          }

        }
        document.getElementById("process-payment").disabled = checker; // production stage
      
},1000);

  </script>
</body>
</html>

@endsection