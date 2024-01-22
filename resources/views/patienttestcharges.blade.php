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
    <h1 class="text-xl font-bold mb-2">
        Welcome 
        @auth <!-- Check if the user is logged in -->
            {{ auth()->user()->name }} <!-- Display the logged-in user's name -->
        @endauth
        , To Patient Dashboard
    </h1>


    <div class="flex space-x-4">
        <x-nav-link href="{{ route('patientdash') }}" :active="request()->routeIs('patientdash')" class="nav-link mr-4">
            {{ __('Dashboard') }}
        </x-nav-link>
        
        <x-nav-link href="{{ route('patient.charges') }}" :active="request()->routeIs('patient.charges')" class="nav-link">
            {{ __('Test Charges') }}
        </x-nav-link>
    </div>
</div>
</div>

        <!-- Logout Button -->
        <div>
        @auth
     <form method="POST" action="{{ route('logout') }}">
        @csrf
        <i class="fa-solid fa-user-tie fa-lg"></i> <button type="submit"> Logout</button>
      </form>
      @endauth

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
    <x  class="block h-auto w-auto" />
    <table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">SN </th>
      <th scope="col">Test name</th>
      <th scope="col"> Charge</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-light">
    
      <td>*1</td>
      <td>D-Dimer test</td>
      <td>35,000</td>
    </tr>
    <tr>   
      <td>2</td>
      <td>C-Reactive protein[CRP]</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">     
      <td>*3</td>
      <td>Cardiac Troponin-I</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">
      
      <td>4</td>
      <td>HBA1C[Glycated Hemoglobin]</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">      
      <td>*5</td>
      <td>PCT[pro-calcitonin]</td>
      <td>35,000</td>
    </tr>
    <tr class="table-light">     
      <td>*6</td>
      <td>follicle stimulating hormone-FSH</td>
      <td>30,000</td>
    
    </tr>
    <tr class="table-light">
      <td>*7</td>
      <td>Estrogen</td>     
      <td>30,000</td>
    
    </tr>
    <tr class="table-light">     
      <td>*8</td>
      <td>Prolactin</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">
   
      <td>*9</td>
      <td>progestrone</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">
   
      <td>10</td>
      <td>Testosterone</td>
      <td>30,000</td>
    </tr>
    <tr class="table-light">
   
        <td>*11</td>
        <td>Luteinizing hormone[LH]</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>12</td>
        <td>Total T4</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>13</td>
        <td>Total T3</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>14</td>
        <td>Free T4</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>15</td>
        <td>Free 4</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>16</td>
        <td>Total PSA</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>17</td>
        <td>Thyroid stimulating hormone[TSH]</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>18</td>
        <td>NT-Pro BNP</td>
        <td>45,000</td>
      </tr>
      <tr class="table-light">
   
        <td>19</td>
        <td>CRP/hs/CRP</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>20</td>
        <td>Blood Grouping</td>
        <td>5000</td>
      </tr>
      <tr class="table-light">
   
        <td>21</td>
        <td>Glucose[RBS]</td>
        <td>5000</td>
      </tr>
      <tr class="table-light">
   
        <td>22</td>
        <td>Uric Acid</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>23</td>
        <td>LFTs alone-liver function test[LFTs]</td>
        <td>45,000</td>
      </tr>
      <tr class="table-light">
   
        <td>24</td>
        <td>LFT/RFT/Lipid profile</td>
        <td>85,000</td>
      </tr>
      <tr class="table-light">
   
        <td>25</td>
        <td>Lipid profile-cholesterol level</td>
        <td>45,000</td>
      </tr>
      <tr class="table-light">
   
        <td>26</td>
        <td>Renal function Test[RFTs]</td>
        <td>45,000</td>
      </tr>
      <tr class="table-light">
   
        <td>27</td>
        <td>CBC/full Hemogram</td>
        <td>20,000</td>
      </tr>
      <tr class="table-light">
   
        <td>28</td>
        <td>Blood slide for malaria</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>29</td>
        <td>malaria Antigen Test[RDT]</td>
        <td>5,000</td>
      </tr>
      <tr class="table-light">
   
        <td>30</td>
        <td>Urine HCG</td>
        <td>8,000</td>
      </tr>
      <tr class="table-light">
   
        <td>31</td>
        <td>Urinalysis[microscopy & biochemistry</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>32</td>
        <td>Stool microscopy</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>33</td>
        <td>HBsAg screening</td>
        <td>8,000</td>
      </tr>
      <tr class="table-light">
   
        <td>34</td>
        <td>HCV antibody test</td>
        <td>20,000</td>
      </tr>
      <tr class="table-light">
   
        <td>35</td>
        <td>H.pylori-Antibody</td>
        <td>20,000</td>
      </tr>
      <tr class="table-light">
   
        <td>36</td>
        <td>H.pylori=Antigen(stool)</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>37</td>
        <td>BAT[Brucella aggulatination test]</td>
        <td>15,000</td>
      </tr>
      <tr class="table-light">
   
        <td>38</td>
        <td>Widal[with titers]</td>
        <td>15,000</td>
      </tr>
      <tr class="table-light">
   
        <td>39</td>
        <td>HIV<sub>1&2</sub> antibody</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>40</td>
        <td>TPHA</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>41</td>
        <td>FOB[fecal occult blood]</td>
        <td>30,000</td>
      </tr>
      <tr class="table-light">
   
        <td>42</td>
        <td>PT/INR</td>
        <td>20,000</td>
      </tr>
      <tr class="table-light">
   
        <td>43</td>
        <td>RF(Quantitative)</td>
        <td>25,000</td>
      </tr>
      <tr class="table-light">
   
        <td>44</td>
        <td>ferritin</td>
        <td>35,000</td>
      </tr>
      <tr class="table-light">
   
        <td>45</td>
        <td>Beta-HCG</td>
        <td>45,000</td>
      </tr>
      <tr class="table-light">
   
        <td>46</td>
        <td>Serum/Plasma HCG</td>
        <td>10,000</td>
      </tr>
      <tr class="table-light">
   
        <td>47</td>
        <td>Sickle cell scan(Hb Electrophoresis)</td>
        <td>5,000</td>
      </tr>

  </tbody>
</table>


</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    
   

    
</div>





<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    
    <div>
        
</div>
  </div>
        
    </div>

</x-guest-layout>
