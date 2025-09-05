<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">SEO Request #{{ $seoRequest->id }}</h2>
    </x-slot>

    <div class="container py-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <p><strong>Website:</strong> {{ $seoRequest->website_url }}</p>
                <p><strong>Name:</strong> {{ $seoRequest->first_name }} {{ $seoRequest->last_name }}</p>
                <p><strong>Email:</strong> {{ $seoRequest->email }}</p>
                <p><strong>Phone:</strong> {{ $seoRequest->phone ?? 'N/A' }}</p>
                <p><strong>Submitted At:</strong> {{ $seoRequest->created_at }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
