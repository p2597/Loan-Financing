<x-site-layout title="Apply for {{ $loan->loan_name }}">

    <x-slot:heading>Apply for {{ $loan->loan_name }}</x-slot:heading>

    <form action="{{ route('loanApplications.store', $loan->id) }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="salary" class="block font-medium">Annual Salary (€):</label>
            <input type="number" id="salary" name="salary" class="w-full border rounded p-2" required>
        </div>

        <div>
            <label for="terms" class="block font-medium">Select Term:</label>
            <select id="terms" name="terms" class="w-full border rounded p-2" required>
                @foreach (explode(',', $loan->terms) as $term)
                    <option value="{{ trim($term) }}">{{ trim($term) }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Submit Application</button>
    </form>

</x-site-layout>
