<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Customers</h2>
    </x-slot>

    <div class="p-6">
        <a href="{{ route('customers.create') }}" class="btn btn-primary mb-4">+ Add Customer</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Logo</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td><img src="{{ asset('storage/' . $customer->logo) }}" width="80"></td>
                        <td>{{ $customer->name ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('customers.edit', $customer) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('customers.destroy', $customer) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Delete this customer?')" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $customers->links() }}
    </div>
</x-app-layout>
