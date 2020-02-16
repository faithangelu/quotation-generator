<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quotation Generator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Quotation Generator by faithangelu</h2>
  
  <!-- Large modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Add Quotation</button>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center">Quotation Form</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group row">
              <div class="col-sm-6">                
                <label for="exampleFormControlInput1">Company Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="col-sm-6">                
                <label for="exampleFormControlInput1">Contact Person</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-6">                
                <label for="exampleFormControlInput1">Contact Number</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="col-sm-6">                
                <label for="exampleFormControlInput1">Email Address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">                
                <label for="exampleFormControlInput1">Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            </div>

            <hr>

            <div class="form-group row">
              <div class="col">                
                <label for="exampleFormControlInput1">SKU</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div> 
              <div class="col">                
                <label for="exampleFormControlInput1">Particulars</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div> 
              <div class="col">                
                <label for="exampleFormControlInput1">Quantity</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div> 
              <div class="col">                
                <label for="exampleFormControlInput1">Unit Price</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div> 
              <div class="col">                
                <label for="exampleFormControlInput1">Amount</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">   
              </div>
              <div class="col">                
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
              </div>
            </div>
          </form>      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="m-5"></div>

  <table id="example" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <th>Quotation #</th>
            <th>Company</th>
            <th>Date Created</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
     <!--  <?php if($quote) { ?> -->
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>Edinburgh</td>
            <td>61</td>
        </tr>
      <!-- <?php } ?> -->
    </tbody>
  </table>
</div>
  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        buttons: {
          buttons: [
              {
                text: 'Alert',
                action: function ( e, dt, node, config ) {
                    alert( 'Activated!' );
                    this.disable(); // disable button
                }
              }
          ]
        }
      });
    } );
  </script>
</body>
</html>
