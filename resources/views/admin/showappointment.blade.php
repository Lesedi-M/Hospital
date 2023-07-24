

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
     @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper ">
          <div align="center" style="padding:10px;">
            <table class="table " width="100%">
                <tr style="background-color: rgb(51, 39, 73)">
                 <th style="padding:10px;">Patient name</th>   
                 <th style="padding:10px;">Email</th>   
                 <th style="padding:10px;">Phone</th>   
                 <th style="padding:10px;">Doctor Name</th>   
                 <th style="padding:10px;">Date</th>   
                 <th style="padding:10px;">Messages</th>   
                 <th style="padding:10px;">Status</th>   
                 <th style="padding:10px;">Approve</th>   
                 <th style="padding:10px;">Cancel</th>   
                 <th style="padding:10px;">Send mail</th>   
                </tr>
                @foreach ($data as $appoint )
                    
                
                <tr align="center" style="background-color: rgb(39, 32, 46)" >
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                    <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a></td>
                    <td><a class="btn btn-primary" href="{{url('canceled',$appoint->id)}}">Send mail</a></td>
                    
                </tr>
                @endforeach
            </table>
          </div>
          
        </div>
          <!-- content-wrapper ends -->
          <!-- content-wrapper ends -->
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
        
          <!-- partial -->
        </div>
    </div>
        <!-- main-panel ends -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright </span>
             
            </div>
          </footer>
      </div>
      <!-- page-body-wrapper ends -->
      
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.scripts')
  </body>
</html>
