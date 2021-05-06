@extends('layouts.admin')
@section('css_plugin')
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/core/colors/palette-gradient.css') }}">
@endsection


@section('content')
<div class="row dashboard">
        <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="ft-file-text font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5 class="text-bold text-bold-500">News</h5>
                    <h5 class="text-bold-400 mb-0">{{ $news_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="ft-layers font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5 class="text-bold text-bold-500">Category</h5>
                    <h5 class="text-bold-400 mb-0">{{ $category_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="ft-user font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5 class="text-bold text-bold-500">User</h5>
                    <h5 class="text-bold-400 mb-0">{{ $user_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="ft-mail font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5 class="text-bold text-bold-500">Subscriber</h5>
                    <h5 class="text-bold-400 mb-0">{{ $subscriber_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-danger bg-darken-2">
                    <i class="ft-eye font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-danger white media-body">
                    <h5 class="text-bold text-bold-500">Visitor</h5>
                    <h5 class="text-bold-400 mb-0">{{ $visitor_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="ft-image font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5 class="text-bold text-bold-500">Image</h5>
                    <h5 class="text-bold-400 mb-0">{{ $image_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-primary bg-darken-2">
                    <i class="ft-film font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-primary white media-body">
                    <h5 class="text-bold text-bold-500">Video</h5>
                    <h5 class="text-bold-400 mb-0">{{ $video_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="ft-file font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5 class="text-bold text-bold-500">Page</h5>
                    <h5 class="text-bold-400 mb-0">{{ $page_count }}</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>

  <div class="content-body">
    <!-- Basic Column Chart -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">News</h4>
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                <li><a data-action="close"><i class="ft-x"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body">
              <div id="basic-column" class="height-400 echart-container"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('js_plugin')
<script src="{{ asset('admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script>
@endsection

@section('custom_js')
<script>
/*=========================================================================================
    File Name: basic-column.js
    Description: echarts column chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Basic column chart
// ------------------------------

$(window).on("load", function(){

// Set paths
// ------------------------------

require.config({
    paths: {
        echarts: "{{ asset('admin/vendors/js/charts/echarts') }}"
    }
});

// Configuration
// ------------------------------

require(
    [
        'echarts',
        'echarts/chart/bar',
        'echarts/chart/line'
    ],


    // Charts setup
    function (ec) {

        let myDate = "{!! $all_date !!}";
        let myDateArr = myDate.split(",");

        let allNewsCount = "{{ $all_news_count }}";
        let allNewsCountArr = allNewsCount.split(',');
        console.log(allNewsCountArr);

        // Initialize chart
        // ------------------------------
        var myChart = ec.init(document.getElementById('basic-column'));

        // Chart Options
        // ------------------------------
        chartOptions = {

            // Setup grid
            grid: {
                x: 40,
                x2: 40,
                y: 35,
                y2: 25
            },

            // Add tooltip
            tooltip: {
                trigger: 'axis'
            },

            // Add custom colors
            color: ['#00B5B8', '#FF7588'],

            // Enable drag recalculate
            calculable: true,

            // Horizontal axis
            xAxis: [{
                type: 'category',
                data: myDateArr,
            }],

            // Vertical axis
            yAxis: [{
                type: 'value'
            }],

            // Add series
            series: [
                {
                    name: 'News',
                    type: 'bar',
                    data: allNewsCountArr,
                    itemStyle: {
                        normal: {
                            label: {
                                show: true,
                                textStyle: {
                                    fontWeight: 500
                                }
                            }
                        }
                    },
                    markLine: {
                        data: [{type: 'average', name: 'Average'}]
                    }
                },

            ]
        };

        // Apply options
        // ------------------------------

        myChart.setOption(chartOptions);


        // Resize chart
        // ------------------------------

        $(function () {

            // Resize chart on menu width change and window resize
            $(window).on('resize', resize);
            $(".menu-toggle").on('click', resize);

            // Resize function
            function resize() {
                setTimeout(function() {

                    // Resize chart
                    myChart.resize();
                }, 200);
            }
        });
    }
);
});
</script>
@endsection
