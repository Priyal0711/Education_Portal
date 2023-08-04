@extends('layouts.app')
@section('content')
<main>
    <div class="container1">
        
    <div class="content1">
        <form class="form1", method="post" action="{{ route('subject.update',$subject->id)}}">
            @csrf
            @method('PUT')
            <table class="table1">
                <th colspan="2">
                    <h3>Update Subject</h3>
                </th>

                <tr>
                    <td colspan="2">
                        <input type="text" placeholder="ID" name="id" id="id" value="{{ $subject->id }}" readonly>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                            <input type="text" placeholder="Subject" name="subject" id="subject" value="{{ $subject->subject }}" >
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="btn1">
                            <button type="submit" name="update" >Update Subject</button>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    </div>
    </div>
</main>
@endsection