@extends('admin.layout.master')

@section('content')

<h3><i class="fa fa-angle-right"></i>Locations Detail</h3>

<div class="row mt">
    <div class="col-lg-12">
        <div class="content-panel">
            <section>
                <table class="table table-bordered table-striped table-condensed">
                    <tbody>
                        <tr>
                            <td style="width: 15%;"><h5>Location</h5></td>
                            <td><h5>{{ $entry->location_name }}</h5></td>
                        </tr>
                        <tr>
                            <td><h5>Price</h5></td>
                            <td><h5><i class="material-icons">attach_money</i><span class="icon-name">{{$entry->price}}</span></h5></td>
                        </tr>
                        @if ($entry->created_at)
                            <tr>
                                <td><h5>Create at</h5></td>
                                <td><h5>{{ $entry->created_at }}</h5></td>
                            </tr>
                        @endif

                        @if (  ($entry->updated_at) && ($entry->created_at != $entry->updated_at) )
                            <tr>
                                <td><h5>Updated at</h5></td>
                                <td><h5>{{ $entry->updated_at }}</h5></td>
                            </tr>
                        @endif

                        <tr>
                            <td colspan="2">
                                <a class="btn btn-info" href="{{ route('admin::locations.edit',  $entry->id) }}">Edit</a>
                                <a class="btn btn-primary" href="{{ route('admin::locations.index') }}">Back To List</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</div>

@stop
