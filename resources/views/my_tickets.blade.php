@extends('layout.base')
@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <i class="fa fa-ticket"> My Tickets</i>
            </div>

            <div class="panel-body">
              <table class="table">
                <thead>
                  <tr>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Last Updated</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $key=>$ticket )
                    <tr>
                        <td>{{$ticket->category}}</td>
                        <td>
                          <a href="{{url('show/'.$ticket->id)}}">
                            {{$ticket->title}}
                          </a>
                        </td>
                        <td><span class="label label-success">Open</span></td>
                        <td>{{$ticket->updated_at}}</td>
                      </tr>
                    @endforeach

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
 @endsection
