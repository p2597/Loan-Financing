<x-site-layout title="Welcome to Our Loan Page">

    @foreach($loans as $loan)
    <div class="mt-4 border border-gray-300 rounded-lg bg-white p-4">
    <h2 class="font-bold text-lg">{{ $loan->loan_name }}</h2>
    <p>{{ $loan->description }}</p>
    <p>Interest Rate: {{ $loan->interest_rate }}%</p>
    <p>Amount: €{{ number_format($loan->amount, 2) }}</p>
    <p>Terms: {{ $loan->terms }}</p>
    <p class="mb-4"></p>
    <a href="/loan/{{ $loan->id }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Learn More</a>
</div>

    @endforeach

</x-site-layout>
