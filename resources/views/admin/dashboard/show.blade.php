@extends('admin.layouts.default')
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}" />
<link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />

@can('admin.dashboard.chartLine')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-12"><h3 class="mb-0">Biểu đồ Golf - Khách sạn - Lộ trình xe</h3></div>            
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">

            <div class="col-md-6">
                <div class="card card-warning card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Tìm kiếm</div>
                    </div>
                    <form id="formSearchOne" method="GET">
                        <div class="card-body">
                            <div class="row">                                   
                                <div class="col-md-12">
                                    <label class="col-form-label">Năm</label>
                                    <input class="form-control" id="yearOne" name="search_year" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" 
                                data-url="{{ route('admin.dashboard.chartLine') }}" 
                                class="btn btn-warning btnSearch">Tìm</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-12 block-chart" style="display:none;">

                <div class="card mb-2">
                    <div class="card-body">

                        <div class="position-relative mb-4">
                            <div id="sales-chart"></div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@endcan

@can('admin.dashboard.chartBar')
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
            <div class="col-sm-12"><h3 class="mb-0">Biểu đồ số lượng khách hàng theo tháng trong năm</h3></div>            
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">

            <div class="col-md-9">
                <div class="card card-warning card-outline mb-4">
                    <div class="card-header">
                        <div class="card-title">Tìm kiếm</div>
                    </div>
                    <form id="formSearchSecond" method="GET">
                        <div class="card-body">
                            <div class="row">     
                                @if($isSupperAdmin)                   
                                <div class="col-md-6">
                                    
                                    <label class="col-form-label">Tên nhân viên</label>
                                    <select class="form-select" name="consultant">
                                        <option value="">Tất cả</option>
                                        @foreach($consultants as $consultant)
                                        <option value="{{ $consultant->id }}" @if($consultant->id == @$sConsultant) selected="selected" @endif>{{ $consultant->full_name }}</option>
                                        @endforeach
                                    </select>                                
                                </div>
                                @endif                              
                                <div class="col-md-6">
                                    <label class="col-form-label">Năm</label>
                                    <input class="form-control" id="yearSecond" name="search_year" />
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="button" 
                                data-url="{{ route('admin.dashboard.chartBar') }}" 
                                class="btn btn-warning btnSearchSecond">Tìm</button>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="col-md-12 column-chart" style="display:none;">

                <div class="card mb-2">
                    <div class="card-body">

                        <div class="position-relative mb-4">
                            <div id="column-chart"></div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
@endcan

@stop

@section('scripts')
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script
      src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js"
      integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8="
      crossorigin="anonymous"
    ></script>
<script>

var urlOne = '{{ route("admin.dashboard.chartLine") }}';
var urlSecond = '{{ route("admin.dashboard.chartBar") }}';
var sales_chart;
var column_chart;
$(function () {
    
    const sales_chart_options = {
        series: [],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        title: {},
        // noData: {
        //     text: 'Loading...'
        // },
        legend: {
            show: false,
        },
        // colors: ['#77B6EA', '#545454'],
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: 'straight'
        },
        xaxis: {
            categories: [],
            title: {
                text: 'Tháng'
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: true,
            offsetY: -25,
            offsetX: -5
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return numberFormat(val);
                },
            },
        },
    };

    if($("#sales-chart").length) {
        sales_chart = new ApexCharts(
            document.querySelector("#sales-chart"),
            sales_chart_options
        );
        sales_chart.render();
    }

    const column_chart_options = {
        series: [],
        chart: {
            height: 350,
            type: 'bar',
            zoom: {
                enabled: false
            }
        },
        title: {},
        // noData: {
        //     text: 'Loading...'
        // },
        legend: {
            show: false,
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'],
                opacity: 0.5
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: 'straight'
        },
        xaxis: {
            categories: [],
            title: {
                text: 'Tháng'
            }
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            floating: true,
            offsetY: -25,
            offsetX: -5
        },
        tooltip: {
            y: {
                formatter: function (val) {
                    return numberFormat(val);
                },
            },
        },
    };

    if($("#column-chart").length) {
        column_chart = new ApexCharts(
            document.querySelector("#column-chart"),
            column_chart_options
        );
        column_chart.render();
    }

    $('.btnSearch').click(function () {
        var data = $("#formSearchOne").serializeArray();
        var url = $(this).attr('data-url');

        getChartOne(data, url);
    });
    $('.btnSearchSecond').click(function () {
        var data = $("#formSearchSecond").serializeArray();
        var url = $(this).attr('data-url');

        getChartSecond(data, url);
    });


    if($("#sales-chart").length) {
        getChartOne({}, urlOne);
    }

    if($("#column-chart").length) {
        getChartSecond({}, urlSecond);
    }

});

function getChartOne(data, url)
{
    $.ajax({
        type: "GET",
        url: url,
        data: data,
        dataType: "json",
        beforeSend: function () {
        },
        success: function(data) {
            if(data.code == 1) {

                sales_chart.updateOptions({
                    series: [
                        {
                            name: "Sân Golf",
                            data: data.results.golfs,
                        },
                        {
                            name: "Khách sạn",
                            data: data.results.hotels,
                        },
                        {
                            name: "Thuê xe",
                            data: data.results.cars,
                        }
                    ],
                    xaxis: {
                        categories: data.results.months,
                    },
                    title: {
                        text: 'Biểu đồ biểu diễn đường số lượng các tháng năm ' + data.results.year,
                        align: 'left'
                    },
                });
                $('#sales-chart').closest('.block-chart').show();
            }
        },
        error: function (xhr, status, error) {
            
        }
    });
}

function getChartSecond(data, url)
{
    $.ajax({
        type: "GET",
        url: url,
        data: data,
        dataType: "json",
        beforeSend: function () {
        },
        success: function(data) {
            if(data.code == 1) {

                column_chart.updateOptions({
                    series: [
                        {
                            name: "Khách hàng",
                            data: data.results.customers,
                        }
                    ],
                    xaxis: {
                        categories: data.results.months,
                    },
                    title: {
                        text: 'Báo cáo khách hàng theo năm ' + data.results.year,
                        align: 'left'
                    },
                });
                $('#column-chart').closest('.column-chart').show();
            }
        },
        error: function (xhr, status, error) {
            
        }
    });
}

function numberFormat(num)
{
    const numFor = Intl.NumberFormat('en-US');
    const newFor = numFor.format(num);

    return newFor;
}
</script>
@stop