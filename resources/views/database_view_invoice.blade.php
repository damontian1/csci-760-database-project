@extends("layouts.app")

@section("content")
<div class="max-w-4xl mx-auto my-16 p-10 w-full border-2 shadow-xl">
  <h1 class="text-4xl font-extrabold mb-10 text-center">Invoice</h1>
  @isset ($Invoices)
  @foreach ($Invoices as $data)
  @if ($loop->first)
  <div class="section__a flex flex-wrap mb-4">
    <p class="w-1/3 flex justify-center">5/30/2013</p>
    <p class="w-1/3 flex justify-center">
      Holt Distributors
      <br>
      146 Nelson Place
      <br>
      Bronston, MI 49802
    </p>
    <p class="w-1/3 flex justify-center">Invoice No. : 11290</p>
  </div>
  <div class="section__a2 flex flex-wrap">
    <p class="w-1/3 flex justify-center">
      {{ $data->CustomerFirstName }} {{ $data->CustomerLastName }}
      <br>
      {{ $data->CustomerAddress }}
      <br>
      {{ $data->CustomerCity }}, {{ $data->CustomerState }} {{ $data->CustomerZip }}
    </p>
    <p class="w-1/3 flex justify-center"></p>
    <p class="w-1/3 flex justify-center">
      {{ $data->CustomerShipFirstName }} {{ $data->CustomerShipLastName }}
      <br>
      {{ $data->CustomerShipAddress }}
      <br>
      {{ $data->CustomerShipCity }}, {{ $data->CustomerShipState }} {{ $data->CustomerShipZip }}
    </p>
  </div>
  @endif
  @endforeach
  @endisset
  <div class="section__b">
      <div class="container mx-auto px-4 sm:px-8 bg-white px-4 py-8 p-5">
            <div class="py-8">
              <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full rounded-sm overflow-hidden">
                  <table class="min-w-full leading-normal mb-10 border">
                    <thead>
                      <tr>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Customer #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Customer PO #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Order Date
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Sales Rep
                        </th>
                      </tr>
                    </thead>


                    @isset ($Invoices)



                    @foreach ($Invoices as $data)
                    @if ($loop->first)
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
                                {{ $data->CustomerPONumber }}
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
                                {{ $data->SalesRepNumber }}
                              </p>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                    @endif
                    @endforeach
                    @endisset
                  </table>
                  <table class="min-w-full leading-normal border">
                    <thead>
                      <tr>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Part #
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Part Description
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Part Price
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Quantity
                        </th>
                        <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                          Amount
                        </th>
                      </tr>
                    </thead>


                    @isset ($Invoices)



                    @foreach ($Invoices as $data)

                    <tbody>
                      <tr>
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
                                ${{ number_format($data->PartPrice, 2) }}
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
                              <p class="text-gray-900 whitespace-no-wrap part_totals">
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
  </div>

  <div class="section__a flex flex-wrap mb-4">
    <p class="w-1/3 flex justify-center"></p>
    <p class="w-1/3 flex justify-center"></p>
    <p class="w-1/3 flex justify-center">
    <span class="font-bold">TOTAL:</span>
    <span id="order-total" class="pl-4"></span>
    </p>
  </div>

</div>

<script>
  const orderTotal = document.querySelector("#order-total");
  let partTotals = document.querySelectorAll(".part_totals");
  let partTotalsCount = 0;
  partTotals.forEach(item => {
    let tempText = item.innerText;
    let tempAmount = Number(tempText.replace("$", ""));
    partTotalsCount = partTotalsCount + tempAmount
  })
  orderTotal.innerText = `$${partTotalsCount.toFixed(2)}`;
</script>

@endsection