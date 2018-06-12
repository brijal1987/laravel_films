@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div>
    use session <pre>
            <?php //var_dump(session()->all());  ?> 
            <?php //var_dump(Auth::user());  ?> 
    </pre> 
</div>

<h1>The Original Bootstrap Rating Input <small>in action...</small></h1>

    <p>My rating films: <input type="number" name="rating" id="rating1" class="rating" data-clearable="remove"/></p>

    <h2>With a minimum value and a special empty-value:</h2>
    <p>My rating: <input type="number" name="your_awesome_parameter" id="rating-minimum" class="rating" data-clearable="remove" data-min="2" data-empty-value="1"/></p>

    <p>Readonly: <input type="number" name="your_awesome_parameter" id="rating-readonly" class="rating" data-clearable="remove" value="2" data-readonly/></p>

    <p>My rating: <input type="number" name="your_awesome_parameter" id="rating-custom-icons" class="rating" data-clearable="remove" data-icon-lib="fa" data-active-icon="fa-heart" data-inactive-icon="fa-heart-o" data-clearable-icon="fa-trash-o" value="4"/></p>

@endsection

@section('scripts')

<script>
     $(function(){
    $('input').on('change', function(){
      alert("Changed: " + $(this).val())
    });
  });
</script>

@endsection