<div class="row well">
    <h3 style="text-align:center;">Live Data from {{$values[$current][0] . ":" . $values[$current][1] . " Today"}}</h3>
    <table class="table">
        <tr>
            <td>Temperature:</td>
            <td>{{$values[$current][8]}} &#8457</td>
            <td>Dew Point:</td>
            <td>{{$values[$current][12]}} &#8457</td>
        </tr>
        <tr>
            <td>Humidity:</td>
            <td>{{$values[$current][7]}} %</td>
            <td>Pressure:</td>
            <td>{{$values[$current][11]}} in.</td>
        </tr>
        <tr>
            <td>Wind Speed:</td>
            <td>{{$values[$current][4]}} mph</td>
            <td>Wind Direction:</td>
            <td>{{$values[$current][3]}} &#176</td>
        </tr>
        <tr>
            <td>Gust Speed:</td>
            <td>{{$values[$current][5]}} mph</td>
            <td>Gust Direction:</td>
            <td>{{$values[$current][6]}} &#176</td>
        </tr>
        <tr>
            <td>Current Rain:</td>
            <td>{{$values[$current][9]}}</td>
            <td>Rain Accumulation:</td>
            <td>{{$values[$current][10]}} in.</td>
        </tr>
    </table>
</div>