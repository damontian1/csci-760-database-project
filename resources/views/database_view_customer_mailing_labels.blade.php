@extends("layouts.app")

@section("content")

<div class="max-w-4xl mx-auto my-16 p-10 w-full border-2 shadow-xl">
  <h1 class="text-4xl font-extrabold mb-20">Customer Mailing Labels</h1>
  <div class="section__b flex flex-col space-y-4 max-w-xl">

    @isset ($CustomerMailingLabels)
    @foreach ($CustomerMailingLabels as $data)

    <div class="max-w-xl mb-10">
      <p class="uppercase font-bold mb-1">Customer # {{ $data->CustomerNumber }}</p>
      <p class="text-gray-700">
        {{ $data->CustomerShipFirstName }} {{ $data->CustomerShipLastName }}
        <br>
        {{ $data->CustomerShipAddress }}
        <br>
        {{ $data->CustomerShipCity }}, {{ $data->CustomerShipState }} {{ $data->CustomerShipZip }}
      </p>
    </div>

    @endforeach
    @endisset

  </div>
</div>

@endsection