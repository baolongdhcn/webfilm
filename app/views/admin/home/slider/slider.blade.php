

<!-- Main content -->

<section id="widget-grid">

    <div class="row">

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-0" data-widget-colorbutton="true">

                <!-- widget options:

                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">



                data-widget-colorbutton="false"

                data-widget-editbutton="false"

                data-widget-togglebutton="false"

                data-widget-deletebutton="false"

                data-widget-fullscreenbutton="false"

                data-widget-custombutton="false"

                data-widget-collapsed="true"

                data-widget-sortable="false"



                -->

                <header>

                    <h2>Slider manager</h2>

                </header>



                <!-- widget div-->

                <div>



                    <!-- widget edit box -->

                    <div class="jarviswidget-editbox">

                        <!-- This area used as dropdown edit box -->



                    </div>

                    <!-- end widget edit box -->



                    <!-- widget content -->

                    <div class="widget-body">

                        <p>
                            <a href="#slider/insert" class="btn btn-sm btn-default">Add new</a>
                        </p>
                        <div class="table-responsive">



                            <table class="table table-bordered table-hover">

                                <thead>

                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th></th>
                                    <th></th>
                                </tr>

                                </thead>

                                <tbody>
                                    <?php $i = 0; ?>
                                    @foreach($slider as $row)
                                        <tr>
                                            <th>{{$i+=1}}</th>
                                            <th>{{$row->title_vn}}<br>
                                                {{$row->title_en}}
                                            </th>
                                            <th><img src="{{url($row->image)}}" heigh="50" width="100" alt=""></th>
                                            <th>{{$row->description}}</th>
                                            <th><a href="#slider/edit/{{$row->id}}"><button class="btn btn-xs btn-success">Edit</button></a></th>
                                            <th><a href="delete_slider/{{$row->id}}"><button class="btn btn-xs btn-danger">Delete</button></a></th>
                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>



                        </div>

                    </div>

                    <!-- end widget content -->

                </div>

                <!-- end widget div -->

                </div>

        </article>

    </div>


</section>


<script>
var pagefunction = function() {
        Dropzone.autoDiscover = false;
            $("#mydropzone").dropzone({
                url: "{{url('admin/post_multi')}}",
                addRemoveLinks : true,
                maxFilesize: 10,
                parallelUploads:1,
                dictResponseError: 'Error uploading file!',
                success: function(msg){
                    setTimeout(function(){
                       window.location.reload(1);
                    }, 3000);
                    }
              
            });
    };
    
    loadScript("{{url('backend/smartadmin/js/plugin/dropzone/dropzone.min.js')}}", pagefunction);
 pageSetUp();
    renderEditor();

</script>





