<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Add City Details
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class=""></i>Home</a></li>
   <!--       <li><a href="<?php echo base_url(); ?>Home_ctrl/view_subcategory">Package Details</a></li> -->
         <li class="active">City Details</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <!-- left column -->

         <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-warning">
               <div class="box-header with-border">
                  <h3 class="box-title">Add City Details</h3>
               </div>
               <!-- /.box-header -->
               <!-- form start -->
			    <form role="form" action="" method="post"  class="validate" data-parsley-validate enctype="multipart/form-data">

                  <div class="box-body">
                     <div class="col-md-6">
                     <div class="form-group has-feedback">
                     <label for="exampleInputEmail1">Country Name</label>   
                     <select class="form-control cst-select-1 required" required="" name="country_id" cst-attr="country" cst-for="city" id="country-selector">
                     <option>Select Country</option>
                        <?php foreach ($countries as $country) { ?>                     
                           <option value="<?php echo $country->country_id; ?>"><?php echo $country->country_name; ?></option>
                        <?php } ?>
                    </select>
                   </div>
                   <div class="form-group has-feedback">
                     <label for="exampleInputEmail1">State Name</label>   
                     <select class="form-control cst-select-1 required" required="" name="state_id" cst-attr="city" cst-for="" id="city-selector">
                     <option>Select State</option>
                  </select>
                   </div>
                        <div class="form-group has-feedback">
                           <label for="exampleInputEmail1">City Name</label>
                            <input type="text" class="form-control required" data-parsley-trigger="change"	
                            data-parsley-minlength="2" data-parsley-maxlength="50" data-parsley-pattern="^[a-zA-Z\  \/]+$" required="" name="city_name"  placeholder="City Name">
                           <span class="glyphicon  form-control-feedback"></span>
                        </div>   
                            
						
					    <div class="box-footer">
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </div>             
                        </div>                   
            
               </form>
            </div>
            <!-- /.box -->
         </div>
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>

<script>
$( document ).ready(function() {

$(".cst-select-1").on('change', function () {
        var valueSelected = $(this).val();
        var select_type   = $(this).attr('cst-attr');
        var select_destn  = $(this).attr('cst-for');
        var passdata_2 = 'sel_val='+ valueSelected +'&sel_typ='+select_type;

        $.ajax({
        type: "POST",
        url : '<?php echo base_url(); ?>Settings_ctrl/get_drop_data',
        data:  passdata_2,
        success: function(data){
          //alert(data);
               $("#"+select_destn+"-selector").html(data);
            }
        });
    });
 });
</script>