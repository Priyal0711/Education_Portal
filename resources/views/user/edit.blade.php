@extends('layouts.app')

@section('content')
   
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <table class="table" border="1">
            <th colspan="2">
                <h3>Edit User</h3>
            </th>

            <tr>
                <td colspan="2">
                    <input type="text" placeholder="ID" name="id" id="id" value="{{ $user->id }}" readonly>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                        <input type="text" placeholder="Name" name="name" id="name" value="{{ $user->name }}" >
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="email" placeholder="E-mail" name="email" id="email" value="{{ $user->email }}">
                </td>
            </tr>
            <tr>
                <td class="inpt" colspan="2">
                    <input type="text" placeholder="City" name="city" id="city" value="{{ $user->city }}">
                </td>
            </tr>
            <tr>
                <td class="inpt" colspan="2">
                    <input type="text" placeholder="mobile" name="mobile" id="mobile" value="{{ $user->mobile }}">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="btn">
                        <button type="submit" name="update" >Update Data</button>
                    </div>
                </td>
            </tr>
        </table>
        
    </form>
@endsection

