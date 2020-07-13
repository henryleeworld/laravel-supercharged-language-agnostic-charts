<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div id="chart" style="height: 300px;"></div>
        <script src="https://unpkg.com/echarts@4.8.0/dist/echarts.min.js"></script>
        <script src="https://unpkg.com/@chartisan/echarts@2.2.3/dist/chartisan_echarts.js"></script>
        <script>
            const chart = new Chartisan({
                el: '#chart',
                url: "@chart('user_line_chart')",
            });
        </script>
    </body>
</html>
