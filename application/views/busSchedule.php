<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">
    
<!-- HEAD TAG -->
<?php $this->load->view('includes/head.php'); ?>
<style>
    .drpdwn {
        margin-top: -10px
    }

</style>
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
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
              <h5 class="card-header">
                  <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                      <i class="fa fa-chevron-down pull-right"></i>
                      Add Bus Schedule
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  
                      <form id="busScheduleForm">
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label class="drpdwn-label" for="busNumberInput">Bus Number</label>
                                <select class="form-control drpdwn" id="busNumberInput" name="busNumberInput">
                                  
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="label-control" for="scheduleDateInput">Schedule Date</label> <br>
                                <input type="date" class="form-control" id="scheduleDateInput" name="scheduleDateInput">
                            </div>
                          </div>
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
              </div>
          </div>

          <div class="card">
            <div class="card-body">
              <table id="busScheduleTable" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Bus Number</th>
                    <th>Bus Schedule</th>
                    <th>Plate Number</th>
                    <th>Date Created</th>
                    <th>Actions</th>
                </thead>
              </table>
          </div>
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->

      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModal">Edit Bus</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
              <form id="editBusScheduleForm">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label class="drpdwn-label" for="editBusNumberInput">Bus Number</label>
                        <input type="text" class="form-control" id="editScheduleId" name="editScheduleId" hidden>
                        <input type="text" class="form-control" id="editBusNumberInput" name="editBusNumberInput" readonly>
                    </div>
                    <div class="form-group col-sm-6">
                        <label class="label-control" for="editScheduleDateInput">Schedule Date</label> <br>
                        <input type="date" class="form-control" id="editScheduleDateInput" name="editScheduleDateInput">
                    </div>
                </div>
                        <input type="submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="deleteForm">
              <input hidden type="text" id="deleteBusScheduleId" name="deleteBusScheduleId">
              You're deactivating this Bus Schedule
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger delete-confirm" >Deactivate</button>
            </div>
          </div>
        </div>
      </div>
      <!-- FOOTER -->
      <?php $this->load->view('includes/footer.php')?>

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
</body>

<script>

function dataTable(){
    busScheduleData = $('#busScheduleTable').DataTable({
      "ajax": "<?php echo base_url()?>busSchedule/showBusSchedule",
      "columns": [
          {data: "id"},
          {data: "busInformation.number"},
          {data: "scheduleDate", render: function(data, type, row){
                return moment(data).format('LL');
          }},
          {data: "busInformation.plateNumber"},
          {data: "created_at", render: function(data, type, row){
                return moment(data).format('LL');
          }},
          {data: "status", render: function(data, type, row){
                if (data == "Active"){
                  return '<div class="btn-group">' +
                          '<button class="btn btn-warning btn-sm btn-edit" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Edit </button>'+
                          '<button class="btn btn-danger btn-sm btn-delete" value="' + row.id + '"title = "Delete" type="button"> <i class="zmdi zmdi-delete"></i> Delete </button></div>';
                }
                else{
                  return '<button class="btn btn-danger btn-sm">Activate</button>';
                }
              }
          }
        ],

      "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }],
      "order": [[4, "desc"]]

    })

};


function getbusNumber(){
    
    $.ajax({
      url: '<?php echo base_url()?>busSchedule/getBusNumber',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busNumber = data.data;
        console.log(busNumber);
        var html = ""

        for(var i=0; i < busNumber.length; i++){
          html += `<option value="${busNumber[i].id}">${busNumber[i].number}</option>`
        }
        
        $('#busNumberInput').html(html);
        $('#busTypeEdit').html(html);

      }
    })
  }

getbusNumber();
dataTable();

function refresh(){
  var url="<?php echo base_url()?>busSchedule/showBusSchedule";

  busScheduleData.ajax.url(url).load();
}


$('#busScheduleForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#busScheduleForm');

    $.ajax({
        url:'<?php echo base_url()?>busSchedule/addBusSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          document.getElementById("busScheduleForm").reset();
          showNotification('create', 'Successfully added a new bus schedule!', 'success', 'top', 'right');
          refresh();
        }
    })
});

$(document).on("click", ".btn-edit", function(){
  var id = this.value;
  $("#editModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>busSchedule/viewBusSchedule',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var schedInfo = data.data;

          $('#editScheduleId').val(schedInfo.id);
          $('#editBusNumberInput').val(schedInfo.busInformation.number);
          $('#editScheduleDateInput').val(schedInfo.scheduleDate);
        }
    })
});

$('#editBusScheduleForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#editBusScheduleForm');
    
    $.ajax({
        url:'<?php echo base_url()?>busSchedule/editBusSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#editModal").modal('hide');
          showNotification('update', 'Successfully update bus schedule!', 'warning', 'top', 'right');
          refresh();
        }
    })
});

$(document).on("click", ".btn-delete", function(){
  var id = this.value;
  $("#deleteModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>busSchedule/viewBusSchedule',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var schedInfo = data.data;
          var deleteBusScheduleId = document.getElementById('deleteBusScheduleId');
          deleteBusScheduleId.value = schedInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

    e.preventDefault();

    var form = $('#deleteForm');

    $.ajax({
        url:'<?php echo base_url()?>busSchedule/deleteBusSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#deleteModal").modal('hide');
          showNotification('delete', 'Deleted a bus schedule!', 'danger', 'top', 'right');
          refresh();
        }
    })
});


</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>