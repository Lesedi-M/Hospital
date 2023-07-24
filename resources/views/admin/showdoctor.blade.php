

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
         
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding:10px;">
                <table>
                    <tr style="background-color: rgb(51, 39, 73)">
                     <th style="padding:10px;">Doctor name</th>   
                     <th style="padding:10px;">Phone</th>   
                     <th style="padding:10px;">Specility</th>   
                     <th style="padding:10px;">Room</th>   
                     <th style="padding:10px;">Image</th>
                     <th style="padding:10px;">Delete</th>
                     {{-- <th style="padding:10px;">Update</th> --}}
                        
                    </tr>
                    @foreach ($data as $doctor )
                        
                    <tr align="center" style="background-color: rgb(39, 32, 46)">
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img height="100" width="100" src="doctorimage/{{$doctor->image}}"></td>
                        <td><a onclick="return confirm('are you sure you want to delete doctor')" class="btn btn-danger" href="{{url('deletedoctor' ,$doctor->id)}}">Delete</a></td>
                        {{-- <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id )}}">Update</a></td> --}}
                        
                    </tr>
                    @endforeach
            </div>
        </div>    
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <!-- <footer-- class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright </span>
             
            </div>
          </footer-->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>
