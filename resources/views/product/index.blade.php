@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @if(Session::has('deleted_message'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{ Session::get('deleted_message') }}
            </div>
        @endif


        <div class="col-md-10 col-md-offset-2">
            <a class="pull-right btn btn-primary" style="margin-bottom: 10px" href="{{ URL::to('/product/create') }}"> Create </a> 
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Price
                        </td>
                        <td>
                            Unit
                        </td>
                        <td>
                            Action
                        </td>
                    </tr>
                </thead>
                @if(!$products->isEmpty())
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>
                                    {{ $product->name }}
                                </td>
                                <td>
                                    {{ $product->price }}
                                </td>
                                <td>
                                    {{ $product->unit }}
                                </td>
                                <td>
                                    <a class="btn btn-success" href="{{ URL::to('/product/show/'.$product->id) }}"> Details </a>
                                    <a  class="btn btn-info" href="{{ URL::to('/product/edit/'.$product->id) }}"> Edit </a> 
                                    <a class="btn btn-danger" href="{{ URL::to('/product/delete/'.$product->id) }}" onclick="return checkDelete();"> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @else
                    <tr>
                        <td colspan="4"><p>No Record</p></td>
                    </tr>                    
                @endif
            </table>

        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::to('bootstrap/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">

    function checkDelete(){
        var $chk = confirm('Are You Sure You Want To Delete This?');
        if ($chk) {
            return true;
        } else{
            return false;
        }
    }
</script>
@endsection
