@extends('layouts.app', ['title' => 'Customer Accounts | POS Foundations'])

@section('content')
    <section class="page-heading heading-row">
        <div>
            <p class="eyebrow">Account directory</p>
            <h1>Customer Accounts</h1>
            <p class="lead">Temporary customer records rendered with a Blade <code>&#64;foreach</code> loop.</p>
        </div>
        <span class="record-count">{{ count($customers) }} records</span>
    </section>

    <div class="table-card">
        <div class="table-scroll">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="muted">{{ $customer['id'] }}</td>
                            <td class="strong">{{ $customer['name'] }}</td>
                            <td>{{ $customer['email'] }}</td>
                            <td>{{ $customer['phone'] }}</td>
                            <td><span class="status status-{{ strtolower($customer['status']) }}">{{ $customer['status'] }}</span></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

