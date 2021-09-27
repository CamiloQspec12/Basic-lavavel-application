<html lang="{{ app()->getLocale() }}" >
    <body style='margin:0' >
        <div id="app" >
            <headernav></headernav>
            <matches-component :data="{{json_encode($arrMatches)}}"></matches-component>
            dawdwad
        </div>
    </body>
        
    <script src="{{asset('js/app.js')}}" >  </script>
</html>