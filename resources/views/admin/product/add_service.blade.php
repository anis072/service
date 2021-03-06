@extends('adminLayout.admin_design')
@section('content')
<div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="{{ url('/admin/dashbord') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">Products</a> <a href="#" class="current">Add Product</a> </div>

    </div>
    <div class="container-fluid"><hr>
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
              <h5>Add Service</h5>
            </div>
            @if (Session::has('flash_message_succ'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! Session('flash_message_succ') !!}</strong>
            </div>
            @endif
            @if (Session::has('flash_message_error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{!! Session('flash_message_error') !!}</strong>
            </div>
            @endif

            <div class="widget-content nopadding">
              <form enctype="multipart/form-data" class="form-horizontal" method="post" action="{{ url('/admin/add-service') }}" name="add_service" id="add_service" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="widget-box">
                        <div class="widget-box">

                                    <div class="control-group">
                                      <label class="control-label">Under Category</label>
                                      <div class="controls">
                                        <select name="category" style="width:220px;" >
                                          <?php  echo $category_dropdown; ?>
                                        </select>
                                        @error('category')
                                        <div class="error" style="color:red;">{{ $message }}</div>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label">Serive name</label>
                                            <div class="controls">
                                                    <input type="text" name="name" id="name">
                                          @error('name')
                                        <div class="error" style="color:red;">{{ $message }}</div>
                                        @enderror
                                          </div>
                                    </div>
                                    <div class="control-group">
                                            <label class="control-label">Adress</label>
                                            <div class="controls">
                                                    <input type="adress" name="adress" id="code">
                                                    @error('adress')
                                                    <div class="error" style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                      </div>
                                            </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Description</label>
                                        <div class="controls">
                                          <textarea name="description" id="desc"></textarea>
                                        @error('description')
                                        <div class="error" style="color:red;">{{ $message }}</div>
                                        @enderror
                                          </div>
                                      </div>
                                    <div class="control-group">
                                            <label class="control-label">Phone</label>
                                            <div class="controls">
                                            <input type="text" name="phone" id="code">
                                            @error('phone')
                                            <div class="error" style="color:red;">{{ $message }}</div>
                                            @enderror
                                              </div>
                                            </div>

                                    <div class="control-group">
                                            <label class="control-label">Service image</label>
                                            <div class="controls">
                                                    <input type="file" name="image" id="image">
                                                    @error('image')
                                                    <div class="error" style="color:red;">{{ $message }}</div>
                                                    @enderror
                                                      </div>
                                          </div>

                                    <div class="control-group">
                                        <label class="control-label">Open Hour</label>
                                        <div class="controls">
                                        <input type="time" name="openhour" >
                                        @error('openhour')
                                        <div class="error" style="color:red;">{{ $message }}</div>
                                        @enderror
                                          </div>
                                        </div>

                                    <div class="control-group">
                                        <label class="control-label">Close Hour</label>
                                        <div class="controls">
                                        <input type="time" name="closehour" >
                                        @error('closehour')
                                        <div class="error" style="color:red;">{{ $message }}</div>
                                        @enderror
                                          </div>
                                        </div>
                                    </div>
                                      </div>


                <div class="form-actions">
                    <input type="submit" value="add Service" class="btn btn-success">
                  </div>

                                  </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div





@endsection
