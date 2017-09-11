
<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row summary">
            <div class="col-sm-6 left">
            <h3 class="page-header">Jumla</h3>
            <div class="mapato-summary">
                <div class="heading">
                    <h3>Jumla ya mapato</h3>
                </div>
                <div class="kiasi">TShs: </div>
                <div class="status">
                    <?php if ($totalProfit == 'Tshs. 0') { ?>
                    <h4> BADO HAIJALIPWA</h4>
                    <?php } ?>
                </div>
            </div>
        </div>  <!--end for left panel in malipo mwezi-->
        <div class="col-sm-6 right">
        <h3 class="page-header">Muhtasari</h3>
        <div class="vizazi-summary">
            <ul>
                <?php if ($user_type ==1) { ?>
                <li class="list-group-item"><label>GAWIO </label><span class="pull-right"><?php echo $totalProfit; ?></span></li>
               <?php }
                if ($user_type ==3) { ?>
                <li class="list-group-item"><label>Mauzo</label><span class="pull-right"><?php echo $income6; ?></span></li>";
                <?php } ?>
                <li class="list-group-item"><label>Binafsi</label><span class="pull-right"><?php echo $own_income; ?></span></li>
                <li class="list-group-item"><label>Kizazi cha kwanza ()</label><span class="pull-right"><?php echo $income1; ?></span></li>
                <li class="list-group-item"><label>Kizazi cha pili ()</label><span class="pull-right"><?php echo $income2; ?></span></li>
                <li class="list-group-item"><label>Kizazi cha tatu ()</label><span class="pull-right"><?php echo $income3; ?></span></li>
                <li class="list-group-item"><label>Kizazi cha nne ()</label><span class="pull-right"><?php echo $income4; ?></span></li>
                <li class="list-group-item"><label>Kizazi cha tano ()</label><span class="pull-right"><?php echo $income5; ?></span></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-xs-18 col-sm-12">
<h3 class="page-header">Mchanganuo</h3>

<?php if($total!=0){ ?>
<div id="ms">
    <table class="table table-bordered">
    <tr>
        <th rowspan="2">Tarehe</th>
        <th rowspan="2">Muda</th>
        <th rowspan="2">Bidhaa</th>
        <th rowspan="2">Kiasi kilichonunuliwa<br/>(idadi)</th>
        <th rowspan="2">Faida @ kg</th>
        <th rowspan="2">Mteja<br/>(kizazi)</th>
        <th colspan="2">Malipo @ kg</th>
        <th rowspan="2">Jumla ya Malipo<br/> kwa kg zilizonunuliwa<br/> (Tshs)</th>
    </tr>
    <tr>
        <td>(%)</td>
        <td>Tshs.</td>

    </tr>
    </table>
</div>";
<?php } ?>
</div>
<div id="container"></div>";

<table class="table table-bordered">
<tr>
    <th rowspan="2">Tarehe</th>
    <th rowspan="2">Muda</th>
    <th rowspan="2">Bidhaa</th>
    <th rowspan="2">Kiasi kilichonunuliwa<br/>(kwa kg)</th>
    <th rowspan="2">Faida @ kg</th>
    <th rowspan="2">Mteja<br/>(kizazi)</th>
    <th colspan="2">Malipo @ kg</th>
    <th rowspan="2">Jumla ya Malipo<br/> kwa kg zilizonunuliwa<br/> (Tshs)</th>
</tr>
<tr>
    <td>(%)</td>
    <td>Tshs.</td>
</tr>
</table>".
<script src=''></script>
<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Mgawanyo wa Mapato'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f} %</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            name: 'Mgawanyo Wa Vizazi',
            colorByPoint: true,
            data: [
                {
                    name: 'Mauzo',
                    y: <?php if ($user_type == 3) { $var = substr($income6, 6); echo str_replace(",", "", $var); } else echo 0; ?>,
                    sliced: true,
                    selected: true
                },
                {
                    name: 'GAWIO',
                    y: <?php if ($user_type == 1) echo (int)str_replace(",", "", explode(" ",$totalProfit)[1]); else echo 0; ?>,
                    sliced: true,
                    selected: true
                },
                {
                    name: 'BINAFSI',
                    y: <?php $var = substr($own_income, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>,
                    sliced: true,
                    selected: true
                }, {
                    name: 'KIZAZI 1',
                    y: <?php $var = substr($income1, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>
                }, {
                    name: 'KIZAZI 2',
                    y: <?php $var = substr($income2, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>
                }, {
                    name: 'KIZAZI 3',
                    y: <?php $var = substr($income3, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>
                }, {
                    name: 'KIZAZI 4',
                    y: <?php $var = substr($income4, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>
                }, {
                    name: 'KIZAZI 5',
                    y: <?php $var = substr($income5, 6); if ($var == "") echo 0; else echo str_replace(",", "", $var); ?>
                }]
        }]
    });

    function displayTableData(arg1, arg2){
        $.get( "mapato.php", { limit: arg1, page: arg2 } ).done(function( data ) {
            $("#ms").html(data);
        });
    }

</script>
        </div>
    </div>
</div>
    <!-- /page content -->