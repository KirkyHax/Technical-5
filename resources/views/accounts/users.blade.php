@extends('layouts.app', ['title' => 'User Accounts | POS Foundations'])

@section('content')
    <section class="page-heading heading-row">
        <div>
            <p class="eyebrow">Account directory</p>
            <h1>User Accounts</h1>
            <p class="lead">Temporary user records rendered with a Blade <code>&#64;foreach</code> loop.</p>
        </div>
        <span class="record-count">{{ count($users) }} records</span>
    </section>

    <div class="table-card">
        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td class="muted">{{ $user['id'] }}</td>
                            <td class="strong">{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>{{ $user['role'] }}</td>
                            <td><span class="status status-{{ strtolower($user['status']) }}">{{ $user['status'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

