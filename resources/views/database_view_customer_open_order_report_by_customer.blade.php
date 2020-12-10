@extends("layouts.app")

@section("content")

<div class="max-w-4xl mx-auto my-16 p-10 w-full border-2 shadow-xl">
  <h1 class="text-4xl font-extrabold mb-10 text-center">Customer Open Order Report By Customer
  </h1>
  <div class="section__a flex justify-between mb-14">
    <p>Holt Distributors Customer Open Order Report By Customer</p>
    <p>Date: {{ date("m-d-Y") }}</p>
  </div>

  <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-sm overflow-hidden">
                <table class="min-w-full leading-normal">
                  <thead>
                    <tr>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Customer No.
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Order No.
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Item No.
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Description
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Order Date
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Order QTY
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Price
                      </th>
                    </tr>
                  </thead>


                  @isset ($OpenOrders)



                  @foreach ($OpenOrders as $data)

                  <tbody>
                    <tr>
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
                              {{ $data->OrderNumber }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $data->PartNumber }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $data->PartDescription }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $data->OrderDate }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $data->NumberOrdered }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              ${{ number_format($data->PartPrice * $data->NumberOrdered, 2) }}
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

@endsection