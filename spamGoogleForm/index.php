<!DOCTYPE html>
<html>

<head>
  <title>DUARRR N-MAX</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>

<body>

  <div class="container" style="margin-top:20px">
    <h3 class="text-center">Google Form Submitter - Infinite Submission</h3>
    <hr>

    <br>

    <div class="form-group row">
      <label class="col-sm-2 col-form-label">URL ID :</label>
      <div class="col-sm-6">
        <input type="text" class="form-control" id="url" name='url' placeholder="url-id">
      </div>
    </div>
    <div id="input">
      <div id="id1">
        <h5><label for='entry1'>Input 1</label></h5>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">--> ID-Entry :</label>
          <div class="col-sm-6">
            <input type='text' class='form-control' id='entry1' name='entry1' placeholder='entry.xxx'>
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-2 col-form-label">--> Value :</label>
          <div class="col-sm-6">
            <input type='text' class='form-control' id='text1' name='text1' placeholder='value/isi'>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group" id='buttons1'>
      <button onclick='add_f(2);' type='button' class='btn btn-success'>Add Input Field</button>
      <button onclick='remove_f(1);' type='button' class='btn btn-warning'>Remove Input Field</button><br><br>
    </div>

    <label for='entry1'>Number of submissions (consider at a rate of 10 sub/sec to prevent Google from blocking you)</label>
    <input type='text' class='form-control' id='sub' name='sub' placeholder='No. of Submissions'>
    <div class="form-group" id='buttons2'>
      <button type='button' onclick='req(1); return false;' class='btn btn-info'>Submit</button>
    </div>

    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Status</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div id='modalbody' class="modal-body">
            <p>Total Submissions : </p>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <br>
</body>

</html>
