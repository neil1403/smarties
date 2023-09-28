<?php

if($_SESSION["profile"] == "Special"){

  echo '<script>

    window.location = "home";

  </script>';

  return;

}


?>
<div class="content-wrapper">

  <section class="content-header">

    <h1>
	<!-- Log on to codeastro.com for more projects! -->
      <strong>Custom Project </strong>

    </h1>

    <ol class="breadcrumb">

      <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Dashboard</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">
      <div class="box-body">
		
         <div class="container-fluid mt-5">
                    <h2 class="text-center">Project From</h2>
                    <div class="row">
                        <form action="" method="post">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="invoice_number">Project Number:</label>
                                    <input type="text" class="form-control" name="invoice_number" value="<?php echo uniqid(); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="invoice_date">Project Date:</label>
                                    <input type="date" class="form-control" name="invoice_date" value="<?php echo date('Y-m-d'); ?>" required>
                                </div>
                            </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="due_date">Release Date:</label>
                                <input type="date" class="form-control" name="release_date" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="project_name" placeholder="Project Name" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="product_type" class="form-control" placeholder="Product Type" required>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                    <div class="form-group">

                                            <div class="input-group">
                                            
                                            <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                            <select class="form-control" name="selectCustomer" id="selectCustomer" required>
                                                
                                                <option value="">Select Customer</option>

                                                <?php 

                                                $item = null;
                                                $value = null;

                                                $customers = ControllerCustomers::ctrShowCustomers($item, $value);

                                                foreach ($customers as $key => $value) {
                                                    echo '<option value="'.$value["id"].'">'.$value["name"].'</option>';
                                                }


                                                ?>

                                            </select>

                                            <span class="input-group-addon"><button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAddCustomer" data-dismiss="modal">Add Customer</button></span>

                                            </div>

                                         </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="contact_no" class="form-control" placeholder="Contact Number" required>
                                </div> 
                            </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="lead_source" class="form-control" placeholder="Lead Source" required>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="location" class="form-control" placeholder="Location" required>
                                </div> 
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="sales_admin" class="form-control" value='<?php echo $_SESSION["name"]; ?>' readonly> 
                                </div> 
                            </div>    
                             <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="sales_admin" class="form-control" placeholder="Sales Admin" required>
                                </div> 
                            </div>    
                    </div>
                           
                        
                        
                            <!-- Add more fields as needed (customer name, contact number, lead source, etc.) -->
                            <!-- Example:
                            <div class="form-group">
                                <label for="customer_name">Customer Name:</label>
                                <input type="text" class="form-control" name="customer_name" required>
                            </div>
                            -->
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Size</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Add rows dynamically with JavaScript for multiple products -->
                                    <!-- Example:
                                    <tr>
                                        <td><input type="text" name="product_type[]" class="form-control" required></td>
                                        <td><input type="text" name="size[]" class="form-control" required></td>
                                        <td><input type="number" name="quantity[]" class="form-control" required></td>
                                        <td><input type="number" name="price[]" class="form-control" required></td>
                                        <td><input type="text" name="total[]" class="form-control" readonly></td>
                                    </tr>
                                    -->
                                </tbody>
                            </table>

                            <div class="form-group">
                                <button type="button" class="btn btn-primary" id="addRow">Add Product</button>
                            </div>
                            <div class="row">
                                <div class="col-sm-3">
                                            <div class="form-group">
                                            <label for="add_price">Additional Price</label>
                                                <input type="text" name="add_price" class="form-control" required>
                                            </div>
                                        </div>
                                    <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="invoice_amount">Project Amount:</label>
                                                <input type="text" class="form-control" name="invoice_amount" readonly>
                                            </div>
                                    </div>
                                    <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="payment">Payment:</label>
                                                <input type="text" class="form-control" name="payment">
                                            </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="balance">Balance:</label>
                                            <input type="text" class="form-control" name="balance" readonly>
                                        </div>
                                    </div> 
                            </div>
                        
                        <div class="row">
                            <div class="col-md-4 offset-md-4"></div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="invoice_image">Upload your design:</label>
                                <input type="file" id="imageInput" accept="image/*"></br>
                                    <div id="imageContainer" style="width: 400px; height: 300px; overflow: hidden;">
                                        <img id="uploadedImage" style="max-width: 100%; max-height: 100%;" />
                                    </div> 
                            </div>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Add some specific design (e.g. Colar V-Nick)"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">
                                <button type="reserve" class="btn btn-success">Reserve</button>
                            </div>
                        </div>
                        
                        
                        </form>
            </div>

<!--=====================================
=            module add Customer            =
======================================-->

<!-- Modal -->
<div id="modalAddCustomer" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <form role="form" method="POST">
        <div class="modal-header" style="background: #DD4B39; color: #fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Customer</h4>
        </div>
        <div class="modal-body">
          <div class="box-body">

            <!--Input name -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" type="text" name="newCustomer" placeholder="Write name" required>
              </div>
            </div>

            <!--Input id document -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input class="form-control input-lg" type="number" min="0" name="newIdDocument" placeholder="Write your ID" required>
              </div>
            </div>

            <!--Input email -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input class="form-control input-lg" type="text" name="newEmail" placeholder="Email" required>
              </div>
            </div>

            <!--Input phone -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input class="form-control input-lg" type="text" name="newPhone" placeholder="phone" data-inputmask="'mask':'(999) 999-9999'" data-mask required>
              </div>
            </div>

            <!--Input address -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input class="form-control input-lg" type="text" name="newAddress" placeholder="Address" required>
              </div>
            </div>


            <!--Input phone -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input class="form-control input-lg" type="text" name="newBirthdate" placeholder="Birth Date" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>
              </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save Customer</button>
        </div>
      </form>

      <?php

        $createCustomer = new ControllerCustomers();
        $createCustomer -> ctrCreateCustomer();

      ?>
    </div>

  </div>
</div>
<!-- Log on to codeastro.com for more projects! -->
<!--====  End of module add Customer  ====-->



        <!-- Add JavaScript to calculate totals and dynamically add rows -->

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script>
            // Function to calculate total for a row
            function calculateTotal(row) {
                const quantity = parseFloat(row.find('input[name="quantity[]"]').val());
                const price = parseFloat(row.find('input[name="price[]"]').val());
                const total = quantity * price;
                row.find('input[name="total[]"]').val(total.toFixed(2));
                updateInvoiceAmount();
            }

            // Function to update invoice amount
            function updateInvoiceAmount() {
                let totalAmount = 0;
                $('input[name="total[]"]').each(function () {
                    totalAmount += parseFloat($(this).val()) || 0;
                });
                $('input[name="invoice_amount"]').val(totalAmount.toFixed(2));
                updateBalance();
            }

            // Function to update balance
            function updateBalance() {
                const invoiceAmount = parseFloat($('input[name="invoice_amount"]').val()) || 0;
                const payment = parseFloat($('input[name="payment"]').val()) || 0;
                const balance = invoiceAmount - payment;
                $('input[name="balance"]').val(balance.toFixed(2));
            }

            // Function to update balance

            $(document).ready(function () {
                        // Add a new row when the "Add Product" button is clicked
                        $('#addRow').on('click', function () {
                            const newRow = `
                                <tr>
                                    <td>
                                    <select class="form-control" required>
                                        <option value=""></option>
                                        <option>Extra Small</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                        <option>Extra Large</option>
                                        <option>2X Large</option>
                                    </select>
                                    </td>
                                    <td><input type="number" name="quantity[]" class="form-control" required></td>
                                    <td><input type="number" name="price[]" class="form-control" required></td>
                                    <td><input type="text" name="total[]" class="form-control"  readonly></td>
                                </tr>`;
                            $('table tbody').append(newRow);

                            // Calculate total for the new row
                            calculateTotal($('table tbody tr:last'));
                        });

                            // Calculate totals when quantity or price changes
                            $('table tbody').on('input', 'input[name="quantity[]"], input[name="price[]"], input[name="addons[]"]', function () {
                                calculateTotal($(this).closest('tr'));
                            });

                            // Update invoice amount and balance on payment input
                            $('input[name="payment"]').on('input', function () {
                                updateBalance();
                            });
                });


                    $(document).ready(function () {
                    // ... (your existing code)

                    // Handle form submission
                    $('form').on('reserve', function (e) {
                        e.preventDefault(); // Prevent the default form submission behavior

                        // You can perform any necessary form validation here
                        // ...

                        // Assuming the form is valid, you can display a success message using SweetAlert
                        Swal.fire({
                                    icon: 'success',
                                    title: 'Success!',
                                    text: 'Invoice submitted successfully.',
                                    showConfirmButton: false,
                                    timer: 2000 // Auto close the alert after 2 seconds
                                }).then(function () {
                                    // Optionally, you can redirect the user or perform other actions after the alert is closed.
                                    // For example, you can redirect to a thank you page:
                                    window.location.href = 'custom-projectv2';
                            });

                    // Reset the form (optional)
                    this.reset();
                });
            });

                    // Function to handle file input change event
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


      </div>
    </div>
	<!-- Log on to codeastro.com for more projects! -->
  </section>
 
</div>