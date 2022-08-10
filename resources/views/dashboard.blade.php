@extends('layouts.app')

@section('page-name', 'Dashboard')

@section('content')
<!--begin::Row-->
<div class="row g-5 g-xl-10 mb-xl-10">
    <!--begin::Col-->
    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
        <!--begin::Chart widget 3-->
        <div class="card card-flush overflow-hidden h-md-100">
            <!--begin::Header-->
            <div class="card-header py-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Prontuários</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Prontuários registrados nos últimos 7 dias</span>
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                <!--begin::Statistics-->
                <div class="px-9 mb-5">
                    <!--begin::Statistics-->
                    <div class="d-flex mb-2">
                        <span id="total_ata" class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"></span>
                    </div>
                    <!--end::Statistics-->
                </div>
                <!--end::Statistics-->
                <!--begin::Chart-->
                <div id="prontuarios_graf" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Chart widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
        <!--begin::Chart widget 3-->
        <div class="card card-flush overflow-hidden h-md-100">
            <!--begin::Header-->
            <div class="card-header py-5">
                <!--begin::Title-->
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold text-dark">Ata</span>
                    <span class="text-gray-400 mt-1 fw-semibold fs-6">Registros de ATA nos últimos 7 dias</span>
                </h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Card body-->
            <div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
                <!--begin::Statistics-->
                <div class="px-9 mb-5">
                    <!--begin::Statistics-->
                    <div class="d-flex mb-2">
                        <span id="total_prontuario" class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2"></span>
                    </div>
                    <!--end::Statistics-->
                </div>
                <!--end::Statistics-->
                <!--begin::Chart-->
                <div id="ata_graf" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
                <!--end::Chart-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Chart widget 3-->
    </div>
    <!--end::Col-->
</div>
<!--end::Row-->
@endsection

@section('scripts')
    <script>
        fetch('{{route('dashboard.data')}}')
                .then((data) => data.json())
                .then((data) => {
                    var time = data[0];
                    var total_prontuario = data[1];
                    var total_ata = data[2];
                    var prontuario = data[3];
                    var ata = data[4];
                    var max_prontuario = Math.max.apply(Math, data[3]) + 2;
                    var min_prontuario = Math.min.apply(Math, data[3]);
                    var max_ata = Math.max.apply(Math, data[4]) + 2;
                    var min_ata = Math.min.apply(Math, data[4]);

                    document.getElementById('total_prontuario').value = total_prontuario;
                    document.getElementById('total_ata').value = total_ata;

                    var KTChartsWidgetProntuarioGraf=function(){var e={self:null,rendered:!1},t=function(e){var t=document.getElementById("prontuarios_graf");if(t){var a=parseInt(KTUtil.css(t,"height")),l=KTUtil.getCssVariableValue("--kt-gray-500"),r=KTUtil.getCssVariableValue("--kt-border-dashed-color"),o=KTUtil.getCssVariableValue("--kt-success"),i={series:[{name:"Registros",data:prontuario}],chart:{fontFamily:"inherit",type:"area",height:a,toolbar:{show:!1}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.4,opacityTo:0,stops:[0,80,100]}},stroke:{curve:"smooth",show:!0,width:3,colors:[o]},xaxis:{categories:time,axisBorder:{show:!1},axisTicks:{show:!1},tickAmount:6,labels:{rotate:0,rotateAlways:!0,style:{colors:l,fontSize:"12px"}},crosshairs:{position:"front",stroke:{color:o,width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:"12px"}}},yaxis:{tickAmount:4,max:max_prontuario,min:min_prontuario,labels:{style:{colors:l,fontSize:"12px"},formatter:function(e){return e}}},states:{normal:{filter:{type:"none",value:0}},hover:{filter:{type:"none",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:"none",value:0}}},tooltip:{style:{fontSize:"12px"},y:{formatter:function(e){return e}}},colors:[KTUtil.getCssVariableValue("--kt-success")],grid:{borderColor:r,strokeDashArray:4,yaxis:{lines:{show:!0}}},markers:{strokeColor:o,strokeWidth:3}};e.self=new ApexCharts(t,i),setTimeout((function(){e.self.render(),e.rendered=!0}),200)}};return{init:function(){t(e),KTThemeMode.on("kt.thememode.change",(function(){e.rendered&&e.self.destroy(),t(e)}))}}}();"undefined"!=typeof module&&(module.exports=KTChartsWidgetProntuarioGraf),KTUtil.onDOMContentLoaded((function(){KTChartsWidgetProntuarioGraf.init()}));
                    var KTChartsWidgetAtaGraf=function(){var e={self:null,rendered:!1},t=function(e){var t=document.getElementById("ata_graf");if(t){var a=parseInt(KTUtil.css(t,"height")),l=KTUtil.getCssVariableValue("--kt-gray-500"),r=KTUtil.getCssVariableValue("--kt-border-dashed-color"),o=KTUtil.getCssVariableValue("--kt-success"),i={series:[{name:"Registros",data:ata}],chart:{fontFamily:"inherit",type:"area",height:a,toolbar:{show:!1}},plotOptions:{},legend:{show:!1},dataLabels:{enabled:!1},fill:{type:"gradient",gradient:{shadeIntensity:1,opacityFrom:.4,opacityTo:0,stops:[0,80,100]}},stroke:{curve:"smooth",show:!0,width:3,colors:[o]},xaxis:{categories:time,axisBorder:{show:!1},axisTicks:{show:!1},tickAmount:6,labels:{rotate:0,rotateAlways:!0,style:{colors:l,fontSize:"12px"}},crosshairs:{position:"front",stroke:{color:o,width:1,dashArray:3}},tooltip:{enabled:!0,formatter:void 0,offsetY:0,style:{fontSize:"12px"}}},yaxis:{tickAmount:4,max:max_ata,min:min_ata,labels:{style:{colors:l,fontSize:"12px"},formatter:function(e){return e}}},states:{normal:{filter:{type:"none",value:0}},hover:{filter:{type:"none",value:0}},active:{allowMultipleDataPointsSelection:!1,filter:{type:"none",value:0}}},tooltip:{style:{fontSize:"12px"},y:{formatter:function(e){return e}}},colors:[KTUtil.getCssVariableValue("--kt-success")],grid:{borderColor:r,strokeDashArray:4,yaxis:{lines:{show:!0}}},markers:{strokeColor:o,strokeWidth:3}};e.self=new ApexCharts(t,i),setTimeout((function(){e.self.render(),e.rendered=!0}),200)}};return{init:function(){t(e),KTThemeMode.on("kt.thememode.change",(function(){e.rendered&&e.self.destroy(),t(e)}))}}}();"undefined"!=typeof module&&(module.exports=KTChartsWidgetAtaGraf),KTUtil.onDOMContentLoaded((function(){KTChartsWidgetAtaGraf.init()}));
                });
    </script>
@endsection
