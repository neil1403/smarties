<?php

//if($_SESSION["profile"] == "Seller"){

//  echo '<script>

  //  window.location = "home";

 // </script>';

//  return;

//}

?>

<style type="text/css">
  #regiration_form fieldset:not(:first-of-type) {
    display: none;
  }
  </style>

<div class="content-wrapper">

  <section class="content-header">

    <h1>

      <strong>Custom Project</strong>

    </h1>

    <ol class="breadcrumb">
    <!-- Log on to codeastro.com for more projects! -->
      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Dashboard</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-success" data-toggle="modal" data-target="#addProject"> <i class="fa fa-plus"></i> Add Project</button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-hover table-striped dt-responsive tables" width="100%">
       
          <thead>
           
           <tr>
             
             <th>Invoice #.</th>
             <th>Invoice Date</th>
             <th>Due Date</th>
             <th>Days Left</th>
             <th>Delivery Status</th>
             <th>Project Name</th>
             <th>Customer Name</th>
             <th>Project Status</th>
             <th>Designer Assigned</th>
             <th>Product Type</th>
             <th>Sales Admin</th>
             <th>Qty</th>
             <th>SRP</th>
             <th>Disc.</th>
             <th>Quoted Price</th>
             <th>Invoice Amount</th>
             <th>Collection</th>
             <th>Balance</th>
             <th>Status</th>
             <th>Action</th>

           </tr> 

          </thead>

          <tbody>
          
        
            
          </tbody>
    <!-- Log on to codeastro.com for more projects! -->
        </table>


      </div>
    
    </div>

  </section>

</div>

<!--=====================================
=            module add Product            =
======================================-->


<!-- Modal -->
<div id="addProject" class="modal fade" role="dialog">
  <!-- Log on to codeastro.com for more projects! -->
  <div class="modal-dialog modal-lg">

    <div class="modal-content">

        <!--=====================================
        HEADER
        ======================================-->

        <div class="modal-header" style="background: #DD4B39; color: #fff">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Add Project</h4>

        </div>

        <!--=====================================
        BODY
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

          <!--Input Project -->
          <div class="container-fluid">
          
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
              
              <h1 class="text-center">Project form</h1>

            <form id="regiration_form" novalidate method="post" enctype="multipart/form-data">

              <!--=====================================
                              Set # 1
              ======================================-->
            <fieldset>
              <h2>Step 1: Create your account</h2>
              <div class="form-group">
              <label for="invoice_number">Project Number:</label>
              <input type="text" class="form-control" name="invoice_number" value="<?php echo uniqid(); ?>" readonly>
              </div>
              <div class="form-group">
               <label for="invoice_date">Project Date:</label>
                       <input type="date" class="form-control" name="invoice_date" value="<?php echo date('Y-m-d'); ?>" required>
              </div>
               <div class="form-group">
               <label for="due_date">Release Date:</label>
                       <input type="date" class="form-control" name="release_date" required>
              </div>
               <div class="form-group">
               <label for="due_date">Project Name:</label>
                 <input type="text" class="form-control" name="project_name" placeholder="Project Name" required>
                       </div>
                 <div class="form-group">
                 <label for="due_date">Product Type:</label>
                         <input type="text" name="product_type" class="form-control" placeholder="Product Type" required>
                </div> 
                <label for="designer">Choose a Designer:</label>
                  <div>
                      <select id="designer" class="form-control" name="designer">
                      <option value=""></option>
                      <option value="john_doe">John Doe</option>
                      <option value="jane_smith">Jane Smith</option>
                      <option value="bob_johnson">Bob Johnson</option>
                     <!-- Add more designer options as needed -->
                      </select>
                  </div></br>
                 <input type="button" name="data[password]" class="next btn btn-info " value="Next" />
              </fieldset>

              <!--=====================================
                              Set # 2
              ======================================-->
              <fieldset>
                <h2> Step 2: Add Customer Details</h2>
                <div class="form-group">
                <label for="fName">First Name</label>
                 <input type="text" class="form-control" name="data[fName]" id="fName" placeholder="First Name">
                </div>
                <div class="form-group">
                <label for="lName">Last Name</label>
                  <input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Last Name">
                </div>
                <div class="form-group">
                <label for="mob">Mobile Number</label>
                  <input type="text" class="form-control" id="mob" name="data[mob]" placeholder="Mobile Number">
                </div>
                <div class="form-group">
                <label for="address">Address</label>
                  <textarea  class="form-control" name="data[address]" placeholder="Address"></textarea>
                </div>
                <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
                <input type="button" name="next" class="next btn btn-info" value="Next" />
              </fieldset>

              <!--=====================================
                             Set # 3
              ======================================-->
              <fieldset>
                <h2>Step 3: Upload Design & Sizes</h2>

                  <label for="invoice_image">Upload your design:</label>
                  <div class="row">
                    <div class="col-md-3 offset-md-3"></div>
                    <div class="col-md-4">
                       <div id="imageContainer" style="width: 400px; height: 300px; overflow: hidden; display: flex; justify-content: center; align-items: center;">
                          <img id="uploadedImage" style="max-width: 100%; max-height: 100%;"   />
                      </div >  
                    </div>
                   
                  </div>
                     
                  <label for="imageInput" class="file-upload">
                      <i class="fa fa-cloud-upload fa-3x"  aria-hidden="true"></i></br>Upload your Design
                  </label>
                      <input type="file" class="form-control-file" id="imageInput" accept="image/*" style="display: none;">
                      
                    <table class="table" id="sizeQuantityTable">
                       <thead>
                          <tr>
                             <th>Size</th>
                             <th>Quantity</th>
                        </tr>
                     </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <select class="form-control" name="size[]">
                                        <option value=""></option>
                                        <option value="XSmall">Extra Small</option>
                                        <option value="Small">Small</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Large">Large</option>
                                        <option value="XLarge">Extra Large</option>
                                        <option value="2XLarge">2x Large</option>
                                        <option value="3XLarge">3x Large</option>
                                    </select>
                                </td>
                                <td><input type="number" class="form-control" name="quantity[]"></td>
                            </tr>
                        </tbody>
                   </table>
                   <div >
                        <button type="button" class="btn btn-primary" onclick="addRow()"><i class="fa fa-plus"></i> Add Another Size</button>
                   </div><br>
                        <textarea  class="form-control" name="data[address]" placeholder="Add some specific design (e.g. Colar V-Nick)"></textarea><br>
                <input type="button" name="previous" class="previous btn btn-default" value="Previous" />
              </fieldset> </br>

             <!--=====================================
                FOOTER
                ======================================-->

                <div class="modal-footer">

                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>

                  <button type="submit" class="btn btn-success">Save Project</button>

                </div>

              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

   
<script type="text/javascript">
$(document).ready(function(){
  var current = 1,current_step,next_step,steps;
  steps = $("fieldset").length;
  $(".next").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().next();
    next_step.show();
    current_step.hide();
    setProgressBar(++current);
  });
  $(".previous").click(function(){
    current_step = $(this).parent();
    next_step = $(this).parent().prev();
    next_step.show();
    current_step.hide();
    setProgressBar(--current);
  });
  setProgressBar(current);
  // Change progress bar action
  function setProgressBar(curStep){
    var percent = parseFloat(100 / steps) * curStep;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  }
});

 function addRow() {
    var table = document.getElementById("sizeQuantityTable");
    var newRow = table.insertRow(table.rows.length);

    var sizeCell = newRow.insertCell(0);
    var quantityCell = newRow.insertCell(1);
    var deleteCell = newRow.insertCell(2);

    // Create a select element for Size
    var sizeSelect = document.createElement("select");
    sizeSelect.classList.add("form-control");
    sizeSelect.name = "size[]";

    // Add option elements for Size
    var sizes = ["", "Extra Small", "Small", "Medium", "Large", "Extra Large", "2x Large", "3x Large"];
    for (var i = 0; i < sizes.length; i++) {
        var option = document.createElement("option");
        option.text = sizes[i];
        sizeSelect.add(option);
    }

    // Create an input element for Quantity
    var quantityInput = document.createElement("input");
    quantityInput.type = "number";
    quantityInput.classList.add("form-control");
    quantityInput.name = "quantity[]";

    // Create a delete button
    var deleteButton = document.createElement("button");
    deleteButton.innerHTML = '<i class="fa fa-trash"></i>'; // Replace with the trash icon HTML
    deleteButton.classList.add("btn", "btn-danger");
    deleteButton.onclick = function () {
        table.deleteRow(newRow.rowIndex);
    };

    // Append select, input, and delete button to the table cells
    sizeCell.appendChild(sizeSelect);
    quantityCell.appendChild(quantityInput);
    deleteCell.appendChild(deleteButton);
}

document.getElementById('imageInput').addEventListener('change', function (e) {
                        const file = e.target.files[0];
                        if (file) {
                            // Create a FileReader to read the selected image file
                            const reader = new FileReader();

                            reader.onload = function (e) {
                                // Set the source of the image element to the selected file's data URL
                                document.getElementById('uploadedImage').src = e.target.result;
                            };

                            // Read the selected file as a data URL
                            reader.readAsDataURL(file);
                        }
                    });
</script>


    

