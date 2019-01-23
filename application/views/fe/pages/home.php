<style>
  .file_input_div {
  margin: auto;
  width: 250px;
  height: 40px;
}

.file_input {
  float: left;
}

#file_input_text_div {
  width: 200px;
  margin-top: -8px;
  margin-left: 5px;
}

.none {
  display: none;
}
</style>
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <!-- --->
              <div  class="create_user card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">1 Tasks:</span>
                      
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">done</i> Upcoming
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">done_outline</i> Past
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">done_all</i> All
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div style="float:right">
                    <a id="create" style="color:#fff;" data-toggle="modal" href="#">Create </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="profile">
                      <table class="table table-hover">
                        <thead class="text-primary">
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Designation</th>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td><img src="<?php echo base_url();?>assets/img/employee.jpg" height="70px;" /></td>
                            <td>Emp1</td>
                            <td>12-Feb-2019</td>
                            <td>Developer</td>
                            <td>IT</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="messages">
                      <table class="table table-hover">
                        <thead class="text-primary">
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Designation</th>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td><img src="<?php echo base_url();?>assets/img/employee.jpg" height="70px;" /></td>
                            <td>Emp2</td>
                            <td>12-Feb-2019</td>
                            <td>Developer</td>
                            <td>IT</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane" id="settings">
                      <table class="table table-hover">
                        <thead class="text-primary">
                          <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Designation</th>
                            <th>Department</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td><img src="<?php echo base_url();?>assets/img/employee.jpg" height="70px;" /></td>
                            <td>Emp3</td>
                            <td>12-Feb-2019</td>
                            <td>Developer</td>
                            <td>IT</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- --->
              <div style="display:none;"  class="list_user card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <span class="nav-tabs-title">2 Tasks:</span>
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#profile" data-toggle="tab">
                            <i class="material-icons">done</i> Upcoming
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#messages" data-toggle="tab">
                            <i class="material-icons">done_outline</i> Past
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#settings" data-toggle="tab">
                            <i class="material-icons">done_all</i> All
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div style="float:right">
                      <a id="list" style="color:#fff;" data-toggle="modal" href="#">List </a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Emp Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div id="file-picker" style="margin-top:8px;" class="fileinput fileinput-new input-group" data-provides="fileinput">
                            <div style="margin-right:10px;" class="form-control" data-trigger="fileinput">
                                <i class="glyphicon glyphicon-file"></i> 
                                <span class="fileinput-filename"></span>
                            </div>
                            <span class="form-group md-form">
                                <!-- <span class="fileinput-new">Select file</span>
                                <span class="fileinput-exists">Change</span> -->
                                
                                <input placeholder="Upload Image" class="form-group form-control" type="file" name="...">
                                
                            </span>
                            <a href="#" class="input-group-addon btn btn-danger" data-dismiss="fileinput">Remove</a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">District</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Description</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Breif Description about employee.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>