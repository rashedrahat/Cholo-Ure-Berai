<?php $__env->startSection('content'); ?>
    <div class="jumbotron container text-center">
        <h1>Welcome to Cholo Ure Berai!</h1>
        <a class="btn btn-outline-success" href="/login" role="button">Login</a>&emsp;<a class="btn btn-outline-primary" href="/register" role="button">Registration</a>
    </div>

    <!--Ajax portion-->
    
    <div class="container">
        <div class="form-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Search Users Blogs" />
        </div>
        <div class="card text-center">
            <div class="card-header">
                Total Blog : <span id="total_records"></span>
            </div>
            <div class="card-body">
                    <table class="table table-striped text-left">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>