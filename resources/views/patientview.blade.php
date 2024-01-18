<x-guest-layout>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-12 bg-primary text-white py-3 d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
          <!-- Logo Image -->
          <div>
          <img src="{{ Vite::asset('resources/images/logo.jpeg') }}" class="img-fluid rounded-circle" alt="Logo" style="width: 70px; height: 70px; border-radius: 50%;">
          </div>
          <div class="ml-2">
            <h1>Welcome ,To Patient Dashboard</h1>
          </div>

        </div>
        <!-- Logout Button -->
        <div>
         <a href="{{ url('/') }}" class="btn btn-danger">
         <i class="fas fa-envelope-circle-check"></i> Log Out
         </a>
        </div>

      </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @if (session('success'))
         <div id="successAlert" class="alert alert-success">
          {{ session('success') }}
           </div>
        @endif


        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x class="block h-auto w-auto" />

   
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">patientID</th>
            <th scope="col">patient Name</th>
            <th scope="col">Test Carriedout</th>
            <th scope="col">Test Results</th>
            <th scope="col">Test Date</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($testResult as $patient)
          <tr class="table-default">
            <td>{{$patient->patient_id}}</td>
            <td>{{$patient->name}}</td>
            <td>{{$patient->test_carriedout}}</td>
            <td>{{$patient->test_result}}</td>
            <td>{{$patient->result_date}}</td>           
            <td>             
                
                 <a href="{{ route('generateprint.pdf', ['patient_id' => $patient->patient_id]) }}" class="btn btn-success">
                      <i class="fa-solid fa-print fa-lg"></i> Download To Print
                  </a>
             </td>

          </tr>
          @endforeach
        </tbody>
      </table>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    
    <div>
        
</div>
  </div>
        
    </div>

</x-guest-layout>
