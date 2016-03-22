<section class="content-header">

    <h1>

        Create slider

    </h1>

    @if( count($errors->all()) )

        <div class="alert alert-danger alert-dismissable">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

            <ul>

                @foreach ($errors->all() as $error)

                    <li class="danger alert">{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

</section>

<section id="widget-grid">

    <div class="row">

        <article class="col-sm-12 col-md-12 col-lg-12">

            <div class="jarviswidget jarviswidget-color-blueDark"  data-widget-colorbutton="false" data-widget-editbutton="false" role="widget" style="">

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

                <!-- widget div-->

                <header>

                    <h2><a href="#slider" class=" back-link-icon" title="Back to Slider manager"><i class="fa fa-arrow-circle-o-left"></i></a> Add new slider</h2>

                </header>

                <div role="content">

                    <!-- widget edit box -->

                    <div class="jarviswidget-editbox">

                        <!-- This area used as dropdown edit box -->

                    </div>

                    <!-- end widget edit box -->

                    <!-- widget content -->

                    <div class="widget-body no-padding">

                      <form class="smart-form" method="post" action="{{url('admin/post_create_slider')}}" enctype="multipart/form-data">

                        <fieldset>

                            <div class="row">

                                <div class="col col-10">

                                    <section>

                                        <label class="label" for="image">Image</label>

                                        <label class="input" for="">
                                            <input type="file" name="image">
                                        </label>

                                        

                                        

                                    </section>

                                    

                                    

                                </div>

                            </div>

                        </fieldset>

                        <footer>

                            <button class="btn btn-sm btn-primary pull-left">Save</button>

                        </footer>

                        </form>

                    </div>

                    <!-- end widget content -->

                </div>

                <!-- end widget div -->

            </div>

        </article>

    </div>

</section>



<script type="text/javascript">


    /* DO NOT REMOVE : GLOBAL FUNCTIONS!

     *

     * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS

     *

     * // activate tooltips

     * $("[rel=tooltip]").tooltip();

     *

     * // activate popovers

     * $("[rel=popover]").popover();

     *

     * // activate popovers with hover states

     * $("[rel=popover-hover]").popover({ trigger: "hover" });

     *

     * // activate inline charts

     * runAllCharts();

     *

     * // setup widgets

     * setup_widgets_desktop();

     *

     * // run form elements

     * runAllForms();

     *

     ********************************

     *

     * pageSetUp() is needed whenever you load a page.

     * It initializes and checks for all basic elements of the page

     * and makes rendering easier.

     *

     */



    pageSetUp();



    /*

     * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE

     * eg alert("my home function");

     *

     * var pagefunction = function() {

     *   ...

     * }

     * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);

     *

     * TO LOAD A SCRIPT:

     * var pagefunction = function (){

     *  loadScript("../../plugin.js", run_after_loaded);

     * }

     *

     * OR

     *

     * loadScript("../../plugin.js", run_after_loaded);

     */



    // PAGE RELATED SCRIPTS



    // pagefunction



    var pagefunction = function() {



    };



    // end pagefunction



    // run pagefunction on load

    pagefunction();



</script>





