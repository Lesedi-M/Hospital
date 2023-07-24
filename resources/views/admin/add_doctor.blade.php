

<!DOCTYPE html>
<html lang="en">
  <head>
   <style type="text/css">
      label{
        display:inline-block;
        width: 200px;
      }  
    </style> 
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

           

          <div class="container" align="center" style="padding-top:100px;">

            @if(session()->has('message'))

            <div class="alert alert-success">

                {{-- <button type="button" class="close" data-dismiss="alert">X</button> --}}
                <button type="button" class="close" data-dismiss="alert" onclick="this.parentElement.style.display='none';">X</button>
                {{session()->get('message')}}
            </div>
           @endif 

                <form action="{{url('upload_doctor')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                     <label>Doctor Name</label>   
                      <input type="text" name="name" style="color:black;" placeholder="Name" required="">
                    </div>

                    <div style="padding:15px;">
                     <label>Phone</label>   
                      <input type="number" name="phone" style="color:black;" placeholder="Phone" required="">
                    </div>

                    <div style="padding:15px;">
                     <label>Speciality </label>   
                     <select style="color:black; width:200px;" name="speciality">
                        <option>--Select--</option>
                       <option value="Dermatologist">Dermatologist</option>
                       <option value="Cardiologist">Cardiologist</option>
                       <option value="Optometrist">Optometrist</option>
                       <option value="Surgeon">Surgeon </option>
                     </select>
                    </div>

                    <div style="padding:15px;">
                     <label>Room No</label>   
                      <input type="text" name="room" style="color:black;" placeholder="Room No"required="">
                    </div>

                    <div style="padding:15px;">
                     <label>Doctor Image</label>   
                      <input type="file" name="file" required="">
                    </div>

                    <div style="padding:15px;">
                        
                      <input type="submit" class="btn btn-success" >
                    </div>
                </form>
          </div>
        </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
     <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright </span>
             
            </div>
          </footer> 
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>
