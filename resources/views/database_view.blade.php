@extends("layouts.app")
@section("content")

@if (session('success'))
<div class="bg-green-100 flex items-center mx-2 mx-auto px-6 py-4 rounded-md text-lg">
  <svg
  viewBox="0 0 24 24"
  class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3"
  >
    <path
    fill="currentColor"
    d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
    ></path>
  </svg>
  <span class="text-green-800">{{ session('success') }}</span>
</div>
@endif

<div class="bg-white flex flex-col p-8 items-center">
  <h1 class="text-4xl font-extrabold mb-10">Holt Distributors Database</h1>
  <div x-data="{ tab: 'territory' }" class="max-w-6xl w-full">
    <nav>
      <button
        x-on:click="tab = 'territory'"
        x-bind:class="{ 'bg-yellow-500 font-bold font-bold': tab === 'territory' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        territories
      </button>
      <button
        x-on:click="tab = 'sales-rep'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'sales-rep' }"
        class="bg-transparent text-sm py-2 focus:outline-none capitalize px-4"
      >
        sales reps
      </button>
			<button
        x-on:click="tab = 'customers'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'customers' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        customers
      </button>
      <button
        x-on:click="tab = 'parts'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'parts' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        parts
      </button>
      <button
        x-on:click="tab = 'vendors'"
        x-bind:class="{ 'bg-yellow-500 font-bold border-white': tab === 'vendors' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        vendors
      </button>
			<button
        x-on:click="tab = 'create_orders'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'create_orders' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        Order
      </button>
			<button
        x-on:click="tab = 'open_orders'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'open_orders' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        open orders
      </button>
			<button
        x-on:click="tab = 'invoice'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'invoice' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        invoices
      </button>
			<button
        x-on:click="tab = 'reports'"
        x-bind:class="{ 'bg-yellow-500 font-bold': tab === 'reports' }"
        class="bg-transparent text-sm px-4 py-2 focus:outline-none capitalize"
      >
        reports
      </button>
    </nav>
    <ul class="bg-gray-100 text-sm px-8 py-12" style="border: 1px solid #ccc">

			<li x-show="tab === 'territory'">

        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add New Territory</h1>

				<form action="/database_actions_territory" method="POST" class="flex flex-col space-y-5">
				@csrf
				<label class="block">
					<span class="text-gray-900">TerritoryName</span>
					<input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="TerritoryName">
        </label>
        <div class="flex justify-end space-x-1">
          <button type="submit" class="block mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                Save
              </button>
        </div>
				</form>


      </li>

      <li x-show="tab === 'sales-rep'">
        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Sales Rep</h1>

				<form action="/database_actions_sales_rep" method="POST" class="flex flex-col space-y-5">
				@csrf
        <div class="relative inline-flex flex-col">
          <span class="text-gray-900">Territory</span>
          <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="TerritoryNumber">
            <option>Choose a Territory</option>
            @foreach ($TerritoryData as $item)
              <option value="$item->TerritoryNumber">{{ $item->TerritoryNumber }}-{{ $item->TerritoryName }}</option>
            @endforeach
          </select>
        </div>
        <label class="block">
          <span class="text-gray-900">SalesRepName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepName">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepAddress</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepAddress">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepCity</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepCity">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepState</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepState">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepZip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepZip">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepMTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepMTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepYTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepYTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepMTDCommission</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepMTDCommission">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepYTDCommission</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepYTDCommission">
        </label>
        <label class="block">
          <span class="text-gray-900">SalesRepCommissionRate</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="SalesRepCommissionRate">
        </label>
				<div class="flex justify-end space-x-1">
          <button type="submit" class="block mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                Save
              </button>
        </div>
				</form>
        </div>
      </li>
      <li x-show="tab === 'customers'">
      <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Customer</h1>

				<form action="/database_actions_customer" method="POST" class="flex flex-col space-y-5">
				@csrf
        <div class="relative inline-flex flex-col">
          <span class="text-gray-900">Sales Rep</span>
          <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="SalesRepNumber">
            <option>Choose a Sales Rep</option>
            @foreach ($SalesRepData as $item)
              <option value="{{ $item->SalesRepNumber }}">{{ $item->SalesRepNumber }}-{{ $item->SalesRepName }}</option>
            @endforeach
          </select>
        </div>
        <label class="block">
          <span class="text-gray-900">CustomerFirstName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerFirstName">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerLastName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerLastName">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerAddress</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerAddress">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerCity</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerCity">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerState</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerState">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerZip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerZip">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerMTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerMTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerYTDSales</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerYTDSales">
        </label>
        <label class="block">
          <span class="text-gray-900">CurrentBalance</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CurrentBalance">
        </label>
        <label class="block">
          <span class="text-gray-900">CreditLimit</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CreditLimit">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipFirstName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipFirstName">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipLastName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipLastName">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipAddress</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipAddress">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipCity</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipCity">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipState</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipState">
        </label>
        <label class="block">
          <span class="text-gray-900">CustomerShipZip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerShipZip">
        </label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>
        </div>
      </li>
      <li x-show="tab === 'parts'">
        <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
          <h1 class="text-2xl font-extrabold">Add Part</h1>

          <form action="/database_actions_part" method="POST" class="flex flex-col space-y-5">
          @csrf
          <label class="block">
            <span class="text-gray-900">PartDescription</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="PartDescription">
          </label>
          <label class="block">
            <span class="text-gray-900">PartPrice</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="PartPrice">
          </label>
          <label class="block">
            <span class="text-gray-900">PartMTDSales</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="PartMTDSales">
          </label>
          <label class="block">
            <span class="text-gray-900">PartYTDSales</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="PartYTDSales">
          </label>
          <label class="block">
            <span class="text-gray-900">UnitsOnHand</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="UnitsOnHand">
          </label>
          <label class="block">
            <span class="text-gray-900">UnitsAllocated</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="UnitsAllocated">
          </label>
          <label class="block">
            <span class="text-gray-900">RecorderPoint</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="RecorderPoint">
          </label>

          <button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Save
              </button>
          </form>
        </div>
      </li>
      <li x-show="tab === 'vendors'">
      <div class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Add Vendor</h1>

				<form action="/database_actions_vendor" method="POST" class="flex flex-col space-y-5">
				@csrf
        <label class="block">
          <span class="text-gray-900">VendorName</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="VendorName">
        </label>
        <label class="block">
          <span class="text-gray-900">VendorAddress</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="VendorAddress">
        </label>
        <label class="block">
          <span class="text-gray-900">VendorCity</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="VendorCity">
        </label>
        <label class="block">
          <span class="text-gray-900">VendorState</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="VendorState">
        </label>
        <label class="block">
          <span class="text-gray-900">VendorZip</span>
          <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="VendorZip">
        </label>
				<button type="submit" class="block ml-auto mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
							Save
						</button>
				</form>
        </div>
      </li>
			<li x-show="tab === 'create_orders'">
        <div x-data="{ show: false }" class="bg-white border-2 flex flex-col max-w-lg mx-auto px-4 py-8 space-y-6" style="border: 1px solid #ccc">
          <h1 class="text-2xl font-extrabold">Add Order</h1>

          <form action="/database_actions_order" method="POST" class="flex flex-col space-y-5">
          @csrf
          <div class="relative inline-flex flex-col" >
            <span class="text-gray-900">Customer</span>
            <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="CustomerNumber">
              <option>Choose a Customer</option>
              @foreach ($CustomerData as $item)
                <option value="{{ $item->CustomerNumber }}">{{ $item->CustomerNumber }}-{{ $item->CustomerFirstName }} {{ $item->CustomerLastName }}</option>
              @endforeach
            </select>
          </div>
          <label class="block">
            <span class="text-gray-900">OrderDate</span>
            <input type="date" class="border-gray-300 mt-1 block w-full shadow-sm" name="OrderDate">
          </label>
          <label class="block">
            <span class="text-gray-900">CustomerPONumber</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="CustomerPONumber">
          </label>
          <div class="relative inline-flex flex-col" >
            <span class="text-gray-900">Part</span>
            <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" name="PartNumber">
              <option>Choose a Part</option>
              @foreach ($PartData as $item)
                <option value="{{ $item->PartNumber }}">{{ $item->PartDescription }}</option>
              @endforeach
            </select>
          </div>
          <label class="block">
            <span class="text-gray-900">Quantity</span>
            <input type="text" class="border-gray-300 mt-1 block w-full shadow-sm" name="NumberOrdered">
          </label>
          <div class="relative inline-flex flex-col" x-bind:class="{'hidden': !show}">
            <span class="text-gray-900">OrderNumber</span>
            <select class="w-full border-2 border-blue-700 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-blue-700 focus:outline-none appearance-none" name="CustomerNumber">
              <option>Choose a Customer</option>
              @foreach ($OrderData as $item)
                <option value="{{ $item->OrderNumber }}">Order # {{ $item->OrderNumber }}</option>
              @endforeach
            </select>
          </div>
          <div class="flex justify-end space-x-2">
            <button type="button" @click="show = !show" class="block mt-5 py-2 px-4 border border-blue-700 shadow-sm text-sm font-medium rounded-md text-blue-700 bg-white focus:outline-none">
                  Edit Order
                </button>
            <button type="submit" class="block mt-5 py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                  Save
                </button>
          </div>
          </form>
        </div>
      </li>
			<li x-show="tab === 'invoice'">




      <div class="container mx-auto px-4 sm:px-8 bg-white px-4 py-8 p-5 border-2" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Invoices</h1>
          <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div class="inline-block min-w-full shadow rounded-sm overflow-hidden">
                <table class="min-w-full leading-normal">
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
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Customer Billing
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Customer Shipping
                      </th>
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Generate Invoice
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
                              {{ $data->SalesRepName }}
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
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              {{ $data->CustomerShipAddress }}
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                            <a href="/database_view_invoice/{{ $data->OrderNumber }}">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6" >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                              </svg>
                            </a>
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




      </li>
			<li x-show="tab === 'open_orders'">

        <div class="container mx-auto px-4 sm:px-8 bg-white px-4 py-8 p-5 border-2" style="border: 1px solid #ccc">
        <h1 class="text-2xl font-extrabold">Open Orders</h1>
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
                      <th class="px-2 py-3 bg-gray-200 text-gray-900 border-b-2 text-left text-xs font-semibold uppercase tracking-wider">
                        Order Status
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
                      <td class="py-5 border-b border-gray-200 bg-white text-sm">
                        <div class="flex items-center">
                          <div class="ml-3">
                            <p class="text-gray-900 whitespace-no-wrap">
                              <form action="/database_actions_order_status" x-ref="OrderStatusForm" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $data->OrderNumber }}" name="OrderNumber">
                                <input type="hidden" value="" name="OrderStatus">
                                <div class="relative inline-flex flex-col">
                                  <select class="w-full border border-gray-300 text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none" @change="$refs.OrderStatusForm.OrderStatus.value = 'close'; $refs.OrderStatusForm.submit();">
                                    <option value="open">Open</option>
                                    <option value="close">Close</option>
                                  </select>
                                </div>
                              </form>
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






      </li>


      <li x-show="tab === 'reports'">
        <div class="container mx-auto px-4 sm:px-8 bg-white px-4 py-8 p-5 border-2" style="border: 1px solid #ccc">
          <h1 class="text-2xl font-extrabold">Open Orders</h1>
          <div class="flex justify-end space-x-2">
            <a href="/database_view_territory_list" class="block mt-5 py-2 px-4 border border-blue-700 shadow-sm text-sm font-medium rounded-md text-blue-700 bg-white focus:outline-none hover:bg-blue-700 hover:text-white">
                  View Territory List
                </a>
            <a href="/database_view_customer_master_list" class="block mt-5 py-2 px-4 border border-blue-700 shadow-sm text-sm font-medium rounded-md text-blue-700 bg-white focus:outline-none hover:bg-blue-700 hover:text-white">
                  View Customer Master List
                </a>
            <a href="/database_view_customer_mailing_labels" class="block mt-5 py-2 px-4 border border-blue-700 shadow-sm text-sm font-medium rounded-md text-blue-700 bg-white focus:outline-none hover:bg-blue-700 hover:text-white">
                  View Customer Mailing Labels
                </a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
@endsection