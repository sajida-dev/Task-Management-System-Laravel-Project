@include('components.header_template')
<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    {{-- <h2>home page</h2> --}}

    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/login.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="" action="">
                        <div class="card card-login card-hidden">
                            <div class="card-header card-header-rose text-center">
                                <h4 class="card-title">Add Task</h4>

                            </div>
                            <div class="card-body ">
                                <p class="card-description text-center">Or <a href="{{route('task.taksList')}}">Task List</a></p>
                                <span class="bmd-form-group">
                                    <div class="input-group">
                                        <input type="text" name="title" class="form-control" placeholder="Title...">
                                    </div>
                                </span>
                                <span class="bmd-form-group">
                                    <div class="input-group">
                                        <textarea name="description" class="form-control"  cols="" rows="3" placeholder="Description..."></textarea>
                                        {{-- <input type="text" class="form-control" placeholder="Description..."> --}}
                                    </div>
                                </span>
                                {{-- <span class="bmd-form-group">
                                    <div class="input-group">
                                        <select class="selectpicker" class="form-control" data-style="select-with-transition" name="status"  title="Choose status" >
                                                <option value="1"> Active</option>
                                                <option value="0"> Inactive</option>
                                        </select>
                                    </div>
                                </span> --}}
                                <span class="bmd-form-group">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="due_date" id="due_date">
                                    </div>
                                </span>

                            </div>
                            <div class="card-footer justify-content-center">
                                <a href="#pablo" class="btn btn-rose btn-link btn-lg">Create</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        </div>

        <script>
            setTimeout(function() {
                    // after 1000 ms we add the class animated to the login/register card
                    $('.card').removeClass('card-hidden');
                }, 700);
            $(document).ready(function() {
                $("#header_page_name").html('Task Management System');
                md.checkFullPageBackgroundImage();

            });
        </script>
</div>
@include('components.footer_template')
