<x-site-layout title="Edit Loan Application">
    <form action="{{route('loanApplications.update', $loanApplication->id)}}" method = "POST">
 @csrf  
 @method ('PATCH')

 <div>
    <label for="salary"> Salary: </label>
    <input type="number" id="salary" name="salary" value="{{ old('terms', $loanApplication->salary)}}" required>
 </div>

 <div>
 <label for="terms">Terms:</label>
 <input type="text" id="terms" name="terms" value="{{ old('terms', $loanApplication->terms) }}" required>
 </div>

 <button type="submit"> Update</button>
 </form>
</x-site-layout>