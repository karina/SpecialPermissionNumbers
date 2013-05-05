layout('layouts/main.php')
@section('content')

@foreach( $requests as $req){
    echo $req<br />\n;

}





@endsection
