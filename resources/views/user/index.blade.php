<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest API</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/home.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrap-list">
        <div class="text">
            <h1>Simple Rest-API</h1>
        </div>
        <div class="list-over">
            <table class="all-up">
                <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Action</th>
                </tr>
                @forelse($users['data'] as $user)
                <tr id="all-down">
                    <td id="no">{{ $loop->iteration }}</td>
                    <td id="f-name">{{ $user['firstName'] }}</td>
                    <td id="l-name">{{ $user['lastName'] }}</td>
                    <td id="action">
                        <form action="/user/{{ $user['id'] }}" method="POST" id="{{ $user['id'] }}">
                            @method('DELETE')
                            @csrf
                        <a id="edit" href="/user/{{ $user['id'] }}/edit"><svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="22"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M14.06 9.02l.92.92L5.92 19H5v-.92l9.06-9.06M17.66 3c-.25 0-.51.1-.7.29l-1.83 1.83 3.75 3.75 1.83-1.83c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.2-.2-.45-.29-.71-.29zm-3.6 3.19L3 17.25V21h3.75L17.81 9.94l-3.75-3.75z"/></svg></a>
                            
                            <button id="delete" type="submit" onClick="return confirm('Apakah anda yakin?');"><svg xmlns="http://www.w3.org/2000/svg" height="22" viewBox="0 0 24 24" width="22"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"/></svg></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr id="empty"><td colspan="6">No Record(s) Found!</td></tr>
                @endforelse
            </table>
        </div>
        
        </div>
    </div>
    <div class="create">
        <a href="{{ route('user.create')}}"><button id="create-btn">Create</button></a>
    </div>
</body>
</html>