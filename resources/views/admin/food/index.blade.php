@extends('admin.layout.master')

@section('content')

    <div class="block-header">
        <h2>Food Catering List</h2><br/><a href="/admin/foods/create" class="btn btn-primary btn-xs">Add Food</a>
    </div>
    <!-- Basic Table -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Buffet Style/Tray</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $index=1 ?>
                        @if ($entries->count())
                            @foreach ($entries as $entry)
                            <tr>
                                <th scope="row">{{$index}}</th>
                                <td>{{$entry->food_name}}</td>
                                <td><i class="material-icons">attach_money</i><span class="icon-name">{{$entry->price}}</span></td>
                                <td>{{$entry->type}}</td>
                                <td>
                                 <a class="btn btn-primary btn-xs" href="{{ route('admin::foods.show', ['id' => $entry->id]) }}" title="View Food">
                                    View
                                </a>

                                <a class="btn btn-primary btn-xs" href="{{ route('admin::foods.edit', ['id' => $entry->id]) }}" title="Edit Food">
                                    Edit
                                </a>
                                {!! Form::open(array('method' => 'DELETE', 'action' => array('Admin\FoodController@destroy', $entry->id), 'class' => 'inline-form')) !!}
                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs', 'onclick' => "if(!confirm('Are you sure to delete this card?')){return false;};")) !!}
                                {!! Form::close() !!}</td>
                            </tr>
                            <?php $index++;?>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">
                                    No Record Found
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Basic Table -->

@stop
