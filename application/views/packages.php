 <!--PACKAGES-BANNER -->
  <div class="wed-packages-banner wed-add-photo-theme">
    <div class="container container-custom">
      <div class="wed-member-banner-row">
          <div class="wed-become-member-div">
            <img src="<?php echo base_url(); ?>assets/img/become-member.png">
            <h5>Become a<br>
            <strong>Premium Member</strong></h5>
          </div>
          <div class="wed-become-member-points">
            <ul>
              <li>Contact Matches Directly</li>
              <li>View Horoscope</li>
              <li>Chat and Send unlimited Messages</li>
            </ul>
          </div>
          <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <div class="wed-package-main">
    <div class="container container-custom">
      <div class="wed-packages-list">
        <ul>
          <li class="active" data-toggle="tab" href="#classic">Classic Packages</li>
          <!--<li data-toggle="tab" href="#personel"></li>-->
          <div class="clearfix"></div>
        </ul>
      </div>
      <div class="wed-packages-tab">
        <div class="tab-content">

          <!-- CLASSIC-PACKAGES -->

            <div id="classic" class="tab-pane fade in active animated slideInUp">
			<form>
              <div class="wed-package-plans pckg_id">
                <ul>
                  <?php $i=0;
                  foreach($data as $package){
                    if($package->id != 1) {
                  $i++;
                if($i=='1'){
                  $class='active';
                    ?>
                  <li class="wed-subs-plan test <?php echo $class;?>" my-attr="<?php echo $package->id;?>" data-toggle="tab" href="#classic<?php echo $i;?>" onclick="package_details('<?php echo $package->id;?>')">
                  <?php } else {?>
                   <li class="wed-subs-plan" data-toggle="tab" href="#classic<?php echo $i;?>" onclick="package_details('<?php echo $package->id;?>')">
                  <?php } ?>
                    <div class="wed-subs-inner">
                      <h5><?php echo $package->package_name;?></h5>
                      <select class="wed-subs-select">
                        <option><?php echo $package->month;?> Months</option>
                      </select>
                      <h4>Rs. <?php echo $package->price;?></h4>
                     <!--  <p>Rs.1665/ Month</p> -->
            <a href="#uniqueID" ><button   class="wed-btn-class payment" data-id="<?php echo $package->id;?>" > Make Payment</button></a>
            <div class="arrow-up"></div>
                    </div>
                  </li>
                  <?php } } ?>
                  <!-- <li class="wed-subs-plan" data-toggle="tab" href="#classicad">
                    <div class="wed-subs-inner">
                      <h5>Classic Advantage</h5>
                      <select class="wed-subs-select">
                        <option>3 Months</option>
                      </select>
                      <h4>Rs. 5000</h4>
                      <p>Rs.1665/ Month</p>
            <button class="wed-btn-class">Make Payment</button>
            <div class="arrow-up"></div>
                    </div>
                  </li>
                  <li class="wed-subs-plan" data-toggle="tab" href="#premium">
                    <div class="wed-subs-inner">
                      <h5>Classic Premium</h5>
                      <select class="wed-subs-select">
                        <option>3 Months</option>
                      </select>
                      <h4>Rs. 6000</h4>
                      <p>Rs.2005/ Month</p>
            <button class="wed-btn-class">Make Payment</button>
            <div class="arrow-up"></div>
                    </div>
                  </li>
                  <li class="wed-subs-plan" data-toggle="tab" href="#marry">
                    <div class="wed-subs-inner">
                      <h5>Till u Marry</h5>
                      <select class="wed-subs-select">
                        <option>3 Months</option>
                      </select>
                      <h4>Rs. 9000</h4>
                      <p>Rs.800/ Month</p>
            <button class="wed-btn-class">Make Payment</button>
            <div class="arrow-up"></div>
                    </div>
                  </li> -->
                  <div class="clearfix"></div>
                </ul>
              </div></form>
              <div class="wed-package-plans-tab-content">
                <div class="tab-content">

                  <!-- CLASSIC -->
                          <?php $i=0;
                  foreach($data as $package){
                  $i++;
              
                    if($i=='1'){
                  //$class='active';
                    ?>
                  <div id="classic<?php echo $i;?>" class="tab-pane fade in active animated slideInUp">
                    <?php } else{?>
                   <div id="classic<?php echo $i;?>" class="tab-pane fade in animated slideInUp"> 
                    <?php } ?>
                      <div class="wed-package-details">
            <div class="row">
              <div class="col-md-10">
                <div class="wed-package-info">
                <h6>Benefits of <?php echo $package->package_name;?> - <strong><?php echo $package->month;?> Months</strong></h6>
                <ul>
                  <?php if($package->personalized_msg== '1') {?>
                  <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/personalmsg.png">
                    </div>
                    <p>Send Unlimited Personalized<br>
                    Messages</p>
                    <div class="clearfix"></div>
                  </li>
                  <?php } if($package->verified_mob== '1') {?>
                  <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/viewno.png">
                    </div>
                    <p>View mobile numbers of <?php echo $package->verified_mob_permonth;?> <br>
                    members to contact them directly</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->send_sms== '1') {?>
                  <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>Send SMS</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->chat_instantly== '1') {?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>Chat with Prospects Directly</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->profile_highligher== '1') {?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                     <p>Profile Highlighter:<br>
                    Makes your profile Stand Out !</p>
                   
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->personal_relationship_manager== '1') {?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>Personal Relationship Manager:</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->priority_search== '1') {?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                      <p>Priority over free members in <br>search results</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->profile_tagged== '1') {?>
                  <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/horor.png">
                    </div>
                    <p>Profile tagged as paid member<br>
                     for more responses</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->prominent_display== '1') {?>
                  <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/priority.png">
                    </div>
                     <p>Prominent display in <br>search results</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->sms_alert== '1') {?>
                    <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>Get instant notificationson<br> your mobile</p>
                    <div class="clearfix"></div>
                  </li>
                    <?php } if($package->enhanced_privacy== '1') {?>
                        <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>Enhanced Privacy:Photo / Phone</p>
                    <div class="clearfix"></div>
                  </li>
                   <?php } if($package->view_social_profiles== '1') {?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/chat-proces.png">
                    </div>
                    <p>View Social and Professional 
                      <br>profile of members</p>
                    <div class="clearfix"></div>
                  </li>
                   <?php } ?>
                     <li>
                    <div class="wed-package-circle">
                      <img src="<?php echo base_url(); ?>assets/img/more.png">
                    </div>
                    <p><a href="#">More Benefits</a></p>
                    <div class="clearfix"></div>
                  </li>
                 
                  <div class="clearfix"></div>
                </ul>
                </div>
              </div>
              <div class="col-md-2">
                <div class="wed-premium-tag">
                  <img src="<?php echo base_url(); ?>assets/img/premium.png">
                </div>
              </div>
            </div>
            </div>
                  </div>
<?php } ?>


                </div>
              </div>
        <!-- <div class="wed-adon-packages">
        <h6>Add-on Packages</h6>
        <p>A little extra to make your profile stand-out</p>
        <br>
        <br>
        <div class="row">
          <div class="wed-adon-bay">
            <div class="wed-adon-left border-right1">
              <div class="wed-adon-custom-check">
                <input id="check1" type="checkbox" name="check" value="check1">
                <label for="check1"></label>
                <div class="clearfix"></div>
              </div>
              <div class="wed-adon-check-details">
                <div class="wed-adon-circle">
                  <img src="<?php echo base_url(); ?>assets/img/highlighter.png">
                </div>
                <div class="wed-adon-details">
                  <h5>Profile Highlighter </h5>
                  <p>Give your profile maximum visibility<br> 
                  at just Rs. 1200.</p>
                  <button class="wed-adon-more">more</button>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="wed-adon-left">
              <div class="wed-adon-custom-check">
                <input id="check2" type="checkbox" name="check" value="check2">
                <label for="check2"></label>
                <div class="clearfix"></div>
              </div>
              <div class="wed-adon-check-details">
                <div class="wed-adon-circle">
                  <img src="<?php echo base_url(); ?>assets/img/placement.png">
                </div>
                <div class="wed-adon-details">
                  <h5>Top Placement   </h5>
                  <p>Move your profile to the top spot <br>
                  at just Rs. 1200.</p>
                  <button class="wed-adon-more">more</button>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <br>
        <br>
        </div> -->
        <br>
        <br>
        <div class="wed-adon-payment">
        <div class="row">
           <!-- ===================================PAYMENT START-->
          <!-- <div class="col-md-8">
            <div class="wed-adon-payment-selection">
              <div class="wed-adon-payment-head">
              Select Your Payment Option
              </div>
              <div class="wed-adon-payment-details">
                <ul>
                  <li class="active">
                    <a data-toggle="tab" href="#credit">Credit Card</a>
                    <div class="arrow-left"></div>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#debit">Debit Card</a>
                    <div class="arrow-left"></div>
                  </li>
                  <li>
                    <a data-toggle="tab" href="#net">Net Banking</a>
                    <div class="arrow-left"></div>
                  </li>
                </ul>
                <div class="wed-adon-payment-details-tab-content">
                <div class="tab-content">
                  <div id="credit" class="tab-pane fade in active">
                      <div class="wed-adon-card-bay">
                        <span><img src="<?php echo base_url(); ?>assets/img/mastercard.png"></span>
                        <span><img src="<?php echo base_url(); ?>assets/img/visa.png"></span>
                        <span><img src="<?php echo base_url(); ?>assets/img/american.png"></span>
                      </div>
                      <div class="wed-adon-select-card">
                        <div class="wed-custom-select-card">
                          <input id="nm" type="radio">
                          <label for="nm">Pay Using Credit Card</label>
                          <input id="dvsd" type="radio">
                          <label for="dvsd">Pay Using Diners Club Credit Card</label>
                         </div>
                      </div>
                      <div class="wed-adon-select-card-details">
                        <div class="wed-payment-row">
                          <p>Card Holder Name</p>
                          <input class="wed-adon-card-input" type="text">
                        </div>
                        <div class="wed-payment-row">
                          <p>Credit Card Number</p>
                          <input class="wed-adon-card-input" type="text">
                          <span class="wed-lock1"><img src="<?php echo base_url(); ?>assets/img/lock1.png"></span>
                        </div>
                        <div class="wed-payment-row">
                          <div class="c1">
                            <p>Month</p>
                            <select class="wed-adon-card-input1">
                              <option>Month</option>
                            </select>
                          </div>
                          <div class="c1" style="text-align: right;">
                            <p style="text-align:left;padding-left: 15px;">Year</p>
                            <select class="wed-adon-card-input1">
                              <option>Year</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="wed-payment-row">
                            <p>Card Verification Number (CVV)</p>
                            <input class="wed-adon-card-input2" type="text" placeholder="CVV"><span class="wed-lock1">
                            <img src="<?php echo base_url(); ?>assets/img/cv2.png"></span>
                        </div>
                        <br>
                        <div class="wed-payment-row">
                          <button class="wed-payment-process-btn">Proceed</button>
                        </div>
                      </div>

                  </div>
                  <div id="debit" class="tab-pane fade">
                    <div class="wed-adon-select-card-details">
                        <div class="wed-payment-row">
                          <p>We Accept</p>
                          <select class="wed-adon-card-input">
                            <option>Select Debit Card</option>
                          </select>
                        </div>
                        <div class="wed-payment-row">
                          <p>Card Number</p>
                          <input class="wed-adon-card-input" type="text">
                        </div>
                        <div class="wed-payment-row">
                          <div class="c1">
                            <p>Month</p>
                            <select class="wed-adon-card-input1">
                              <option>Month</option>
                            </select>
                          </div>
                          <div class="c1" style="text-align: right;">
                            <p style="text-align:left;padding-left: 15px;">Year</p>
                            <select class="wed-adon-card-input1">
                              <option>Year</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="wed-payment-row">
                            <p>Card Verification Number (CVV)</p>
                            <input class="wed-adon-card-input2" type="text" placeholder="CVV"><span class="wed-lock1">
                            <img src="<?php echo base_url(); ?>assets/img/cv2.png"></span>
                        </div>
                        <div class="wed-payment-row">
                          <button class="wed-payment-process-btn">Proceed</button>
                        </div>
                      </div>
                  </div>
                  <div id="net" class="tab-pane fade">
                     <div class="wed-adon-select-card-details">
                        <div class="wed-payment-row">
                          <p>Select Your Bank</p>
                          <select class="wed-adon-card-input">
                            <option>Select Bank</option>
                          </select>
                        </div>
                        <div class="wed-payment-row">
                          <p><strong>Note : </strong>We will direct you to the bank you had choosen above,Once the bank verify your net banking credentials,we will proceed with your payments</p>
                        </div>
                        <div class="wed-payment-row">
                          <button class="wed-payment-process-btn">Proceed</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
              </div>
			  
            </div>
          </div>-->
          <!-- ===================================PAYMENT END -->
       <!-- ****************NEW PAYMENT*********************** -->
	   <div id="container">
          <div class="col-md-8" id="uniqueID">
            <div class="wed-adon-payment-selection">
              <div class="wed-adon-payment-head">
              Select Your Payment Option
              </div>
              <div class="wed-adon-payment-details">
                <ul  class="payment_option" style="width:100% !important;">
                  <li class="active " style="width:50%; float:left; text-align:center;" id="paypal"  onclick="getId('paypal')">
                    <a data-toggle="tab" href="#pay" style="width: 100%;float: left;">PAYPAL</a>
                    <div class="arrow-left"></div>
                  </li>
                  <li  style="width:50%; float:left; text-align:center;" id="cash" onclick="getId('cash')">
                    <a data-toggle="tab" href="#cod" style="width: 100%;float: left;">CASH</a>
                    <div class="arrow-left"></div>
                  </li>
                </ul>
				<input type="hidden" name="packageid" id="packageid" >
                  <div class="wed-payment-row"  style="width:100%; float:left; text-align: center; margin-top: 25px;">
                    <button class="wed-payment-process-btn" id="payment_btn">Proceed</button>
					
                  </div>
				  <span id="payment_msg"></span>
              <div class="clearfix"></div>
              </div>
            </div>
          </div> 
          <!-- ****************************************************** -->
          <div class="col-md-4">
            <div class="wed-adon-payment-summary">
              <div class="wed-adon-payment-head">Payment Details</div>
              <div class="wed-adon-summary-inner">
                <h6> Please take DD Or Money on solmate, Hyderabad</h6>
                <p>Contact No:91- 8008158576 <br>
                Email:TCM.Divyavani@gmail.com</p>
              </div>
            </div>
          </div>


          <div class="col-md-12">
            <div class="wed-adon-payment-summary" data-toggle="tab" href="#classic1" style="margin-top:20px;">
              <div class="wed-adon-payment-head">
              Summary
              </div>
              <div class="wed-adon-summary-inner">
                <div class="pckg_details" style="width:100%;"></div>
                <h6>Membership Package</h6>
                <p id="pack-desc">YOU SELECTED :<br>
                  Classic - <strong>6</strong> Months - Rs. <strong>7400</strong>
                </p>
                <hr>
                <h6>Special Checkout Offer</h6>

                <div class="wed-adon-custom-check" style="padding-top:0px;">
                <input id="check3" type="checkbox" name="check" value="check3">
                <label for="check3" style="position: relative;top: 10px;"></label>
                <p style="padding-left:25px">Profile Highlighter ( 20 days ) - Rs. 299</p>
                <div class="clearfix"></div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="wed-adon-payment-head">
                <p id="pckg-price">Your Total : Rs.<strong>&nbsp;7699</strong></p>
              </div>

            </div>
          </div>

          

        </div>
      </div>
    </div>

          <!-- PERSONEL-PACKAGES -->

            <div id="personel" class="tab-pane fade animated slideInUp">
              <h3>Menu 1</h3>
              <p>Some content in menu 1.</p>
            </div>
          </div>
      </div>

    </div>
  </div>


<script type="text/javascript">

$(document).ready(function () {

 var id= $('li.test').attr('my-attr');
 //alert(id);
 dataString = 'id=' + id
   $.ajax({
          type: "POST",
          url: base_url+'Package/view_package',
          data: dataString,         
              success: function(data){  

          // obj= jQuery.parseJSON(data);
              var val = JSON.parse(data);
        
           var package_name=val.package_name;
           var month=val.month;
           var price=val.price;
           //alert(package_name);
           $('#pack-desc').html("YOU SELECTED :<br>"+package_name+" - <strong>"+month+"</strong> Months - Rs. <strong>"+price+"");
           $('#pack-desc').append('<input type="hidden" value="'+price+'">');
           $('#pckg-price').html("Your Total : Rs.<strong>&nbsp;"+price+"</strong>");
               /*  if(status==false){
          $('<p class="error">We Are Not available in this location!!!</p>').appendTo("#zip_msg");
          }else{
              $('<p class="error">We Are  available Here!!!</p>').appendTo("#zip_msg");
          }        
        $('<input type="hidden" value='+obj.result.zip+' name="zip" >').appendTo("#register_form");*/
           }
        });

});

function package_details(id){
  dataString = 'id=' + id 

       $.ajax({
          type: "POST",
          url: base_url+'Package/view_package',
          data: dataString,         
              success: function(data){  

          // obj= jQuery.parseJSON(data);
              var val = JSON.parse(data);
          var result = val['store'];
           var package_name=val.package_name;
           var month=val.month;
           var price=val.price;
        //alert(price);
            $('#pack-desc').html("YOU SELECTED :<br>"+package_name+" - <strong>"+month+"</strong> Months - Rs. <strong>"+price+"");
            $('#pack-desc').append('<input type="hidden" value="'+price+'">');
            $('#pckg-price').html("Your Total : Rs.<strong>&nbsp;"+price+"</strong>");
               /*  if(status==false){
          $('<p class="error">We Are Not available in this location!!!</p>').appendTo("#zip_msg");
          }else{
              $('<p class="error">We Are  available Here!!!</p>').appendTo("#zip_msg");
          }        
        $('<input type="hidden" value='+obj.result.zip+' name="zip" >').appendTo("#register_form");*/
           }
        });

    };
	
	
	
	

	function getId(paymentOption) {
		
	//alert(paymentOption);
		 $("#payment_btn").on('click',function(){
			  if($("#packageid").val()!=''){
				if(paymentOption == 'paypal'){
					var amount = $('#packageid').val(); 
					var data ='amount=' + amount
					window.location.href = base_url+"Package/paypal/?"+data;
				}
				else if(paymentOption == 'cash'){
					$.ajax({
						type: "POST",
						url: base_url+'Package/cash',
						//data: data,
						success: function(data) { 
							$('#payment_msg').html('We will contact you immediatly..Thankyou..');
						}
					});	
				}
			 
			  }
			  else{
				 $('#payment_msg').html('Please select any Package');
				  setTimeout(function(){
					  $('#payment_msg').fadeOut();
					},3000);
			  }
		});
	}
	
</script>
</body></html>