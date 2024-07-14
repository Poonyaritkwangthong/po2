@extends('layouts.user')

@section('title')
Vote Result Page
@endsection

@section('content')
<div>
    <h1 class="text-[30px] font-heading font-bold ml-10 text-center my-10">ผลสรุปจำนวนคนที่โหวด</h1>
</div>


    <div class="flex items-center gap-4 p-4">

    <!--เห็นด้วย-->
    <div class="w-full">
            <h1></h1>
            <canvas id="myChart1"></canvas>
    </div>
    <!--เห็นด้วย-->

    <!--ไม่เห็นด้วย-->
    <div class="w-full">
            <h1></h1>
            <canvas id="myChart2"></canvas>
    </div>

    </div>
    <!--ไม่เห็นด้วย-->



</div>
</body>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

    var labels_agree =  {{ Js::from($labels_agree) }};
    var datas_agree =  {{ Js::from($data_agree) }};
    var labels_disagree = {{ Js::from($labels_disagree) }};
    var datas_disagree = {{ Js::from($data_disagree) }};


    const data_agree = {
        labels: labels_agree,
        datasets: [{
            label: 'จำนวนคนที่เห็นด้วย',
            backgroundColor: 'rgb(23, 189, 17)',
            borderColor: 'rgb(87, 255, 143)',
            data: datas_agree,
        }]
    };

    const config_agree = {
        type: 'bar',
        data: data_agree,
        options: {}
    };

    const myChart1 = new Chart(
        document.getElementById('myChart1'),
        config_agree
    );

    const data_disagree = {
        labels: labels_disagree,
        datasets: [{
            label: 'จำนวนคนที่ไม่เห็นด้วย',
            backgroundColor: 'rgb(255, 20, 63)',
            borderColor: 'rgb(199, 70, 93)',
            data: datas_disagree,
        }]
    };

    const config_disagree = {
        type: 'bar',
        data: data_disagree,
        options: {}
    };

    const myChart2 = new Chart(
        document.getElementById('myChart2'),
        config_disagree
    );


</script>

</html>

@endsection

