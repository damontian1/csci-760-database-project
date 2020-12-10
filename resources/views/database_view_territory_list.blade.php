@extends("layouts.app")

@section("content")

<div class="max-w-4xl mx-auto my-16 p-10 w-full border-2 shadow-xl">
  <h1 class="text-4xl font-extrabold mb-10 text-center">Territory List</h1>
  <div class="section__a flex justify-between mb-14">
    <p>Holt Distributors Territory List</p>
    <p>Date: {{ date("m-d-Y") }}</p>
  </div>
  <div class="section__b flex flex-col space-y-4">

          <div class="container mx-auto bg-white">
            <div>
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full rounded-sm overflow-hidden">
                  <table class="min-w-full leading-normal mb-10 border shadow-lg">
                    <thead>
                      <tr>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Territory #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Territory Name
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Sales Rep #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Sales Rep Name
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Sales Rep Address
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Customer #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Customer Name
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Customer Address
                        </th>
                      </tr>
                    </thead>


                    @isset ($TerritoryList)



                    @foreach ($TerritoryList as $data)
                    <tbody>
                      <tr>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->TerritoryNumber }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->TerritoryName }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->SalesRepNumber }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->SalesRepName }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->SalesRepAddress }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->CustomerNumber }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->CustomerFirstName . ' ' .$data->CustomerLastName }}
                              </p>
                            </div>
                          </div>
                        </td>
                        <td class="py-5 border-b border-gray-200 bg-white text-sm">
                          <div class="flex items-center">
                            <div class="ml-3">
                              <p class="text-gray-900 whitespace-no-wrap">
                                {{ $data->CustomerAddress }}
                              </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    @endforeach
                    @endisset
                  </table>
                </div>
              </div>
            </div>
          </div>


  </div>
</div>

@endsection