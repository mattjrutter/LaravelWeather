<div class="well">
    @if(!Auth::guest())
        <div id='temps_div'></div>
        <?= $lava->render('LineChart', 'Temps', 'temps_div') ?>
        <div id='wind_div'></div>
        <?= $lava->render('ComboChart', 'WindSpeed', 'wind_div') ?>
        <div id='windD_div'></div>
        <?= $lava->render('ScatterChart', 'WindDirection', 'windD_div') ?>
        <div id='rain_div'></div>
        <?= $lava->render('LineChart', 'Precipitation', 'rain_div') ?>
        <div id='pressure_div'></div>
        <?= $lava->render('LineChart', 'Pressure', 'pressure_div') ?>
    @else
        <p>Welcome! If you have an account, please <a href="/login">login</a>. If don't have an account,
            <a href="/register">register now</a> to get access to post in the blog and view charts of historical
            weather data including in the archive!</p>
    @endif
</div>