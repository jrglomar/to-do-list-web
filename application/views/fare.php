

<!-- Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

    <!-- HEAD TAG -->
    <?php $this->load->view('includes/head.php'); ?>

<body class="">

<!-- WRAPPER -->
<div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

    <!-- NAVBAR -->
    <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
            <div class="container-fluid">
                <div class="row">
                <!-- END OF OPENING TAG OF CONTENT -->

                <!-- CREATE CARD -->
                <div class="card card-nav-tabs" style="width: 100rem;">
                    <div class="card-header card-header-danger">
                        Create Fare 
                    </div>
                    
                    <div class="card-body">
                        <form id="addfareForm" name="addfareForm">
                            <div class="form-group">
                                <label for="busTypeId">Bus Type</label>
                                <select id="busTypeId" name="busTypeId" class="form-control" data-style="btn btn-primary btn-sm" title="Single Select">
                                    <option disabled selected></option>
                                    <option value="Ordinary">Ordinary</option>
                                    <option value="Deluxe">Deluxe</option>
                                    <option value="Aircon">Aircon</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="initialKm">Initial Km</label>
                                <input type="text" class="form-control" name="initialKm" id="initialKm" >
                            </div>
                            <div class="form-group">
                                <label for="initialPrice">Initial Price</label>
                                <input type="text" class="form-control" name="initialPrice"  id="initialPrice" >
                            </div>
                            <div class="form-group">
                                <label for="additionalKm">Additional Km</label>
                                <input type="text" class="form-control" name="additionalKm"  id="additionalKm" >
                            </div>
                            <div class="form-group">
                                <label for="discountPercentage">Discount Percentage</label>
                                <input type="text" class="form-control" name="discountPercentage"  id="discountPercentage" >
                            </div>
                            <div class="form-group">
                                <label class="label-control">Effectivity Date</label> <br>
                                <input type="date" class="form-control" id="effectivityDate" name="effectivityDate">
                            </div>
                                                
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                </div>
                <!-- END OF CREATE CARD -->

                <!-- TABLE  -->
                <div class="card">
                <div class="card-body">
                    <table id="fareTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Bus Type</th>
                                <th>Initial Km </th>
                                <th>Initial Price</th>
                                <th>Additional Km</th>
                                <th>Discount Percentage</th>
                                <th>Effectivity Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- END OF TABLE -->

                <!-- CLOSING TAG OF CONTENT -->
                </div>
            </div>
        </div>
        <!-- END OF CLOSING TAG OF CONTENT -->

        <!-- VIEW MODAL -->
        <div id="viewfareInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">fare Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="fareForm">
                        <div class="modal-body">
                            <input hidden type="text" class="form-control" name="fareIdView" id="fareIdView" >
                            <label for="exampleInputEmail1">Initial Km</label>
                                <input type="text" class="form-control" name="initialKmView" id="initialKmView" >
                            <label for="exampleInputEmail1">Initial Price</label>
                                <input type="text" class="form-control" name="initialPriceView" id="initialPriceView" >
                            <label for="exampleInputEmail1">Additional Km</label>
                                <input type="text" class="form-control" name="additionalKmView" id="additionalKmView" >
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="text" class="form-control" name="discountPercentageView" id="discountPercentageView" >
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="text" class="form-control" name="effectivityDateView" id="effectivityDateView" aria-describedby="">
                        </div>
                        <div class="modal-footer">
                            <!-- <input type="submit" class="btn btn-success"> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- EDIT MODAL -->
        <div id="editfareInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">fare Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editfareForm">
                        <div class="modal-body">
                            <input hidden type="text" class="form-control" name="fareIdEdit" id="fareIdEdit" >
                            <label for="exampleInputEmail1">Initial Km</label>
                                <input type="text" class="form-control" name="initialKmEdit" id="initialKmEdit" >
                            <label for="exampleInputEmail1">Initial Price</label>
                                <input type="text" class="form-control" name="initialPriceEdit" id="initialPriceEdit" >
                            <label for="exampleInputEmail1">Additional Km</label>
                                <input type="text" class="form-control" name="additionalKmEdit" id="additionalKmEdit" >
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="text" class="form-control" name="discountPercentageEdit" id="discountPercentageEdit" >
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="date" class="form-control" name="effectivityDateEdit" id="effectivityDateEdit" aria-describedby="">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="update" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>  
    <!-- END OF MAIN CONTENT -->
</div>
<!-- END OF WRAPPER -->

  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
</body>

<script>
$(document).ready(function(){
    //DATA TABLES
    function loadtable(){
        fareDataTable = $('#fareTable').DataTable({
            "ajax": "<?php echo base_url()?>fare/show_fare",
            "columns": [
                { data: "id"},
                { data: "busTypeId"},
                { data: "initialKm"},
                { data: "initialPrice"},
                { data: "additionalKm"},
                { data: "discountPercentage"},
                { data: "effectivityDate", render: function (data, type, row){
                    return moment (data).format("LL");
                        }
                },
                { data: "status", render: function(data, type, row){
                            if(data == "Active"){
                                return '<div class="btn-group">'+
                                        '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" ><i class="zmdi zmdi-eye"></i>View</button>'+
                                        '<button class="btn btn-warning btn-sm btn_edit" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i>Edit</button>'+
                                        '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button"> <i class="zmdi zmdi-delete"></i>Delete</button></div>';
                            }   
                            else{
                                return '<button class="btn btn-secondary btn-sm">Activate</button>';
                            }
                        }
                },
            ],

                "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }],
                "order": [[4, "desc"]]
        })
    }

    loadtable();

    function refresh(){
        var url = "<?php echo base_url()?>fare/show_fare";

        fareDataTable.ajax.url(url).load();
    }



    // CREATE fare
    $('#addfareForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addfareForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>fare/add_fare',
            type: "POST",
            data: form.serialize(),
        
            success: function(data){
                refresh();
                
                $("#addfareForm").trigger("reset");
                showNotification('create', 'Successfully created a fare!', 'success', 'top', 'right');
            }
        // ajax closing tag
        })
    });


    // VIEW ONE fare 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>fare/get_one_fare/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                var fareInfo = data.data;

                $('#fareIdView').val(id);
                $('#initialKmView').val(fareInfo.initialKm);
                $('#initialPriceView').val(fareInfo.initialPrice);
                $('#additionalKmView').val(fareInfo.additionalKm);
                $('#discountPercentageView').val(fareInfo.discountPercentage);
                $('#effectivityDateView').val(moment(fareInfo.effectivityDate).format('MM-DD-YYYY'));

                $('#viewfareInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

        

    // EDIT fare 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>fare/get_one_fare/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var fareInfo = data.data;
                console.log(moment(fareInfo.effectivityDate).format('MM-DD-YYYY'))

                $('#fareIdEdit').val(id);
                $('#initialKmEdit').val(fareInfo.initialKm);
                $('#initialPriceEdit').val(fareInfo.initialPrice);
                $('#additionalKmEdit').val(fareInfo.additionalKm);
                $('#discountPercentageEdit').val(fareInfo.discountPercentage);
                $('#effectivityDateEdit').val(moment(fareInfo.effectivityDate).format('YYYY-MM-DD'));

                $('#editfareInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editfareForm').on('submit', function(e){
        e.preventDefault();
        var form = $('#editfareForm'); 

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, update it!',
            confirmButtonColor: '#ff9800',
        }).then((result) => {
            if (result.isConfirmed) {
                // ajax opening tag
                $.ajax({
                    url: '<?php echo base_url()?>fare/edit_fare',
                    type: "POST",
                    data: form.serialize(),
                
                    success: function(data){
                        refresh();
                        showNotification('update', 'Successfully updated a fare.', 'warning', 'top', 'right');
                        $('#editfareInfoModal').modal('hide');
                    }
                })
                // ajax closing tag
            }
        })

        
    });

    // DELETE fare 
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;


        // Confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            confirmButtonColor: '#d33',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url()?>fare/delete_fare/',
                    type: "POST",
                    data: { id: id },
                
                    success: function(data){
                        refresh()
                        showNotification('delete', 'Successfully deleted a fare.', 'danger', 'top', 'right');
                    }
                // ajax closing tag
                })
            }
        })
        // End of Confirmation

        
    });
    // CLOSING TAG
});
</script>

<!-- FIXED SCRIPTS -->
    
    <?php $this->load->view('includes/fixed_scripts.php')?>
</html>