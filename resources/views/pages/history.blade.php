@extends('layouts.app')
@section('content')
    {{--{{dd($buffer_postings)}}--}}
    <div class="container" style="margin-top: 60px">
        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>

            <tr>
                <th class="th-sm">Group Name

                </th>
                <th class="th-sm">Group Type

                </th>
                <th class="th-sm">Account Name

                </th>
                <th class="th-sm">Post text

                </th>
                <th class="th-sm">time


            </tr>

            </thead>
            <tbody>
            @foreach($buffer_postings as $buffer_posting)

            <tr>
                <td>{{ Bulkly\BufferPosting::find($buffer_posting->id)->groupInfo->name}}</td>
                <td>{{ Bulkly\BufferPosting::find($buffer_posting->id)->groupInfo->type}}</td>
                <td><img style="width: 30px; height: 30px" src="{{ Bulkly\BufferPosting::find($buffer_posting->id)->accountInfo->avatar}}" alt=""></td>
                <td>{{$buffer_posting->post_text}}</td>
                <td>{{$buffer_posting->created_at}}</td>

            </tr>
            @endforeach

            </tbody>

        </table>
        {{ $buffer_postings->links() }}
    </div>
@endsection