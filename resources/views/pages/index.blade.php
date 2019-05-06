@extends('layouts.app')
@section('content')
    <div class="jumbotron container text-center">
        <h4>Welcome to Cholo Ure Berai!</h4>
        <h5>Are you a blogger? Love blogging?</h5>
        <h6>Yes? Then, you are on the right place!</h6>
        <a class="btn btn-outline-success" href="/login" role="button">Already have an account?</a>&emsp;<a class="btn btn-outline-primary" href="/register" role="button">Don't have an account?</a>
    </div>

    <!--Ajax portion-->
    
    <div class="container">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search blogs.." />
        </div>
        <div class="card text-center">
            <div class="card-header">
                Total Blog : <span id="total_records"></span>
            </div>
            <div class="card-body">
                    <table class="table table-striped table-sm text-left">
                        <thead>
                            <tr>
                                <th>Blog Title</th>
                            </tr>
                        </thead>
                        <tbody>
                     
                        </tbody>
                    </table>
            </div>
            <div class="card-footer text-muted">
                Click on Blogs to see more details about blogs.
            </div>
          </div>
    </div>
 
       <script>
            $(document).ready(function(){
            
             fetch_posts_data();
            
             function fetch_posts_data(query = '')
             {
              $.ajax({
               url:'/search/action',
               method:'GET',
               data:{query:query},
               dataType:'json',
               success:function(data)
               {
                $('tbody').html(data.table_data);
                $('#total_records').text(data.total_data);
               }
              })
             }
            
             $(document).on('keyup', '#search', function(){
              var query = $(this).val();
              fetch_posts_data(query);
             });
            });
        </script>  
@endsection