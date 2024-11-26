<x-site-layout title="Edit Loan Application">
    <form action="{{ route('loanApplications.update', $loanApplication->id) }}" method="POST" class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf  
        @method('PATCH')

     //salary
        <div class="mb-4">
            <label for="salary" class="block text-sm font-medium text-gray-700 mb-2">Salary (€):</label>
            <input 
                type="number" 
                id="salary" 
                name="salary" 
                value="{{ old('salary', $loanApplication->salary) }}" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-stone-500 focus:border-stone-500" 
                required>
        </div>

      //term
        <div class="mb-4">
            <label for="terms" class="block text-sm font-medium text-gray-700 mb-2">Terms:</label>
            <input 
                type="text" 
                id="terms" 
                name="terms" 
                value="{{ old('terms', $loanApplication->terms) }}" 
                class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-stone-500 focus:border-stone-500" 
                required>
        </div>

        //submit
        <button 
            type="submit" 
            class="w-full bg-stone-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:ring-offset-2">
            Update
        </button>
    </form>
</x-site-layout>
