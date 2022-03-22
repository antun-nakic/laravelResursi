<form method="POST" @isset($kompanija) action="
  {{ route('flights.update', ['flight'=>$id]) }}" @else action="
  {{$kompanija = ""}}
  {{$destinacija = ""}}
  {{ route('flights.store') }}" @endisset>

  @if($kompanija != "")
  @method('PUT')
  @endif
  @csrf

  <!-- Aviokompanija -->
  <div>
    <label for="aviokompanija"> Unesite aviokompaniju: </label>

    <input id="aviokompanija" class="block mt-1 w-full" type="text" name="aviokompanija" value="{{$kompanija}}" required
      autofocus />
  </div>

  <!-- Destinacija -->
  <div>
    <label for="destinacija"> Unesite destinaciju: </label>

    <input id="destinacija" class="block mt-1 w-full" type="text" name="destinacija" value="{{$destinacija}}" required
      autofocus />
  </div>



  <div class="flex items-center justify-end mt-4">
    <button class="ml-3">
      Dodaj novi red
    </button>
  </div>
</form>