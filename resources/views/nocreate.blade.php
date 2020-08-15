<h1> ejemplo validando paramentros </h1>
<p>Si age es mayor q cero sera OK</p>
<a href="{{ url('/ok/?age=1') }}">../ok/?age=1</a>
<p>Si age es menor o igual cero sera BAD</p>
<a href="{{ url('/ok/?age=0') }}">../ok/?age=0</a>
